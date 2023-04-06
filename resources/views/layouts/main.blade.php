<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    {{-- <link rel="shortcut icon" href="http://127.0.0.1:8000/images/fav.png" type="image/x-icon"> --}}
    <link rel="stylesheet" href="http://127.0.0.1:8000/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://127.0.0.1:8000/css/slick.css">
    <link rel="stylesheet" href="http://127.0.0.1:8000/css/tablecss">
    <link rel="stylesheet" href="http://127.0.0.1:8000/css/magnific-popup.css">
    <link rel="stylesheet" href="http://127.0.0.1:8000/css/nice-select.css">
    <link rel="stylesheet" href="http://127.0.0.1:8000/css/animate.css">
    <link rel="stylesheet" href="http://127.0.0.1:8000/css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer">
</head>

<body>
    <!-- start preloader -->
    <div class="preloader" id="preloader"></div>
    {{-- Flash message --}}
    @if (session()->has('message'))
        <div class="flash-message text-center">
           <h5> {{ session('message') }}</h5>
        </div>
    @endif
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
                    <button class="navbar-toggler ml-auto collapsed" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
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
                                <li><a href="#">About</a></li>
                                <li><a href="#">Contact</a></li>
                                <form action="/logout" method="post">
                                    @csrf
                                    <li><button type="submit" class="btn logout-mobile text-white">Logout</button></li>
                                </form>
                            </ul>
                        </div>
                    </nav>
                    <div class="right-area header-action d-flex align-items-center">
                        <div class="search-icon">
                            <a href="#"><img src="http://127.0.0.1:8000/images/search_btn.png" alt="icon"></a>
                        </div>
                        @auth()
                            <div class="end-elements profile d-flex justify-content-between align-items-center">
                                <a href="/myprofile" class="mr-3">
                                    <span role="button" class="text-decoration-none ml-5" id="profile">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="#fff"
                                            class="bi bi-person-circle" viewBox="0 0 16 16">
                                            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                                            <path fill-rule="evenodd"
                                                d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
                                        </svg>
                                    </span>
                                </a>
                                <form action="/logout" method="post">
                                    @csrf
                                    <button type="submit" class="btn text-white logout"><i
                                            class="fa-solid fa-arrow-right-from-bracket"></i></button>
                                </form>
                            </div>
                        @else
                            <a href="/login" class="login-btn">Login</a>
                            <a href="/register" class="btn text-white cmn-btn">Join Now!</a>
                        @endauth
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header-section end -->
    @yield('page-name')
    <!-- footer-section start -->
    <footer id="footer-section">
        <div class="footer-mid pt-120">
            <div class="container">
                <div class="row d-flex">
                    <div
                        class="col-lg-8 col-md-8 d-flex justify-content-md-between justify-content-center align-items-center cus-grid">
                        <div class="logo-section">
                            <a class="site-logo site-title" href="/">Logo</a>
                        </div>
                        <ul class="menu-side d-flex align-items-center">
                            <li><a href="/" class="active">Home</a></li>
                            <li><a href="about-us.html">About Us</a></li>
                            <li><a href="contact.html">Contact</a></li>
                        </ul>
                    </div>
                    <div
                        class="col-lg-4 col-md-4 d-flex align-items-center justify-content-center justify-content-md-end">
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
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script>
        //for dropdown
    function showDropdown() {
        var dropdown = document.querySelector('.dropdown');
        dropdown.classList.toggle('show');
    }
    </script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js"></script>
    <script src="http://127.0.0.1:8000/js/jquery-3.5.1.min.js"></script>
    <script src="http://127.0.0.1:8000/js/timer.js"></script>
    <script src="http://127.0.0.1:8000/js/select_img.js"></script>
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
