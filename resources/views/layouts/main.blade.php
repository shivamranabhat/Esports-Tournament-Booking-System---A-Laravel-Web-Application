<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

    {{-- <link rel="shortcut icon" href="http://127.0.0.1:8000/images/fav.png" type="image/x-icon"> --}}
    <link rel="stylesheet" href="http://127.0.0.1:8000/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://127.0.0.1:8000/css/slick.css">
    <link rel="stylesheet" href="http://127.0.0.1:8000/css/magnific-popup.css">
    <link rel="stylesheet" href="http://127.0.0.1:8000/css/nice-select.css">
    <link rel="stylesheet" href="http://127.0.0.1:8000/css/animate.css">
    <link rel="stylesheet" href="http://127.0.0.1:8000/css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer">
</head>

<body>
        <!-- start preloader -->
        <div class="preloader" id="preloader"></div>
        <!-- end preloader -->
        <a href="#" class="scrollToTop"><i class="fas fa-angle-double-up"></i></a>
        <!-- header-section start -->
        <header id="header-section">
            <div class="overlay">
                <div class="container">
                    <div class="row d-flex header-area">
                        <div class="logo-section flex-grow-1 d-flex align-items-center">
                            <a class="site-logo site-title" href="">LOGO</a>
                        </div>
                        <button class="navbar-toggler ml-auto collapsed" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <i class="fas fa-bars"></i>
                        </button>
                        <nav class="navbar navbar-expand-lg p-0">
                            <div class="navbar-collapse collapse" id="navbarSupportedContent">
                                <ul class="navbar-nav main-menu ml-auto">
                                    <li><a href="/" class="active">Home</a></li>
                                    <li class="menu_has_children"><a href="/tournaments">Tournaments</a>
                                        <ul class="sub-menu">
                                            <li><a href="/tournaments">Tournaments</a></li>
                                            @auth()
                                            <li><a href="/dashboard">Host Tournaments</a></li>
                                            @else
                                            <li><a href="/login">Host Tournaments</a></li>
                                            @endauth
                                        </ul>
                                    </li>
                                    <li><a href="#">Players</a></li>
                                    <li><a href="#">About</a></li>
                                    <li><a href="">Contact</a></li>
                                </ul>
                            </div>
                        </nav>
                        <div class="right-area header-action d-flex align-items-center">
                            <div class="search-icon">
                                <a href="#"><img src="http://127.0.0.1:8000/images/search_btn.png" alt="icon"></a>
                            </div>
                            @auth()
                            <span role="button" class="text-decoration-none ml-5" id="profile">
                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="#fff" class="bi bi-person-circle" viewBox="0 0 16 16">
                                    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                                    <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                                  </svg>
                                </span>
                            @else
                            <a href="/login" class="login-btn">Login</a>
                            <a href="/register" class="cmn-btn">Join Now!</a>
                            @endauth
                        </div>
                    </div>
                </div>
                <!-- section side menu -->
                <section id="side-menu" class="d-block">
                    <div class="profile-side-menu mt-2 mr-2" id="side-menu">
                        <div class="cancel-button mr-2 mt-2 d-flex justify-content-end">
                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="rgb(209,49,15)"
                                class="bi bi-x-square-fill" viewBox="0 0 16 16">
                                <path
                                    d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm3.354 4.646L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 1 1 .708-.708z" />
                            </svg>
                        </div>
                        <div class="menu-list">
                            <div class="user-profile d-flex mt-3">
                                <div class="user-image d-flex justify-content-start ml-3">
                                    <img src="images/profile-logo.png" alt="user-avatar" class="rounded-circle">
                                </div>
                                <div class="user-name ml-3 mt-2">
                                    <p class="text-white mb-0">User Name</p>
                                    <a href="/myprofile" class="text-decoration-none d-block view-profile">View your profile</a>
                                </div>
                            </div>
                            <ul class="navbar-nav d-flex justify-content-center mt-5">
                                <div class="row d-flex justify-content-center menu-row">
                                    <div class="col-12 col-sm-6 col-lg-6 d-flex justify-content-center mb-4">
                                        <div class="li-card text-center rounded py-3">
                                            <li class="nav-item text-uppercase active">
                                                <a class="nav-link home" href="#">Chat</a>
                                            </li>
                                        </div>

                                    </div>
                                    <div class="col-12 col-sm-6 col-lg-6 d-flex justify-content-center mb-4">
                                        <div class="li-card text-center rounded py-3">
                                            <li class="nav-item text-uppercase">
                                                <a class="nav-link menu" href="#">Tournaments</a>
                                            </li>
                                        </div>

                                    </div>
                                    <div class="col-12 col-sm-6 col-lg-6 d-flex justify-content-center mb-4">
                                        <div class="li-card text-center rounded py-3">
                                            <li class="nav-item text-uppercase active">
                                                <a class="nav-link home" href="#">Results</a>
                                            </li>
                                        </div>

                                    </div>
                                    <div class="col-12 col-sm-6 col-lg-6 d-flex justify-content-center mb-4">
                                        <div class="li-card text-center rounded py-3">
                                            <li class="nav-item text-uppercase">
                                                <a class="nav-link menu" href="#">Host</a>
                                            </li>
                                        </div>

                                    </div>
                                    <div class="col-12 col-sm-6 col-lg-6 d-flex justify-content-center mb-4">
                                        <div class="li-card text-center rounded py-3">
                                            <li class="nav-item text-uppercase active">
                                                <a class="nav-link home" href="#">Home</a>
                                            </li>
                                        </div>

                                    </div>
                                    <div class="col-12 col-sm-6 col-lg-6 d-flex justify-content-center mb-4">
                                        <div class="li-card text-center rounded py-3">
                                            <li class="nav-item text-uppercase">
                                                <a class="nav-link menu" href="#">Teams</a>
                                            </li>
                                        </div>

                                    </div>

                                </div>


                            </ul>
                            <ul class="ul-end mx-3 py-3">
                                <li class="nav-item text-uppercase ml-2">
                                    <form class="inline" method="POST" action="/logout">
                                        @csrf
                                        <button type="submit" class="text-white">Logout</button>
                                    </form>
                                </li>
                            </ul>
                        </div>
                    </div>
                </section>
                <!-- section side menu -->
            </div>
        </header>
        <!-- header-section end -->
        @yield('page-name')
        <!-- footer-section start -->
        <footer id="footer-section">
            <div class="overlay">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="footer-top">
                                <div class="row justify-content-center">
                                    <div class="col-lg-6 col-md-8">
                                        <div class="top-area text-center">
                                            <h3>Subscribe to Our Newsletter</h3>
                                            <p>Receive news, stay updated and special offers</p>
                                        </div>
                                        <form action="#">
                                            <div class="subscribe d-flex">
                                                <input type="email" placeholder="Your Email Address">
                                                <button class="cmn-btn">Subscribe</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-mid pt-120">
                <div class="container">
                    <div class="row d-flex">
                        <div class="col-lg-8 col-md-8 d-flex justify-content-md-between justify-content-center align-items-center cus-grid">
                            <div class="logo-section">
                                <a class="site-logo site-title" href="index.html">Logo</a>
                            </div>
                            <ul class="menu-side d-flex align-items-center">
                                <li><a href="index.html" class="active">Home</a></li>
                                <li><a href="about-us.html">About Us</a></li>
                                <li><a href="contact.html">Contact</a></li>
                            </ul>
                        </div>
                        <div class="col-lg-4 col-md-4 d-flex align-items-center justify-content-center justify-content-md-end">
                            <div class="right-area">
                                <ul class="d-flex">
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="container">
                    <div class="main-content">
                        <div class="row d-flex align-items-center justify-content-center">
                            <div class="col-lg-12 col-md-6">
                                <div class="left-area text-center">
                                    <p>Copyright © 2021. All Rights Reserved By
                                        <a href="#">ESports Nepal</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    <!-- footer-section end -->
    <script>
        let timers = document.querySelectorAll(".countdown-timer");
        for (let i = 0; i < timers.length; i++) {
            let x = setInterval(function() {
                let countDownDate = new Date(timers[i].getAttribute('data-closing-time')).getTime();
                let now = new Date().getTime();
                let distance = countDownDate - now;
                let days = Math.floor(distance / (1000 * 60 * 60 * 24));
                let hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                let minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                let seconds = Math.floor((distance % (1000 * 60)) / 1000);
                timers[i].innerHTML = days + "d " + hours + "h " + minutes + "m " + seconds + "s ";
                if (distance < 0) {
                    clearInterval(x);
                    timers[i].innerHTML = "CLOSED";
                    timers[i].closest('.single-item').style.display = "none";
                }
            }, 1000);
        }

    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js"></script>
    <script src="http://127.0.0.1:8000/js/jquery-3.5.1.min.js"></script>
    <script src="http://127.0.0.1:8000/js/profiletoggle.js"></script>
    <script src="http://127.0.0.1:8000/js/bootstrap.min.js"></script>
    <script src="http://127.0.0.1:8000/js/slick.js"></script>
    <script src="http://127.0.0.1:8000/js/jquery.nice-select.min.js"></script>
    <script src="http://127.0.0.1:8000/js/fontawesome.js"></script>
    <script src="http://127.0.0.1:8000/js/countdown.jquery.js"></script>
    <script src="http://127.0.0.1:8000/js/jquery.counterup.min.js"></script>
    <script src="http://127.0.0.1:8000/js/jquery.waypoints.min.js"></script>
    <script src="http://127.0.0.1:8000/js/wow.js"></script>
    <script src="http://127.0.0.1:8000/js/main.js"></script>
</body>
</html>
