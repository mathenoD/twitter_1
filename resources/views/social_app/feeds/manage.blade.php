<x-default-layout>
    <div class="app-main flex-column flex-row-fluid" id="kt_app_main">

        <div class="d-flex flex-row">

            <!--begin::Start sidebar-->
            <div class="d-lg-flex flex-column flex-lg-row-auto w-lg-325px" data-kt-drawer="true"
                data-kt-drawer-name="start-sidebar" data-kt-drawer-activate="{default: true, lg: false}"
                data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'200px', '250px': '300px'}"
                data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_social_start_sidebar_toggle">

                @include('social_app/feeds/feed_user_info')
                @include('social_app/feeds/user_log')

            </div>
            <!--end::Start sidebar-->
            <!--begin::Content-->
            <div class="w-100 flex-lg-row-fluid mx-lg-13">

                <div id="post_form">
                    @include('social_app/feeds/new_post')
                </div>
                <div id="new_feeds">

                </div>
                <div id="feed">
                    @include('social_app/feeds/posts')

                </div>
            </div>
            <!--begin::End sidebar-->
            <div class="d-lg-flex flex-column flex-lg-row-auto w-lg-325px" data-kt-drawer="true"
                data-kt-drawer-name="end-sidebar" data-kt-drawer-activate="{default: true, lg: false}"
                data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'200px', '250px': '300px'}"
                data-kt-drawer-direction="end" data-kt-drawer-toggle="#kt_social_end_sidebar_toggle">
                <!--begin::Social widget 1-->
                <div class="card mb-5 mb-xl-8">
                    <!--begin::Header-->
                    <div class="card-header border-0 pt-5">
                        <h3 class="card-title align-items-start flex-column">
                            <span class="card-label fw-bold text-dark">Suggestions for you</span>
                            <span class="text-muted mt-1 fw-semibold fs-7">8k social visitors</span>
                        </h3>
                        <!--begin::Toolbar-->
                        <div class="card-toolbar">
                            <!--begin::Menu-->
                            <button class="btn btn-icon btn-color-gray-400 btn-active-color-primary justify-content-end"
                                data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end"
                                data-kt-menu-overflow="true">
                                <i class="ki-duotone ki-dots-square fs-1">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                    <span class="path3"></span>
                                    <span class="path4"></span>
                                </i>
                            </button>
                            <!--begin::Menu 2-->
                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px"
                                data-kt-menu="true">
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <div class="menu-content fs-6 text-dark fw-bold px-3 py-4">Quick Actions</div>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu separator-->
                                <div class="separator mb-3 opacity-75"></div>
                                <!--end::Menu separator-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3">New Ticket</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3">New Customer</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3" data-kt-menu-trigger="hover"
                                    data-kt-menu-placement="right-start">
                                    <!--begin::Menu item-->
                                    <a href="#" class="menu-link px-3">
                                        <span class="menu-title">New Group</span>
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <!--end::Menu item-->
                                    <!--begin::Menu sub-->
                                    <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3">Admin Group</a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3">Staff Group</a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3">Member Group</a>
                                        </div>
                                        <!--end::Menu item-->
                                    </div>
                                    <!--end::Menu sub-->
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3">New Contact</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu separator-->
                                <div class="separator mt-3 opacity-75"></div>
                                <!--end::Menu separator-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <div class="menu-content px-3 py-3">
                                        <a class="btn btn-primary btn-sm px-4" href="#">Generate Reports</a>
                                    </div>
                                </div>
                                <!--end::Menu item-->
                            </div>
                            <!--end::Menu 2-->
                            <!--end::Menu-->
                        </div>
                        <!--end::Toolbar-->
                    </div>
                    <!--end::Header-->
                    <!--begin::Body-->
                    <div class="card-body pt-5">
                        <!--begin::Item-->
                        <div class="d-flex flex-stack">
                            <!--begin::Symbol-->
                            <div class="symbol symbol-40px me-5">
                                <img src="assets/media/avatars/300-11.jpg" class="h-50 align-self-center"
                                    alt="" />
                            </div>
                            <!--end::Symbol-->
                            <!--begin::Section-->
                            <div class="d-flex align-items-center flex-row-fluid flex-wrap">
                                <!--begin:Author-->
                                <div class="flex-grow-1 me-2">
                                    <a href="../../demo1/dist/pages/user-profile/overview.html"
                                        class="text-gray-800 text-hover-primary fs-6 fw-bold">Jacob Jones</a>
                                    <span class="text-muted fw-semibold d-block fs-7">Barone LLC.</span>
                                </div>
                                <!--end:Author-->
                                <!--begin:Action-->
                                <a href="../../demo1/dist/pages/user-profile/overview.html"
                                    class="btn btn-sm btn-light fs-8 fw-bold">Follow</a>
                                <!--end:Action-->
                            </div>
                            <!--end::Section-->
                        </div>
                        <!--end::Item-->
                        <!--begin::Separator-->
                        <div class="separator separator-dashed my-4"></div>
                        <!--end::Separator-->
                        <!--begin::Item-->
                        <div class="d-flex flex-stack">
                            <!--begin::Symbol-->
                            <div class="symbol symbol-40px me-5">
                                <img src="assets/media/avatars/300-2.jpg" class="h-50 align-self-center"
                                    alt="" />
                            </div>
                            <!--end::Symbol-->
                            <!--begin::Section-->
                            <div class="d-flex align-items-center flex-row-fluid flex-wrap">
                                <!--begin:Author-->
                                <div class="flex-grow-1 me-2">
                                    <a href="../../demo1/dist/pages/user-profile/overview.html"
                                        class="text-gray-800 text-hover-primary fs-6 fw-bold">Annette Black</a>
                                    <span class="text-muted fw-semibold d-block fs-7">Binford Ltd.</span>
                                </div>
                                <!--end:Author-->
                                <!--begin:Action-->
                                <a href="../../demo1/dist/pages/user-profile/overview.html"
                                    class="btn btn-sm btn-light fs-8 fw-bold">Follow</a>
                                <!--end:Action-->
                            </div>
                            <!--end::Section-->
                        </div>
                        <!--end::Item-->
                        <!--begin::Separator-->
                        <div class="separator separator-dashed my-4"></div>
                        <!--end::Separator-->
                        <!--begin::Item-->
                        <div class="d-flex flex-stack">
                            <!--begin::Symbol-->
                            <div class="symbol symbol-40px me-5">
                                <img src="assets/media/avatars/300-7.jpg" class="h-50 align-self-center"
                                    alt="" />
                            </div>
                            <!--end::Symbol-->
                            <!--begin::Section-->
                            <div class="d-flex align-items-center flex-row-fluid flex-wrap">
                                <!--begin:Author-->
                                <div class="flex-grow-1 me-2">
                                    <a href="../../demo1/dist/pages/user-profile/overview.html"
                                        class="text-gray-800 text-hover-primary fs-6 fw-bold">Devon Lane</a>
                                    <span class="text-muted fw-semibold d-block fs-7">Acme Co.</span>
                                </div>
                                <!--end:Author-->
                                <!--begin:Action-->
                                <a href="../../demo1/dist/pages/user-profile/overview.html"
                                    class="btn btn-sm btn-light fs-8 fw-bold">Follow</a>
                                <!--end:Action-->
                            </div>
                            <!--end::Section-->
                        </div>
                        <!--end::Item-->
                        <!--begin::Separator-->
                        <div class="separator separator-dashed my-4"></div>
                        <!--end::Separator-->
                        <!--begin::Item-->
                        <div class="d-flex flex-stack">
                            <!--begin::Symbol-->
                            <div class="symbol symbol-40px me-5">
                                <img src="assets/media/avatars/300-9.jpg" class="h-50 align-self-center"
                                    alt="" />
                            </div>
                            <!--end::Symbol-->
                            <!--begin::Section-->
                            <div class="d-flex align-items-center flex-row-fluid flex-wrap">
                                <!--begin:Author-->
                                <div class="flex-grow-1 me-2">
                                    <a href="../../demo1/dist/pages/user-profile/overview.html"
                                        class="text-gray-800 text-hover-primary fs-6 fw-bold">Kristin Watson</a>
                                    <span class="text-muted fw-semibold d-block fs-7">Biffco Enterprises Ltd.</span>
                                </div>
                                <!--end:Author-->
                                <!--begin:Action-->
                                <a href="../../demo1/dist/pages/user-profile/overview.html"
                                    class="btn btn-sm btn-light fs-8 fw-bold">Follow</a>
                                <!--end:Action-->
                            </div>
                            <!--end::Section-->
                        </div>
                        <!--end::Item-->
                        <!--begin::Separator-->
                        <div class="separator separator-dashed my-4"></div>
                        <!--end::Separator-->
                        <!--begin::Item-->
                        <div class="d-flex flex-stack">
                            <!--begin::Symbol-->
                            <div class="symbol symbol-40px me-5">
                                <img src="assets/media/avatars/300-12.jpg" class="h-50 align-self-center"
                                    alt="" />
                            </div>
                            <!--end::Symbol-->
                            <!--begin::Section-->
                            <div class="d-flex align-items-center flex-row-fluid flex-wrap">
                                <!--begin:Author-->
                                <div class="flex-grow-1 me-2">
                                    <a href="../../demo1/dist/pages/user-profile/overview.html"
                                        class="text-gray-800 text-hover-primary fs-6 fw-bold">Eleanor Pena</a>
                                    <span class="text-muted fw-semibold d-block fs-7">Abstergo Ltd.</span>
                                </div>
                                <!--end:Author-->
                                <!--begin:Action-->
                                <a href="../../demo1/dist/pages/user-profile/overview.html"
                                    class="btn btn-sm btn-light fs-8 fw-bold">Follow</a>
                                <!--end:Action-->
                            </div>
                            <!--end::Section-->
                        </div>
                        <!--end::Item-->
                    </div>
                    <!--end::Body-->
                </div>
                <!--end::Social widget 1-->
                <!--begin::Social widget 2-->
                <div class="card card-flush mb-5 mb-xl-8">
                    <!--begin::Header-->
                    <div class="card-header pt-5">
                        <h3 class="card-title align-items-start flex-column">
                            <span class="card-label fw-bold text-dark">Trending Feeds</span>
                            <span class="text-muted mt-1 fw-semibold fs-7">8k social visitors</span>
                        </h3>
                        <!--begin::Toolbar-->
                        <div class="card-toolbar">
                            <a href="../../demo1/dist/pages/social/activity.html" class="btn btn-sm btn-light">View
                                All</a>
                        </div>
                        <!--end::Toolbar-->
                    </div>
                    <!--end::Header-->
                    <!--begin::Body-->
                    <div class="card-body">
                        <!--begin::Row-->
                        <div class="row g-3 g-lg-6">
                            <!--begin::Col-->
                            <div class="col-md-6">
                                <!--begin::Img-->
                                <a href="">
                                    <img src="assets/media/stock/600x600/img-33.jpg" class="rounded w-100"
                                        alt="" />
                                </a>
                                <!--end::Img-->
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col-md-6">
                                <!--begin::Img-->
                                <a href="">
                                    <img src="assets/media/stock/600x600/img-26.jpg" class="rounded w-100"
                                        alt="" />
                                </a>
                                <!--end::Img-->
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col-md-6">
                                <!--begin::Img-->
                                <a href="">
                                    <img src="assets/media/stock/600x600/img-25.jpg" class="rounded w-100"
                                        alt="" />
                                </a>
                                <!--end::Img-->
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col-md-6">
                                <!--begin::Img-->
                                <a href="">
                                    <img src="assets/media/stock/600x600/img-35.jpg" class="rounded w-100"
                                        alt="" />
                                </a>
                                <!--end::Img-->
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Row-->
                    </div>
                    <!--end::Body-->
                </div>
                <!--end::Social widget 2-->
            </div>
            <!--end::End sidebar-->
        </div>
</x-default-layout>
