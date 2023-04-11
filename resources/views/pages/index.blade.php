@extends('layouts.main')
@section('title', 'Home')
@section('page-name')
    <!-- banner-section start -->
    <section id="banner-section">
        <div class="banner-content d-flex align-items-center">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="main-content">
                            <div class="top-area justify-content-center text-center">
                                <h3>Play Unlimited</h3>
                                <h1>Tournaments</h1>
                                <p>Compete in Free and Paid entry Tournaments. Transform your
                                    games to real money eSports</p>
                                <div class="btn-play d-flex justify-content-center align-items-center">
                                    <a href="/tournament" class="btn text-white cmn-btn">Get Started</a>
                                    <a href="../watch-2.html?v=MJ0zpsWQ_XM" class="mfp-iframe popupvideo">
                                        <img src="http://127.0.0.1:8000/images/play-icon.png" alt="play">
                                    </a>
                                </div>
                            </div>
                            <div class="row justify-content-center">
                                <div class="col-lg-12">
                                    <div class="row justify-content-center">
                                        <div class="col-lg-6">
                                            <div class="bottom-area text-center">
                                                <img src="http://127.0.0.1:8000/images/versus.png" alt="banner-vs">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="ani-illu">
                    <img class="left-1 wow fadeInUp" src="http://127.0.0.1:8000/images/left-banner.png" alt="image">
                    <img class="right-2 wow fadeInUp" src="http://127.0.0.1:8000/images/right-banner.png" alt="image">
                </div>
            </div>
        </div>
    </section>
    <!-- banner-section end -->

    <!-- Available Game In start -->
    <section id="available-game-section">
        <div class="overlay pb-120">
            <div class="container wow fadeInUp">
                <div class="main-container mt-5">
                    <div class="row justify-content-between">
                        <div class="col-lg-10">
                            <div class="section-header">
                                <h2 class="title">Available Games</h2>
                                <p>We are constantly adding new games</p>
                            </div>
                        </div>
                    </div>
                    <div class="available-game-carousel">
                        @foreach ($games as $game)
                            <div class="single-item">
                                <a href="{{ $game->id }}"><img src="{{ asset('storage/' . $game->image) }}"
                                        alt="image" class="rounded"></a>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Available Game In end -->
    <!-- Browse Tournaments start -->
    <section id="tournaments-section">
        <div class="overlay pt-120 pb-120">
            <div class="container wow fadeInUp">
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-8 text-center">
                        <div class="section-header">
                            <h2 class="title">Browse Tournaments</h2>
                            <p>Find the perfect tournaments for you. Head to head matches
                                where you pick the game, rules and prize.</p>
                        </div>
                    </div>
                </div>
                <div class="row mb-40 mp-none">
                    <div class="col-lg-6 col-md-6">
                        <div class="single-input">
                            <span>Search</span>
                            <input type="text" placeholder="Search">
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3">
                        <div class="single-input">
                            <span>Team Size</span>
                            <select>
                                <option>Select Team Size</option>
                                <option value="1">Solo</option>
                                <option value="2">Duo</option>
                                <option value="3">Squad</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3">
                        <div class="single-input">
                            <span>Entry Fee</span>
                            <select>
                                <option>Select Entry Fee</option>
                                <option value="1">Free</option>
                                <option value="2">100-1000</option>
                                <option value="3">1000-10000</option>
                            </select>
                        </div>
                    </div>
                </div>
                @foreach ($tournaments as $tournament)
                    <div class="single-item">
                        <div class="row">
                            <div class="col-lg-3 col-md-3 d-flex align-items-center">
                                <img class="top-img w-100" src="{{ asset('storage/' . $tournament->image->image) }}"
                                    alt="image">
                            </div>
                            <div class="col-lg-6 col-md-9 d-flex align-items-center">
                                <div class="mid-area">
                                    <h4>{{ $tournament->name }}</h4>
                                    <div class="title-bottom d-flex">
                                        <div class="time-area bg">
                                            <img src="images/waitng-icon.png" alt="image">
                                            <span class="countdown-timer"
                                                data-closing-time="{{ $tournament->closing_time }}"></span></p>
                                        </div>
                                        <div class="date-area bg">
                                            <span class="date">{{ $tournament->closing_time }}</span>
                                        </div>
                                    </div>
                                    <div class="single-box d-flex">
                                        <div class="box-item">
                                            <span class="head">ENTRY Fees</span>
                                            <span class="sub">Rs.{{ $tournament->fees }}</span>
                                        </div>
                                        <div class="box-item">
                                            <span class="head">Team Size</span>
                                            <span class="sub">{{ $tournament->type }} VS {{ $tournament->type }}</span>
                                        </div>
                                        <div class="box-item">
                                            <span class="head">Max Teams</span>
                                            <span class="sub">{{ $tournament->team_size }}</span>
                                        </div>
                                        <div class="box-item">
                                            <span class="head">Enrolled</span>
                                            <span class="sub">11</span>
                                        </div>
                                        <div class="box-item">
                                            <span class="head">Game</span>
                                            <span class="sub">{{ $tournament->game->name }}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 d-flex align-items-center">
                                <div class="prize-area text-center">
                                    <div class="contain-area">
                                        <span class="prize"><img src="images/price-coin.png" alt="image">prize</span>
                                        <h4 class="dollar">Rs. {{ $tournament->prize_pool }}</h4>
                                        <a href="/details/{{$tournament->id}}" class="btn text-white cmn-btn">View Tournament</a>
                                        <p>Top 3 Players Win a Cash Prize</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                <div class="pagination d-flex justify-content-end mt-5">
                    <nav aria-label="Page navigation">
                        <ul class="pagination">
                            <li class="page-item">
                                {{ $tournaments->links('vendor.pagination.simple-bootstrap-4') }}
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>

        </div>
    </section>
    <!-- Browse Tournaments end -->
    <!-- Features In start -->
    <section id="features-section">
        <div class="overlay pt-120 pb-120">
            <div class="container wow fadeInUp">
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <div class="section-header text-center">
                            <h2 class="title">Our Features</h2>
                            <p>The biggest esports tournaments anytime, anywhere</p>
                        </div>
                    </div>
                </div>
                <div class="row pm-none">
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-item text-center">
                            <div class="img-area">
                                <img src="images/features-icon-1.png" alt="image">
                            </div>
                            <h5>Premium Support</h5>
                            <p>Our dedicated admins are there to answer in no time, avg response time is 5mins.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-item text-center">
                            <div class="img-area">
                                <img src="images/features-icon-2.png" alt="image">
                            </div>
                            <h5>Instant Deposits</h5>
                            <p>Make a deposit and receive your funds instantly to your account.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-item text-center">
                            <div class="img-area">
                                <img src="images/features-icon-3.png" alt="image">
                            </div>
                            <h5>Climb the Leaderboards</h5>
                            <p>Compete in monthly leaderboard challenges for real cash and prizes.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-item text-center">
                            <div class="img-area">
                                <img src="images/features-icon-4.png" alt="image">
                            </div>
                            <h5>Make 2x your $$</h5>
                            <p>Our dedicated admins are there to answer in no time, avg response time is 5mins.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-item text-center">
                            <div class="img-area">
                                <img src="images/features-icon-5.png" alt="image">
                            </div>
                            <h5>Make up to 10X your $$</h5>
                            <p>Make up to 10X your money on multiplayer tourneys. With paid and free entry.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-item text-center">
                            <div class="img-area">
                                <img src="images/features-icon-6.png" alt="image">
                            </div>
                            <h5>Play at your Level</h5>
                            <p>With ranked divisions we help you find the right level to compete.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Features In end -->
    <!-- Call Action In start -->
    <x-cta>
    </x-cta>
    <!-- Call Action In end -->
@endsection
