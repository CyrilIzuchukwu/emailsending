<!DOCTYPE html>
<html lang="en" class="h-100">

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
    <meta property="og:image" content="">
    <meta name="format-detection" content="">

    <!-- PAGE TITLE HERE -->
    <title>Bighit</title>

    <!-- FAVICONS ICON -->
    <link rel="shortcut icon" type="image/png" href="{{ asset('xhtml/images/favicon.png') }}">
    <link href="{{ asset('xhtml/vendor/jquery-nice-select/css/nice-select.css') }}" rel="stylesheet">
    <link href="{{ asset('xhtml/css/style.css') }}" rel="stylesheet">
</head>

<body class="">
    <div class="authincation">
        <div class="authincation-content">
            <div class="auth-form">
                <div class="text-center mb-3">
                    <!-- <a href="/"><img src="{{ asset('xhtml/images/logo/logo-full.png') }}" alt=""></a> -->
                </div>
                <h4 class="text-center mb-4">Forgot Password</h4>
                <p>
                <p class="text-center mb-4" style="color: #000;">No worries, Enter your email address below and will send you a code to reset your password</p>
                </p>
                <form class="login-form" method="POST" action="{{ route('forgotPassword.email') }}">
                    @csrf

                    <div class="mb-4">
                        <label>Email</label>
                        <input type="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" name="email" placeholder="Enter your Email" autocomplete="email" autofocus>
                        <span class="text-danger">@error ('email') {{ $message }} @enderror</span>
                    </div>




                    <div class="text-center">
                        <button type="submit" class="btn btn-primary btn-block">SUBMIT</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <style>
        .authincation {
            width: 100%;
            margin: 0 auto;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .auth-form {
            width: 700px;
        }

        .auth-form form {
            box-shadow: rgba(0, 0, 0, 0.16) 0px 1px 4px;
            width: 100%;
            padding: 40px;
        }

        @media only screen and (max-width: 767px) {
            .auth-form {
                width: 100% !important;
            }

            .auth-form form {
                padding: 20px;
            }
        }
    </style>

    <script src="{{ asset('xhtml/vendor/global/global.min.js') }}"></script>
    <script src="{{ asset('xhtml/js/deznav-init.js') }}"></script>

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
