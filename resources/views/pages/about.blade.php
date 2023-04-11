@extends('layouts.main')
@section('title','About Us')
@section('page-name')
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
                        <h1>About Us</h1>
                        <div class="breadcrumb-area">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb d-flex justify-content-center">
                                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">About Us</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
{{-- body section --}}
<section id="about-us-section">
    <div class="overlay pt-120">
        <div class="container wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
            <div class="main-container">
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-8">
                        <div class="section-header text-center">
                            <h2 class="title">ABOUT SCORE SENSI</h2>
                            <p>Score Sensi a  gaming platform hub Esports tournaments for the biggest titles on every device. Score Sensi is an immersive online gaming experience for all Esports fans out there. Doesn’t matter if you’re a new gamer, casual player, an amateur pro or a registered professional, if you’re passionate about playing and competing in the hottest tournaments,
                                Score Sensi has what you need.</p>
                            <p>Our team is made up of gamers, nerds, techies, and dreamers, who love what we do and are dedicated to bringing you the best in competitive gaming. Whether it’s local, GCC, MENA or even global, we’ve got tournaments for everyone.</p>
                            <a href="/register" class="btn text-white cmn-btn">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Call Action In start -->
<x-cta>
</x-cta>
<!-- Call Action In end -->
@endsection
{{-- body section --}}
