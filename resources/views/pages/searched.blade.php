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
    <section id="tournaments-section" class="mt-5 tournament-banner">
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
                    <div class="col-lg-6 col-md-6">
                        <div class="single-input">
                            <form action="{{ route('searchByName') }}">
                                <span>Search</span>
                                <input type="text" name="name" placeholder="Search...">
                                <button type="submit" class="d-none">Search</button>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3">
                        <div class="single-input">
                            <form action="{{ route('searchByType') }}" id="type_form">
                                <span>Team Size</span>
                                <select name="type">
                                    <option>Select Team Size</option>
                                    <option value="Solo">Solo</option>
                                    <option value="Duo">Duo</option>
                                    <option value="Squad">Squad</option>
                                </select>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3">
                        <div class="single-input">
                            <form action="{{ route('searchByGame') }}" id="game_form">
                            <span>Game</span>
                            <select name="game_id">
                                <option>Select Game</option>
                                @foreach ($games as $game)
                                <option value="{{$game->id}}">{{$game->name}}</option>
                                @endforeach
                            </select>

                        </div>
                    </div>
                </div>
                @if(!isset($search_tournaments))
                <div class="single-item">
                    <div class="row">
                       <div class="col-12">
                        <div class="text-center text-white">
                            No tournament available
                           </div>
                       </div>
                    </div>
                </div>
                @else
                @foreach ($search_tournaments as $tournament)
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
                                        <a href="/details/{{$tournament->id}}" class="btn text-white cmn-btn">View Tournament</a>
                                        <p>Top 3 Players Win a Cash Prize</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                @endif
                <div class="pagination d-flex justify-content-end mt-5">
                    <nav aria-label="Page navigation">
                        <ul class="pagination">
                            <li class="page-item">
                                {{$search_tournaments->links('vendor.pagination.simple-bootstrap-4')}}
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- Browse Tournaments end -->
    <x-cta>
    </x-cta>
@endsection


