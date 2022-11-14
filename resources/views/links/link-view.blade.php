@include('navbar.header')
<style>
    .symbol>img {
    width: 100px;
    height: 100px;
}
.flex-grow-1{
    margin-left: 20px;
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
                <h1 class="d-flex text-dark fw-bolder fs-3 align-items-center my-1">Detailed View</h1>
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
                <!--begin::Entry-->
                        <div class="d-flex flex-column-fluid">
                            <!--begin::Container-->
                            <div class="container">
                                <!--begin::Card-->
                                <div class="card card-custom gutter-b">
                                    <div class="card-body">
                                        <!--begin::Top-->
                                        <div class="d-flex">
                                            <!--begin::Pic-->
                                            <div class="flex-shrink-0 mr-7">
                                                <div class="symbol symbol-50 symbol-lg-120">
                                                    @php
                                                    $contents=''; 
                                                        if($data->short_link){
                                                           
                                                        
                                                        $parameters = ["data"=>$data->short_link];
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
                                                <img alt="Qrcode" src="{{$contents ? $contents->qrdata : 'dummy_url'}}" class="qr_img">    
                                                </div>
                                            </div>
                                            <!--end::Pic-->
                                            <!--begin: Info-->
                                            <div class="flex-grow-1">
                                                <!--begin::Title-->
                                                <div class="d-flex align-items-center justify-content-between flex-wrap mt-2">
                                                    <!--begin::User-->
                                                    <div class="mr-3">
                                                        <!--begin::Name-->
                                                        <p class="d-flex align-items-center text-dark font-size-h5 font-weight-bold mr-3">vendor : {{$data->vendor}} 
                                                        <i class="flaticon2-correct text-success icon-md ml-2"></i></a>
                                                        <!--end::Name-->
                                                        <!--begin::Contacts-->
                                                        <div class="d-flex flex-wrap my-2">
                                                            <p class="text-muted text-hover-primary font-weight-bold mr-lg-8 mr-5 mb-lg-0 mb-2">
                                                            <span class="svg-icon svg-icon-md svg-icon-gray-500 mr-1">
                                                                <!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/Communication/Mail-notification.svg-->
                                                            </span>SKU : {{$data->sku}}</p>
                                                            <p href="#" class="text-muted text-hover-primary font-weight-bold">
                                                            <span class="svg-icon svg-icon-md svg-icon-gray-500 mr-1">
                                                                <!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/Map/Marker2.svg-->
                                                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                        <rect x="0" y="0" width="24" height="24" />
                                                                        <path d="M9.82829464,16.6565893 C7.02541569,15.7427556 5,13.1079084 5,10 C5,6.13400675 8.13400675,3 12,3 C15.8659932,3 19,6.13400675 19,10 C19,13.1079084 16.9745843,15.7427556 14.1717054,16.6565893 L12,21 L9.82829464,16.6565893 Z M12,12 C13.1045695,12 14,11.1045695 14,10 C14,8.8954305 13.1045695,8 12,8 C10.8954305,8 10,8.8954305 10,10 C10,11.1045695 10.8954305,12 12,12 Z" fill="#000000" />
                                                                    </g>
                                                                </svg>
                                                                <!--end::Svg Icon-->
                                                            </span>Country : {{$data->country}}</p>
                                                        </div>
                                                        <!--end::Contacts-->
                                                    </div>
                                                    <!--begin::User-->
                                                    <!--begin::Actions-->
                                                    <div class="my-lg-0 my-1">
                                                        <button type="button" class="btn btn-sm btn-light-primary font-weight-bolder text-uppercase mr-2 download-qr" data-id="{{$data->id}}"><span class="" id="btn-spinner"><span class="sr-only">Loading...</span></span>Download Qrcode</button>
                                                    </div>
                                                    <!--end::Actions-->
                                                </div>
                                                <!--end::Title-->
                                            </div>
                                            <!--end::Info-->
                                        </div>
                                        <!--end::Top-->
                                        <!--begin::Separator-->
                                        <div class="separator separator-solid my-7"></div>
                                        <!--end::Separator-->
                                        <!--begin::Bottom-->
                                        <div class="d-flex align-items-center flex-wrap">
                                            <!--begin: Item-->
                                            <div class="d-flex align-items-center flex-lg-fill mr-5 my-1">
                                                <span class="mr-4">
                                                    <i class="flaticon-piggy-bank icon-2x text-muted font-weight-bold"></i>
                                                </span>
                                                <div class="d-flex flex-column text-dark-75">
                                                    <span class="font-weight-bolder font-size-sm"><strong>Web Page URL</strong></span>
                                                    <span class="font-weight-bolder font-size-h5">
                                                    {{$data->web_page_url}}</span>
                                                </div>
                                            </div>
                                            <!--end: Item-->
                                            <!--begin: Item-->
                                            <div class="d-flex align-items-center flex-lg-fill mr-5 my-1">
                                                <span class="mr-4">
                                                    <i class="flaticon-confetti icon-2x text-muted font-weight-bold"></i>
                                                </span>
                                                <div class="d-flex flex-column text-dark-75">
                                                    <span class="font-weight-bolder font-size-sm"><strong>Short Link</strong>
                                                    </span>
                                                    <span class="font-weight-bolder font-size-h5">
                                                    {{$data->short_link}}</span>
                                                </div>
                                            </div>
                                            <!--end: Item-->
                                            <!--begin: Item-->
                                            <div class="d-flex align-items-center flex-lg-fill mr-5 my-1">
                                                <span class="mr-4">
                                                    <i class="flaticon-pie-chart icon-2x text-muted font-weight-bold"></i>
                                                </span>
                                                <div class="d-flex flex-column text-dark-75">
                                                    <span class="font-weight-bolder font-size-sm"><strong>Android Link</strong>
                                                    </span>
                                                    <span class="font-weight-bolder font-size-h5">
                                                    {{$data->android_link}}</span>
                                                </div>
                                            </div>
                                            <!--end: Item-->
                                            <!--begin: Item-->
                                            <div class="d-flex align-items-center flex-lg-fill mr-5 my-1">
                                                <span class="mr-4">
                                                    <i class="flaticon-file-2 icon-2x text-muted font-weight-bold"></i>
                                                </span>
                                                <div class="d-flex flex-column flex-lg-fill">
                                                    <span class="font-weight-bolder font-size-sm"><strong>IOS Link</strong></span>
                                                    <span class="font-weight-bolder font-size-h5">
                                                    {{$data->ios_link}}</span>
                                                </div>
                                            </div>
                                            <!--end: Item-->
                                            <!--begin: Item-->
                                            <div class="d-flex align-items-center flex-lg-fill my-1">
                                                <span class="mr-4">
                                                    <i class="flaticon-network icon-2x text-muted font-weight-bold"></i>
                                                </span>
                                            </div>
                                            <!--end: Item-->
                                        </div>
                                        <!--end::Bottom-->
                                        <!--begin::Bottom-->
                                        <div class="d-flex align-items-center flex-wrap">
                                            <!--begin: Item-->
                                            <div class="d-flex align-items-center flex-lg-fill mr-5 my-1">
                                                <span class="mr-4">
                                                    <i class="flaticon-piggy-bank icon-2x text-muted font-weight-bold"></i>
                                                </span>
                                                <div class="d-flex flex-column text-dark-75">
                                                    <span class="font-weight-bolder font-size-sm"><strong>UTM Parameter Source</strong></span>
                                                    <span class="font-weight-bolder font-size-h5">
                                                    {{$data->utm_parameter_source}}</span>
                                                </div>
                                            </div>
                                            <!--end: Item-->
                                            <!--begin: Item-->
                                            <div class="d-flex align-items-center flex-lg-fill mr-5 my-1">
                                                <span class="mr-4">
                                                    <i class="flaticon-confetti icon-2x text-muted font-weight-bold"></i>
                                                </span>
                                                <div class="d-flex flex-column text-dark-75">
                                                    <span class="font-weight-bolder font-size-sm"><strong>UTM Parameter Medium</strong>
                                                    </span>
                                                    <span class="font-weight-bolder font-size-h5">
                                                    {{$data->utm_parameter_medium}}</span>
                                                </div>
                                            </div>
                                            <!--end: Item-->
                                            <!--begin: Item-->
                                            <div class="d-flex align-items-center flex-lg-fill mr-5 my-1">
                                                <span class="mr-4">
                                                    <i class="flaticon-pie-chart icon-2x text-muted font-weight-bold"></i>
                                                </span>
                                                <div class="d-flex flex-column text-dark-75">
                                                    <span class="font-weight-bolder font-size-sm"><strong>UTM Parameter Compaign</strong>
                                                    </span>
                                                    <span class="font-weight-bolder font-size-h5">
                                                    {{$data->utm_parameter_compaign}}</span>
                                                </div>
                                            </div>
                                            <!--end: Item-->
                                            <!--begin: Item-->
                                            <div class="d-flex align-items-center flex-lg-fill mr-5 my-1">
                                                <span class="mr-4">
                                                    <i class="flaticon-file-2 icon-2x text-muted font-weight-bold"></i>
                                                </span>
                                                <div class="d-flex flex-column flex-lg-fill">
                                                    <span class="font-weight-bolder font-size-sm"><strong>UTM Parameter Content</strong></span>
                                                    <span class="font-weight-bolder font-size-h5">
                                                    {{$data->utm_parameter_content}}</span>
                                                </div>
                                            </div>
                                            <!--end: Item-->
                                            <!--begin: Item-->
                                            <div class="d-flex align-items-center flex-lg-fill my-1">
                                                <span class="mr-4">
                                                    <i class="flaticon-network icon-2x text-muted font-weight-bold"></i>
                                                </span>
                                            </div>
                                            <!--end: Item-->
                                        </div>
                                        <!--end::Bottom-->
                                        <!--begin::Bottom-->
                                        <div class="d-flex align-items-center flex-wrap">
                                            <!--begin: Item-->
                                            <div class="d-flex align-items-center flex-lg-fill mr-5 my-1">
                                                <span class="mr-4">
                                                    <i class="flaticon-piggy-bank icon-2x text-muted font-weight-bold"></i>
                                                </span>
                                                <div class="d-flex flex-column text-dark-75">
                                                    <span class="font-weight-bolder font-size-sm"><strong>Tags</strong></span>
                                                    <span class="font-weight-bolder font-size-h5">
                                                    {{$data->tags}}</span>
                                                </div>
                                            </div>
                                            <!--end: Item-->
                                        </div>
                                        <!--end::Bottom-->
                                    </div>
                                </div>
                                <!--end::Card-->
                                
                            </div>
                            <!--end::Container-->
                        </div>
                        <!--end::Entry-->

            </div>
            <!--end::Contacts App- Add New Contact-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::Post-->
</div>
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
<!--end::Content-->


@include('navbar.footer')
<script type="text/javascript">
       $(document).on('click','.qr_img',function(){
        var base64Image = $(this).attr('src');
        $('.qr-preview').attr('src',base64Image);
        // var placeholder = $('.modal-body');
        // placeholder.html(''); 
        // $('<img>', {
        //         src: base64Image
        //     }).appendTo(placeholder);
        $('#kt_modal_1').modal('show'); 
    });

    $('.download-qr').click(function(){
            var id = $(this).data('id');
            $('#btn-spinner').addClass('spinner-border');
            $.ajax({
                type:"Get",
                url:"{{url('forage/download')}}/"+id,
                success:function(res){
                    $('#btn-spinner').removeClass('spinner-border');
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