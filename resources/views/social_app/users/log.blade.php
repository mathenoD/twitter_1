<div class="tab-pane fade" id="kt_user_view_overview_events_and_logs_tab"
                                    role="tabpanel">
                                    <!--begin::Card-->
                                    <div class="card pt-4 mb-6 mb-xl-9">
                                        <!--begin::Card header-->
                                        <div class="card-header border-0">
                                            <!--begin::Card title-->
                                            <div class="card-title">
                                                <h2>Login Sessions</h2>
                                            </div>
                                            <!--end::Card title-->
                                            <!--begin::Card toolbar-->
                                            <div class="card-toolbar">
                                                <!--begin::Filter-->
                                                <button type="button" class="btn btn-sm btn-flex btn-light-primary"
                                                    id="kt_modal_sign_out_sesions">
                                                    <i class="ki-duotone ki-entrance-right fs-3">
                                                        <span class="path1"></span>
                                                        <span class="path2"></span>
                                                    </i>Sign out all sessions</button>
                                                <!--end::Filter-->
                                            </div>
                                            <!--end::Card toolbar-->
                                        </div>
                                        <!--end::Card header-->
                                        <!--begin::Card body-->
                                        <div class="card-body pt-0 pb-5">
                                            <!--begin::Table wrapper-->
                                            <div class="table-responsive">
                                                <!--begin::Table-->
                                                <table class="table align-middle table-row-dashed gy-5"
                                                    id="kt_table_users_login_session">
                                                    <thead class="border-bottom border-gray-200 fs-7 fw-bold">
                                                        <tr class="text-start text-muted text-uppercase gs-0">
                                                            <th class="min-w-100px">Location</th>
                                                            <th>Device</th>
                                                            <th>IP Address</th>
                                                            <th class="min-w-125px">Time</th>
                                                            <th class="min-w-70px">Actions</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody class="fs-6 fw-semibold text-gray-600">
                                                        <tr>
                                                            <td>Australia</td>
                                                            <td>Chome - Windows</td>
                                                            <td>207.17.19.343</td>
                                                            <td>23 seconds ago</td>
                                                            <td>Current session</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Australia</td>
                                                            <td>Safari - iOS</td>
                                                            <td>207.21.12.268</td>
                                                            <td>3 days ago</td>
                                                            <td>
                                                                <a href="#"
                                                                    data-kt-users-sign-out="single_user">Sign out</a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Australia</td>
                                                            <td>Chrome - Windows</td>
                                                            <td>207.28.34.180</td>
                                                            <td>last week</td>
                                                            <td>Expired</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <!--end::Table-->
                                            </div>
                                            <!--end::Table wrapper-->
                                        </div>
                                        <!--end::Card body-->
                                    </div>
                                    <!--end::Card-->
                                    <!--begin::Card-->
                                    <div class="card pt-4 mb-6 mb-xl-9">
                                        <!--begin::Card header-->
                                        <div class="card-header border-0">
                                            <!--begin::Card title-->
                                            <div class="card-title">
                                                <h2>Logs</h2>
                                            </div>
                                            <!--end::Card title-->
                                            <!--begin::Card toolbar-->
                                            <div class="card-toolbar">
                                                <!--begin::Button-->
                                                <button type="button" class="btn btn-sm btn-light-primary">
                                                    <i class="ki-duotone ki-cloud-download fs-3">
                                                        <span class="path1"></span>
                                                        <span class="path2"></span>
                                                    </i>Download Report</button>
                                                <!--end::Button-->
                                            </div>
                                            <!--end::Card toolbar-->
                                        </div>
                                        <!--end::Card header-->
                                        <!--begin::Card body-->
                                        <div class="card-body py-0">
                                            <!--begin::Table wrapper-->
                                            <div class="table-responsive">
                                                <!--begin::Table-->
                                                <table
                                                    class="table align-middle table-row-dashed fw-semibold text-gray-600 fs-6 gy-5"
                                                    id="kt_table_users_logs">
                                                    <tbody>
                                                        <tr>
                                                            <td class="min-w-70px">
                                                                <div class="badge badge-light-warning">404 WRN</div>
                                                            </td>
                                                            <td>POST /v1/customer/c_641ac41f2c273/not_found</td>
                                                            <td class="pe-0 text-end min-w-200px">20 Jun 2023, 5:20 pm
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="min-w-70px">
                                                                <div class="badge badge-light-success">200 OK</div>
                                                            </td>
                                                            <td>POST /v1/invoices/in_7548_9941/payment</td>
                                                            <td class="pe-0 text-end min-w-200px">24 Jun 2023, 10:30
                                                                am</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="min-w-70px">
                                                                <div class="badge badge-light-success">200 OK</div>
                                                            </td>
                                                            <td>POST /v1/invoices/in_7548_9941/payment</td>
                                                            <td class="pe-0 text-end min-w-200px">05 May 2023, 6:43 am
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="min-w-70px">
                                                                <div class="badge badge-light-success">200 OK</div>
                                                            </td>
                                                            <td>POST /v1/invoices/in_1130_5994/payment</td>
                                                            <td class="pe-0 text-end min-w-200px">20 Jun 2023, 6:43 am
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="min-w-70px">
                                                                <div class="badge badge-light-success">200 OK</div>
                                                            </td>
                                                            <td>POST /v1/invoices/in_4876_4575/payment</td>
                                                            <td class="pe-0 text-end min-w-200px">05 May 2023, 11:30
                                                                am</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <!--end::Table-->
                                            </div>
                                            <!--end::Table wrapper-->
                                        </div>
                                        <!--end::Card body-->
                                    </div>
                                    <!--end::Card-->
                                    <!--begin::Card-->
                                    <div class="card pt-4 mb-6 mb-xl-9">
                                        <!--begin::Card header-->
                                        <div class="card-header border-0">
                                            <!--begin::Card title-->
                                            <div class="card-title">
                                                <h2>Events</h2>
                                            </div>
                                            <!--end::Card title-->
                                            <!--begin::Card toolbar-->
                                            <div class="card-toolbar">
                                                <!--begin::Button-->
                                                <button type="button" class="btn btn-sm btn-light-primary">
                                                    <i class="ki-duotone ki-cloud-download fs-3">
                                                        <span class="path1"></span>
                                                        <span class="path2"></span>
                                                    </i>Download Report</button>
                                                <!--end::Button-->
                                            </div>
                                            <!--end::Card toolbar-->
                                        </div>
                                        <!--end::Card header-->
                                        <!--begin::Card body-->
                                        <div class="card-body py-0">
                                            <!--begin::Table-->
                                            <table
                                                class="table align-middle table-row-dashed fs-6 text-gray-600 fw-semibold gy-5"
                                                id="kt_table_customers_events">
                                                <tbody>
                                                    <tr>
                                                        <td class="min-w-400px">
                                                            <a href="#"
                                                                class="text-gray-600 text-hover-primary me-1">Melody
                                                                Macy</a>has made payment to
                                                            <a href="#"
                                                                class="fw-bold text-gray-900 text-hover-primary">#XRS-45670</a>
                                                        </td>
                                                        <td class="pe-0 text-gray-600 text-end min-w-200px">21 Feb
                                                            2023, 2:40 pm</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="min-w-400px">
                                                            <a href="#"
                                                                class="text-gray-600 text-hover-primary me-1">Max
                                                                Smith</a>has made payment to
                                                            <a href="#"
                                                                class="fw-bold text-gray-900 text-hover-primary">#SDK-45670</a>
                                                        </td>
                                                        <td class="pe-0 text-gray-600 text-end min-w-200px">20 Jun
                                                            2023, 5:30 pm</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="min-w-400px">
                                                            <a href="#"
                                                                class="text-gray-600 text-hover-primary me-1">Max
                                                                Smith</a>has made payment to
                                                            <a href="#"
                                                                class="fw-bold text-gray-900 text-hover-primary">#SDK-45670</a>
                                                        </td>
                                                        <td class="pe-0 text-gray-600 text-end min-w-200px">25 Oct
                                                            2023, 11:05 am</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="min-w-400px">Invoice
                                                            <a href="#"
                                                                class="fw-bold text-gray-900 text-hover-primary me-1">#KIO-45656</a>status
                                                            has changed from
                                                            <span class="badge badge-light-succees me-1">In
                                                                Transit</span>to
                                                            <span class="badge badge-light-success">Approved</span>
                                                        </td>
                                                        <td class="pe-0 text-gray-600 text-end min-w-200px">21 Feb
                                                            2023, 6:43 am</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="min-w-400px">
                                                            <a href="#"
                                                                class="text-gray-600 text-hover-primary me-1">Max
                                                                Smith</a>has made payment to
                                                            <a href="#"
                                                                class="fw-bold text-gray-900 text-hover-primary">#SDK-45670</a>
                                                        </td>
                                                        <td class="pe-0 text-gray-600 text-end min-w-200px">22 Sep
                                                            2023, 2:40 pm</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="min-w-400px">
                                                            <a href="#"
                                                                class="text-gray-600 text-hover-primary me-1">Emma
                                                                Smith</a>has made payment to
                                                            <a href="#"
                                                                class="fw-bold text-gray-900 text-hover-primary">#XRS-45670</a>
                                                        </td>
                                                        <td class="pe-0 text-gray-600 text-end min-w-200px">05 May
                                                            2023, 11:05 am</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="min-w-400px">Invoice
                                                            <a href="#"
                                                                class="fw-bold text-gray-900 text-hover-primary me-1">#LOP-45640</a>has
                                                            been
                                                            <span class="badge badge-light-danger">Declined</span>
                                                        </td>
                                                        <td class="pe-0 text-gray-600 text-end min-w-200px">22 Sep
                                                            2023, 11:30 am</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="min-w-400px">
                                                            <a href="#"
                                                                class="text-gray-600 text-hover-primary me-1">Brian
                                                                Cox</a>has made payment to
                                                            <a href="#"
                                                                class="fw-bold text-gray-900 text-hover-primary">#OLP-45690</a>
                                                        </td>
                                                        <td class="pe-0 text-gray-600 text-end min-w-200px">10 Mar
                                                            2023, 8:43 pm</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="min-w-400px">Invoice
                                                            <a href="#"
                                                                class="fw-bold text-gray-900 text-hover-primary me-1">#LOP-45640</a>has
                                                            been
                                                            <span class="badge badge-light-danger">Declined</span>
                                                        </td>
                                                        <td class="pe-0 text-gray-600 text-end min-w-200px">20 Dec
                                                            2023, 5:30 pm</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="min-w-400px">Invoice
                                                            <a href="#"
                                                                class="fw-bold text-gray-900 text-hover-primary me-1">#SEP-45656</a>status
                                                            has changed from
                                                            <span
                                                                class="badge badge-light-warning me-1">Pending</span>to
                                                            <span class="badge badge-light-info">In Progress</span>
                                                        </td>
                                                        <td class="pe-0 text-gray-600 text-end min-w-200px">21 Feb
                                                            2023, 11:30 am</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <!--end::Table-->
                                        </div>
                                        <!--end::Card body-->
                                    </div>
                                    <!--end::Card-->
                                </div>
