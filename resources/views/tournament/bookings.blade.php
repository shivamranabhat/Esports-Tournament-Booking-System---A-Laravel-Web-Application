@extends('layouts.main')
@section('titile','My Profile')
@section('page-name')
 <!-- banner-section start -->
 <section id="banner-section" class="inner-banner profile">
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
                        <h1>Booking</h1>
                        <div class="breadcrumb-area">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb d-flex justify-content-center">
                                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Book Now</li>
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
                            <img src="{{asset('storage/'.$tournaments->image->image)}}" alt="Image">
                        </div>
                        <div class="name-area">
                            <h5>{{$tournaments->name}}</h5>
                            <p>Rs.{{$tournaments->fees}}</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 d-flex justify-content-center justify-content-md-end">
                    <div class="right d-flex align-items-center">
                        <div class="time-area bg">
                            <img src="http://127.0.0.1:8000/images/waitng-icon.png" alt="image">
                            <span class="countdown-timer" data-closing-time="{{ $tournaments->closing_time }}"></span></p>
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
                <div class="statistics-area" id="profile">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="total-area login-reg-main">
                                <div class="head-area d-flex justify-content-between">
                                    <div class="left">
                                        <h5>Player information</h5>
                                        <p class="text-sm">Fill up the form to register</p>
                                    </div>
                                </div>
                                <ul class="nav nav-tabs" id="myTab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="personal-info-tab" data-toggle="tab"
                                            href="#personal-info" role="tab" aria-controls="personal-info"
                                            aria-selected="true">Book Now</a>
                                    </li>
                                </ul>
                                <div class="tab-content" id="myTabContents">
                                    <div class="tab-pane fade show active" id="personal-info" role="tabpanel"
                                        aria-labelledby="personal-info-tab">
                                        <form method="post" action="/bookings/store" class="px-3">
                                            @csrf
                                            <div class="form-row">
                                                <div class="form-group form-outline col-md-6">
                                                    <label for="team_name">Team name</label>
                                                    <input placeholder="Enter your team name" type="text" id="team_name" name="team_name" readonly value="{{$teams->name}}">

                                                </div>
                                                <div class="form-group form-outline col-md-6">
                                                    <label for="leader">Leader</label>
                                                    <input placeholder="Enter your leader name" type="text" id="leader" name="leader" readonly value="{{ $profiles->full_name}}">

                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group form-outline col-md-6">
                                                    <label for="player 1">Player  A</label>
                                                    <input placeholder="Enter your player  1" type="text" id="player 1" name="player 1" readonly value="{{ $teams->player_1 }}">

                                                </div>
                                                <div class="form-group form-outline col-md-6">
                                                    <label for="player 2">Player  B</label>
                                                    <input placeholder="Enter your player  2" type="text" id="player 2" name="player 2" readonly value="{{ $teams->player_2 }}">

                                                </div>

                                            </div>
                                            <div class="form-row">
                                                <div class="form-group form-outline col-md-6">
                                                    <label for="player 3">Player C</label>
                                                    <input placeholder="Enter your player  3" type="text" id="player 3" name="player 3" readonly value="{{ $teams->player_3 }}">

                                                </div>
                                                <div class="form-group form-outline col-md-6">
                                                    <label for="player 4">Player D</label>
                                                    <input placeholder="Enter your player  4" type="text" id="player 4" name="player 4" readonly value="{{ $teams->player_4 }}">

                                                </div>
                                                <input type="hidden" id="tournament_id" name="tournament_id" value="{{$tournaments->id}}">
                                            </div>
                                            <div class="form-group">
                                                <button type="submit" class="btn text-white update-btn">Book Now</button>
                                            </div>
                                        </form>
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
