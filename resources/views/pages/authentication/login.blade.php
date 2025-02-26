<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="shortcut icon" href="{{asset('favicon.png')}}">
    <link rel="stylesheet" href="{{asset('dashboad/assets/vendor/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('dashboad/assets/vendor/css/OverlayScrollbars.min.css')}}">
    <link rel="stylesheet" href="{{asset('dashboad/assets/vendor/css/jquery.dataTables.min.css')}}">
    <link rel="stylesheet" href="{{asset('dashboad/assets/vendor/css/daterangepicker.css')}}">
    <link rel="stylesheet" href="{{asset('dashboad/assets/vendor/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('dashboad/assets/css/style.css')}}">
    <link rel="stylesheet" id="primaryColor" href="{{asset('dashboad/assets/css/orange-color.css')}}">
</head>
<body>

 <!-- main content start -->
   <div class="main-content login-panel">
    <div class="login-body">
        <div class="top d-flex justify-content-between align-items-center">
            <div class="logo">
                <img src="dashboad/assets/images/logo-black.png" alt="Logo">
            </div>
            <a href="dashboard-index.html"><i class="fa-duotone fa-house-chimney"></i></a>
        </div>
        <div class="bottom">
            <h3 class="panel-title">Login</h3>
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="input-group mb-30">
                    <span class="input-group-text"><i class="fa-regular fa-user"></i></span>
                    <input type="text" class="form-control" name="email" placeholder="Username or email address" required>
                </div>
                <div class="input-group mb-20">
                    <span class="input-group-text"><i class="fa-regular fa-lock"></i></span>
                    <input type="password" class="form-control rounded-end" name="password" placeholder="Password" required>
                    <a role="button" class="password-show"><i class="fa-duotone fa-eye"></i></a>
                </div>
                <div class="d-flex justify-content-between mb-30">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="remember" id="loginCheckbox">
                        <label class="form-check-label text-white" for="loginCheckbox">
                            Remember Me
                        </label>
                    </div>
                    <a href="#" class="text-white fs-14">Forgot Password?</a>
                </div>
                <button type="submit" class="btn btn-primary w-100 login-btn">Sign in</button>
            </form>

            <div class="other-option">
                <p>Or continue with</p>
                <div class="social-box d-flex justify-content-center gap-20">
                    <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="#"><i class="fa-brands fa-twitter"></i></a>
                    <a href="#"><i class="fa-brands fa-google"></i></a>
                    <a href="#"><i class="fa-brands fa-instagram"></i></a>
                </div>
            </div>
        </div>
    </div>


<!-- main content end -->
    <script src="{{asset('dashboad/assets/vendor/js/jquery-3.6.0.min.js')}}"></script>
    <script src="{{asset('dashboad/assets/vendor/js/jquery.overlayScrollbars.min.js')}}"></script>
    <script src="{{asset('dashboad/assets/vendor/js/apexcharts.js')}}"></script>
    <script src="{{asset('dashboad/assets/vendor/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('dashboad/assets/vendor/js/moment.min.js')}}"></script>
    <script src="{{asset('dashboad/assets/vendor/js/daterangepicker.js')}}"></script>
    <script src="{{asset('dashboad/assets/vendor/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('dashboad/assets/js/dashboard.js')}}"></script>
    <script src="{{asset('dashboad/assets/js/main.js')}}"></script>
</body>
</html>
