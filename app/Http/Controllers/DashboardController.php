<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use App\ShortLink;
use App\Analytic;
use Jenssegers\Agent\Agent;
use Auth;
use Session;
use Carbon\Carbon;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Hash;

class DashboardController extends Controller
{
  public function dashboard()
  {
      
      
    return view('dashboard');
    
    
  }

  public function import_excel(Request $request)
  {
    return view('short_url_excel_upload');
  }


  public function shortlink_store_ajax(Request $request)

  {
    // echo 'sss'; die;

    $uplode_excel = $request->uplode_excel;

    // print_r($uplode_excel);
    // die();

    $err_msg = array();

    $file = $request->file('uplode_excel');

    // File Details 
    $filename = $file->getClientOriginalName();

    $extension = $file->getClientOriginalExtension();
    $tempPath = $file->getRealPath();
    $fileSize = $file->getSize();
    $mimeType = $file->getMimeType();
    // echo $extension;exit();
    // Valid File Extensions
    $valid_extension = array("csv");
    // 2MB in Bytes
    $maxFileSize = 10097152;
    // Check file extension
    if (in_array(strtolower($extension), $valid_extension)) {

      // Check file size
      // if($fileSize <= $maxFileSize){
      // File upload location
      $location = 'assets/excel/';

      // Upload file
      $file->move(public_path("assets/excel/"), $filename);

      // Import CSV to Database
      $filepath = public_path('assets/excel/') . $filename;

      // Reading file              
      $file = fopen($filepath, "r");
      $importData_arr = array();
      $i = 0;

      while (($filedata = fgetcsv($file, 1000, ",")) !== FALSE) {
        $num = count($filedata);
        // Skip first row (Remove below comment if you want to skip the first row)
        if ($i == 0) {
          $i++;
          continue;
        }
        for ($c = 0; $c < $num; $c++) {
          $importData_arr[$i][] = $filedata[$c];
        }
        $i++;
      }
      fclose($file);
      // echo '<pre>';        
      //   print_r($importData_arr);
      //   die;
      $row_count = 0;
      foreach ($importData_arr as $importData) {

        $vendor        = $importData[0];
        $sku           = $importData[1];
        $tags          = $importData[2];
        $country       = $importData[3];
        $short_link     = $importData[4];
        $android_link   = $importData[5];
        $ios_link       = $importData[6];
        $web_page_url   = $importData[7];
        $utm_parameter_source   = $importData[8];
        $utm_parameter_medium   = $importData[9];
        $utm_parameter_compaign = $importData[10];
        $utm_parameter_content  = $importData[11];
        if (array_filter($importData)) {
          $existShortUrl = ShortLink::where('short_link', $short_link)->first();
          if ($existShortUrl) {
            //skip existing short link url
          } else {
            
            $addProduct = ShortLink::Create(['vendor' => $vendor, 'sku' => $sku, 'tags' => $tags, 'country' => $country, 'short_link' => $short_link, 'android_link' => $android_link, 'ios_link' => $ios_link, 'web_page_url' => $web_page_url, 'utm_parameter_source' => $utm_parameter_source, 'utm_parameter_medium' => $utm_parameter_medium, 'utm_parameter_compaign' => $utm_parameter_compaign, 'utm_parameter_content' => $utm_parameter_content]);
            
            \App\Jobs\ProcessQRCode::dispatchNow($addProduct); // Queued QR Job

            $row_count++;
            if ($row_count >= 100) {
              break;
            }
          }
        }
      }
    } else {

      return Response()->json([
        "error_code" => 101,
        "success" => true,
        "msg" => 'Invalid File Extension.'
      ]);
    }

    // return redirect()->back()->with('success', 'ShortLink import successfully');
    if($row_count >= 100){
      return Response()->json([
        "error_code" => 102,
        "success" => true,
        "msg" => 'ShortLink imported successfully,But Some Records Left To Be Added Please Hit Upload Button Again'
      ]);
    }
    return Response()->json([
      "error_code" => 100,
      "success" => true,
      "msg" => 'ShortLink imported successfully'
    ]);
  }

  public function list(Request $request){
      
    $data = ShortLink::orderBy('id','DESC');
    if($request->vendor){
        $date = $data->where('vendor', $request->vendor);
    }
    
    if($request->sku){
        $date = $data->where('sku', $request->sku);
    }
    
    if($request->shortlink){
        $date = $data->where('short_link', $request->shortlink);
    }
    
    $data = $data->paginate(10);
    return view('links.list',compact('data'));
  }
  
  public function viewLink($id){
     
    $data = ShortLink::find($id);
    return view('links.link-view',compact('data'));
  }
  
  public function editLink($id){
    $data = ShortLink::find($id);
    return view('links.link-edit',compact('data'));
  }
  
  public function deleteLink($id){
    $data = ShortLink::find($id);
    if($data->analytics){
        Analytic::where('short_link_excel_id',$data->id)->delete();
    }
    $action = $data->delete();
    if($action){
      return response()->json(['status' => 'success','msg'=>'Record Deleted Successfully !']);
    }
    return redirect()->json(['status' => 'error','msg'=>'No record found for deletion']);
  }
  
