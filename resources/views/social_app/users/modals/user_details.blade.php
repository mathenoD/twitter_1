<!--begin::Modals-->
<!--begin::Modal - Update user details-->
<div class="modal fade" id="kt_modal_update_details" tabindex="-1" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-dialog-centered mw-650px">
        <!--begin::Modal content-->
        <div class="modal-content">
            <!--begin::Form-->
            <form class="form" action="#" id="kt_modal_update_user_form">
                @csrf
                <!--begin::Modal header-->
                <div class="modal-header" id="kt_modal_update_user_header">
                    <!--begin::Modal title-->
                    <h2 class="fw-bold">Update User Details</h2>
                    <!--end::Modal title-->
                    <!--begin::Close-->
                    <div class="btn btn-icon btn-sm btn-active-icon-primary" data-kt-users-modal-action="close">
                        <i class="ki-duotone ki-cross fs-1">
                            <span class="path1"></span>
                            <span class="path2"></span>
                        </i>
                    </div>
                    <!--end::Close-->
                </div>
                <!--end::Modal header-->
                <!--begin::Modal body-->
                <div class="modal-body py-10 px-lg-17">
                    <!--begin::Scroll-->
                    <div class="d-flex flex-column scroll-y me-n7 pe-7" id="kt_modal_update_user_scroll"
                        data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}"
                        data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_modal_update_user_header"
                        data-kt-scroll-wrappers="#kt_modal_update_user_scroll" data-kt-scroll-offset="300px">
                        <!--begin::User toggle-->
                        <div class="fw-bolder fs-3 rotate collapsible mb-7" data-bs-toggle="collapse"
                            href="#kt_modal_update_user_user_info" role="button" aria-expanded="false"
                            aria-controls="kt_modal_update_user_user_info">User Information
                            <span class="ms-2 rotate-180">
                                <i class="ki-duotone ki-down fs-3"></i>
                            </span>
                        </div>
                        <!--end::User toggle-->
                        <!--begin::User form-->
                        <div id="kt_modal_update_user_user_info" class="collapse show">
                            <!--begin::Input group-->
                            <div class="mb-7">
                                <!--begin::Label-->
                                <label class="fs-6 fw-semibold mb-2">
                                    <span>Update Avatar</span>
                                    <span class="ms-1" data-bs-toggle="tooltip"
                                        title="Allowed file types: png, jpg, jpeg.">
                                        <i class="ki-duotone ki-information fs-7">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                            <span class="path3"></span>
                                        </i>
                                    </span>
                                </label>
                                <!--end::Label-->
                                <!--begin::Image input wrapper-->
                                <div class="mt-1">
                                    <!--begin::Image placeholder-->
                                    <style>
                                        .image-input-placeholder {
                                            background-image: url('assets/media/svg/avatars/blank.svg');
                                        }

                                        [data-bs-theme="dark"] .image-input-placeholder {
                                            background-image: url('assets/media/svg/avatars/blank-dark.svg');
                                        }
                                    </style>
                                    <!--end::Image placeholder-->
                                    <!--begin::Image input-->
                                    <div class="image-input image-input-outline image-input-placeholder"
                                        data-kt-image-input="true">
                                        <!--begin::Preview existing avatar-->
                                        <div class="image-input-wrapper w-125px h-125px"
                                            style="background-image: url(assets/media/avatars/300-6.jpg">
                                        </div>
                                        <!--end::Preview existing avatar-->
                                        <!--begin::Edit-->
                                        <label
                                            class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                            data-kt-image-input-action="change" data-bs-toggle="tooltip"
                                            title="Change avatar">
                                            <i class="ki-duotone ki-pencil fs-7">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>
                                            <!--begin::Inputs-->
                                            <input type="file" name="avatar" id="avatar"
                                                accept=".png, .jpg, .jpeg" />
                                            <input type="hidden" name="avatar_remove" />
                                            <!--end::Inputs-->
                                        </label>
                                        <!--end::Edit-->
                                        <!--begin::Cancel-->
                                        <span
                                            class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                            data-kt-image-input-action="cancel" data-bs-toggle="tooltip"
                                            title="Cancel avatar">
                                            <i class="ki-duotone ki-cross fs-2">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>
                                        </span>
                                        <!--end::Cancel-->
                                        <!--begin::Remove-->
                                        <span
                                            class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                            data-kt-image-input-action="remove" data-bs-toggle="tooltip"
                                            title="Remove avatar">
                                            <i class="ki-duotone ki-cross fs-2">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>
                                        </span>
                                        <!--end::Remove-->
                                    </div>
                                    <!--end::Image input-->
                                </div>
                                <!--end::Image input wrapper-->
                            </div>
                            <!--end::Input group-->
                            <!--begin::Input group-->
                            <div class="fv-row mb-7">
                                <!--begin::Label-->
                                <label class="fs-6 fw-semibold mb-2">First Name</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <input type="text" class="form-control form-control-solid" placeholder=""
                                    name="first_name" id="first_name" value="{{ $user->first_name }}" />
                                <!--end::Input-->
                            </div>
                            <!--end::Input group-->
                            <!--begin::Input group-->
                            <div class="fv-row mb-7">
                                <!--begin::Label-->
                                <label class="fs-6 fw-semibold mb-2">Last Name</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <input type="text" class="form-control form-control-solid" placeholder=""
                                    name="last_name" id="last_name" value="{{ $user->last_name }}" />
                                <!--end::Input-->
                            </div>
                            <!--end::Input group-->
                            <!--begin::Input group-->
                            <div class="fv-row mb-7">
                                <!--begin::Label-->
                                <label class="fs-6 fw-semibold mb-2">
                                    <span>Email</span>
                                    <span class="ms-1" data-bs-toggle="tooltip" title="Email address must be active">
                                        <i class="ki-duotone ki-information fs-7">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                            <span class="path3"></span>
                                        </i>
                                    </span>
                                </label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <input type="email" class="form-control form-control-solid" placeholder=""
                                    name="email" id="email" value="{{ $user->email }}" />
                                <!--end::Input-->
                            </div>
                            <!--end::Input group-->

                        </div>
                        <!--end::User form-->
                        <!--begin::Address toggle-->
                        <div class="fw-bolder fs-3 rotate collapsible mb-7" data-bs-toggle="collapse"
                            href="#kt_modal_update_user_address" role="button" aria-expanded="false"
                            aria-controls="kt_modal_update_user_address">User Info
                            <span class="ms-2 rotate-180">
                                <i class="ki-duotone ki-down fs-3"></i>
                            </span>
                        </div>
                        <!--begin::Input group-->
                        <div class="fv-row mb-7">
                            <!--begin::Label-->
                            <label class="fs-6 fw-semibold mb-2">Phone number</label>
                            <!--end::Label-->
                            <!--begin::Input-->
                            <input type="text" class="form-control form-control-solid" placeholder=""
                                name="phone" id="phone" value="{{ $user->user_info->phone }}" />
                            <!--end::Input-->
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="fv-row mb-7">
                            <!--begin::Label-->
                            <label class="fs-6 fw-semibold mb-2">Company</label>
                            <!--end::Label-->
                            <!--begin::Input-->
                            <input type="text" class="form-control form-control-solid" placeholder=""
                                name="company" id="company" value="{{ $user->user_info->company }}" />
                            <!--end::Input-->
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="fv-row mb-7">
                            <!--begin::Label-->
                            <label class="fs-6 fw-semibold mb-2">Website</label>
                            <!--end::Label-->
                            <!--begin::Input-->
                            <input type="text" class="form-control form-control-solid" placeholder=""
                                name="website" id="website" value="{{ $user->user_info->website }}" />
                            <!--end::Input-->
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="fv-row mb-15">
                            <!--begin::Label-->
                            <label class="fs-6 fw-semibold mb-2">Language</label>
                            <!--end::Label-->
                            <!--begin::Input-->
                            <select name="language" id="language" aria-label="Select a Language"
                                data-control="select2" data-placeholder="Select a Language..."
                                class="form-select form-select-solid" data-dropdown-parent="#kt_modal_update_details">
                                <option></option>
                                <option value="id">Bahasa Indonesia - Indonesian</option>
                                <option value="msa">Bahasa Melayu - Malay</option>
                                <option value="ca">Català - Catalan</option>
                                <option value="cs">Čeština - Czech</option>
                                <option value="da">Dansk - Danish</option>
                                <option value="de">Deutsch - German</option>
                                <option value="en">English</option>
                                <option value="en-gb">English UK - British English</option>
                                <option value="es">Español - Spanish</option>
                                <option value="fil">Filipino</option>
                                <option value="fr">Français - French</option>
                                <option value="ga">Gaeilge - Irish (beta)</option>
                                <option value="gl">Galego - Galician (beta)</option>
                                <option value="hr">Hrvatski - Croatian</option>
                                <option value="it">Italiano - Italian</option>
                                <option value="hu">Magyar - Hungarian</option>
                                <option value="nl">Nederlands - Dutch</option>
                                <option value="no">Norsk - Norwegian</option>
                                <option value="pl">Polski - Polish</option>
                                <option value="pt">Português - Portuguese</option>
                                <option value="ro">Română - Romanian</option>
                                <option value="sk">Slovenčina - Slovak</option>
                                <option value="fi">Suomi - Finnish</option>
                                <option value="sv">Svenska - Swedish</option>
                                <option value="vi">Tiếng Việt - Vietnamese</option>
                                <option value="tr">Türkçe - Turkish</option>
                                <option value="el">Ελληνικά - Greek</option>
                                <option value="bg">Български език - Bulgarian</option>
                                <option value="ru">Русский - Russian</option>
                                <option value="sr">Српски - Serbian</option>
                                <option value="uk">Українська мова - Ukrainian</option>
                                <option value="he">עִבְרִית - Hebrew</option>
                                <option value="ur">اردو - Urdu (beta)</option>
                                <option value="ar">العربية - Arabic</option>
                                <option value="fa">فارسی - Persian</option>
                                <option value="mr">मराठी - Marathi</option>
                                <option value="hi">हिन्दी - Hindi</option>
                                <option value="bn">বাংলা - Bangla</option>
                                <option value="gu">ગુજરાતી - Gujarati</option>
                                <option value="ta">தமிழ் - Tamil</option>
                                <option value="kn">ಕನ್ನಡ - Kannada</option>
                                <option value="th">ภาษาไทย - Thai</option>
                                <option value="ko">한국어 - Korean</option>
                                <option value="ja">日本語 - Japanese</option>
                                <option value="zh-cn">简体中文 - Simplified Chinese</option>
                                <option value="zh-tw">繁體中文 - Traditional Chinese</option>
                            </select>
                            <!--end::Input-->
                        </div>
                        <!--end::Input group-->
                    </div>
                    <!--end::Scroll-->
                </div>
                <!--end::Modal body-->
                <!--begin::Modal footer-->
                <div class="modal-footer flex-center">
                    <!--begin::Button-->
                    <button type="reset" class="btn btn-light me-3"
                        data-kt-users-modal-action="cancel">Discard</button>
                    <!--end::Button-->
                    <!--begin::Button-->
                    <button type="button" class="btn btn-primary" data-kt-users-modal-action="submit"
                        id="update_user">
                        <span class="indicator-label">Submit</span>
                        <span class="indicator-progress">Please wait...
                            <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                    </button>
                    <!--end::Button-->
                </div>
                <!--end::Modal footer-->
            </form>
            <!--end::Form-->
        </div>
    </div>
