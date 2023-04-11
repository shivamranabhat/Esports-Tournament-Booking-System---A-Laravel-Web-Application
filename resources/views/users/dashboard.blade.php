@extends('layouts.performance')
@section('title', 'Dashboard')
@section('page-name')
    <!-- banner-section start -->
    <section id="banner-section" class="inner-banner tournaments">
        <div class="ani-img">
            <img class="img-1" src="http://127.0.0.1:8000/images/banner-circle-1.png" alt="icon">
            <img class="img-2" src="http://127.0.0.1:8000/images/banner-circle-2.png" alt="icon">
            <img class="img-3" src="http://127.0.0.1:8000/images/banner-circle-2.png" alt="icon">
        </div>
        <div class="banner-content d-flex align-items-center">
            <div class="container py-2">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <div class="main-content">
                            <h1>User</h1>
                            <div class="breadcrumb-area">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb d-flex justify-content-center">
                                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                        <li class="breadcrumb-item active mb-3" aria-current="page">Dashboard</li>
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
                        <div
                            class="col-lg-4 col-md-4 col-sm-4 d-flex align-items-center justify-content-sm justify-content-center">
                            <div class="mid-area text-center">
                                <h3>User Dasboard</h3>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 zindex">
                            <img src="http://127.0.0.1:8000/images/character_02.png" alt="image">
                        </div>
                    </div>
                </div>
                <div class="bottom-area">
                    <div class="bottom">

                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="overview-tab" data-toggle="tab" href="#overview"
                                    role="tab" aria-controls="overview" aria-selected="true">Overview</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="score-tab" data-toggle="tab" href="#score" role="tab" aria-controls="score" aria-selected="true">Score</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="kills-tab" data-toggle="tab" href="#kills" role="tab"
                                    aria-controls="kills" aria-selected="true">kills</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="weekly-tab" data-toggle="tab" href="#weekly" role="tab"
                                    aria-controls="weekly" aria-selected="true">Weekly</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="monthly-tab" data-toggle="tab" href="#monthly" role="tab"
                                    aria-controls="monthly" aria-selected="true">Monthly</a>
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
                <div class="participants">
                    <div class="container p-30">
                        @if (count($bookings) == 0)
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="participants-area dashboard-container p-30">
                                    <h4 class="py-3">Bookings</h4>
                                    <div class="participants-single mb-5 d-flex justify-content-center">
                                        <h6 class="text-center">No Bookings Found</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @else
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="participants-area dashboard-container p-30 mb-5">
                                    <h4 class="py-3">Bookings</h4>
                                    @foreach ($bookings as $booking)
                                        <div class="participants-single">
                                            <div class="left-area d-flex align-items-center">
                                                <img src="{{ asset('storage/' . $booking->tournament->image->image) }}" alt="images">
                                                <div class="right-side">
                                                    <h6>{{ $booking->tournament->name }}</h6>
                                                </div>
                                            </div>
                                            <div class="right-area">
                                                <div class="nice-select"><span class="current single-item share">
                                                        <span class="dot"></span>
                                                        <span class="dot"></span>
                                                        <span class="dot"></span>
                                                    </span>
                                                    <ul class="list">
                                                        <li><a href="/userresults/{{$booking->tournament_id}}"><i class="fa-solid fa-square-poll-vertical"></i>Result</a>
                                                        </li>
                                                        <li><a href="/performance/{{$booking->tournament_id}}"><i class="fa-solid fa-chart-simple"></i>Performance</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>

                            </div>
                        </div>
                    @endif
                    </div>
                </div>
            </div>
            <x-performance>
            </x-performance>
        </div>
    </section>
    <!-- Testimonials Content End -->
@endsection

