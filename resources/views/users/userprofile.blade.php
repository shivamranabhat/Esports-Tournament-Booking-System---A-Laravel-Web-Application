@extends('layouts.main')
@section('titile', 'My Profile')
@section('page-name')
    <!-- banner-section start -->
    <section id="banner-section" class="inner-banner profile">
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
                            <h1>Profile</h1>
                            <div class="breadcrumb-area">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb d-flex justify-content-center">
                                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                                        <li class="breadcrumb-item active mb-3" aria-current="page">My Profile</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="heading-area">
                <div class="row justify-content-between">
                    <div class="col-10 col-sm-10 col-md-10">
                        <div class="profile-area d-flex align-items-center">
                            <div class="photo">
                                <img src="{{ asset('storage/' . $profiles->image) }}" alt="Image">
                            </div>
                            <div class="name-area">
                                @auth()
                                    <h4>{{ $profiles->full_name }}</h4>
                                    <p>Level: {{ $profiles->level }}</p>
                                    <p>Game ID: {{ $profiles->uid }} </p>
                                @endauth
                            </div>
                        </div>
                    </div>
                    <div class="col-2 col-sm-2 col-md-2 d-flex justify-content-center justify-content-md-end">
                        <div class="dropdown">
                            <button class="dots text-white" onclick="showDropdown()">...</button>
                            <div class="dropdown-content p-2" id="dropdown-content">
                                <a href="/user_dashboard" class="text-white d-flex justify-content-between align-items-center"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#fff"
                                        class="bi bi-grid-fill mb-1 mr-1" viewBox="0 0 16 16">
                                        <path
                                            d="M1 2.5A1.5 1.5 0 0 1 2.5 1h3A1.5 1.5 0 0 1 7 2.5v3A1.5 1.5 0 0 1 5.5 7h-3A1.5 1.5 0 0 1 1 5.5v-3zm8 0A1.5 1.5 0 0 1 10.5 1h3A1.5 1.5 0 0 1 15 2.5v3A1.5 1.5 0 0 1 13.5 7h-3A1.5 1.5 0 0 1 9 5.5v-3zm-8 8A1.5 1.5 0 0 1 2.5 9h3A1.5 1.5 0 0 1 7 10.5v3A1.5 1.5 0 0 1 5.5 15h-3A1.5 1.5 0 0 1 1 13.5v-3zm8 0A1.5 1.5 0 0 1 10.5 9h3a1.5 1.5 0 0 1 1.5 1.5v3a1.5 1.5 0 0 1-1.5 1.5h-3A1.5 1.5 0 0 1 9 13.5v-3z" />
                                    </svg> Dashboard</a>
                                <a href="/profile/edit/{{ $profiles->id }}"
                                    class="text-white d-flex justify-content-between align-items-center"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#fff"
                                        class="bi bi-pencil-square mb-1 mr-1" viewBox="0 0 16 16">
                                        <path
                                            d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                        <path fill-rule="evenodd"
                                            d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                                    </svg> Edit profile</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- banner-section end -->
    <!-- Trophies Content Start -->
    <section id="all-trophies" class="pb-120">
        <div class="container">
            <div class="tab-content">
                <div class="tab-pane fade show active" role="tabpanel" aria-labelledby="overview-tab">
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="single-trophies d-flex align-items-center">
                                <div class="left d-flex align-items-center justify-content-center">
                                    <a href="mailto:{{ $profiles->email }}"><img
                                            src="http://127.0.0.1:8000/images/email.png" alt="image"></a>
                                </div>
                                <div class="right">
                                    <p class="text-sm">Email</p>
                                    <h6>{{ $profiles->email }}</h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="single-trophies d-flex align-items-center">
                                <div class="left d-flex align-items-center justify-content-center">
                                    <a href="tel:{{ $profiles->phone }}"><img src="http://127.0.0.1:8000/images/phone.png"
                                            alt="image"></a>
                                </div>
                                <div class="right">
                                    <p class="text-sm">Phone</p>
                                    <h6>{{ $profiles->phone }}</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    @if (!isset($teams))
                        <div class="row">
                            <div class="col-md-12">
                                <div class="single-trophies d-flex align-items-center">
                                    <div class="left d-flex align-items-center justify-content-center">
                                        <img src="{{ asset('storage/' . $games->image) }}" class="rounded-circle"
                                            alt="image">
                                    </div>
                                    <div class="right">
                                        <p class="text-sm">Game</p>
                                        <h6>{{ $games->name }}</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @else
                        <div class="row">
                            <div class="col-sm-6 col-lg-6 col-md-6">
                                <div class="single-trophies d-flex align-items-center">
                                    <div class="left d-flex align-items-center justify-content-center">
                                        <img src="{{ asset('storage/' . $games->image) }}" class="rounded-circle"
                                            alt="image">
                                    </div>
                                    <div class="right">
                                        <p class="text-sm">Game</p>
                                        <h6>{{ $games->name }}</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-6 col-md-6">
                                <div class="single-trophies d-flex align-items-center">
                                    <div class="left d-flex align-items-center justify-content-center">
                                        @if (!isset($teams))
                                            <img src="http://127.0.0.1:8000/images/organizerimg.png" alt="image">
                                        @else
                                            <img src="{{ asset('storage/' . $teams->logo) }}" alt="image">
                                        @endif
                                    </div>
                                    <div class="right">
                                        <p class="text-sm">Team Name</p>
                                        @if (!isset($teams))
                                            <h6>Not in team</h6>
                                        @else
                                            <h6>{{ $teams->name }}</h6>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-3 col-md-6">
                                <div class="single-trophies d-flex align-items-center">
                                    <div class="left d-flex align-items-center justify-content-center">
                                        <img src="http://127.0.0.1:8000/images/num_1.png" alt="image">
                                    </div>
                                    <div class="right">
                                        <p class="text-sm">Members</p>
                                        <h6>{{ $teams->player_1 }}</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="single-trophies d-flex align-items-center">
                                    <div class="left d-flex align-items-center justify-content-center">
                                        <img src="http://127.0.0.1:8000/images/num_2.png" alt="image">
                                    </div>
                                    <div class="right">
                                        <p class="text-sm">Members</p>
                                        <h6>{{ $teams->player_2 }}</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="single-trophies d-flex align-items-center">
                                    <div class="left d-flex align-items-center justify-content-center">
                                        <img src="http://127.0.0.1:8000/images/num_3.png" alt="image">
                                    </div>
                                    <div class="right">
                                        <p class="text-sm">Members</p>
                                        <h6>{{ $teams->player_3 }}</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="single-trophies d-flex align-items-center">
                                    <div class="left d-flex align-items-center justify-content-center">
                                        <img src="http://127.0.0.1:8000/images/num_4.png" alt="image">
                                    </div>
                                    <div class="right">
                                        <p class="text-sm">Members</p>
                                        <h6>{{ $teams->player_4 }}</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                    <div class="row">
                        <div class="col-lg-3 col-md-6">
                            <div class="single-trophies d-flex align-items-center">
                                <div class="left d-flex align-items-center justify-content-center">
                                    <img src="images/trophies-icon-1.png" alt="image">
                                </div>
                                <div class="right">
                                    <p class="text-sm">1st Place</p>
                                    <h4>0</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="single-trophies d-flex align-items-center">
                                <div class="left d-flex align-items-center justify-content-center">
                                    <img src="images/trophies-icon-2.png" alt="image">
                                </div>
                                <div class="right">
                                    <p class="text-sm">2nd Place</p>
                                    <h4>6</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="single-trophies d-flex align-items-center">
                                <div class="left d-flex align-items-center justify-content-center">
                                    <img src="images/trophies-icon-3.png" alt="image">
                                </div>
                                <div class="right">
                                    <p class="text-sm">3rd Place</p>
                                    <h4>2</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="single-trophies d-flex align-items-center">
                                <div class="left d-flex align-items-center justify-content-center">
                                    <img src="images/trophies-icon-4.png" alt="image">
                                </div>
                                <div class="right">
                                    <p class="text-sm">4th Place</p>
                                    <h4>5</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="statistics-area">
                        <div class="row">
                            <div class="col-lg-9">
                                <div class="total-area">
                                    <div class="head-area d-flex justify-content-between">
                                        <div class="left">
                                            <h5>Game Statistics</h5>
                                            <p class="text-sm">Player's game specific statistics</p>
                                        </div>
                                    </div>
                                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" id="fortnite-tab" data-toggle="tab"
                                                href="#fortnite" role="tab" aria-controls="fortnite"
                                                aria-selected="true">fortnite</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="dota-tab" data-toggle="tab" href="#dota"
                                                role="tab" aria-controls="dota" aria-selected="false">Others</a>
                                        </li>
                                    </ul>
                                    <div class="tab-content" id="myTabContents">
                                        <div class="tab-pane fade show active" id="fortnite" role="tabpanel"
                                            aria-labelledby="fortnite-tab">
                                            <div class="row">
                                                <div class="col-lg-3 col-md-6">
                                                    <div class="single-item text-center">
                                                        <img src="images/statistics-icon-1.png" alt="image">
                                                        <p>Tournaments Entered</p>
                                                        <h4>10</h4>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-md-6">
                                                    <div class="single-item text-center">
                                                        <img src="images/statistics-icon-2.png" alt="image">
                                                        <p>Kills Per Game (Average)</p>
                                                        <h4>20</h4>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-md-6">
                                                    <div class="single-item text-center">
                                                        <img src="images/statistics-icon-3.png" alt="image">
                                                        <p>Games Played League of Legends</p>
                                                        <h4>5</h4>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-md-6">
                                                    <div class="single-item text-center">
                                                        <img src="images/statistics-icon-4.png" alt="image">
                                                        <p>Earnings (Per tournament)</p>
                                                        <h4>0</h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="dota" role="tabpanel"
                                            aria-labelledby="dota-tab">
                                            <div class="others">
                                                <h5 class="text-center">No Data Found</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="col-lg-3">
                                <div class="sidebar-area">
                                    <div class="title-area">
                                        <h5>My Statistics</h5>
                                        <p class="text-sm">My Current progress</p>
                                    </div>
                                    <ul>
                                        <li>
                                            <span><img src="images/my-statistics-icon-1.png" alt="image">1st
                                                Rank</span>
                                            <span>313</span>
                                        </li>
                                        <li>
                                            <span><img src="images/my-statistics-icon-2.png" alt="image">Tournament
                                            </span>
                                            <span>1193</span>
                                        </li>
                                    </ul>
                                </div>
                                <div class="sidebar-area">
                                    <div class="title-area">
                                        <h5>Earnings</h5>
                                        <p class="text-sm">My current earnings</p>
                                    </div>
                                    <div class="single-area d-flex align-items-center">
                                        <div class="img-area mid d-flex align-items-center justify-content-center">
                                            <img src="images/earnings-icon-2.png" alt="image">
                                        </div>
                                        <div class="right-area">
                                            <span><img src="images/coin-icon.png" alt="image">Rs. 11000</span>
                                            <p class="text-sm">Total Spend</p>
                                        </div>
                                    </div>
                                    <div class="single-area d-flex align-items-center">
                                        <div class="img-area last d-flex align-items-center justify-content-center">
                                            <img src="images/earnings-icon-3.png" alt="image">
                                        </div>
                                        <div class="right-area">
                                            <span><img src="images/coin-icon.png" alt="image">Rs.27300</span>
                                            <p class="text-sm">Total Earned</p>
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
    </section>
    <!-- Trophies Content End -->
@endsection
