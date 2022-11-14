@include('navbar.header')
<script type="text/javascript" src="https://unpkg.com/qr-code-styling@1.5.0/lib/qr-code-styling.js"></script>
<style>
    .qr_setting_label{
        margin-top : 2.25rem!important;;
    }
    #canvas svg{
            border-radius: 30px;
    }
    .qr_png{
        /*padding: 6px;*/
        /*border: 1px solid;*/
    }
</style>
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
                <h1 class="d-flex text-dark fw-bolder fs-3 align-items-center my-1">QR Code Configuration</h1>
                <!--end::Title-->
                <!--begin::Separator-->
                <span class="h-20px border-gray-300 border-start mx-4"></span>
            </div>
        </div>
    </div>
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
                                QR Options
                            </div>
                            <!--end::Card title-->
                        </div>
                        @php
                        $data = json_decode(\App\Configuration::getValue('qr_options'));
                        $options = substr(json_encode($data), 1, -1);
                        @endphp
                        <div class="card-body pt-5">
                            <form method="post" action="{{ route('updateQrConfig') }}">
                            @csrf
                                <div class="row mb-5">
                                    <div class="col-xl-4">
                                        <!--begin::Group-->
                                        <div class="form-group qr_setting_label mt-3">
                                            <label>Corner Square Options:</label>
                                        </div>
                                    </div>
                                    <!--end::Group-->
                                    <!--begin::Group-->
                                    <div class="col-xl-4">
                                        <div class="form-group">
                                            <label>Corner Square Type</label>
                                            <select name="corner_square_type" class="form-control" id="cornerSquareType">
                                                <option value="">Select</option>
                                                <option value="dot" {{ ($data && $data->cornersSquareOptions->type == 'dot') ? 'selected' : '' }}>Dot</option>
                                                <option value="square" {{ ($data && $data->cornersSquareOptions->type == 'square') ? 'selected' : '' }}>Square</option>
                                                <option value="extra-rounded" {{ ($data && $data->cornersSquareOptions->type == 'extra-rounded') ? 'selected' : '' }}>Extra Rounded</option>
                                            </select>
                                            <span class="form-text text-muted">Please select corner square type.</span>
                                        </div>
                                    </div>
                                    <!--end::Group-->
                                    <!--begin::Group-->
                                    <div class="col-xl-4">
                                        <div class="form-group">
                                            <label>Corner Square Color</label>
                                            <input type="text" name="corner_square_color" value="{{ ($data) ? $data->cornersSquareOptions->color : '' }}" class="form-control form-control-lg" placeholder="#fff" />
                                            <span class="form-text text-muted">Please enter Corner Square Color.</span>
                                        </div>
                                    </div>
                                    <!--end::Group-->
                                </div>
                                <!--end::Row-->
                                <!--begin::Row-->
                                <div class="row mb-5">
                                    <div class="col-xl-4">
                                        <!--begin::Group-->
                                        <div class="form-group qr_setting_label">
                                            <label>Corner Dot Options:</label>
                                        </div>
                                    </div>
                                    <!--end::Group-->
                                    <!--begin::Group-->
                                    <div class="col-xl-4">
                                        <div class="form-group">
                                            <label>Corner Dot Type</label>
                                            <select name="corner_dot_type" class="form-control" id="cornerDotType">
                                                <option value="">Select</option>
                                                <option value="dot" {{ ($data && $data->cornersDotOptions->type == 'dot') ? 'selected' : '' }}>Dot</option>
                                                <option value="square" {{ ($data && $data->cornersDotOptions->type == 'square') ? 'selected' : '' }}>Square</option>
                                            </select>
                                            <span class="form-text text-muted">Please select Corner Dot Type.</span>
                                        </div>
                                    </div>
                                    <!--end::Group-->
                                    <!--begin::Group-->
                                    <div class="col-xl-4">
                                        <div class="form-group">
                                            <label>Corner Dot Color</label>
                                            <input type="text" name="corner_dot_color" value="{{ ($data) ? $data->cornersDotOptions->color : '' }}" class="form-control form-control-lg" placeholder="#fff" />
                                            <span class="form-text text-muted">Please enter Corner Dot Color.</span>
                                        </div>
                                    </div>
                                    <!--end::Group-->
                                </div>
                                <!--end::Row-->
                                <!--begin::Row-->
                                <div class="row mb-5">
                                    <div class="col-xl-4">
                                        <!--begin::Group-->
                                        <div class="form-group qr_setting_label">
                                            <label>Dots Options:</label>
                                        </div>
                                    </div>
                                    <!--end::Group-->
                                    <!--begin::Group-->
                                    <div class="col-xl-4">
                                        <div class="form-group">
                                            <label>Dots Type</label>
                                            <select name="dots_type" class="form-control" id="dotsType">
                                                <option value="">Select</option>
                                                <option value="rounded" {{ ($data && $data->dotsOptions->type == 'rounded') ? 'selected' : '' }}>Rounded</option>
                                                <option value="dots" {{ ($data && $data->dotsOptions->type == 'dots') ? 'selected' : '' }}>Dots</option>
                                                <option value="classy" {{ ($data && $data->dotsOptions->type == 'classy') ? 'selected' : '' }}>Classy</option>
                                                <option value="classy-rounded" {{ ($data && $data->dotsOptions->type == 'classy-rounded') ? 'selected' : '' }}>Classy-Rounded</option>
                                                <option value="square" {{ ($data && $data->dotsOptions->type == 'square') ? 'selected' : '' }}>Square</option>
                                                <option value="extra-rounded" {{ ($data && $data->dotsOptions->type == 'extra-rounded') ? 'selected' : '' }}>Extra Rounded</option>
                                            </select>
                                            <span class="form-text text-muted">Please select Dots Type.</span>
                                        </div>
                                    </div>
                                    <!--end::Group-->
                                    <!--begin::Group-->
                                    <div class="col-xl-4">
                                        <div class="form-group">
                                            <label>Dots Color</label>
                                            <input type="text" name="dots_color" value="{{ ($data) ? $data->dotsOptions->color : '' }}" class="form-control form-control-lg" placeholder="#fff" />
                                            <span class="form-text text-muted">Please enter Dots Color.</span>
                                        </div>
                                    </div>
                                    <!--end::Group-->
                                </div>
                                <!--end::Row-->
                                <!--begin::Row-->
                                <div class="row mb-5">
                                    <div class="col-xl-4">
                                        <!--begin::Group-->
                                        <div class="form-group qr_setting_label">
                                            <label>Background Options:</label>
                                        </div>
                                    </div>
                                    <!--end::Group-->
    
                                    <!--begin::Group-->
                                    <div class="col-xl-4">
                                        <div class="form-group">
                                            <label>Background Color</label>
                                            <input type="text" name="bg_color" value="{{ ($data) ? $data->backgroundOptions->color : '' }}" class="form-control form-control-lg" placeholder="#fff" />
                                            <span class="form-text text-muted">Please enter Background Color.</span>
                                        </div>
                                    </div>
                                    <!--end::Group-->
                                </div>
                                <div class="row mb-5">
                                    <div class="col-xl-4">
                                        <div id="canvas"><img src="" class="qr_png rounded mb-5" style="width:200px; height:200px"></div>
                                        <a href="" id="base64_link" class="btn btn-success" download="qrCode">Download</a>
                                    </div>
                                </div>
                                <!--end::Row-->
                                <!--begin::Row-->
                                <div class="row mb-5">
                                    <div class="col-xl-4">
                                        <button type="submit" class="btn btn-primary">Update</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@include('navbar.footer')
@if($data)
<script type="text/javascript">
    const qrCode = new QRCodeStyling({
        width: 3000,
        height: 3000,
        //margin: 200,
        type: "png",
        data: "http://getforage.info/",
        {!! $options !!}
    });
    //qrCode.append(document.getElementById("canvas"));
   
    qrCode.getRawData("png").then((buffer) => {
        var reader = new FileReader();
        reader.readAsDataURL(buffer); 
        reader.onloadend = function() {
          var base64data = reader.result;  
          $('.qr_png').attr('src',base64data)
          $('#base64_link').attr('href',base64data)
          console.log(base64data);
        }

    });
    
</script>
@endif