@extends('layouts.main')
@section('title','Create Tournaments')
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
                                <a class="nav-link" href="/dashboard">overview</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" id="create-tab" data-toggle="tab" href="#create" role="tab" aria-controls="create" aria-selected="true">create</a>
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
            <div class="tab-pane fade active show" id="create" role="tabpanel" aria-labelledby="create-tab">
                <div class="participants">
                    <div class="container p-30">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="participants-area dashboard-container">
                                    <h4 class="py-3">Create Tournament</h4>
                                    <form method="post" action="/tournament/store" class="px-3" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-row">
                                            <div class="form-outline col-md-5">
                                                <label class="form-label text-white" for="name">Tournament Name</label>
                                                <input type="text" id="name" name="name" class="form-control" value="{{old('name')}}"/>
                                                @error('name')
                                                <p class="d-flex justify-content-start text-danger mt-2">{{$message}}</p>
                                                @enderror
                                            </div>
                                            <div class="form-outline col-md-3">
                                                <label class="form-label text-white" for="fees">Entry Fees</label>
                                                <input type="text" id="fees" name="fees" class="form-control" value="{{old('fees')}}"/>
                                                @error('fees')
                                                <p class="d-flex justify-content-start text-danger mt-2">{{$message}}</p>
                                                @enderror
                                            </div>
                                            <div class="form-outline col-md-4">
                                                <label class="form-label d-block ml-4 text-white" for="type">Type</label>
                                                <select name="type" id="type">
                                                    <option value="#">Select type</option>
                                                    <option value="Solo">Solo</option>
                                                      <option value="Duo">Duo</option>
                                                      <option value="Squad">Squad</option>
                                                </select>
                                                @error('type')
                                                <p class="d-flex justify-content-start text-danger mt-2">{{$message}}</p>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-outline mt-2">
                                            <label class="form-label text-white" for="image">Choose banner</label>
                                            <div class="row">
                                                @foreach ($tournament_avatars as $avatar )
                                                <div class="col-6 col-lg-2 col-sm-3 mb-2">
                                                    <img src="{{asset('storage/'. $avatar->image)}}" data-id="{{ $avatar->id }}" class="image banner w-100" alt="banner">
                                                </div>
                                                @endforeach
                                            </div>
                                        </div>
                                        <input type="hidden" class="form-control" id="image_id" name="image_id">
                                        <div class="form-row">
                                            <div class="form-outline col-md-6 mb-4">
                                                <label class="form-label text-white" for="closing_time">Closing time</label>
                                                <input type="datetime-local" class="form-control" id="closing_time" name="closing_time" value="{{old('closing_time')}}"/>
                                                @error('closing_time')
                                                <p class="d-flex justify-content-start text-danger mt-2">{{$message}}</p>
                                                @enderror
                                              </div>

                                              <div class="form-outline col-md-4 mb-4">
                                                  <label class="form-label text-white" for="team_size">Max Team</label>
                                                <input type="number" id="team_size" name="team_size" class="form-control" value="{{old('team_size')}}"/>
                                                @error('team_size')
                                                <p class="d-flex justify-content-start text-danger mt-2">{{$message}}</p>
                                                @enderror
                                              </div>
                                              <div class="form-outline col-md-2 mb-4">
                                                <label class="form-label text-white" for="prize_pool">Prize pool</label>
                                              <input type="text" id="prize_pool" name="prize_pool" class="form-control" value="{{old('prize_pool')}}"/>
                                              @error('prize_pool')
                                              <p class="d-flex justify-content-start text-danger mt-2">{{$message}}</p>
                                              @enderror
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-outline col-md-6 mb-4">
                                                <label class="form-label text-white" for="first_prize">1st Prize</label>
                                              <input type="text" id="first_prize" name="first_prize" class="form-control" value="{{old('first_prize')}}"/>
                                              @error('first_prize')
                                              <p class="d-flex justify-content-start text-danger mt-2">{{$message}}</p>
                                              @enderror
                                            </div>
                                            <div class="form-outline col-md-4 mb-4">
                                                <label class="form-label text-white" for="second_prize">2nd Prize</label>
                                              <input type="text" id="second_prize" name="second_prize" class="form-control" value="{{old('second_prize')}}"/>
                                              @error('second_prize')
                                              <p class="d-flex justify-content-start text-danger mt-2">{{$message}}</p>
                                              @enderror
                                            </div>
                                            <div class="form-outline col-md-2 mb-4">
                                                <label class="form-label text-white" for="third_prize">3rd Prize</label>
                                              <input type="text" id="third_prize" name="third_prize" class="form-control"value="{{old('third_prize')}}"/>
                                              @error('third_prize')
                                              <p class="d-flex justify-content-start text-danger mt-2">{{$message}}</p>
                                              @enderror
                                            </div>
                                        </div>
                                        <div class="form-outline mb-4">
                                            <label class="form-label text-white" for="rules">Rules</label>
                                          <textarea class="form-control bg-white text-dark" id="rules" name="rules" rows="4" value="{{old('rules')}}"></textarea>
                                          @error('name')
                                          <p class="d-flex justify-content-start text-danger mt-2">{{$message}}</p>
                                          @enderror
                                        </div>
                                        <input type="hidden" id="game_id" name="game_id" value="{{ $game->id }}">
                                        <div class="form-group">
                                            <button type="submit" class="update-btn btn text-white mb-3">Create</button>
                                        </div>
                                    </form>
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
                                                <label class="form-label text-white" for="kills_point">kills point</label>
                                                <input type="text" id="kills_point" name="kills_point" class="form-control" value="{{old('kills_point')}}"/>
                                                @error('kills_point')
                                                <p class="d-flex justify-content-start text-danger mt-2">{{$message}}</p>
                                                @enderror
                                            </div>
                                            <div class="form-outline mb-4">
                                                <label class="form-label text-white" for="placement_point">Placement points</label>
                                                <textarea class="form-control bg-white" id="placement_point" name="placement_point" rows="8"
                                                placeholder=
                                                "Provide the placement points as example:
                                                1=10,
                                                2=7,
                                                3=5.
                                                4=2,
                                                5-12=1">{{old('placement_point')}}</textarea>
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
    </section>
    <!-- Testimonials Content End -->
@endsection

