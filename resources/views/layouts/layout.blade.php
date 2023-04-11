<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

    {{-- <link rel="shortcut icon" href="images/fav.png" type="image/x-icon"> --}}
    <link rel="stylesheet" href="http://127.0.0.1:8000/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://127.0.0.1:8000/css/fontawesome.min.css">
    <link rel="stylesheet" href="http://127.0.0.1:8000/css/slick.css">
    <link rel="stylesheet" href="http://127.0.0.1:8000/css/nice-select.css">
    <link rel="stylesheet" href="http://127.0.0.1:8000/css/animate.css">
    <link rel="stylesheet" href="http://127.0.0.1:8000/css/style.css">
    <!-- Boxicons -->
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
     <!-- Bootstrap CSS -->
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>

    <!-- start preloader -->
    <div class="preloader" id="preloader"></div>
    <!-- end preloader -->
    {{-- Flash message --}}
    @if (session()->has('message'))
        <div class="flash-message text-center">
           <h5> {{ session('message') }}</h5>
        </div>
    @endif
    <!-- Login Reg In start -->
    <section id="login-reg">
        <div class="overlay pb-120">
            <div class="container">
                <div class="top-area">
                    <div class="row d-flex align-items-center">
                        <div class="col-sm-5 col">
                            <a class="back-home text-white text-decoration-none" href="/">
                                <img src="http://127.0.0.1:8000/images/left-icon.png" alt="image">
                                Back To Home
                            </a>
                        </div>
                        <div class="col-sm-5 col">
                            <a href="#" class="brand">
                                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 24 24"><path fill="currentColor" d="M2 5.27L3.28 4L20 20.72L18.73 22l-6-6H7.97L5 19c-.33.3-.77.5-1.25.5A1.75 1.75 0 0 1 2 17.75v-.25l1-7.38c.1-1.03.53-1.95 1.19-2.66L2 5.27M5 10v1h2v2h1v-1.73L6.73 10H5m11.5-4c2.36 0 4.29 1.81 4.5 4.12l1 7.38v.25c0 .66-.36 1.25-.9 1.53L7.82 6h8.68m0 2a.75.75 0 0 0-.75.75a.75.75 0 0 0 .75.75a.75.75 0 0 0 .75-.75a.75.75 0 0 0-.75-.75m-1.75 1.75a.75.75 0 0 0-.75.75a.75.75 0 0 0 .75.75a.75.75 0 0 0 .75-.75a.75.75 0 0 0-.75-.75m3.5 0a.75.75 0 0 0-.75.75a.75.75 0 0 0 .75.75a.75.75 0 0 0 .75-.75a.75.75 0 0 0-.75-.75M16.5 11.5a.75.75 0 0 0-.75.75a.75.75 0 0 0 .75.75a.75.75 0 0 0 .75-.75a.75.75 0 0 0-.75-.75Z"/></svg>
                                <span class="text logo">ScoreSensi</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="row pt-120 d-flex justify-content-center">
                    <div class="col-lg-6">
                        <div class="login-reg-main text-center">
                            <h4>Let's get started</h4>
                            <div class="form-area">
                                @yield('page-name')
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Login Reg In end -->
    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/slick.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/fontawesome.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/wow.js"></script>
    <script src="js/main.js"></script>


</body>

</html>
