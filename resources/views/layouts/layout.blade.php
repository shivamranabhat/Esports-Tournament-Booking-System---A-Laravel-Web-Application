<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

    {{-- <link rel="shortcut icon" href="images/fav.png" type="image/x-icon"> --}}
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/fontawesome.min.css">
    <link rel="stylesheet" href="css/slick.css">
    <link rel="stylesheet" href="css/nice-select.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/style.css">
    <style>
        .hover{
            border:5px solid orange;
            border-radius:10px;
            backdrop-filter: blur(5px);
            filter: brightness(0.5) grayscale(100%);

        }
    </style>
</head>

<body>

    <!-- start preloader -->
    <div class="preloader" id="preloader"></div>
    <!-- end preloader -->

    <!-- Login Reg In start -->
    <section id="login-reg">
        <div class="overlay pb-120">
            <div class="container">
                <div class="top-area">
                    <div class="row d-flex align-items-center">
                        <div class="col-sm-5 col">
                            <a class="back-home" href="/">
                                <img src="images/left-icon.png" alt="image">
                                Back To Home
                            </a>
                        </div>
                        <div class="col-sm-5 col">
                            <a href="#">
                                LOGO
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
