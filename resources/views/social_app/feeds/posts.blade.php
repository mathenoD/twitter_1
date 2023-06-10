@foreach ($posts as $post)
    <!--begin::Card-->
    <div class="card card-flush mb-10">
        <!--begin::Card header-->
        <div class="card-header pt-9">
            <!--begin::Author-->
            <div class="d-flex align-items-center">
                <!--begin::Avatar-->
                <div class="symbol symbol-50px me-5">
                    <img src="assets/media/avatars/300-4.jpg" class="" alt="" />
                </div>
                <!--end::Avatar-->
                <!--begin::Info-->
                <div class="flex-grow-1">
                    <!--begin::Name-->
                    <a href="#" class="text-gray-800 text-hover-primary fs-4 fw-bold">{{ $post->user->first_name }}
                        {{ $post->user->last_name }} </a>
                    <!--end::Name-->
                    <!--begin::Date-->
                    <span class="text-gray-400 fw-semibold d-block">{{ $post->created_at }} </span>
                    <!--end::Date-->
                </div>
                <!--end::Info-->
            </div>
            <!--end::Author-->
            <!--begin::Card toolbar-->
            <div class="card-toolbar">
                <!--begin::Menu wrapper-->
                <div class="m-0">
                    <!--begin::Menu toggle-->
                    <button class="btn btn-icon btn-color-gray-400 btn-active-color-primary me-n4"
                        data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-kt-menu-overflow="true">
                        <i class="ki-duotone ki-dots-square fs-1">
                            <span class="path1"></span>
                            <span class="path2"></span>
                            <span class="path3"></span>
                            <span class="path4"></span>
                        </i>
                    </button>
                    <!--end::Menu toggle-->
                    <!--begin::Menu 2-->
                    {{-- <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px"
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
                        <div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-start">
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
                    </div> --}}
                    <!--end::Menu 2-->
                </div>
                <!--end::Menu wrapper-->
            </div>
            <!--end::Card toolbar-->
        </div>
        <!--end::Card header-->
        <!--begin::Card body-->
        <div class="card-body">
            <!--begin::Post content-->
            <div class="fs-6 fw-normal text-gray-700 mb-5">{{ $post->content }}</div>
            <!--end::Post content-->
            <!--begin::Post media-->
            <div class="row g-7 h-250px h-md-375px">
                <!--begin::Col-->
                <div class="col-6">
                    <!--begin::Item-->
                    <a class="d-block card-rounded overlay h-100" data-fslightbox="lightbox-projects"
                        href="assets/media/stock/600x600/img-23.jpg">
                        <!--begin::Image-->
                        <div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded h-100"
                            style="background-image:url('assets/media/stock/600x600/img-23.jpg')"></div>
                        <!--end::Image-->
                        <!--begin::Action-->
                        <div class="overlay-layer card-rounded bg-dark bg-opacity-25">
                            <i class="ki-duotone ki-eye fs-3x text-white">
                                <span class="path1"></span>
                                <span class="path2"></span>
                                <span class="path3"></span>
                            </i>
                        </div>
                        <!--end::Action-->
                    </a>
                    <!--end::Item-->
                </div>
                <!--end::Col-->
                <!--begin::Col-->
                <div class="col-6">
                    <!--begin::Row-->
                    <div class="row g-7 h-250px h-md-375px">
                        <!--begin::Col-->
                        <div class="col-lg-12">
                            <!--begin::Item-->
                            <a class="d-block card-rounded overlay h-100" data-fslightbox="lightbox-projects"
                                href="assets/media/stock/600x600/img-22.jpg">
                                <!--begin::Image-->
                                <div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded h-100"
                                    style="background-image:url('assets/media/stock/600x400/img-71.jpg')"></div>
                                <!--end::Image-->
                                <!--begin::Action-->
                                <div class="overlay-layer card-rounded bg-dark bg-opacity-25">
                                    <i class="ki-duotone ki-eye fs-3x text-white">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                        <span class="path3"></span>
                                    </i>
                                </div>
                                <!--end::Action-->
                            </a>
                            <!--end::Item-->
                        </div>
                        <!--end::Col-->
                        <!--begin::Col-->
                        <div class="col-lg-12">
                            <!--begin::Item-->
                            <a class="d-block card-rounded overlay h-100" data-fslightbox="lightbox-projects"
                                href="assets/media/stock/600x600/img-21.jpg">
                                <!--begin::Image-->
                                <div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded h-100"
                                    style="background-image:url('assets/media/stock/600x400/img-79.jpg')"></div>
                                <!--end::Image-->
                                <!--begin::Action-->
                                <div class="overlay-layer card-rounded bg-dark bg-opacity-25">
                                    <i class="ki-duotone ki-eye fs-3x text-white">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                        <span class="path3"></span>
                                    </i>
                                </div>
                                <!--end::Action-->
                            </a>
                            <!--end::Item-->
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Row-->
                </div>
                <!--end::Col-->
            </div>
            <!--end::Post media-->
        </div>
        <!--end::Card body-->
        <!--begin::Card footer-->
        <div class="card-footer pt-0">
            <!--begin::Info-->
            <div class="mb-6">
                <!--begin::Separator-->
                <div class="separator separator-solid"></div>
                <!--end::Separator-->
                <!--begin::Nav-->
                <ul class="nav py-3">
                    <!--begin::Item-->
                    <li class="nav-item">
                        <a class="nav-link btn btn-sm btn-color-gray-600 btn-active-color-primary btn-active-light-primary fw-bold px-4 me-1 collapsible active"
                            data-bs-toggle="collapse" href="#kt_social_feeds_comments_1">
                            <i class="ki-duotone ki-message-text-2 fs-2 me-1">
                                <span class="path1"></span>
                                <span class="path2"></span>
                                <span class="path3"></span>
                            </i>2 Comments</a>
                    </li>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <li class="nav-item">
                        <a href="#"
                            class="nav-link btn btn-sm btn-color-gray-600 btn-active-color-primary fw-bold px-4 me-1">
                            <i class="ki-duotone ki-heart fs-2 me-1">
                                <span class="path1"></span>
                                <span class="path2"></span>
                            </i>47k Likes</a>
                    </li>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <li class="nav-item">
                        <a href="#"
                            class="nav-link btn btn-sm btn-color-gray-600 btn-active-color-primary fw-bold px-4">
                            <i class="ki-duotone ki-bookmark fs-2 me-1">
                                <span class="path1"></span>
                                <span class="path2"></span>
                            </i>900 Saves</a>
                    </li>
                    <!--end::Item-->
                </ul>
                <!--end::Nav-->
                <!--begin::Separator-->
                <div class="separator separator-solid mb-1"></div>
                <!--end::Separator-->
                <!--begin::Comments-->
                <div class="collapse show" id="kt_social_feeds_comments_1">
                    <!--begin::Comment-->
                    <div class="d-flex pt-6">
                        <!--begin::Avatar-->
                        <div class="symbol symbol-45px me-5">
                            <img src="assets/media/avatars/300-13.jpg" alt="" />
                        </div>
                        <!--end::Avatar-->
                        <!--begin::Wrapper-->
                        <div class="d-flex flex-column flex-row-fluid">
                            <!--begin::Info-->
                            <div class="d-flex align-items-center flex-wrap mb-0">
                                <!--begin::Name-->
                                <a href="#" class="text-gray-800 text-hover-primary fw-bold me-6">Mr.
                                    Anderson</a>
                                <!--end::Name-->
                                <!--begin::Date-->
                                <span class="text-gray-400 fw-semibold fs-7 me-5">1 Day ago</span>
                                <!--end::Date-->
                                <!--begin::Reply-->
                                <a href="#"
                                    class="ms-auto text-gray-400 text-hover-primary fw-semibold fs-7">Reply</a>
                                <!--end::Reply-->
                            </div>
                            <!--end::Info-->
                            <!--begin::Text-->
                            <span class="text-gray-800 fs-7 fw-normal pt-1">Long before you sit dow to put digital pen
                                to paper you need to make sure you have to sit down and write.</span>
                            <!--end::Text-->
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::Comment-->
                    <!--begin::Comment-->
                    <div class="d-flex pt-6">
                        <!--begin::Avatar-->
                        <div class="symbol symbol-45px me-5">
                            <img src="assets/media/avatars/300-2.jpg" alt="" />
                        </div>
                        <!--end::Avatar-->
                        <!--begin::Wrapper-->
                        <div class="d-flex flex-column flex-row-fluid">
                            <!--begin::Info-->
                            <div class="d-flex align-items-center flex-wrap mb-0">
                                <!--begin::Name-->
                                <a href="#" class="text-gray-800 text-hover-primary fw-bold me-6">Mrs.
                                    Anderson</a>
                                <!--end::Name-->
                                <!--begin::Date-->
                                <span class="text-gray-400 fw-semibold fs-7 me-5">2 Days ago</span>
                                <!--end::Date-->
                                <!--begin::Reply-->
                                <a href="#"
                                    class="ms-auto text-gray-400 text-hover-primary fw-semibold fs-7">Reply</a>
                                <!--end::Reply-->
                            </div>
                            <!--end::Info-->
                            <!--begin::Text-->
                            <span class="text-gray-800 fs-7 fw-normal pt-1">Long before you sit dow to put digital pen
                                to paper</span>
                            <!--end::Text-->
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::Comment-->
                </div>
                <!--end::Collapse-->
            </div>
            <!--end::Info-->
            <!--begin::Comment form-->
            <div class="d-flex align-items-center">
                <!--begin::Author-->
                <div class="symbol symbol-35px me-3">
                    <img src="assets/media/avatars/300-3.jpg" alt="" />
                </div>
                <!--end::Author-->
                <!--begin::Input group-->
                <div class="position-relative w-100">
                    <!--begin::Input-->
                    <textarea type="text" class="form-control form-control-solid border ps-5" rows="1" name="search"
                        value="" data-kt-autosize="true" placeholder="Write your comment.."></textarea>
                    <!--end::Input-->
                    <!--begin::Actions-->
                    <div class="position-absolute top-0 end-0 translate-middle-x mt-1 me-n14">
                        <!--begin::Btn-->
                        <button class="btn btn-icon btn-sm btn-color-gray-500 btn-active-color-primary w-25px p-0">
                            <i class="ki-duotone ki-paper-clip fs-2"></i>
                        </button>
                        <!--end::Btn-->
                        <!--begin::Btn-->
                        <button class="btn btn-icon btn-sm btn-color-gray-500 btn-active-color-primary w-25px p-0">
                            <i class="ki-duotone ki-like fs-2">
                                <span class="path1"></span>
                                <span class="path2"></span>
                            </i>
                        </button>
                        <!--end::Btn-->
                        <!--begin::Btn-->
                        <button class="btn btn-icon btn-sm btn-color-gray-500 btn-active-color-primary w-25px p-0">
                            <i class="ki-duotone ki-badge fs-2">
                                <span class="path1"></span>
                                <span class="path2"></span>
                                <span class="path3"></span>
                                <span class="path4"></span>
                                <span class="path5"></span>
                            </i>
                        </button>
                        <!--end::Btn-->
                        <!--begin::Btn-->
                        <button class="btn btn-icon btn-sm btn-color-gray-500 btn-active-color-primary w-25px p-0">
                            <i class="ki-duotone ki-geolocation fs-2">
                                <span class="path1"></span>
                                <span class="path2"></span>
                            </i>
                        </button>
                        <!--end::Btn-->
                    </div>
                    <!--end::Actions-->
                </div>
                <!--end::Input group-->
            </div>
            <!--end::Comment form-->
        </div>
        <!--end::Card footer-->
    </div>
    <!--end::Card-->
@endforeach