  public function updateLink(Request $request, $id){
    $short_link = ShortLink::find($id);
    $arr = [
                'cornersSquareOptions' =>   [
                                                'color' => $request->corner_square_color,
                                                'type' => $request->corner_square_type
                                            ],
                'cornersDotOptions'    =>   [
                                                'color' => $request->corner_dot_color,
                                                'type' => $request->corner_dot_type
                                            ],
                'dotsOptions'          =>   [
                                                'color' => $request->dots_color,
                                                'type' => $request->dots_type
                                            ],
                'backgroundOptions'    =>   [
                                                'color' => $request->bg_color
                                            ],
                'imageOptions'    =>        [
                                                'crossOrigin' => 'anonymous',
                                                 'margin' => 20
                                            ]
            ];
            
        $json = json_encode($arr);
        
    $request['qr_configuration'] = $json;
    $action = $short_link->update($request->all());
     
    if($action){
      return redirect()->back()->with('success','Record Updated Successfully !');
    }
    return redirect()->back()->with('error','Something Went Wrong !');
  }

  public function exportLinksCsv(){
    $fileName = 'links.csv';
    $tasks = ShortLink::all();

        $headers = array(
            "Content-type"        => "text/csv",
            "Content-Disposition" => "attachment; filename=$fileName",
            "Pragma"              => "no-cache",
            "Cache-Control"       => "must-revalidate, post-check=0, pre-check=0",
            "Expires"             => "0"
        );

        $columns = array('Vendor','SKU','Tags','Country','Short Link','Android Link','IOS Link','Web Page URL','UTM Parameter Source','Utm Parameter Medium','UTM Parameter Compaign','Utm Parameter Content','Created At','Updated At','Last Used');

        $callback = function() use($tasks, $columns) {
            $file = fopen('php://output', 'w');
            fputcsv($file, $columns);

            foreach ($tasks as $task) {
                $row['vendor']  = $task->vendor;
                $row['sku']    = $task->sku;
                $row['tags']    = $task->tags;
                $row['country']  = $task->country;
                $row['short_link']  = $task->short_link;
                $row['android_link']  = $task->android_link;
                $row['ios_link']  = $task->ios_link;
                $row['web_page_url']  = $task->web_page_url;
                $row['utm_parameter_source']  = $task->utm_parameter_source;
                $row['utm_parameter_medium']  = $task->utm_parameter_medium;
                $row['utm_parameter_compaign']  = $task->utm_parameter_compaign;
                $row['utm_parameter_content']  = $task->utm_parameter_content;
                $row['created_at']  = $task->created_at;
                $row['updated_at']  = $task->updated_at;
                $last_used = Analytic::where('short_link_excel_id',$task->id)->orderBy('id','DESC')->first()->created_at ?? 'N/A';
                $row['last_used']  = $last_used;

                fputcsv($file, array($row['vendor'], $row['sku'], $row['tags'], $row['country'], $row['short_link'], $row['android_link'], $row['ios_link'], $row['web_page_url'], $row['utm_parameter_source'], $row['utm_parameter_medium'], $row['utm_parameter_compaign'], $row['utm_parameter_content'], $row['created_at'], $row['updated_at'], $row['last_used']));
            }

            fclose($file);
        };

        return response()->stream($callback, 200, $headers);
  }

  public function generateAnalytics(Request $request){
      if($request->unique_code == ''){
          return view('login');
      }
    $agent = new Agent();
    $short_link = ShortLink::where('short_link',URL::current())->first();
    if($short_link){
      $target_url = '';
      if($agent->is('iPhone')){
        $device = 'IOS';
        $target_url = $device;
        $redirect_url = $short_link->ios_link;
      }elseif($agent->is('OS X')){
        $device = 'Macbook';
        $target_url = $device;
        $redirect_url = $short_link->web_page_url;
      }elseif($agent->isMobile()){
        $device = 'Android';
        $target_url = $device;
        $redirect_url = $short_link->android_link;
      }elseif($agent->isDesktop()){
        $device = 'Desktop';
        $target_url = $device;
        $redirect_url = $short_link->web_page_url;
      }

      if($target_url == ''){
            return 'somrthing went wrong';
      }
        $ip = $request->ip();
        $getInfo = \Location::get($ip);
        if($getInfo){
                $action = Analytic::create([
                    'short_link_excel_id' => $short_link->id,
                    'ip' => $request->ip(),
                    'country' => $getInfo->countryName,
                    'state' => $getInfo->regionName,
                    'city' => $getInfo->cityName,
                    'date_time' => Carbon::now(),
                    'device' => $device,
                    'target_url' => $target_url,
                    'utm_parameter_source' => $short_link->utm_parameter_source,
                    'utm_parameter_medium' => $short_link->utm_parameter_medium,
                    'utm_parameter_compaign' => $short_link->utm_parameter_compaign,
                    'utm_parameter_content' => $short_link->utm_parameter_content,
                ]);
        }
    //   return redirect()->to($redirect_url);
      return view('track-analytics',compact('redirect_url'));
    }else{
      return "Invalid link";
    }

  }

