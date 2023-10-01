<!doctype html>
<html lang="en" dir="ltr">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>

    <!-- META DATA -->
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Noa - Laravel Bootstrap 5 Admin & Dashboard Template">
    <meta name="author" content="Spruko Technologies Private Limited">
    <meta name="keywords" content="laravel admin template, bootstrap admin template, admin dashboard template, admin dashboard, admin template, admin, bootstrap 5, laravel admin, laravel admin dashboard template, laravel ui template, laravel admin panel, admin panel, laravel admin dashboard, laravel template, admin ui dashboard">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- TITLE -->
    <title>Noa - Laravel Bootstrap 5 Admin & Dashboard Template</title>

    <!-- FAVICON -->
    <link rel="apple-touch-icon" sizes="57x57" href="{{ asset('/') }}frontend/logo/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="{{ asset('/') }}frontend/logo/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('/') }}frontend/logo/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('/') }}frontend/logo/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('/') }}frontend/logo/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('/') }}frontend/logo/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="{{ asset('/') }}frontend/logo/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('/') }}frontend/logo/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('/') }}frontend/logo/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="{{ asset('/') }}frontend/logo/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('/') }}frontend/logo/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('/') }}frontend/logo/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('/') }}frontend/logo/favicon/favicon-16x16.png">

    <!-- BOOTSTRAP CSS -->
    <link id="style" href="{{ asset('/') }}backend/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" />

    <!-- STYLE CSS -->
    <link href="{{ asset('/') }}backend/assets/css/style.css" rel="stylesheet" />
    <link href="{{ asset('/') }}backend/assets/css/skin-modes.css" rel="stylesheet" />



    <!--- FONT-ICONS CSS -->
    <link href="{{ asset('/') }}backend/assets/plugins/icons/icons.css" rel="stylesheet" />

    <!-- INTERNAL Switcher css -->
    <link href="{{ asset('/') }}backend/assets/switcher/css/switcher.css" rel="stylesheet">
    <link href="{{ asset('/') }}backend/assets/switcher/demo.css" rel="stylesheet">

</head>


<body class="ltr login-img">


<!-- GLOBAL-LOADER -->
<div id="global-loader">
    <img src="{{ asset('/') }}backend/assets/images/loader.svg" class="loader-img" alt="Loader">
</div>



<!-- PAGE -->
<div class="page">
    <div>
        <!-- CONTAINER OPEN -->
        <div class="col col-login mx-auto text-center">
            <a href="{{ url('/') }}">
                <img src="{{ asset('/') }}backend/assets/images/brand/logo.png" class="header-brand-img" alt="site logo" style="height: 80px">
            </a>
        </div>
        <div class="container-login100">
            <div class="wrap-login100 p-0">
                <div class="card-body">
                    <form class="login100-form validate-form" id="" action="{{ route('register') }}" method="post">
                        @csrf
                        <span class="login100-form-title">
										Registration
									</span>
                        <div class="wrap-input100 validate-input" data-bs-validate = "Valid email is required: ex@abc.xyz">
                            <input class="input100" type="text" name="name" placeholder="User name">
                            <span class="focus-input100"></span>
                            <span></span>
                        </div>
                        <div class="wrap-input100 validate-input" data-bs-validate="Valid email is required: ex@abc.xyz">
                            <select name="account_type" class="form-control input100" id="" required>
                                <option value="" disabled>Select Account type</option>
                                <option value="individual">Individual</option>
                                <option value="business">Business</option>
                            </select>
                            <span class="focus-input100"></span>
                        </div>
                        <div class="wrap-input100 validate-input" data-bs-validate = "Valid email is required: ex@abc.xyz">
                            <input class="input100" type="text" name="email" placeholder="Email">
                            <span class="focus-input100"></span>
                        </div>
                        <div class="wrap-input100 validate-input" data-bs-validate = "Password is required">
                            <input class="input100" type="password" name="password" placeholder="Password">
                            <span class="focus-input100"></span>
                        </div>
                        <div class="wrap-input100 validate-input" data-bs-validate = "Password is required">
                            <input class="input100" type="password" name="password_confirmation" placeholder="Confirm Password" />
                            <span class="focus-input100"></span>
                        </div>
{{--                        <label class="custom-control custom-checkbox mt-4">--}}
{{--                            <input type="checkbox" class="custom-control-input">--}}
{{--                            <span class="custom-control-label">Agree the <a href="#">terms and policy</a></span>--}}
{{--                        </label>--}}
                        <div class="container-login100-form-btn">
                            <button type="submit" class="login100-form-btn btn-primary">
                                Register
                            </button>
                        </div>
                        <div class="text-center pt-3">
                            <p class="text-dark mb-0">Already have account?<a href="{{ route('login') }}" class="text-primary ms-1">Sign In</a></p>
                        </div>
                    </form>
                </div>
                <div class="card-footer">
                    <div class="d-flex justify-content-center my-3">
{{--                        <a href="javascript:void(0)" class="social-login  text-center me-4">--}}
{{--                            <i class="fa-brands fa-google"></i>--}}
{{--                        </a>--}}
{{--                        <a href="javascript:void(0)" class="social-login  text-center me-4">--}}
{{--                            <i class="fa-brands fa-facebook"></i>--}}
{{--                        </a>--}}
{{--                        <a href="javascript:void(0)" class="social-login  text-center">--}}
{{--                            <i class="fa-brands fa-twitter"></i>--}}
{{--                        </a>--}}
                    </div>
                </div>
            </div>
        </div>
        <!-- CONTAINER CLOSED -->
    </div>
</div>


<!-- JQUERY JS -->
<script src="{{ asset('/') }}backend/assets/plugins/jquery/jquery.min.js"></script>

<!-- BOOTSTRAP JS -->
<script src="{{ asset('/') }}backend/assets/plugins/bootstrap/js/popper.min.js"></script>
<script src="{{ asset('/') }}backend/assets/plugins/bootstrap/js/bootstrap.min.js"></script>

<!-- Perfect SCROLLBAR JS-->
<script src="{{ asset('/') }}backend/assets/plugins/p-scroll/perfect-scrollbar.js"></script>

<!-- STICKY JS -->
<script src="{{ asset('/') }}backend/assets/js/sticky.js"></script>



<!-- COLOR THEME JS -->
<script src="{{ asset('/') }}backend/assets/js/themeColors.js"></script>

<!-- CUSTOM JS -->
<script src="{{ asset('/') }}backend/assets/js/custom.js"></script>

<!-- SWITCHER JS -->
<script src="{{ asset('/') }}backend/assets/switcher/js/switcher.js"></script>

{{--toastr assets--}}
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
</script>

</body>
</html>
