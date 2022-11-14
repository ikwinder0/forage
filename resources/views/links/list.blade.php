@include('navbar.header')
<style>
    #uploadForm {
        border-top: #F0F0F0 2px solid;
        background: #FAF8F8;
        padding: 10px;
    }

    #uploadForm label {
        margin: 2px;
        font-size: 1em;
        font-weight: bold;
    }

    .demoInputBox {
        padding: 5px;
        border: #F0F0F0 1px solid;
        border-radius: 4px;
        background-color: #FFF;
    }

    #progress-bar {
        background-color: #12CC1A;
        height: 20px;
        color: #FFFFFF;
        width: 0%;
        -webkit-transition: width .3s;
        -moz-transition: width .3s;
        transition: width .3s;
    }

    .btnSubmit {
        background-color: #09f;
        border: 0;
        padding: 10px 40px;
        color: #FFF;
        border: #F0F0F0 1px solid;
        border-radius: 4px;
    }

    #progress-div {
        display: none;
        border: #0FA015 1px solid;
        padding: 5px 0px;
        margin: 30px 0px;
        border-radius: 4px;
        text-align: center;
    }

    #targetLayer {
        width: 100%;
        text-align: center;
    }
    .canvasdiv svg{
            border-radius: 5px;
    }
    .qr_img{
        padding: 5px;
        border: 1px solid;
    }
