<!doctype html>
<html lang="en">

    <head>

        <meta charset="utf-8" />
        <title>SIAP PAKDE - KABUPATEN TEMANGGUNG</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Aplikasi Pajak Daerah" name="description" />
        <meta content="Themesbrand" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{ asset('assets/logotmg.png') }}">

        <!-- owl.carousel css -->
        <link rel="stylesheet" href="{{ asset('assets/libs/owl.carousel/assets/owl.carousel.min.css') }}">

        <link rel="stylesheet" href="{{ asset('assets/libs/owl.carousel/assets/owl.theme.default.min.css') }}">

        <!-- Bootstrap Css -->
        <link href="{{ asset('assets/css/bootstrap.min.css') }}" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="{{ asset('assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="{{ asset('assets/css/app.min.css') }}" id="app-style" rel="stylesheet" type="text/css" />

    </head>

    <body class="auth-body-bg">
        <div>
            <div class="container-fluid p-0">
                <div class="row g-0">
                    <div class="col-xl-9">
                        <div class="auth-full-bg pt-lg-5 p-4">
                            <div class="w-100">
                                <div class="bg-overlay" style="background-image: url('assets/images/Dashboard1.png');"></div>
                                <div class="d-flex h-100 flex-column">

                                    <div class="p-4 mt-auto">
                                        <div class="row justify-content-center">
                                            <div class="col-lg-7">
                                                <div class="text-center">

                                                    <h4 class="mb-3"></h4>

                                                    <div dir="ltr">
                                                        <div class="owl-carousel owl-theme auth-review-carousel" id="auth-review-carousel">
                                                            <div class="item">
                                                                <div class="py-3">

                                                                </div>

                                                            </div>

                                                            <div class="item">
                                                                <div class="py-3">

                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end col -->

                    <div class="col-xl-3">
                        <div class="auth-full-page-content p-md-5 p-4">
                            <div class="w-100">

                                <div class="d-flex flex-column h-100">

                                    <div class="my-auto">
                                        <div class="col mb-3 d-flex justify-content-center">
                                            <!-- <img src="{{ asset('assets/kabmagelang.png') }}" width="90"> -->
                                        </div>
                                        <div>
                                            <h5 class="text-primary">SIAP PAKDE KABUPATEN TEMANGGUNG</h5>
                                            <p class="text-muted">Silahkan Login</p>
                                        </div>

                                        <div class="mt-4">
                                            <form method="POST" action="{{ route('login') }}">
                                                @csrf

                                                <div class="mb-3">
                                                    <label for="username" class="form-label">Username</label>
                                                    <input type="text" name="username" class="form-control" id="username" placeholder="Username" required>
                                                </div>

                                                <div class="mb-3">
                                                    <label class="form-label">Password</label>
                                                    <div class="input-group auth-pass-inputgroup">
                                                        <input type="password" class="form-control" placeholder="Masukkan password" aria-label="Password" id="password" name="password" required>
                                                        <button class="btn btn-light " type="button" id="password-addon"><i class="mdi mdi-eye-outline"></i></button>
                                                    </div>
                                                </div>

                                                <div class="mt-3 d-grid">
                                                    <button class="btn btn-primary waves-effect waves-light" type="submit">Log In</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>

                                    <div class="mt-4 mt-md-5 text-center">
                                        <p class="mb-0">© 2021 Pemerintah Daerah Kabupaten Temanggung</p>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container-fluid -->
        </div>

        <!-- JAVASCRIPT -->
        <script src="{{ asset('assets/libs/jquery/jquery.min.js') }}"></script>
        <script src="{{ asset('assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('assets/libs/metismenu/metisMenu.min.js') }}"></script>
        <script src="{{ asset('assets/libs/simplebar/simplebar.min.js') }}"></script>
        <script src="{{ asset('assets/libs/node-waves/waves.min.js') }}"></script>

        <!-- owl.carousel js -->
        <script src="{{ asset('assets/libs/owl.carousel/owl.carousel.min.js') }}"></script>

        <!-- auth-2-carousel init -->
        <script src="{{ asset('assets/js/pages/auth-2-carousel.init.js') }}"></script>

        <!-- App js -->
        <script src="{{ asset('assets/js/app.js') }}"></script>

    </body>
</html>
