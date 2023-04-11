@extends('layouts.performance')
@section('title', 'Result')
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
                                        <li class="breadcrumb-item active" aria-current="page">Result</li>
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
    <!-- Dashboard Content Start -->
    <section id="tournaments-content">
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="overview" role="tabpanel" aria-labelledby="overview-tab">
                <div class="participants">
                    <div class="container p-30">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="participants-area dashboard-container pb-120">
                                    <h4 class="py-3">Tournament Result</h4>
                                    <div class="tournament-table d-flex justify-content-between">
                                        <div class="table-responsive mt-1">
                                            @if ($userresults->count() == 0)
                                                <table class="table">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col">Rank</th>
                                                            <th scope="col">Logo</th>
                                                            <th scope="col">Team</th>
                                                            <th scope="col">kills</th>
                                                            <th scope="col">Total</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <th scope="row"></th>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <div class="null-message text-center my-5">
                                                    <img src="http://127.0.0.1:8000/images/null-icon.jpg" alt="error" width="80">
                                                    <h2 class="mt-3"><strong>Nothing to show</strong></h2>
                                                    <h5>You haven't published result yet.</h5>
                                                </div>
                                            @else
                                                <table class="table">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col">Rank</th>
                                                            <th scope="col">Logo</th>
                                                            <th scope="col">Team</th>
                                                            <th scope="col">kills</th>
                                                            <th scope="col">Total</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($userresults as $result)
                                                            <tr>
                                                                <td>{{ $loop->iteration }}</td>
                                                                <td><img src="{{ asset('storage/' . $result->logo) }}" alt="logo" width="30" height="30"></td>
                                                                <td>{{ $result->team_name }}</td>
                                                                <td>{{ $result->total_kills }}</td>
                                                                <td>{{ $result->total_points }}</td>
                                                            </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <x-performance>
            </x-performance>
        </div>
    </section>
    <!-- Dashboard Content End -->
@endsection

