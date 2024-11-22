<!doctype html>
<html lang="en">
<base href="http://127.0.0.1:8000/auth/">

<!-- Mirrored from themesbrand.com/dason/layouts/auth-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 01 Oct 2022 03:54:00 GMT -->

<head>

    <meta charset="utf-8" />
    <title>register| AdaKami</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- preloader css -->
    <link rel="stylesheet" href="assets/css/preloader.min.css" type="text/css" />

    <!-- Bootstrap Css -->
    <link href="assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />

</head>

<body data-topbar="dark">

    <!-- <body data-layout="horizontal"> -->
    <div class="auth-page">
        <div class="container-fluid p-0">
            <div class="row g-0">
                <div class="col-xxl-3 col-lg-4 col-md-5">
                    <div class="auth-full-page-content d-flex p-sm-5 p-4">
                        <div class="w-100">
                            <div class="d-flex flex-column h-100">
                                <div class="mb-4 mb-md-5 text-center">
                                    <a href="index.html" class="d-block auth-logo">
                                        <img src="assets/images/logo-sm.svg" alt="" height="28"> <span
                                            class="logo-txt">APLIKASI AMBULANCE TERDEKAT</span>
                                    </a>
                                </div>
                                <div class="auth-content my-auto">
                                    <div class="text-center">
                                        <h5 class="mb-0">Selamat Datang !</h <p class="text-muted mt-2">Log in untuk
                                            melanjutkan ke aplikasi</p>
                                    </div>
                                    <form class="mt-4 pt-2" action="/register" method="POST">
                                        @csrf
                                        <div class="form-floating form-floating-custom mb-4">
                                            <input name="nama" value="{{ old('nama') }}" type="text"
                                                class="form-control @error('nama') is-invalid @enderror"
                                                id="input-username" placeholder="Enter User Name">
                                            <label for="input-username">Nama</label>
                                            <div class="form-floating-icon">
                                                <i data-feather="users"></i>
                                            </div>
                                            @error('nama')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    
                                        <div class="form-floating form-floating-custom mb-4">
                                            <input name="email" value="{{ old('email') }}" type="email"
                                                class="form-control @error('email') is-invalid @enderror"
                                                id="input-email" placeholder="Enter Email">
                                            <label for="input-email">Email</label>
                                            <div class="form-floating-icon">
                                                <i data-feather="mail"></i>
                                            </div>
                                            @error('email')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    
                                        <div class="form-floating form-floating-custom mb-4">
                                            <input name="password" type="password"
                                                class="form-control @error('password') is-invalid @enderror"
                                                id="password-input" placeholder="Enter Password">
                                            <label for="password-input">Password</label>
                                            <div class="form-floating-icon">
                                                <i data-feather="lock"></i>
                                            </div>
                                            @error('password')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    
                                        <div class="form-floating form-floating-custom mb-4">
                                            <input name="password_confirmation" type="password"
                                                class="form-control"
                                                id="password-confirmation" placeholder="Confirm Password">
                                            <label for="password-confirmation">Konfirmasi Password</label>
                                            <div class="form-floating-icon"> 
                                                <i data-feather="lock"></i>
                                            </div>
                                        </div>
                                    
                                        <div class="mb-3">
                                            <button class="btn btn-primary w-100 waves-effect waves-light" type="submit">Register</button>
                                        </div>
                                    </form>
                                    
                                </div>
                                <div class="mt-4 mt-md-5 text-center">

                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end auth full page content -->
                </div>
                <!-- end col -->
                <div class="col-xxl-9 col-lg-8 col-md-7">
                    <div class="auth-bg pt-md-5 p-4 d-flex">
                        <div class="bg-overlay"></div>
                        <ul class="bg-bubbles">

                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                        </ul>


                    </div>
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container fluid -->
    </div>

    <!-- JAVASCRIPT -->
    <script src="assets/libs/jquery/jquery.min.js"></script>
    <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/libs/metismenu/metisMenu.min.js"></script>
    <script src="assets/libs/simplebar/simplebar.min.js"></script>
    <script src="assets/libs/node-waves/waves.min.js"></script>
    <script src="assets/libs/feather-icons/feather.min.js"></script>

    <script src="assets/js/pages/pass-addon.init.js"></script>

    <script src="assets/js/pages/feather-icon.init.js"></script>

</body>


<!-- Mirrored from themesbrand.com/dason/layouts/auth-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 01 Oct 2022 03:54:00 GMT -->

</html>
