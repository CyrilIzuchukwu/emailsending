<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <meta name="robots" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta property="og:title" content="">
    <meta property="og:description" content="">
    <meta property="og:image" content="social-image.png">
    <meta name="format-detection" content="telephone=no">

    <!-- PAGE TITLE HERE -->
    <title>Bighit Admin</title>

    <!-- FAVICONS ICON -->
    <link rel="shortcut icon" type="image/png" href="{{ asset('xhtml/images/favicon.png') }}">


    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">


    <link href="{{ asset('xhtml/vendor/jquery-nice-select/css/nice-select.css') }}" rel="stylesheet">
    <link href="{{ asset('xhtml/vendor/swiper/css/swiper-bundle.min.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('xhtmlcdnjs.cloudflare.com/ajax/libs/noUiSlider/14.6.4/nouislider.min.css') }}">

    <!-- Style css -->
    <link href="{{ asset('xhtml/css/style.css') }}" rel="stylesheet">


    <link rel="stylesheet" href="{{ asset('xhtml/icons/simple-line-icons/css/simple-line-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('xhtml/icons/fontawesome6/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('xhtml/icons/fontawesome/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('xhtml/icons/material-design-iconic-font/css/materialdesignicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('xhtml/icons/themify-icons/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('xhtml/icons/line-awesome/css/line-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('xhtml/icons/avasta/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('xhtml/icons/flaticon/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('xhtml/icons/flaticon_1/flaticon_1.css') }}">
    <link rel="stylesheet" href="{{ asset('xhtml/icons/icomoon/icomoon.css') }}">
    <link rel="stylesheet" href="{{ asset('xhtml/icons/bootstrap-icons/font/bootstrap-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('xhtml/vendor/animate/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('xhtml/vendor/aos/css/aos.min.css') }}">
    <link rel="stylesheet" href="{{ asset('xhtml/vendor/perfect-scrollbar/css/perfect-scrollbar.css') }}">
    <link rel="stylesheet" href="{{ asset('xhtml/vendor/metismenu/css/metisMenu.min.css') }}">

</head>

<body>

    <!-- <div id="loader">
    </div> -->

    <!-- Main wrapper start -->
    <div id="main-wrapper">


        @include('snippets.header')

        <!-- Sidebar start -->
        @include('snippets.sidebar')
        <!-- Sidebar end -->

        <!-- Content body start -->
        <div class="content-body">
            @yield('content')
        </div>

        <!-- Content body end -->



        <!-- Footer start -->
        <div class="footer out-footer">
            <div class="copyright">
                <p>Copyright © Developed by <a href="" target="_blank">Badman Creative & Cypher</a> 2022</p>
            </div>
        </div>
        <!-- Footer end -->
    </div>
    <!-- Main wrapper end -->

    <!-- Scripts -->
    <script src="{{ asset('xhtml/vendor/global/global.min.js') }}"></script>
    <script src="{{ asset('xhtml/vendor/chart.js/Chart.bundle.min.js') }}"></script>
    <script src="{{ asset('xhtml/vendor/jquery-nice-select/js/jquery.nice-select.min.js') }}"></script>

    <!-- Dashboard 1 -->
    <script src="{{ asset('xhtml/js/dashboard/dashboard-1.js') }}"></script>
    <!-- Apex Chart -->
    <script src="{{ asset('xhtml/vendor/apexchart/apexchart.js') }}"></script>
    <script src="{{ asset('xhtml/vendor/swiper/js/swiper-bundle.min.js') }}"></script>

    <script src="{{ asset('xhtml/cdnjs.cloudflare.com/ajax/libs/wnumb/1.2.0/wNumb.min.js') }}"></script>
    <script src="{{ asset('xhtml/cdnjs.cloudflare.com/ajax/libs/noUiSlider/14.6.4/nouislider.min.js') }}"></script>
    <script src="{{ asset('xhtml/vendor/raphael/raphael.min.js') }}"></script>
    <script src="{{ asset('xhtml/vendor/morris/morris.min.js') }}"></script>

    <script src="{{ asset('xhtml/js/custom.js') }}"></script>
    <script src="{{ asset('xhtml/js/deznav-init.js') }}"></script>
    <script src="{{ asset('xhtml/js/demo.js') }}"></script>
    <script src="{{ asset('xhtml/js/dashboard/tradingview-1.js') }}"></script>



    <!-- Include Bootstrap JS -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.bundle.min.js"></script> -->
    <!-- Include Summernote JS -->
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#summernote').summernote({
                placeholder: 'Message',
                height: 200,
                toolbar: [
                    ['style', ['bold', 'italic', 'underline', 'clear']],
                    ['font', ['strikethrough', 'superscript', 'subscript']],
                    ['color', ['color']],
                    ['para', ['ul', 'ol', 'paragraph']],
                    ['table', ['table']],
                    ['insert', ['link', 'picture', 'video']],
                    ['view', ['fullscreen', 'codeview', 'help']]
                ],
                callbacks: {
                    onPaste: function(e) {
                        var bufferText = ((e.originalEvent || e).clipboardData || window.clipboardData).getData('Text');
                        e.preventDefault();
                        document.execCommand('insertText', false, bufferText);
                    }
                }
            });
        });
    </script>


    <!-- sweet alert  -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    @if (session('message'))
    <script>
        swal("Successful!", "{{ session('message') }}!", "success");
    </script>
    @endif
    @if (session('error'))
    <script>
        swal("Error!", "{{ session('error') }}!", "warning");
    </script>
    @endif
    @if (Session::has('success'))
    <script>
        swal("Successful!", "{{ Session::get('success') }}!", "success");
    </script>
    @endif

    @if (Session::has('error'))
    <script>
        swal("Warning!", "{{ Session::get('error') }}!", "warning");
    </script>
    @endif

</body>

</html>