</style>
<!--begin::Content-->
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Toolbar-->
    <div class="toolbar" id="kt_toolbar">
        <!--begin::Container-->
        <div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
            <!--begin::Page title-->
            <div data-kt-swapper="true" data-kt-swapper-mode="prepend"
                data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}"
                class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
                <!--begin::Title-->
                <h1 class="d-flex text-dark fw-bolder fs-3 align-items-center my-1">Imported Excel Sheet Records</h1>
                <!--end::Title-->
                <!--begin::Separator-->
                <span class="h-20px border-gray-300 border-start mx-4"></span>

                <!-- <ul class="breadcrumb breadcrumb-separatorless fw-bold fs-7 my-1">
          
          <li class="breadcrumb-item text-muted">
           <a href="../../demo1/dist/index.html" class="text-muted text-hover-primary">Home</a>
          </li>
          
          <li class="breadcrumb-item">
           <span class="bullet bg-gray-300 w-5px h-2px"></span>
          </li>
          
          <li class="breadcrumb-item text-muted">Contacts</li>
          
          <li class="breadcrumb-item">
           <span class="bullet bg-gray-300 w-5px h-2px"></span>
          </li>
          
          <li class="breadcrumb-item text-dark">Add Contact</li>
          
         </ul> -->
                <!--end::Breadcrumb-->
            </div>
            <!--end::Page title-->
            <!--begin::Actions-->
            <div class="d-flex align-items-center gap-2 gap-lg-3">
                <!--begin::Filter menu-->
                <div class="m-0">
                    <!--begin::Menu toggle-->
                    <!-- <a href="#" class="btn btn-sm btn-flex btn-light btn-active-primary fw-bolder" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end"> -->
                    <!--begin::Svg Icon | path: icons/duotune/general/gen031.svg-->
                    <!-- <span class="svg-icon svg-icon-5 svg-icon-gray-500 me-1">
           <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
            <path d="M19.0759 3H4.72777C3.95892 3 3.47768 3.83148 3.86067 4.49814L8.56967 12.6949C9.17923 13.7559 9.5 14.9582 9.5 16.1819V19.5072C9.5 20.2189 10.2223 20.7028 10.8805 20.432L13.8805 19.1977C14.2553 19.0435 14.5 18.6783 14.5 18.273V13.8372C14.5 12.8089 14.8171 11.8056 15.408 10.964L19.8943 4.57465C20.3596 3.912 19.8856 3 19.0759 3Z" fill="currentColor" />
           </svg>
          </span> -->
                    <!--end::Svg Icon-->
                    <!-- Filter</a> -->
                    <!--end::Menu toggle-->
                    <!--begin::Menu 1-->
                    <div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true"
                        id="kt_menu_624475f4354a7">
                        <!--begin::Header-->
                        <div class="px-7 py-5">
                            <div class="fs-5 text-dark fw-bolder">Filter Options</div>
                        </div>
                        <!--end::Header-->
                        <!--begin::Menu separator-->
                        <div class="separator border-gray-200"></div>
                        <!--end::Menu separator-->
                        <!--begin::Form-->
                        <div class="px-7 py-5">
                            <!--begin::Input group-->
                            <div class="mb-10">
                                <!--begin::Label-->
                                <label class="form-label fw-bold">Status:</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <div>
                                    <select class="form-select form-select-solid" data-kt-select2="true"
                                        data-placeholder="Select option" data-dropdown-parent="#kt_menu_624475f4354a7"
                                        data-allow-clear="true">
                                        <option></option>
                                        <option value="1">Approved</option>
                                        <option value="2">Pending</option>
                                        <option value="2">In Process</option>
                                        <option value="2">Rejected</option>
                                    </select>
                                </div>
                                <!--end::Input-->
                            </div>
                            <!--end::Input group-->
                            <!--begin::Input group-->
                            <div class="mb-10">
                                <!--begin::Label-->
                                <label class="form-label fw-bold">Member Type:</label>
                                <!--end::Label-->
                                <!--begin::Options-->
                                <div class="d-flex">
                                    <!--begin::Options-->
                                    <label class="form-check form-check-sm form-check-custom form-check-solid me-5">
                                        <input class="form-check-input" type="checkbox" value="1" />
                                        <span class="form-check-label">Author</span>
                                    </label>
                                    <!--end::Options-->
                                    <!--begin::Options-->
                                    <label class="form-check form-check-sm form-check-custom form-check-solid">
                                        <input class="form-check-input" type="checkbox" value="2"
                                            checked="checked" />
                                        <span class="form-check-label">Customer</span>
                                    </label>
                                    <!--end::Options-->
                                </div>
                                <!--end::Options-->
                            </div>
                            <!--end::Input group-->
                            <!--begin::Input group-->
                            <div class="mb-10">
                                <!--begin::Label-->
                                <label class="form-label fw-bold">Notifications:</label>
                                <!--end::Label-->
                                <!--begin::Switch-->
                                <div class="form-check form-switch form-switch-sm form-check-custom form-check-solid">
                                    <input class="form-check-input" type="checkbox" value="" name="notifications"
                                        checked="checked" />
                                    <label class="form-check-label">Enabled</label>
                                </div>
                                <!--end::Switch-->
                            </div>
                            <!--end::Input group-->
                            <!--begin::Actions-->
                            <div class="d-flex justify-content-end">
                                <button type="reset" class="btn btn-sm btn-light btn-active-light-primary me-2"
                                    data-kt-menu-dismiss="true">Reset</button>
                                <button type="submit" class="btn btn-sm btn-primary"
                                    data-kt-menu-dismiss="true">Apply</button>
                            </div>
                            <!--end::Actions-->
                        </div>
                        <!--end::Form-->
                    </div>
                    <!--end::Menu 1-->
                </div>
                <!--end::Filter menu-->
                <!--begin::Secondary button-->
                <!--end::Secondary button-->
                <!--begin::Primary button-->
                <!-- <a href="../../demo1/dist/.html" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_create_app">Create</a> -->
                <!--end::Primary button-->
            </div>
            <!--end::Actions-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::Toolbar-->
    <!--begin::Post-->
    <div class="post d-flex flex-column-fluid" id="kt_post">

        <!--begin::Container-->
        <div id="kt_content_container" class="container-fluid">
            <!--begin::Contacts App- Add New Contact-->
            <div class="row g-7">
                <!--begin::Contact groups-->

                <!--end::Contact groups-->
                <!--begin::Search-->

                <!--end::Search-->
                <!--begin::Content-->
                <div class="col-xl-12">
                    <!--begin::Contacts-->
                    <div class="card card-flush h-lg-100" id="kt_contacts_main">
                        <!--begin::Card header-->
                        <div class="card-header pt-7" id="kt_chat_contacts_header">
                            <!--begin::Card title-->
                            <div class="card-title">
                                <!--begin::Svg Icon | path: icons/duotune/communication/com005.svg-->
                                All Links <a href="{{url('forage/export-links')}}" style="margin-left: 20px;" class="ml-4 btn btn-sm btn-primary">Export Data</a> 
                                <form class="d-flex ms-5"> 
                                    <div class="input-group input-group-sm"> 
                                        <input type="text" name="vendor" placeholder="Vendor" value="{{ (request()->vendor) ? request()->vendor : '' }}" class="form-control"> 
                                    </div> 
                                    <div class="input-group input-group-sm ms-3"> 
                                        <input type="text" name="sku" placeholder="SKU" value="{{ (request()->sku) ? request()->sku : '' }}" class="form-control"> 
                                    </div>
                                    <div class="input-group input-group-sm ms-3"> 
                                        <input type="text" name="shortlink" placeholder="Short Link" value="{{ (request()->shortlink) ? request()->shortlink : '' }}" class="form-control"> 
                                    </div> 
                                    <button type="submit" class="btn btn-sm btn-primary ms-3"><i class="fas fa-filter"></i></button>
                                </form>
                                <!--end::Svg Icon-->
                            </div>
                            <!--end::Card title-->
                        </div>
                        <!--end::Card header-->
                        <!--begin::Card body-->
                        
                        <div class="card-body pt-5">
                            @include('errors')
                            <div class="table-responsive">
                                <table class="table align-middle table-row-dashed fs-6 gy-5">
                                    <thead>
                                        <tr class="text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0">
                                            <th scope="col"><strong>#</strong></th>
                                            <th scope="col"><strong>Action</strong></th>
                                            <th scope="col"><strong>Analytics</strong></th>
                                            <!--th scope="col"><strong>Qr Code</strong></th-->
                                            <th scope="col"><strong>Vendor</strong></th>
                                            <th scope="col"><strong>SKU</strong></th>
                                            <th scope="col"><strong>Tags</strong></th>
                                            <th scope="col"><strong>Country</strong></th>
                                            <th scope="col"><strong>Short Link</strong></th>
                                            <th scope="col"><strong>Android Link</strong></th>
                                            <th scope="col"><strong>Ios Link</strong></th>
                                            <th scope="col"><strong>Webpage Url</strong></th>
                                            <th scope="col"><strong>UTM Parameter Source</strong></th>
                                            <th scope="col"><strong>UTM Parameter Medium</strong></th>
                                            <th scope="col"><strong>UTM Parameter Compaign</strong></th>
                                            <th scope="col"><strong>UTM Parameter Content</strong></th>
                                            <th scope="col"><strong>Created At</strong></th>
                                            <th scope="col"><strong>Updated At</strong></th>
                                            <th scope="col"><strong>Last Used</strong></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                        $count = 1;
                                        @endphp
                                        @forelse ($data as $key => $item)
                                            <tr class="row-{{$item->id}}">
                                                <th scope="row">{{$count}}</th>
                                                <td>
                                                    <a href="{{url('forage/imported-records/'.$item->id.'/view')}}"><i class="bi bi-eye fs-7"></i></a>
                                                    <a href="{{url('forage/imported-records/'.$item->id.'/edit')}}"><i class="bi bi-pencil-fill fs-7"></i></a>
                                                    <a href="javascript::void(0);" onclick="deleteRec({{$item->id}});"><i class="bi bi-trash fs-7"></i></a>
                                                </td>
                                                <td>
                                                    <a href="{{url('forage/analytics/'.$item->id)}}" class="btn btn-sm btn-primary">View</a>
                                                </td>
                                                <!--td class="text-center">
                                                    
                                                     {{-- @php
                                                        $contents=''; 
                                                        if($item->short_link){
                                                        $url='http://qr.techstreet.in:5001/api/qrcode?api-key=secret';
                                                           
                                                        
                                                        $parameters = ["data"=>$item->short_link];
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
                                                      }
                                                    @endphp
                                                    <img src="{{ $contents ? $contents->qrdata : 'dummy_url'}}" width="100" height="100" class="qr_img qr-download-{{$item->id}}">  
                                                      <a  class="download-qr btn btn-sm btn-primary" style="margin-top: 10px;" data-id="{{$item->id}}"><span class="spinner-{{$item->id}}"><span class="sr-only">Loading...</span></span>download</button>
                                                    --}}
                                                     @if($item->qr_base64)
                                                     <img src="{{ $item->qr_base64 ? $item->qr_base64 : 'dummy_url'}}" width="100" height="100" class="qr_img qr-download-{{$item->id}} rounded">  
                                                    
                                                     <a href="{{$item->qr_base64}}" class="btn btn-sm btn-primary" style="margin-top: 10px;" data-id="{{$item->id}}" download="QR{{$count}}"><span class="spinner-{{$item->id}}"><span class="sr-only">Loading...</span></span>Download</button>
                                                     @endif
                                                    
                                                    
                                                </td-->
                                                <td>{{$item->vendor}}</td>
                                                <td>{{$item->sku}}</td>
                                                <td>{{$item->tags}}</td>
                                                <td>{{$item->country}}</td>
                                                <td><span id="short_link{{$key}}">{{$item->short_link}}</span></td>
                                                <td>{{$item->android_link}}</td>
                                                <td>{{$item->ios_link}}</td>
                                                <td>{{$item->web_page_url}}</td>
                                                <td>{{$item->utm_parameter_source}}</td>
                                                <td>{{$item->utm_parameter_medium}}</td>
                                                <td>{{$item->utm_parameter_compaign}}</td>
                                                <td>{{$item->utm_parameter_content}}</td>
                                                <td>{{$item->created_at}}</td>
                                                <td>{{$item->updated_at}}</td>
                                                @php
                                                $last_used = App\Analytic::where('short_link_excel_id',$item->id)->orderBy('id','DESC')->first()->created_at ?? 'N/A';
                                                @endphp
                                                <td>{{$last_used}}</td>
                                            </tr>
                                            @php
                                                $count++;
                                            @endphp
                                        
                                            @empty
                                            <tr class="text-center">
                                               <td colspan="14">No Records</td> 
                                            </tr>
                                           
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                                {{$data->links()}}
                        </div>
                        <!--end::Card body-->
                        <div class="modal fade" tabindex="-1" id="kt_modal_1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title">Qr Preview</h3>

                <!--begin::Close-->
                <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
                    <span class="svg-icon svg-icon-1"></span>
                </div>
                <!--end::Close-->
            </div>

            <div class="modal-body text-center">
                <img class="qr-preview" width="400px" height="400px" />
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

                    </div>
                    <!--end::Contacts-->
                </div>
                <!--end::Content-->
            </div>
            <!--end::Contacts App- Add New Contact-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::Post-->
