<x-default-layout>
    <!--begin::Main-->
    <div class="app-main flex-column flex-row-fluid" id="kt_app_main">
        <!--begin::Content wrapper-->
        <div class="d-flex flex-column flex-column-fluid">
            @include('users/feed/header')
            <!--begin::Content-->
            <div id="kt_app_content" class="app-content flex-column-fluid">
                <!--begin::Content container-->
                <div id="kt_app_content_container" class="app-container container-xxl">
                    <!--begin::Social - Feeds -->
                    <div class="d-flex flex-row">
                        <!--begin::Start sidebar-->
                        <div class="d-lg-flex flex-column flex-lg-row-auto w-lg-325px" data-kt-drawer="true"
                            data-kt-drawer-name="start-sidebar" data-kt-drawer-activate="{default: true, lg: false}"
                            data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'200px', '250px': '300px'}"
                            data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_social_start_sidebar_toggle">
                            @include('users/feed/user_quick_panel')
                            @include('users/feed/activities')

                        </div>
                        <!--end::Start sidebar-->
                        <!--begin::Content-->
                        <div class="w-100 flex-lg-row-fluid mx-lg-13">
                            <!--begin::Mobile toolbar-->
                            <div class="d-flex d-lg-none align-items-center justify-content-end mb-10">
                                <div class="d-flex align-items-center gap-2">
                                    <div class="btn btn-icon btn-active-color-primary w-30px h-30px"
                                        id="kt_social_start_sidebar_toggle">
                                        <i class="ki-duotone ki-profile-circle fs-1">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                            <span class="path3"></span>
                                        </i>
                                    </div>
                                    <div class="btn btn-icon btn-active-color-primary w-30px h-30px"
                                        id="kt_social_end_sidebar_toggle">
                                        <i class="ki-duotone ki-scroll fs-1">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                            <span class="path3"></span>
                                        </i>
                                    </div>
                                </div>
                            </div>
                            <!--end::Mobile toolbar-->
                            @include('users/feed/post_form')
                            @include('users/feed/post')
                            @include('users/feed/show_more')
                        </div>
                        <!--end::Content-->
                        <!--begin::End sidebar-->
                        @include('users/feed/suggestions')
                        <!--end::End sidebar-->
                    </div>
                    <!--end::Social - Feeds-->
                </div>
                <!--end::Content container-->
            </div>
            <!--end::Content-->
        </div>
        <!--end::Content wrapper-->
    </div>
    <!--end:::Main-->
</x-default-layout>
