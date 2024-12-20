    <!-- js -->
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/nice-select/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/tinyeditor/tinymce.min.js') }}" referrerpolicy="origin"></script>
    <script src="{{ asset('assets/vendors/tinyeditor/active.js') }}"></script>
    <script src="{{ asset('assets/vendors/tagify/jQuery.tagify.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/chosen/chosen.jquery.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/select2/select2.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/multi-img-video/multiple-image-video(MIV).js') }}"></script>
    <script src="{{ asset('assets/vendors/venobox/venobox.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/plyr/plyr.js') }}"></script>
    <script src="{{ asset('assets/vendors/counterup/jquery.waypoints.js') }}"></script>
    <script src="{{ asset('assets/vendors/counterup/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/counterup/counterup-active.js') }}"></script>
    <script src="{{ asset('assets/vendors/wow-js-new/wow.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap-tagsinput.js') }}"></script>
    <script src="{{ asset('assets/js/new-script.js') }}"></script>

    <!--Toaster Script-->
    <script src="{{ asset('assets/js/toastr.min.js') }}"></script>

    <script>
        "use strict";

        @if (Session::has('message'))
            toastr.options = {
                "closeButton": true,
                "progressBar": true
            }
            toastr.success("{{ session('message') }}");
        @endif

        @if (Session::has('error'))
            toastr.options = {
                "closeButton": true,
                "progressBar": true
            }
            toastr.error("{{ session('error') }}");
        @endif

        @if (Session::has('info'))
            toastr.options = {
                "closeButton": true,
                "progressBar": true
            }
            toastr.info("{{ session('info') }}");
        @endif

        @if (Session::has('warning'))
            toastr.options = {
                "closeButton": true,
                "progressBar": true
            }
            toastr.warning("{{ session('warning') }}");
        @endif
    </script>

    <script type="text/javascript">
        function support() {
            zE(function() {
                zE.activate();
            });
        }
    </script>
    @stack('js')
