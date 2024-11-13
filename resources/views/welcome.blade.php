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
    <div class="authentication">
        <div class="login-agent">
            <div class="page-left">
                <img src="{{ asset('xhtml/images/pattern/login.png') }}" alt="">
            </div>
            <div class="page-right ">
                <div class="login-form">
                    <div class="text-center">
                        <h3 class="title">Sign In</h3>
                        <p>Please sign in to access your account</p>
                    </div>

                    <form method="POST" class="mt-3" action="{{ route('login') }}">
                        @csrf

                        <div class="mb-4">
                            <label class="mb-1 text-dark">Email</label>
                            <input type="email" placeholder="Email" name="email" class="form-control form-control @error('email') is-invalid @enderror" value="{{ old('email') }}">
                            <span class="text-danger">@error('email') {{ $message }} @enderror</span>
                        </div>
                        <div class="mb-4 position-relative">
                            <label class="mb-1 text-dark">Password</label>
                            <input type="password" id="dz-password" placeholder="******" name="password" class="form-control form-control @error('password') is-invalid @enderror" value="{{ old('password') }}">
                            <!-- <span class="show-pass eye">
                                    <i class="fa fa-eye-slash"></i>
                                    <i class="fa fa-eye"></i>
                                </span> -->
                            <span class="text-danger">@error('password') {{ $message }} @enderror</span>
                        </div>
                        <div class="form-row d-flex justify-content-between mt-4 mb-2">

                            <div class="mb-4">
                                <a href="{{ route('forgetPassword') }}" class="btn-link text-primary">Forgot Password?</a>
                            </div>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary btn-block">SIGN IN</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <style>
        .authentication {
            height: 100vh;
        }

        .login-agent {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            justify-content: center;
            align-items: center;
            max-height: 100vh;
        }

        .login-agent .page-left {
            width: 100% !important;
            height: 670px;
            padding: 10px 0px 10px 10px;
            overflow: hidden;
        }

        .login-agent .page-left img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-radius: 20px;
        }

        .login-form {
            max-width: 100% !important;
            padding-inline: 100px !important;
        }

        @media only screen and (max-width: 767px) {
            .login-agent {
                display: grid;
                grid-template-columns: repeat(1, 1fr);
                justify-content: center;
                align-items: center;
                width: 100%;
                height: 100%;
            }

            .login-agent .page-left {
                display: none !important;
            }

            .login-agent .page-right {
                display: flex;
                justify-content: center;
                align-items: center;
                width: 100%;
                height: 100%;
            }

            .login-form {
                width: 100% !important;
                padding-inline: 25px !important;
                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content: center;
                height: 100% !important;
            }

            .login-form form {
                width: 100% !important;
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
