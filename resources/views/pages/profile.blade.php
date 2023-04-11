@extends('layouts.main')
@section('title','Profile')
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
                            <h1>Gamers Profile</h1>
                            <div class="breadcrumb-area">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb d-flex justify-content-center">
                                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                                        <li class="breadcrumb-item"><a href="#">Gamers</a></li>
                                        <li class="breadcrumb-item active mb-3" aria-current="page">Profile</li>
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
                    <div class="col-md-6">
                        <div class="profile-area d-flex align-items-center">
                            <div class="photo">
                                <img src="images/profile-logo.png" alt="Image">
                            </div>
                            <div class="name-area">
                                <h4>Username</h4>
                                <p>Region: Nepal</p>
                                <p>Age: 20</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 d-flex justify-content-center justify-content-md-end">
                        <div class="right d-flex align-items-center">
                            <a href="#" class="cmn-btn">Message</a>
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
                                            <a class="nav-link" id="dota-tab" data-toggle="tab" href="#dota" role="tab"
                                                aria-controls="dota" aria-selected="false">Others</a>
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
                                        <div class="tab-pane fade" id="dota" role="tabpanel" aria-labelledby="dota-tab">
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
                                            <span><img src="images/my-statistics-icon-1.png" alt="image">1st Rank</span>
                                            <span>313</span>
                                        </li>
                                        <li>
                                            <span><img src="images/my-statistics-icon-2.png" alt="image">Tournament
                                                Played</span>
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
