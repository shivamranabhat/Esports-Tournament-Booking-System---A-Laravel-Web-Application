@extends('layouts.main')
@section('title','Tournaments')
@section('page-name')
    <!-- banner-section start -->
    <section id="banner-section" class="inner-banner">
        <div class="ani-img">
            <img class="img-1" src="images/banner-circle-1.png" alt="icon">
            <img class="img-2" src="images/banner-circle-2.png" alt="icon">
            <img class="img-3" src="images/banner-circle-2.png" alt="icon">
        </div>
        <div class="banner-content d-flex align-items-center">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <div class="main-content">
                            <h1>Tournaments</h1>
                            <div class="breadcrumb-area">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb d-flex justify-content-center">
                                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                        <li class="breadcrumb-item active mb-3" aria-current="page">Tournaments</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </section>
    <!-- banner-section end -->
   <!-- Browse Tournaments start -->
    <section id="tournaments-section">
        <div class="overlay pt-20 pb-120">
            <div class="container wow fadeInUp">
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-8 text-center">
                        <div class="section-header">
                            <h2 class="title mt-5">Browse Tournaments</h2>
                            <p>Find the perfect tournaments for you. Head to head matches
                                where you pick the game, rules and prize.</p>
                        </div>
                    </div>
                </div>
                <div class="row mb-40 mp-none">
                    <div class="col-lg-3 col-md-3">
                        <div class="single-input">
                            <span>Status</span>
                            <select>
                                <option>Status</option>
                                <option value="1">Upcoming 1</option>
                                <option value="2">Upcoming 2</option>
                                <option value="3">Upcoming 3</option>
                                <option value="5">Upcoming 5</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3">
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
                                <img class="top-img w-100" src="{{ asset('storage/'. $tournament->image->image) }}" alt="image">
                            </div>
                            <div class="col-lg-6 col-md-9 d-flex align-items-center">
                                <div class="mid-area">
                                    <h4>{{$tournament->name}}</h4>
                                    <div class="title-bottom d-flex">
                                        <div class="time-area bg">
                                            <img src="images/waitng-icon.png" alt="image">
                                            <span class="countdown-timer" data-closing-time="{{ $tournament->closing_time }}"></span></p>
                                        </div>
                                        <div class="date-area bg">
                                            <span class="date">{{$tournament->closing_time}}</span>
                                        </div>
                                    </div>
                                    <div class="single-box d-flex">
                                        <div class="box-item">
                                            <span class="head">ENTRY Fees</span>
                                            <span class="sub">Rs.{{$tournament->fees}}</span>
                                        </div>
                                        <div class="box-item">
                                            <span class="head">Team Size</span>
                                            <span class="sub">{{$tournament->type}} VS {{$tournament->type}}</span>
                                        </div>
                                        <div class="box-item">
                                            <span class="head">Max Teams</span>
                                            <span class="sub">{{$tournament->team_size}}</span>
                                        </div>
                                        <div class="box-item">
                                            <span class="head">Enrolled</span>
                                            @if ($tournament->bookings->where('tournament_id', $tournament->id)->count() > 0)
                                            <span class="sub">{{ $tournament->bookings->where('tournament_id', $tournament->id)->count() }}</span>
                                            @else
                                            <span class="sub">0</span>
                                            @endif
                                        </div>
                                        <div class="box-item">
                                            <span class="head">Game</span>
                                            <span class="sub">{{$tournament->game->name}}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 d-flex align-items-center">
                                <div class="prize-area text-center">
                                    <div class="contain-area">
                                        <span class="prize"><img src="images/price-coin.png" alt="image">prize</span>
                                        <h4 class="dollar">Rs. {{$tournament->prize_pool}}</h4>
                                        <a href="/details/{{$tournament->id}}" class="cmn-btn">View Tournament</a>
                                        <p>Top 3 Players Win a Cash Prize</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach


            </div>
        </div>
    </section>
    <!-- Browse Tournaments end -->
    <!-- Players of the Week In start -->
    <section id="players-week-section">
        <div class="overlay pt-120 pb-120">
            <div class="container wow fadeInUp">
                <div class="row justify-content-center">
                    <div class="col-lg-7 mb-30">
                        <div class="section-header text-center">
                            <h2 class="title">Players of the Week</h2>
                            <p>We take a look at the best player of the week awarded
                                on Monday for the previous Monday to Sunday</p>
                        </div>
                    </div>
                </div>
                <div class="row mp-none">
                    <div class="col-lg-4 col-md-6">
                        <div class="single-item text-center">
                            <div class="img-area">
                                <div class="img-wrapper">
                                    <img src="http://127.0.0.1:8000/images/player-1.png" alt="image">
                                </div>
                            </div>
                            <a href="profile.html"><h5>Barton Griggs</h5></a>
                            <p class="date">
                                <span class="text-sm earn">1970 XP Earned</span>
                                <span class="text-sm">04/05 - 04/12</span>
                            </p>
                            <p class="text-sm credit">
                                <span class="text-sm"><img src="http://127.0.0.1:8000/images/credit-icon.png" alt="image"> +20 credits</span>
                            </p>
                            <a href="profile.html" class="cmn-btn">View Profile</a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="single-item mid-area text-center">
                            <div class="top-level">
                                <img src="http://127.0.0.1:8000/images/star.png" alt="image">
                            </div>
                            <div class="img-area">
                                <div class="img-wrapper">
                                    <img src="http://127.0.0.1:8000/images/player-2.png" alt="image">
                                </div>
                            </div>
                            <a href="profile.html"><h5>Mervin Trask</h5></a>
                            <p class="date">
                                <span class="text-sm earn">1970 XP Earned</span>
                                <span class="text-sm">04/05 - 04/12</span>
                            </p>
                            <p class="text-sm credit">
                                <span class="text-sm"><img src="http://127.0.0.1:8000/images/credit-icon.png" alt="image"> +20 credits</span>
                            </p>
                            <a href="profile.html" class="cmn-btn">View Profile</a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="single-item text-center">
                            <div class="img-area">
                                <div class="img-wrapper">
                                    <img src="http://127.0.0.1:8000/images/player-3.png" alt="image">
                                </div>
                            </div>
                            <a href="profile.html"><h5>Adria Poulin</h5></a>
                            <p class="date">
                                <span class="text-sm earn">1970 XP Earned</span>
                                <span class="text-sm">04/05 - 04/12</span>
                            </p>
                            <p class="text-sm credit">
                                <span class="text-sm"><img src="http://127.0.0.1:8000/images/credit-icon.png" alt="image"> +20 credits</span>
                            </p>
                            <a href="profile.html" class="cmn-btn">View Profile</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Players of the Week In end -->
    <!-- How Works start -->
    <section id="how-works-section">
        <div class="overlay pt-120">
            <div class="container wow fadeInUp">
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-6 text-center">
                        <div class="section-header">
                            <h2 class="title">How It Works</h2>
                            <p>It's easier than you think. Follow 4 simple easy steps</p>
                        </div>
                    </div>
                </div>
                <div class="row mp-top">
                    <div class="col-lg-3 col-md-3 col-sm-6 d-flex justify-content-center">
                        <div class="single-item">
                            <div class="icon-area">
                                <span>1</span>
                                <img src="http://127.0.0.1:8000/images/how-icon-1.png" alt="image">
                            </div>
                            <div class="text-area">
                                <h5>Signup</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 d-flex justify-content-center obj-rel">
                        <div class="single-item">
                            <div class="icon-area">
                                <span>2</span>
                                <img src="http://127.0.0.1:8000/images/how-icon-2.png" alt="image">
                            </div>
                            <div class="text-area">
                                <h5>Deposit</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 d-flex justify-content-center obj-alt">
                        <div class="single-item">
                            <div class="icon-area">
                                <span>3</span>
                                <img src="http://127.0.0.1:8000/images/how-icon-3.png" alt="image">
                            </div>
                            <div class="text-area">
                                <h5>Compete</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 d-flex justify-content-center obj-rel">
                        <div class="single-item">
                            <div class="icon-area">
                                <span>4</span>
                                <img src="http://127.0.0.1:8000/images/how-icon-4.png" alt="image">
                            </div>
                            <div class="text-area">
                                <h5>Get Paid</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-6 text-center">
                        <a href="registration.html" class="cmn-btn">Join Now!</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- How Works end -->
    <!-- Call to Action In start -->
    <section id="call-to-action">
        <div class="overlay pt-120 pb-120">
            <div class="container">
                <div class="main-content">
                    <div class="row d-sm-flex justify-content-sm-end">
                        <div class="col-lg-4 col-md-1">
                            <img class="left" src="http://127.0.0.1:8000/images/call-to-action-left.png" alt="image">
                        </div>
                        <div class="col-lg-4 col-md-5 col-sm-5 d-flex align-items-center">
                            <div class="section-item">
                                <h4>Invite Friends and Win Rewards.Join ESports Nepal Games today</h4>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6 d-flex justify-content-center justify-content-sm-end align-items-center">
                            <div class="btn-area d-flex justify-content-center justify-content-sm-end align-items-center">
                                <a href="registration.html" class="cmn-btn">Join Now</a>
                            </div>
                            <img src="http://127.0.0.1:8000/images/call-to-action-right.png" alt="image">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Call to Action In end -->
    <!-- Call Action In start -->
    <section id="call-action">
        <div class="overlay pb-120">
            <div class="container wow fadeInUp">
                <div class="row d-flex justify-content-between align-items-center">
                    <div class="col-lg-6 col-md-6">
                        <div class="left-area">
                            <h2 class="title">Build Your Esports Profile</h2>
                            <p>Showcase your achievements, match history and win rate while you build your reputation on ESports Nepal.</p>
                            <a href="registration.html" class="cmn-btn-second">Sign Up Free</a>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-6">
                        <div class="right-area">
                            <img src="http://127.0.0.1:8000/images/profile-info.png" alt="image">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Call Action In end -->
@endsection

