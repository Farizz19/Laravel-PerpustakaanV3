<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Login</title>

    <!-- Custom fonts for this template-->
    <link href="{{asset('assets/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{asset('assets/css/sb-admin-2.min.css')}}" rel="stylesheet">

    <style>
        .waktu {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            font-size: 20px;
            color: whitesmoke;
        }

        /* #footer {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            font-size: 10px;
            color: whitesmoke;
        } */
    </style>

</head>

<body style="background: linear-gradient(black, grey, grey, white);">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <!-- <div class="bg-gradient-dark text-center p-1">
                        <marquee style="font-size: 20px;">Selamat Datang Di Perpustakaan V3</marquee>
                    </div> -->
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div id="bg" class="col-lg-6 d-none d-lg-block bg-login-image">
                                <!-- <img src="assets/img/RPL.jpg" height="" style="background-size: cover;"> -->
                                <!-- <img class="bg-success p-2 text-white bg-opacity-75" src="assets/img/RPL2.jpg" width="" height="" style="background-size: cover;"> -->
                            </div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Selamat Datang!
                                            <br> <span class="text-primary">Di Perpustakaan V3</span>
                                        </h1>
                                    </div>
                                    <form class="user" action="/proseslogin" method="post">
                                        @csrf
                                        <!-- @if($errors->any())
                                        <h4 class="text-danger text-center">{{$errors->first()}}</h4>
                                        @endif -->
                                        <div class="form-group">
                                            <input type="username" name="username" class="form-control form-control-user" placeholder="Masukkan Nama Pengguna" autofocus>
                                             @error('username')
                                            <label for="username" class="text-danger">{{$message}}</label>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <input type="password" name="password" class="form-control form-control-user" placeholder="Masukkan Kata Sandi">
                                             @error('password')
                                            <label for="password" class="text-danger">{{$message}}</label>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox small">
                                                <input type="checkbox" class="custom-control-input" id="customCheck">
                                                <label class="custom-control-label" for="customCheck">Ingat Saya</label>
                                            </div>
                                        </div>
                                        
                                        <div class="form-group">
                                            <input class="btn btn-success form-control" type="submit" value="Masuk">
                                        </div>

                                        <!-- <hr>
                                        <a href="index.html" class="btn btn-google btn-user btn-block">
                                            <i class="fab fa-google fa-fw"></i> Masuk dengan Google
                                        </a>
                                        <a href="index.html" class="btn btn-facebook btn-user btn-block">
                                            <i class="fab fa-facebook-f fa-fw"></i> Masuk dengan Facebook
                                        </a> -->
                                        
                                    </form>
                                    <hr>
                                    <div class="text-center">
                                        <a class="small" href="forgot-password.html">Lupa Kata Sandi?</a>
                                    </div>
                                    <div class="text-center">
                                        <a class="small" href="/register">Buat Akun!</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                        <!-- <div id="footer" class="bg-gradient-dark p-1 text-center">Copyright &copy; Fariz</div> -->
                </div>
            </div>

        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="{{asset('assets/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{asset('assets/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{asset('assets/js/sb-admin-2.min.js')}}"></script>

</body>

</html>