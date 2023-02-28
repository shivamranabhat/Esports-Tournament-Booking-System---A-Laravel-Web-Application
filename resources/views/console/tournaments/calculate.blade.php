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
                            <li class="nav-item">
                                <a class="nav-link" id="manage_points-tab" data-toggle="tab" href="#manage_points" role="tab" aria-controls="manage_points" aria-selected="true">Manage Points</a>
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
                                    <h4 class="py-3">Calculate Points</h4>
                                    <form method="post" action="/points/calculate" class="entry-form p-2">
                                        @csrf

                                        <div class="form-row mb-4">
                                            <div class="form-outline col-md-6">
                                                <label class="form-label text-white" for="player_name1">Player Name</label>
                                                <input type="text" id="player_name1" name="player_name1" class="form-control" value="{{$team->player_1}}" readonly/>
                                                    @error('player_name1')
                                                    <p class="d-flex justify-content-start text-danger mt-2">{{$message}}</p>
                                                    @enderror
                                                @error('player_name1')
                                                <p class="d-flex justify-content-start text-danger mt-2">{{$message}}</p>
                                                @enderror
                                            </div>
                                            <div class="form-outline col-md-6">
                                                <label class="form-label text-white" for="kills1">Kills</label>
                                                <input type="text" id="kills1" name="kills1" class="form-control" value="{{old('kills1')}}"/>
                                                @error('kills1')
                                                <p class="d-flex justify-content-start text-danger mt-2">{{$message}}</p>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-row mb-4">
                                            <div class="form-outline col-md-6">
                                                <label class="form-label text-white" for="player_name2">Player Name</label>
                                                <input type="text" id="player_name2" name="player_name2" class="form-control" value="{{$team->player_2}}" readonly/>
                                                    @error('player_name2')
                                                    <p class="d-flex justify-content-start text-danger mt-2">{{$message}}</p>
                                                    @enderror
                                                @error('player_name2')
                                                <p class="d-flex justify-content-start text-danger mt-2">{{$message}}</p>
                                                @enderror
                                            </div>
                                            <div class="form-outline col-md-6">
                                                <label class="form-label text-white" for="kills2">Kills</label>
                                                <input type="text" id="kills2" name="kills2" class="form-control" value="{{old('kills2')}}"/>
                                                @error('kills2')
                                                <p class="d-flex justify-content-start text-danger mt-2">{{$message}}</p>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-row mb-4">
                                            <div class="form-outline col-md-6">
                                                <label class="form-label text-white" for="player_name3">Player Name</label>
                                                <input type="text" id="player_name3" name="player_name3" class="form-control" value="{{$team->player_3}}" readonly/>
                                                @error('player_name3')
                                                <p class="d-flex justify-content-start text-danger mt-2">{{$message}}</p>
                                                @enderror
                                                @error('player_name3')
                                                <p class="d-flex justify-content-start text-danger mt-2">{{$message}}</p>
                                                @enderror
                                            </div>
                                            <div class="form-outline col-md-6">
                                                <label class="form-label text-white" for="kills3">Kills</label>
                                                <input type="text" id="kills3" name="kills3" class="form-control" value="{{old('kills3')}}"/>
                                                @error('kills3')
                                                <p class="d-flex justify-content-start text-danger mt-2">{{$message}}</p>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-row mb-4">
                                            <div class="form-outline col-md-6">
                                                <label class="form-label text-white" for="player_name4">Player Name</label>
                                                <input type="text" id="player_name4" name="player_name4" class="form-control" value="{{$team->player_4}}" readonly/>
                                                    @error('player_name4')
                                                    <p class="d-flex justify-content-start text-danger mt-2">{{$message}}</p>
                                                    @enderror
                                                @error('player_name4')
                                                <p class="d-flex justify-content-start text-danger mt-2">{{$message}}</p>
                                                @enderror
                                            </div>
                                            <div class="form-outline col-md-6">
                                                <label class="form-label text-white" for="kills4">Kills</label>
                                                <input type="text" id="kills4" name="kills4" class="form-control" value="{{old('kills4')}}"/>
                                                @error('kills4')
                                                <p class="d-flex justify-content-start text-danger mt-2">{{$message}}</p>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-outline mb-4">
                                            <label class="form-label text-white" for="placement">Placement</label>
                                            <input type="text" id="placement" name="placement" class="form-control" value="{{old('placement')}}"/>
                                            @error('placement')
                                            <p class="d-flex justify-content-start text-danger mt-2">{{$message}}</p>
                                            @enderror
                                            <input type="hidden" id="team_id" name="team_id" value="{{$team->id}}">
                                        </div>

                                         <!-- Submit button -->
                                         <div class="form-group">
                                            <button type="submit" class="btn pax-3 py-2 text-white update-btn">Publish</button>
                                        </div>
                                      </form>

                                </div>

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
            <div class="tab-pane fade" id="manage_points" role="tabpanel" aria-labelledby="manage_points-tab">
                <div class="participants">
                    <div class="container p-30">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="participants-area dashboard-container pb-120">
                                    <h4 class="py-3">Tournament Points</h4>
                                    <div class="tournament-table d-flex justify-content-between">
                                        <div class="table-responsive mt-1">
                                            @if ($points->count()== 0)
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                    <th scope="col">S.N.</th>
                                                    <th scope="col">Kills pts</th>
                                                    <th scope="col">Placement pts</th>
                                                    <th scope="col">Action</th>
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
                                                <h5>You haven't set any points yet.</h5>
                                            </div>
                                            @else
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">S.N.</th>
                                                        <th scope="col">Kills pts</th>
                                                        <th scope="col">Placement pts</th>
                                                        <th scope="col">Action</th>
                                                    </tr>
                                                </thead>

                                                <tbody>

                                                    @foreach ($points as $point)
                                                    <tr>
                                                    <td>{{$loop->iteration}}</td>
                                                    <td>{{$point->kills_point}}</td>
                                                    <td>{{$point->placement_point}}</td>
                                                    <td>
                                                        <a href="/point/edit/{{$point->id}}" class="btn create-btn mb-2"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pen-fill" viewBox="0 0 16 16">
                                                            <path d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001z"/>
                                                          </svg> </a>
                                                        <a href="/point/edit/{{$point->id}}" data-toggle="modal" data-target="#delete_points" class="btn del-btn mb-2"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="rgb(70,9,195)" class="bi bi-trash-fill del" viewBox="0 0 16 16">
                                                            <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/>
                                                          </svg> </a>
                                                    </td>
                                                </tr>
                                                    @endforeach

                                                </tbody>
                                                </table>
                                                {{-- Modal to show confirm dialog box while deleting points --}}
                                                <div class="modal fade" id="delete_points" tabindex="-1" role="dialog" aria-labelledby="delete_pointsTitle" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                                    <div class="modal-content" style="background: rgb(55,8,152) !important;">
                                                        <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLongTitle">Tournament Points</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                        </div>
                                                        <div class="modal-body text-white">
                                                        Are you sure want to delete this?
                                                        </div>
                                                        <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary text-white" data-dismiss="modal">Close</button>
                                                        <a href="/delete/{{$point->id}}"><button type="button" class="btn btn-danger text-white">Delete</button></a>
                                                        </div>
                                                    </div>
                                                    </div>
                                                </div>

                                            @endif


                                        </div>
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
                                                <label class="form-label text-white text-white" for="kills_point">kills point</label>
                                                <input type="text" id="kills_point" name="kills_point" class="form-control" value="{{old('kills_point')}}"/>
                                                @error('kills_point')
                                                <p class="d-flex justify-content-start text-danger mt-2">{{$message}}</p>
                                                @enderror
                                            </div>
                                            <div class="form-outline mb-4">
                                                <label class="form-label text-white text-white" for="placement_point">Placement points</label>
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

