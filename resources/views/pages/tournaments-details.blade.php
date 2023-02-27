@extends('layouts.main')
@section('title','Tournaments')
@section('page-name')
    <!-- banner-section start -->
    <section id="banner-section" class="inner-banner tournaments">
        <div class="ani-img">
            <img class="img-1" src="http://127.0.0.1:8000/images/banner-circle-1.png" alt="icon">
            <img class="img-2" src="http://127.0.0.1:8000/images/banner-circle-2.png" alt="icon">
            <img class="img-3" src="http://127.0.0.1:8000/images/banner-circle-2.png" alt="icon">
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
                                        <li class="breadcrumb-item active" aria-current="page">Tournaments</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="headign-info">
                <div class="top-area">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-4 d-flex justify-content-center">
                            <img src="http://127.0.0.1:8000/images/character_01.png" alt="image">
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 d-flex align-items-center justify-content-sm justify-content-center">
                            <div class="mid-area text-center">
                                <h3>{{$tournaments->name}}</h3>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 zindex">
                            <img src="http://127.0.0.1:8000/images/character_02.png" alt="image">
                        </div>
                    </div>
                </div>
                <div class="bottom-area">
                    <div class="bottom">
                        <div class="row">
                            <div class="col-lg-8 col-md-8  d-grid">
                                <h3>{{$tournaments->name}}</h3>
                                <div class="title-bottom d-flex">
                                    <div class="time-area bg">
                                        <img src="http://127.0.0.1:8000/images/waitng-icon.png" alt="image">
                                        <span class="countdown-timer" data-closing-time="{{ $tournaments->closing_time }}"></span>
                                    </div>
                                    <div class="date-area bg">
                                        <span class="date">{{$tournaments->closing_time}}</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 text-center">
                                <h2 class="dollar">Rs.{{$tournaments->fees}}</h2>

                                <a href="/bookings/{{$tournaments->id}}" class="cmn-btn">Join Now!</a>
                            </div>
                        </div>
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="overview-tab" data-toggle="tab" href="#overview" role="tab" aria-controls="overview" aria-selected="true">overview</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="participants-tab" data-toggle="tab" href="#participants" role="tab" aria-controls="participants" aria-selected="false">participants</a>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- banner-section end -->
    <!-- Testimonials Content Start -->
    <section id="tournaments-content">
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="overview" role="tabpanel" aria-labelledby="overview-tab">
                <div class="container pb-120">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <h4 class="head-area">Format</h4>
                            <div class="row wrapper">
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="single-area">
                                        <img src="http://127.0.0.1:8000/images/format-icon-1.png" alt="image">
                                        <h6>Game</h6>
                                        <p class="text-sm">{{$tournaments->game->name}}</p>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="single-area">
                                        <img src="http://127.0.0.1:8000/images/format-icon-2.png" alt="image">
                                        <h6>Check-in period</h6>
                                        <p class="text-sm">15 minutes before start</p>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="single-area">
                                        <img src="http://127.0.0.1:8000/images/format-icon-3.png" alt="image">
                                        <h6>Team Size</h6>
                                        <p class="text-sm">{{$tournaments->team_size}}</p>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="single-area">
                                        <img src="http://127.0.0.1:8000/images/format-icon-4.png" alt="image">
                                        <h6>Entry Fee</h6>
                                        <p class="text-sm">{{$tournaments->fees}}</p>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="single-area">
                                        <img src="http://127.0.0.1:8000/images/format-icon-5.png" alt="image">
                                        <h6>Prize Pool</h6>
                                        <p class="text-sm">Rs.{{$tournaments->prize_pool}}</p>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="single-area">
                                        <img src="http://127.0.0.1:8000/images/format-icon-6.png" alt="image">
                                        <h6>Tournament Format</h6>
                                        <p class="text-sm">{{$tournaments->type}}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="info-area">
                                <h4>Information</h4>
                                <div class="single-info">
                                    <h5>Format</h5>
                                    <ul>
                                        <li>Map pool: Selected Aim Maps</li>
                                        <li>All kind of cheating will result in a permanent suspension from Begam.</li>
                                        <li>Playing with a cheater will result in a 3 month suspension from Begam.</li>
                                        <li>Toxic behaviour will cause warnings and in severe cases both disqualifications and
                                            suspensions.</li>
                                    </ul>
                                </div>
                                <div class="single-info">
                                    <h5>Prize Claim</h5>
                                    <p>Prize claims must be completed within 24 hours of the end of the tournament
                                        otherwise risk penalty of the prize. Claims can take up to 72 hours to be processed.</p>
                                </div>
                                <div class="single-info">
                                    <h5>Rules</h5>
                                    <ul>
                                        <li>Please be respectful to your host and other participants. If any malicious behavior
                                            is reported, you will be removed from the tournament.</li>
                                        <li>Please be on time for your registration and for the actual tournament. You
                                            (and your team) will be disqualified on no-show.</li>
                                        <li>You and all of your teammates must be registered to qualify for the event.</li>
                                        <li>You can play in this tournament only if your registered and in-game names match,
                                            otherwise you will be disqualified.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="sidebar">
                                <div class="single-side">
                                    <h5>Participants</h5>
                                    <div class="participants">
                                        <ul>
                                            <li><span>Registered</span><span>{{$tournaments->bookings->count()}}</span></li>
                                            <li><span>Available slots</span><span>{{$tournaments->team_size-$tournaments->bookings->count()}}</span></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="single-side">
                                    <div class="head-area d-flex justify-content-between align-items-center">
                                        <h5>Prizes</h5>
                                    </div>
                                    <div class="result-single">
                                        <img src="http://127.0.0.1:8000/images/result-img-1.png" alt="images">
                                        <div class="text-area d-flex justify-content-between align-items-center">
                                            <span>1st</span>
                                            <h4>Rs.{{$tournaments->first_prize}}</h4>
                                        </div>
                                    </div>
                                    <div class="result-single">
                                        <img src="http://127.0.0.1:8000/images/result-img-2.png" alt="images">
                                        <div class="text-area d-flex justify-content-between align-items-center">
                                            <span>2nd</span>
                                            <h4>Rs.{{$tournaments->second_prize}}</h4>
                                        </div>
                                    </div>
                                    <div class="result-single">
                                        <img src="http://127.0.0.1:8000/images/result-img-3.png" alt="images">
                                        <div class="text-area d-flex justify-content-between align-items-center">
                                            <span>3rd</span>
                                            <h4>Rs.{{$tournaments->third_prize}}</h4>
                                        </div>
                                    </div>
                                </div>

                                <div class="single-side">
                                    <h5>Admins (1)</h5>
                                    <div class="admins-area">
                                        <div class="admins-single">
                                            <div class="left-area d-flex align-items-center">
                                                <img src="http://127.0.0.1:8000/images/admin-img-1.png" alt="images">
                                                <div class="right-side">
                                                    @if (!isset($profile))
                                                    <h6>Unknown Host </h6>
                                                    @else
                                                    <h6>{{$profile->full_name}}</h6>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="right-area">
                                                <div class="nice-select"><span class="current single-item share">
                                                        <span class="dot"></span>
                                                        <span class="dot"></span>
                                                        <span class="dot"></span>
                                                    </span>
                                                    <ul class="list">
                                                        <li><a href="profile.html"><i class="fas fa-share-alt"></i>View Profile</a></li>
                                                    </ul>
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
            <div class="tab-pane fade" id="participants" role="tabpanel" aria-labelledby="participants-tab">
                <div class="participants">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="participants-area pb-120">
                                    <h4>Participant</h4>
                                  @if (count($tournaments->bookings) == 0)
                                  <div class="participants-single d-flex justify-content-center">
                                    <h6 class="text-center">No Bookings Yet</h6>
                                </div>
                            </div>
                                  @else
                                  @foreach ($tournaments->bookings as $booking)
                                  <div class="participants-single">
                                   <div class="left-area d-flex align-items-center">
                                       <img src="{{asset('storage/'.$booking->team->logo)}}" alt="images">
                                       <div class="right-side">
                                           <h6>{{$booking->team->name}}</h6>
                                       </div>
                                   </div>
                                   <div class="right-area">
                                       <div class="nice-select"><span class="current single-item share">
                                               <span class="dot"></span>
                                               <span class="dot"></span>
                                               <span class="dot"></span>
                                           </span>
                                           <ul class="list">
                                               <li><a href="#"><i class="fab fa-facebook-f"></i>Share</a></li>
                                               <li><a href="profile.html"><i class="fas fa-share-alt"></i>View Profile</a></li>
                                           </ul>
                                       </div>
                                   </div>
                               </div>
                           </div>
                                  @endforeach
                                  @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </section>
    <!-- Testimonials Content End -->
@endsection
