@include('navbar.header')
<style>
	#uploadForm {border-top:#F0F0F0 2px solid;background:#FAF8F8;padding:10px;}
	#uploadForm label {margin:2px; font-size:1em; font-weight:bold;}
	.demoInputBox{padding:5px; border:#F0F0F0 1px solid; border-radius:4px; background-color:#FFF;}
	#progress-bar {background-color: #12CC1A;height:20px;color: #FFFFFF;width:0%;-webkit-transition: width .3s;-moz-transition: width .3s;transition: width .3s;}
	.btnSubmit{background-color:#09f;border:0;padding:10px 40px;color:#FFF;border:#F0F0F0 1px solid; border-radius:4px;}
	#progress-div {display:none;border:#0FA015 1px solid;padding: 5px 0px;margin:30px 0px;border-radius:4px;text-align:center;}
	#targetLayer{width:100%;text-align:center;}
	
	</style>
					<!--begin::Content-->
					<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
						<!--begin::Toolbar-->
						<div class="toolbar" id="kt_toolbar">
							<!--begin::Container-->
							<div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
								<!--begin::Page title-->
								<div data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}" class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
									<!--begin::Title-->
									<h1 class="d-flex text-dark fw-bolder fs-3 align-items-center my-1">Import Excel Sheet</h1>
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
										<div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" id="kt_menu_624475f4354a7">
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
														<select class="form-select form-select-solid" data-kt-select2="true" data-placeholder="Select option" data-dropdown-parent="#kt_menu_624475f4354a7" data-allow-clear="true">
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
															<input class="form-check-input" type="checkbox" value="2" checked="checked" />
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
														<input class="form-check-input" type="checkbox" value="" name="notifications" checked="checked" />
														<label class="form-check-label">Enabled</label>
													</div>
													<!--end::Switch-->
												</div>
												<!--end::Input group-->
												<!--begin::Actions-->
												<div class="d-flex justify-content-end">
													<button type="reset" class="btn btn-sm btn-light btn-active-light-primary me-2" data-kt-menu-dismiss="true">Reset</button>
													<button type="submit" class="btn btn-sm btn-primary" data-kt-menu-dismiss="true">Apply</button>
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
									<div class="col-xl-8">
										<div class="loader" style="display:none;">Please wait...</div>
										<!--begin::Contacts-->
										<div class="card card-flush h-lg-100" id="kt_contacts_main">
											<!--begin::Card header-->
											<div class="card-header pt-7" id="kt_chat_contacts_header">
												<!--begin::Card title-->
												<div class="card-title">
													<!--begin::Svg Icon | path: icons/duotune/communication/com005.svg-->
													<!-- <a href=""> -->
													
												<!-- </a> -->
												<a class="btn btn-success btn-sm" href="{{url('/assets/short_excel.csv')}}"><i class="fa fa-download"></i> Sample Download</a>
													<!--end::Svg Icon-->
													<!-- <h2>Sample Download</h2> -->
												<div id="loader-icon" style="display:none;"><img src="{{asset('assets/LoaderIcon.gif')}}" /></div>
											</div>
												<!--end::Card title-->
											</div>
											<!--end::Card header-->
											<!--begin::Card body-->
											<div class="card-body pt-5">
												<div class="alert alert-success div_msg" style="display: none;">
												   
												</div>
												<div class="alert alert-danger div_msg_error" style="display: none;">
												   <strong>Invalid File Extension.</strong>
												</div>
												<div id="progress-div"><div id="progress-bar"></div></div>
												<!--begin::Form-->
												<!-- <form id="kt_ecommerce_settings_general_form" class="form" action="#"> -->

												<form method="POST" enctype="multipart/form-data" id="laravel-ajax-file-upload" action="javascript:void(0)" >
													
													@csrf
													<div class="fv-row mb-7">
														<!--begin::Label-->
														<label class="fs-6 fw-bold form-label mt-3">
															<span class="required">Upload Excel</span>
															<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Enter the contact's name."></i>
														</label>
														
														<input type="file" class="form-control form-control-solid" name="uplode_excel" id="uplode_excel" required="" />
														
													</div>
												
												
													<div class="d-flex justify-content-end">
														<!--begin::Button-->
														<!-- <button type="reset" data-kt-contacts-type="cancel" class="btn btn-light me-3">Cancel</button> -->
														
														<!-- <button type="submit" data-kt-contacts-type="submit" id="btnValidar" class="btn btn-primary">
															<span class="indicator-label">Upload</span>
															
														</button> -->

														<button type="submit" class="btn btn-primary add_performance" id="btn-ajax-file-upload">Upload</button>
														
													</div>
													
												</form>
												<!--end::Form-->
											</div>
											<!--end::Card body-->
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


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>


<script type="text/javascript">
$(document).ready(function (e) {
	$("#progress-div").hide();
   $.ajaxSetup({
      headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
   });

   $('#laravel-ajax-file-upload').submit(function(e) {
   	$('.div_msg_error').hide();
   	$('.div_msg').hide();
      e.preventDefault();
      var formData = new FormData(this);
    
        //  $.ajax({
        //        type:'post',
        //        url: "{{ url('shortlink/uplodbyexcel') }}",
        //        data: formData,
               
        //        cache:false,
        //        contentType: false,
        //        processData: false,
        //        success: function (data) {
	    //             if(data.error_code==100)
	    //             {
                  	
        //              $('.div_msg').show();
        //              $('.div_msg_error').hide();
                     
        //           }
        //           else
        //           {
        //              $('.div_msg').hide();
        //              $('.div_msg_error').show();

        //           }
        //           location.reload();
                  
        //        }
               
        //  });

		$.ajax({
                xhr: function() {
                    var xhr = new window.XMLHttpRequest();
                    xhr.upload.addEventListener("progress", function(evt) {
                        if (evt.lengthComputable) {
                            var percentComplete = (evt.loaded / evt.total) * 100;
                            $("#progress-bar").width(percentComplete+'%');
							$("#progress-bar").html('<div id="progress-status">' + percentComplete +' %</div>');
							$('#loader-icon').hide();
                        }
                    }, false);
                    return xhr;
                },
                type: 'POST',
                url: "{{ url('forage/shortlink/uplodbyexcel') }}",
                data: formData,
				contentType: false,
				cache: false,
				processData:false,
				beforeSend: function(){
					$("#progress-div").show();
					$("#progress-bar").width('0%');
					$('#loader-icon').show();
            	},
                success: function(data) {
					$('#loader-icon').hide();
                    if (data.error_code == 100 || data.error_code == 102) {

                        $('.div_msg').html('<strong>'+data.msg+'</strong>');
                        $('.div_msg').show();
                        $('.div_msg_error').hide();

                    } else {
                        $('.div_msg').hide();
                        $('.div_msg_error').show();

                    }
					if(data.error_code == 102){
						$("#progress-div").hide();
						$("#progress-div").hide();
						$('#loader-icon').hide();
					}else{
						location.reload();

					}
                }
            });
      });
   });



  

</script>


	@include('navbar.footer')