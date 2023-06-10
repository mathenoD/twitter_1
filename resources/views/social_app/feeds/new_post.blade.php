<!--begin::Mobile toolbar-->
<div class="d-flex d-lg-none align-items-center justify-content-end mb-10">
    <div class="d-flex align-items-center gap-2">
        <div class="btn btn-icon btn-active-color-primary w-30px h-30px" id="kt_social_start_sidebar_toggle">
            <i class="ki-duotone ki-profile-circle fs-1">
                <span class="path1"></span>
                <span class="path2"></span>
                <span class="path3"></span>
            </i>
        </div>
        <div class="btn btn-icon btn-active-color-primary w-30px h-30px" id="kt_social_end_sidebar_toggle">
            <i class="ki-duotone ki-scroll fs-1">
                <span class="path1"></span>
                <span class="path2"></span>
                <span class="path3"></span>
            </i>
        </div>
    </div>
</div>
<!--end::Mobile toolbar-->
<!--begin::Main form-->
<div class="card card-flush mb-10">
    <!--begin::Header-->
    <div class="card-header justify-content-start align-items-center pt-4">
        <!--begin::Photo-->
        <div class="symbol symbol-45px me-5">
            <img src="assets/media/avatars/300-3.jpg" class="" alt="" />
        </div>
        <!--end::Photo-->
        <span class="text-gray-400 fw-semibold fs-6">What’s on your mind, Jerry?</span>
    </div>
    <!--end::Header-->
    <!--begin::Body-->
    <form id="tweetForm" action="{{ route('tweets.store') }}" method="POST">
        @csrf
        <div class="card-body pt-2 pb-0">

            <!--begin::Input-->
            <textarea class="form-control bg-transparent border-0 px-0" id="kt_social_feeds_post_input" name="content"
                data-kt-autosize="true" rows="1" placeholder="Type your message..."></textarea>
            <!--end::Input-->

        </div>
        <!--end::Body-->
        <!--begin::Footer-->
        <div class="card-footer d-flex justify-content-end pt-0">
            <!--begin::Post action-->
            <button type="submit" class="btn btn-sm btn-primary" id="kt_social_feeds_post_btn">
                <!--begin::Indicator label-->
                <span class="indicator-label">Post</span>
                <!--end::Indicator label-->
                <!--begin::Indicator progress-->
                <span class="indicator-progress">Please wait...
                    <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                <!--end::Indicator progress-->
            </button>
            <!--end::Post action-->
        </div>
    </form>

    <!--end::Footer-->
</div>
<!--end::Main form-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
    $(document).ready(function() {
        // Intercept the form submission

        let last_posts_datetime = ;

        function get_latests_posts() {

            let start_date = last_posts_datetime;
            let end_date = ;
            $.ajax({
                url: '{{ route('feed.last_inserted_post') }}',
                type: 'GET',
                data: {},
                success: function(response) {
                    // Handle the success response
                    $('#kt_social_feeds_post_input').val('');
                    $('#new_feeds').after(response);

                },
                error: function(xhr) {
                    // Handle the error response
                    console.log(xhr.responseText);
                }
            });
        }

        function get_last_post() {

            $.ajax({
                url: '{{ route('feed.last_inserted_post') }}',
                type: 'GET',
                data: {},
                success: function(response) {
                    // Handle the success response
                    $('#kt_social_feeds_post_input').val('');
                    $('#new_feeds').after(response);

                },
                error: function(xhr) {
                    // Handle the error response
                    console.log(xhr.responseText);
                }
            });
        }
        $('#tweetForm').submit(function(event) {
            event.preventDefault();

            // Get the form data
            var formData = $(this).serialize();

            // Send an AJAX request
            $.ajax({
                url: $(this).attr('action'),
                type: 'POST',
                data: formData,
                success: function(response) {
                    // Handle the success response
                    console.log(response);
                    get_latests_posts();
                    alert(response.message);
                },
                error: function(xhr) {
                    // Handle the error response
                    console.log(xhr.responseText);
                    alert('An error occurred while saving the tweet.');
                }
            });
        });
    });
</script>
