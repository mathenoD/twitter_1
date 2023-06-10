<!--begin::Card-->
<div class="card mb-5 mb-xl-8">
    <!--begin::Card body-->
    <div class="card-body">
        <!--begin::Summary-->
        <!--begin::User Info-->
        <div class="d-flex flex-center flex-column py-5">
            <!--begin::Avatar-->
            <div class="symbol symbol-100px symbol-circle mb-7">
                <img src="assets/media/avatars/300-6.jpg" alt="image" />
            </div>
            <!--end::Avatar-->
            <!--begin::Name-->
            <a href="#" class="fs-3 text-gray-800 text-hover-primary fw-bold mb-3">{{ $user->first_name }}
                {{ $user->last_name }}</a>
            <!--end::Name-->
            <!--begin::Position-->
            <div class="mb-9">
                <!--begin::Badge-->
                <div class="badge badge-lg badge-light-primary d-inline">Administrator</div>
                <!--begin::Badge-->
            </div>
            <!--end::Position-->
            <!--begin::Info-->
            <!--begin::Info heading-->
            <div class="fw-bold mb-3">{{ __('statistics') }}
                <span class="ms-2" ddata-bs-toggle="popover" data-bs-trigger="hover" data-bs-html="true"
                    data-bs-content="Number of support tickets assigned, closed and pending this week.">
                    <i class="ki-duotone ki-information fs-7">
                        <span class="path1"></span>
                        <span class="path2"></span>
                        <span class="path3"></span>
                    </i>
                </span>
            </div>
            <!--end::Info heading-->
            <div class="d-flex flex-wrap flex-center">
                <!--begin::Stats-->
                <div class="border border-gray-300 border-dashed rounded py-3 px-3 mb-3">
                    <div class="fs-4 fw-bold text-gray-700">
                        <span class="w-75px">{{ count($user->followers) }}</span>
                        <i class="ki-duotone ki-arrow-up fs-3 text-success">
                            <span class="path1"></span>
                            <span class="path2"></span>
                        </i>
                    </div>
                    <div class="fw-semibold text-muted">{{ __('follower') }}</div>
                </div>
                <!--end::Stats-->
                <!--begin::Stats-->
                <div class="border border-gray-300 border-dashed rounded py-3 px-3 mx-4 mb-3">
                    <div class="fs-4 fw-bold text-gray-700">
                        <span class="w-50px">{{ count($user->followings) }}</span>
                        <i class="ki-duotone ki-arrow-down fs-3 text-danger">
                            <span class="path1"></span>
                            <span class="path2"></span>
                        </i>
                    </div>
                    <div class="fw-semibold text-muted">{{ __('following') }}</div>
                </div>
                <!--end::Stats-->
                <!--begin::Stats-->
                <div class="border border-gray-300 border-dashed rounded py-3 px-3 mb-3">
                    <div class="fs-4 fw-bold text-gray-700">
                        <span class="w-50px">{{ count($user->posts) }}</span>
                        <i class="ki-duotone ki-arrow-up fs-3 text-success">
                            <span class="path1"></span>
                            <span class="path2"></span>
                        </i>
                    </div>
                    <div class="fw-semibold text-muted">{{ __('post') }}</div>
                </div>
                <!--end::Stats-->
            </div>
            <!--end::Info-->
        </div>
        <!--end::User Info-->
        <!--end::Summary-->
        <!--begin::Details toggle-->
        <div class="d-flex flex-stack fs-4 py-3">
            <div class="fw-bold rotate collapsible" data-bs-toggle="collapse" href="#kt_user_view_details"
                role="button" aria-expanded="false" aria-controls="kt_user_view_details">{{ __('details') }}
                <span class="ms-2 rotate-180">
                    <i class="ki-duotone ki-down fs-3"></i>
                </span>
            </div>
            <span data-bs-toggle="tooltip" data-bs-trigger="hover" title="Edit customer details">
                <a href="#" class="btn btn-sm btn-light-primary" id="get_user">Edit</a>
            </span>
        </div>
        <!--end::Details toggle-->
        <div class="separator"></div>
        <!--begin::Details content-->
        <div id="kt_user_view_details" class="collapse show">
            <div class="pb-5 fs-6">
                <!--begin::Details item-->
                <div class="fw-bold mt-5">Email</div>
                <div class="text-gray-600">
                    <a href="#" class="text-gray-600 text-hover-primary">{{ $user->email }}</a>
                </div>
                <!--begin::Details item-->
                <!--begin::Details item-->
                <div class="fw-bold mt-5">Address</div>
                <div class="text-gray-600">101 Collin Street,
                    <br />Melbourne 3000 VIC
                    <br />Australia
                </div>
                <!--begin::Details item-->
                <!--begin::Details item-->
                <div class="fw-bold mt-5">Language</div>
                <div class="text-gray-600">English</div>
                <!--begin::Details item-->
                <!--begin::Details item-->
                <div class="fw-bold mt-5">Last Login</div>
                <div class="text-gray-600">20 Dec 2023, 11:30 am</div>
                <!--begin::Details item-->
            </div>
        </div>
        <!--end::Details content-->
    </div>
    <!--end::Card body-->
</div>
<!--end::Card-->