</div>

<!--end::Content-->

@include('navbar.footer')
<script type="text/javascript">
       $(document).on('click','.qr_img',function(){
        var id = $(this).data('id');
        var base64Image = $(this).attr('src');
        var placeholder = $('.modal-body');
        $('.qr-preview').attr('src',base64Image);
        // placeholder.html(''); 
        // $('<img class="qr-preview">', {
        //         src: base64Image
        //     }).appendTo(placeholder);
        //     $('.qr-preview')
        //     .width('300px')
        //     .height('300px');
        $('#kt_modal_1').modal('show'); 
    });


       function deleteRec(id){
           if (!confirm("Are you sure?")) {
            return false;
        }
            $.ajax({
                type:"GET",
                url:"{{url('forage/imported-records')}}/"+id+"/delete",
                success:function(res){
                    if(res.status == 'success'){
                        toastr.success(res.msg);
                        $('.row-'+id).remove();
                    }else if(res.status == 'error'){
                        toastr.error(res.msg);
                    }
                }
            });
       }

       $('.download-qr').click(function(){
            var id = $(this).data('id');
            $('.spinner-'+id).addClass('spinner-border');
            $.ajax({
                type:"Get",
                url:"{{url('forage/download')}}/"+id,
                success:function(res){
                    $('.spinner-'+id).removeClass('spinner-border');
                    if(res.status == 'success'){
                        var base64Image = res.base64code;
                        var a = document.createElement("a"); //Create <a>
                        a.href = base64Image; //Image Base64 Goes here
                        a.download = "Image.png"; //File name Here
                        a.click(); //Downloaded file
                        toastr.success('file downloading start');
                    }
                }
            });
       });
</script>
