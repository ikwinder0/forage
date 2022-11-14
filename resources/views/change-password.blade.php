@include('navbar.header')
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
                <h1 class="d-flex text-dark fw-bolder fs-3 align-items-center my-1">Change Password</h1>
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
            @include('errors')
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
                                <div class="card card-custom card-transparent">
                                    <div class="card-body p-0">
                                        <!--begin::Wizard-->
                                        <div class="wizard wizard-4" id="kt_wizard" data-wizard-state="step-first" data-wizard-clickable="true">
                                            
                                            <!--begin::Card-->
                                            <div class="card card-custom card-shadowless rounded-top-0">
                                                <!--begin::Body-->
                                                <div class="card-body p-0">
                                                    <div class="row justify-content-center py-8 px-8 py-lg-15 px-lg-10">
                                                        <div class="col-xl-12 col-xxl-10">
                                                            <!--begin::Wizard Form-->
                                                            <form action="{{url('forage/change-password')}}" method="POST" class="form" id="kt_form">
                                                                @csrf
                                                                <div class="row justify-content-center">
                                                                    <div class="col-xl-9">
                                                                        
                                                                        <!--begin::Wizard Step 3-->
                                                                        <div class="my-5 step" data-wizard-type="step-content">
                                                                            <!--begin::Row-->
                                                                            
                                                                            <!--begin::Group-->
                                                                            <div class="form-group">
                                                                                <label>Current Password</label>
                                                                                <input type="password" name="current_password" value="" required class="form-control form-control-solid form-control-lg" />
                                                                                <span class="form-text text-muted">Please enter current password.</span>
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <label>New Password</label>
                                                                                <input type="password" name="new_password" value="" required class="form-control form-control-solid form-control-lg" />
                                                                                <span class="form-text text-muted">Please enter new password.</span>
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <label>Confirm Password</label>
                                                                                <input type="password" name="new_confirm_password" required value="" class="form-control form-control-solid form-control-lg" />
                                                                                <span class="form-text text-muted">Please enter new password again.</span>
                                                                            </div>
                                                                            <!--end::Group-->
                                                                        </div>
                                                                        <!--end::Wizard Step 3-->
                                                                        <!--begin::Wizard Actions-->
                                                                        <div class="d-flex justify-content-between border-top pt-10 mt-15">
                                                                            <div>
                                                                                <button type="submit" class="btn btn-success font-weight-bolder px-9 py-4" data-wizard-type="action-submit">Submit</button>
                                                                            </div>
                                                                        </div>
                                                                        <!--end::Wizard Actions-->
                                                                    </div>
                                                                </div>
                                                            </form>
                                                            <!--end::Wizard Form-->
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--end::Body-->
                                            </div>
                                            <!--end::Card-->
                                        </div>
                                        <!--end::Wizard-->
                                    </div>
                                </div>
                                <!--end::Card-->
                            </div>
                            <!--end::Container-->
                        </div>
                        <!--end::Entry--> 
                
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
