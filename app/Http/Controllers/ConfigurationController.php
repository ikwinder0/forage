<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Configuration;
use Auth;
use Session;
use Carbon\Carbon;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Hash;

class ConfigurationController extends Controller
{
  public function qrConfiguration()
  {
    return view('qr-configuration');
  }
  
  public function updateQrConfiguration(Request $request)
  {
       
       
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
        $data = Configuration::where('name', 'qr_options')->update(['value' => $json]);
        return redirect()->back()->with('success','QR configuration updated !');
  }

}
