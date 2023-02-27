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
            <div class="container py-2">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <div class="main-content">
                            <h1>Organizer</h1>
                            <div class="breadcrumb-area">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb d-flex justify-content-center">
                                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
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
                                <h3>Organize Here</h3>
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
                                <a class="nav-link active" id="overview-tab" data-toggle="tab" href="#overview" role="tab" aria-controls="overview" aria-selected="true">Overview</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="create-tab" data-toggle="tab" href="#create" role="tab" aria-controls="create" aria-selected="true">Create</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="set-points-tab" data-toggle="tab" href="#set-points" role="tab" aria-controls="set-points" aria-selected="true">Set Points</a>
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
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="participants-area dashboard-container pb-120">
                                    <h4 class="py-3">Participants</h4>
                                @if (count($participants) == 0)
                                  <div class="participants-single d-flex justify-content-center">
                                    <h6 class="text-center">No Participants Found</h6>
                                  </div>
                                  @else
                                  @foreach ($participants as $participant)
                                  <div class="participants-single">
                                        <div class="left-area d-flex align-items-center">
                                            <img src="{{asset('storage/'.$participant->team->logo)}}" alt="images">
                                            <div class="right-side">
                                                <h6>{{$participant->team->name}}</h6>
                                            </div>
                                        </div>
                                        <div class="right-area">
                                            <div class="nice-select"><span class="current single-item share">
                                                    <span class="dot"></span>
                                                    <span class="dot"></span>
                                                    <span class="dot"></span>
                                                </span>
                                                <ul class="list">
                                                    <li><a href="#"><i class="fa-solid fa-user"></i>Profile</a></li>
                                                    <li><a href="/calculate/{{$participant->id}}"><i class="fa-solid fa-calculator"></i>Calculate Points</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                   </div>
                                   @endforeach
                               </div>
                               @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="create" role="tabpanel" aria-labelledby="create-tab">
                <div class="participants">
                    <div class="container p-30">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="participants-area dashboard-container pb-120">
                                    <h4 class="py-3">Choose Game</h4>
                                    <div class="row ">
                                        @foreach ( $games as $game)
                                        <div class="column col-6 col-sm-4 col-md-2 col-lg-2 mb-3 mx-0 mt-0 p-1  game-row">
                                            <a href="{{ route('create_tournament', ['id' => $game->id]) }}">
                                                <img src="{{asset('storage/'. $game->image)}}" alt="{{$game->name}}" class="img-fluid rounded" width="180">
                                                <div class="game-name d-flex align-items-center">
                                                    <svg class="ml-3" xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor"
                                                        class="bi bi-phone" viewBox="0 0 16 16">
                                                        <path
                                                            d="M11 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h6zM5 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H5z" />
                                                        <path d="M8 14a1 1 0 1 0 0-2 1 1 0 0 0 0 2z" />
                                                    </svg>
                                                    <span class="mt-2 ml-1 text-white">{{$game->name}}</span>
                                                </div>
                                            </a>
                                        </div>
                                        @endforeach
                                   </div>
                               </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="set-points" role="tabpanel" aria-labelledby="set-points-tab">
                <div class="participants">
                    <div class="container p-30">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="participants-area dashboard-container">
                                    <h4 class="py-3">Set Points</h4>
                                    <form method="post" action="/points/store" class="entry-form p-2">
                                        @csrf
                                            <div class="form-outline mb-4">
                                                <label class="form-label text-white" for="kills_point">kills point</label>
                                                <input type="text" id="kills_point" name="kills_point" class="form-control" value="{{old('kills_point')}}"/>
                                                @error('kills_point')
                                                <p class="d-flex justify-content-start text-danger mt-2">{{$message}}</p>
                                                @enderror
                                            </div>
                                            <div class="form-outline mb-4">
                                                <label class="form-label text-white" for="placement_point">Placement points</label>
                                                <textarea class="form-control bg-white" id="placement_point" name="placement_point" rows="8" value="{{old('placement_point')}}"
                                                placeholder=
                                                "Provide the placement points as example:
1=10,
2=7,
3=5.
4=2,
5-12=1"></textarea>
                                                @error('placement_point')
                                                <p class="d-flex justify-content-start text-danger mt-2">{{$message}}</p>
                                                @enderror
                                            </div>
                                        <!-- Submit button -->
                                        <div class="form-group">
                                            <button type="submit" class="btn pax-3 py-2 text-white update-btn mb-3">Add</button>
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

    </section>
    <!-- Testimonials Content End -->
@endsection

