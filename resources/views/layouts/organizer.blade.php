@extends('layouts.main')
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
                        <h1>Dashboard</h1>
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
        <div class="heading-area">
            <div class="row justify-content-between">
                <div class="col-md-6">
                    <div class="profile-area d-flex align-items-center">
                        <div class="photo">
                            <img src="http://127.0.0.1:8000/images/profile-logo.png"  class="rounded-circle" width="90" id="avatar" alt="Image">
                        </div>
                        <div class="name-area">
                            @auth()
                            @if (auth()->user()->name == null)
                            <h4>Username</h4>
                            <p>Organizer</p>
                            <p>Age:</p>
                            @else
                            @endif
                            @endauth
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
                                        <h5>Tournament information</h5>
                                        <p class="text-sm">Organizers's tournament specific information</p>
                                    </div>
                                </div>
                                <ul class="nav nav-tabs" id="myTab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="personal-info-tab"
                                            href="/dashboard" role="tab" aria-controls="personal-info"
                                            aria-selected="true">Home</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="team-tab" href="#team" role="tab"
                                            aria-controls="team" aria-selected="false">Bookings</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="team-tab" href="/points" role="tab"
                                            aria-controls="team" aria-selected="false">Points</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="team-tab" href="/calculate" role="tab"
                                            aria-controls="team" aria-selected="false">Calculate</a>
                                    </li>
                                </ul>
                                <div class="tab-content" id="myTabContents">
                                    @yield('child-page')
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