</div>
<!--end::Modal - Update user details-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<script>
    jQuery(document).ready(function() {
        jQuery('#update_user').on('click', function(e) {
            e.preventDefault();

            var formData = $("#kt_modal_update_user_form").serializeArray();

            var formData = {};
            $("#kt_modal_update_user_form").serializeArray().map(function(item) {
                formData[item.name] = item.value;
            });
            // var jsonData = JSON.stringify(formData);
            $.ajax({
                type: "post",
                url: "{{ route('profile.update_ajax') }}",
                data: formData,
                dataType: "json",
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function(response) {
                    $("#kt_modal_update_details").modal('hide');

                    console.log(response);
                },
                error: (error) => {
                    console.error(error);
                }
            });
        })

        jQuery('#get_user').on('click', function() {

            // kt_modal_update_details
            $.ajax({
                type: "get",
                url: "{{ route('profile.get_user_ajax') }}",
                data: {},
                dataType: "json",

                success: function(response) {
                    $('#first_name').val(response.user.first_name);
                    $('#last_name').val(response.user.last_name);
                    $('#email').val(response.user.email);
                    $('#company').val(response.user.user_info.company);
                    $('#phone').val(response.user.user_info.phone);
                    $('#language').val(response.user.user_info.language);
                    $("#kt_modal_update_details").modal('show');
                },
                error: (error) => {
                    console.error(error);
                }
            });
        })

    })
</script>
