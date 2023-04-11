  <!-- header-section start -->
  <header id="header-section">
    <div class="overlay">
        <div class="container">
            <div class="row d-flex header-area">
                <div class="logo-section flex-grow-1 d-flex align-items-center">
                    <a href="/" class="brand">
                        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 24 24"><path fill="currentColor" d="M2 5.27L3.28 4L20 20.72L18.73 22l-6-6H7.97L5 19c-.33.3-.77.5-1.25.5A1.75 1.75 0 0 1 2 17.75v-.25l1-7.38c.1-1.03.53-1.95 1.19-2.66L2 5.27M5 10v1h2v2h1v-1.73L6.73 10H5m11.5-4c2.36 0 4.29 1.81 4.5 4.12l1 7.38v.25c0 .66-.36 1.25-.9 1.53L7.82 6h8.68m0 2a.75.75 0 0 0-.75.75a.75.75 0 0 0 .75.75a.75.75 0 0 0 .75-.75a.75.75 0 0 0-.75-.75m-1.75 1.75a.75.75 0 0 0-.75.75a.75.75 0 0 0 .75.75a.75.75 0 0 0 .75-.75a.75.75 0 0 0-.75-.75m3.5 0a.75.75 0 0 0-.75.75a.75.75 0 0 0 .75.75a.75.75 0 0 0 .75-.75a.75.75 0 0 0-.75-.75M16.5 11.5a.75.75 0 0 0-.75.75a.75.75 0 0 0 .75.75a.75.75 0 0 0 .75-.75a.75.75 0 0 0-.75-.75Z"/></svg>
                        <span class="text logo">ScoreSensi</span>
                    </a>
                </div>
                <button class="navbar-toggler ml-auto collapsed" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fas fa-bars"></i>
                </button>
                <nav class="navbar navbar-expand-lg p-0">
                    <div class="navbar-collapse collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav main-menu ml-auto">
                            <li><a href="/" class="{{(request()->segment(1)=='')?'active':''}}">Home</a></li>
                            <li class="menu_has_children"><a href="/tournaments" class="{{(request()->segment(1)=='tournaments')?'active':''}}">Tournaments</a>
                                <ul class="sub-menu">
                                    <li><a href="/tournaments">Tournaments</a></li>
                                    @auth()
                                        <li><a href="/dashboard">Host Tournaments</a></li>
                                    @else
                                        <li><a href="/login">Host Tournaments</a></li>
                                    @endauth
                                </ul>
                            </li>
                            <li><a href="/about" class="{{(request()->segment(1)=='about')?'active':''}}">About</a></li>
                            <li><a href="/contact" class="{{(request()->segment(1)=='contact')?'active':''}}">Contact</a></li>
                            <form action="/logout" method="post">
                                @csrf
                                <li><button type="submit" class="btn logout-mobile text-white">Logout</button></li>
                            </form>
                        </ul>
                    </div>
                </nav>
                <div class="right-area header-action d-flex align-items-center">
                    <div class="search-icon">
                       <a href="#" class="btn">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#fff" class="bi bi-bell-fill" viewBox="0 0 16 16">
                                <path d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2zm.995-14.901a1 1 0 1 0-1.99 0A5.002 5.002 0 0 0 3 6c0 1.098-.5 6-2 7h14c-1.5-1-2-5.902-2-7 0-2.42-1.72-4.44-4.005-4.901z"/>
                            </svg>
                       </a>
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