  public function Analytics(){
    $data = Analytic::orderBy('id','DESC')->paginate(10);
    return view('links.analytics',compact('data'));
  }
  
  public function singleAnalytics($single_url_analytics_id){
    $data = Analytic::where('short_link_excel_id',$single_url_analytics_id)->orderBy('id','DESC')->paginate(10);
    return view('links.single-analytics',compact('data','single_url_analytics_id'));
  }

  public function exportSingleAnalytics($id){
    $fileName = 'analytics.csv';
    $headers = array(
        "Content-type"        => "text/csv",
        "Content-Disposition" => "attachment; filename=$fileName",
        "Pragma"              => "no-cache",
        "Cache-Control"       => "must-revalidate, post-check=0, pre-check=0",
        "Expires"             => "0"
    );
    $analytics = Analytic::where('short_link_excel_id',$id)->get();
    if(count($analytics) > 0){
      $columns = array('Ip Address','Vendor','SKU','Tags','Country','State','City','Date Time','Device','Target Url','Utm Parameter Source','Utm Parameter Medium','Utm Parameter Compaign','Utm Parameter Content');
      $callback = function() use($analytics,$columns){
        $file = fopen('php://output','w');
        fputcsv($file,$columns);
        foreach ($analytics as $analytic) {        
          fputcsv($file,array($analytic->ip, $analytic->shortLink->vendor, $analytic->shortLink->sku, $analytic->shortLink->tags, $analytic->country, $analytic->state, $analytic->city, $analytic->date_time, $analytic->device, $analytic->target_url, $analytic->utm_parameter_source, $analytic->utm_parameter_medium, $analytic->utm_parameter_compaign, $analytic->utm_parameter_content));
        }
        fclose($file);
      };
      return response()->stream($callback, 200, $headers);
    }else{
      return redirect()->back()->with('error','No record found');
    }
  }
  
  public function exportAllAnalytics(Request $request){
    //   dd($request->all());
    $fileName = 'allanalytics.csv';
    $headers = array(
        "Content-type"        => "text/csv",
        "Content-Disposition" => "attachment; filename=$fileName",
        "Pragma"              => "no-cache",
        "Cache-Control"       => "must-revalidate, post-check=0, pre-check=0",
        "Expires"             => "0"
    );
    $fromDate = $request->from_date;
    $toDate = $request->to_date;
    
    $analytics = Analytic::whereBetween('created_at', [$fromDate, $toDate])->get();
    if(count($analytics) > 0){
      $columns = array('Ip Address','Vendor','SKU','Tags','Country','State','City','Date Time','Device','Target Url','Utm Parameter Source','Utm Parameter Medium','Utm Parameter Compaign','Utm Parameter Content');
      $callback = function() use($analytics,$columns){
        $file = fopen('php://output','w');
        fputcsv($file,$columns);
        foreach ($analytics as $analytic) {        
          fputcsv($file,array($analytic->ip, $analytic->shortLink->vendor, $analytic->shortLink->sku, $analytic->shortLink->tags, $analytic->country, $analytic->state, $analytic->city, $analytic->date_time, $analytic->device, $analytic->target_url, $analytic->utm_parameter_source, $analytic->utm_parameter_medium, $analytic->utm_parameter_compaign, $analytic->utm_parameter_content));
        }
        fclose($file);
      };
      return response()->stream($callback, 200, $headers);
    }else{
      return redirect()->back()->with('error','No records found');
    }
  }
  
  public function downloadQr($id){
    $shortlink = ShortLink::find($id);
    
    $contents=''; 
    if($shortlink->short_link){
        $parameters = ["data"=>$shortlink->short_link, "width" => 3000, "height" => 3000];
        $curl = curl_init();
        
        curl_setopt_array($curl, array(
          CURLOPT_URL => 'https://dev.techstreet.in/curl-qrcode/',
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => '',
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 0,
          CURLOPT_FOLLOWLOCATION => true,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => 'POST',
          CURLOPT_POSTFIELDS => $parameters,
        ));
        
        $response = curl_exec($curl);
        
        curl_close($curl);
        
        $contents = json_decode($response);
        if($contents)
        {
            $result = ['status' => 'success','base64code'=>$contents->qrdata];
        }else{
            $result = ['status' => 'error','message'=>'Something Went Wrong'];
        }
        return response()->json($result);
    }
    return response()->json(['status' => 'error','message'=>'Incorrect Short Link']);
  }
  
  public function changePasswordView(Request $request){
     return view('change-password');
  }
  
  public function changePassword(Request $request){
      $request->validate([
            'current_password' => ['required'],
            'new_password' => ['required'],
            'new_confirm_password' => ['same:new_password'],
        ]);
        
        if (!(Hash::check($request->get('current_password'), Auth::user()->password))) {
            // The passwords matches
            return redirect()->back()->with("error","Your current password does not matches with the password you provided. Please try again.");
        }
        
         
        auth()->user()->password = Hash::make($request->new_password);
        $action = auth()->user()->save();
        
        return redirect()->back()->with('success','Password Changed Successfully');
  }
}
