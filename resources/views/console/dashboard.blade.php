@extends('layouts.userboard')
@section('title','Host Console')
@section('page-name')
<!-- section sidebar content -->
<section class="home-section">
    <div class="tab-content">
        <div class="tab-pane fade in active show" id="dashboard">
            <nav>
                <div class="sidebar-button">
                    <svg class="sidebarBtn mr-3" xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
                      </svg>
                    <span class="dashboard">Dashboard</span>
                </div>
            </nav>
            <div class="home-content">
                <div class="container-fluid">
                    <div class="row px-3">
                        <div class="col-12 col-lg-3 bg-white mr-5 rounded p-5 mb-4">
                            <div class="contents">
                                <h1 class="text-warning text-center"><strong>0</strong></h1>
                                <h5 class="text-center">Live Tournaments</h5>
                            </div>
                        </div>
                        <div class="col-12 col-lg-3 bg-white rounded p-5 mb-4">
                            <div class="contents">
                                <h1 class="text-success text-center"><strong>{{$tournaments->count()}}</strong></h1>
                                <h5 class="text-center">Hosted Tournaments</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bottom-content pl-3 pr-5">
                    <div class="filter d-flex ml-3 align-items-center">
                        <h5 class="mt-3 text-muted">Filter</h5>
                        <div class="dropdown ml-2">
                            <button class="btn dropdown-toggle rounded px-4 mt-2" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              All Games
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                @foreach ($games as $game)
                                    <a class="dropdown-item" href="#">{{$game->name}}</a>
                                @endforeach

                            </div>
                          </div>
                    </div>
                    <div class="tournament-table d-flex justify-content-between">
                        <div class="table-responsive mt-3">
                         @if ($tournaments->count()== 0)
                            <table class="table">
                                <thead>
                                  <tr>
                                    <th scope="col">Name</th>
                                    <th scope="col">Type</th>
                                    <th scope="col">Starts</th>
                                    <th scope="col">Ends</th>
                                    <th scope="col">Prize</th>
                                    <th scope="col">Action</th>
                                  </tr>
                                </thead>

                                <tbody>
                                  <tr>
                                    <th scope="row"></th>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                  </tr>
                                </tbody>
                              </table>
                              <div class="null-message text-center my-5">
                                <img src="http://127.0.0.1:8000/images/null-icon.jpg" alt="error" width="80">
                                <h2 class="mt-3"><strong>Nothing to show</strong></h2>
                                <h5>You haven't created any tournaments yet. Please click on Create Tournament.</h5>
                            </div>
                            @else
                            <table class="table">
                                <thead>
                                  <tr>
                                    <th scope="col">S.N.</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Type</th>
                                    <th scope="col">Starts</th>
                                    <th scope="col">Ends</th>
                                    <th scope="col">Prize</th>
                                    <th scope="col">Action</th>
                                  </tr>
                                </thead>

                                <tbody>

                                    @foreach ($tournaments as $tournament)
                                    <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$tournament->name}}</td>
                                    <td>{{$tournament->type}}</td>
                                    <td>{{$tournament->created_at}}</td>
                                    <td>{{$tournament->closing_time}}</td>
                                    <td>{{$tournament->prize_pool}}</td>
                                    <td></td>
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
        <div  class="tab-pane fade in px-2" id="bookings">
            <nav>
                <div class="sidebar-button">
                    <svg class="sidebarBtn mr-3" xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
                      </svg>
                    <span class="dashboard">Bookings</span>
                </div>
            </nav>
            <div class="home-content">
                <div class="container-fluid">
                    <div class="row px-3">
                        <div class="col-12 col-lg-3 bg-white mr-5 rounded p-5 mb-4">
                            <div class="contents">
                                <h1 class="text-warning text-center"><strong>0</strong></h1>
                                <h5 class="text-center">Live Tournaments</h5>
                            </div>
                        </div>
                        <div class="col-12 col-lg-3 bg-white rounded p-5 mb-4">
                            <div class="contents">
                                <h1 class="text-success text-center"><strong>{{$tournaments->count()}}</strong></h1>
                                <h5 class="text-center">Hosted Tournaments</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bottom-content pl-3 pr-5">
                    <div class="filter d-flex ml-3 align-items-center">
                        <h5 class="mt-3 text-muted">Filter</h5>
                        <div class="dropdown ml-2">
                            <button class="btn dropdown-toggle rounded px-4 mt-2" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              Tournament
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                @foreach ($games as $game)
                                    <a class="dropdown-item" href="#">{{$game->name}}</a>
                                @endforeach

                            </div>
                          </div>
                    </div>
                    <div class="tournament-table d-flex justify-content-between">
                        <div class="table-responsive mt-3">
                         @if ($tournaments->count()== 0)
                            <table class="table">
                                <thead>
                                  <tr>
                                    <th scope="col">Name</th>
                                    <th scope="col">Type</th>
                                    <th scope="col">Starts</th>
                                    <th scope="col">Ends</th>
                                    <th scope="col">Prize</th>
                                    <th scope="col">Action</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <th scope="row"></th>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                  </tr>
                                </tbody>
                              </table>
                              <div class="null-message text-center my-5">
                                <img src="http://127.0.0.1:8000/images/null-icon.jpg" alt="error" width="80">
                                <h2 class="mt-3"><strong>Nothing to show</strong></h2>
                                <h5>You haven't created any tournaments yet. Please click on Create Tournament.</h5>
                            </div>
                            @else
                            <table class="table">
                                <thead>
                                  <tr>
                                    <th scope="col">S.N.</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Type</th>
                                    <th scope="col">Starts</th>
                                    <th scope="col">Ends</th>
                                    <th scope="col">Prize</th>
                                    <th scope="col">Action</th>
                                  </tr>
                                </thead>

                                <tbody>

                                    @foreach ($tournaments as $tournament)
                                    <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$tournament->name}}</td>
                                    <td>{{$tournament->type}}</td>
                                    <td>{{$tournament->created_at}}</td>
                                    <td>{{$tournament->closing_time}}</td>
                                    <td>{{$tournament->prize_pool}}</td>
                                    <td>
                                        <a href="/participants/{{$tournament->id}}" class="btn">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
                                                <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                                                <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
                                              </svg>
                                        </a>
                                    </td>
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
        <div  class="tab-pane fade in px-2" id="notification"></div>
        <div  class="tab-pane fade in px-2" id="create-tournament">
            <nav>
                <div class="sidebar-button">
                    <svg class="sidebarBtn mr-3" xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
                      </svg>
                    <span class="dashboard">Create Tournament</span>
                </div>
            </nav>
            <div class="home-content">
                <div class="bottom-content mt-5 py-5">
                    <div class="container-fluid">
                        <div class="input-box mb-4 ml-2">
                        </div>
                        <div class="row mx-2 px-3">
                            @foreach ( $games as $game)
                            <div class="column col-6 col-sm-4 col-md-2 col-lg-2 mb-3 mx-0 mt-0 p-1">
                                <a href="{{ route('create_tournament', ['id' => $game->id]) }}">
                                    <img src="{{asset('storage/'. $game->image)}}" alt="{{$game->name}}" class="img-fluid rounded" width="180">
                                    <div class="game-name d-flex align-items-center">
                                        <svg class="ml-3" xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor"
                                            class="bi bi-phone" viewBox="0 0 16 16">
                                            <path
                                                d="M11 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h6zM5 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H5z" />
                                            <path d="M8 14a1 1 0 1 0 0-2 1 1 0 0 0 0 2z" />
                                        </svg>
                                        <h5 class="mt-2 ml-1 text-muted">{{$game->name}}</h5>
                                    </div>
                                </a>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div  class="tab-pane fade in px-2" id="set_points">
            <nav>
                <div class="sidebar-button">
                    <svg class="sidebarBtn mr-3" xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
                      </svg>
                    <span class="dashboard">Set Points</span>
                </div>
            </nav>
            <div class="home-content">
                <div class="bottom-content py-5">
                    <div class="container px-5">
                        <form method="post" action="/points/store" class="entry-form p-2">
                            @csrf
                                <div class="form-outline mb-4">
                                    <label class="form-label" for="kills_point">kills point</label>
                                    <input type="text" id="kills_point" name="kills_point" class="form-control" value="{{old('kills_point')}}"/>
                                    @error('kills_point')
                                    <p class="d-flex justify-content-start text-danger mt-2">{{$message}}</p>
                                    @enderror
                                </div>
                                <div class="form-outline mb-4">
                                    <label class="form-label" for="placement_point">Placement points</label>
                                    <textarea class="form-control" id="placement_point" name="placement_point" rows="8" value="{{old('placement_point')}}"
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
                            <button type="submit" class="btn btn-primary btn-block mb-4">Create</button>
                          </form>
                    </div>
                </div>
            </div>
        </div>
        <div  class="tab-pane fade in px-2" id="calculate">
            <nav>
                <div class="sidebar-button">
                    <svg class="sidebarBtn mr-3" xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
                      </svg>
                    <span class="dashboard">Calculate Points</span>
                </div>
            </nav>
            <div class="home-content">
                <div class="bottom-content py-5">
                    <div class="container px-5">
                        <form method="post" action="/points/calculate" class="entry-form p-2">
                            @csrf
                            <div class="form-row mb-4">
                                <div class="form-outline col-md-6">
                                    <label class="form-label" for="name">Tournament Name</label>
                                    <select name="name" id="name" class="form-control">
                                        <option value="#">Select tournament</option>
                                        @foreach ( $tournaments as $tournament)
                                        <option value="{{$tournament->name}}">{{$tournament->name}}</option>
                                        @endforeach
                                    </select>
                                    @error('name')
                                    <p class="d-flex justify-content-start text-danger mt-2">{{$message}}</p>
                                    @enderror
                                </div>
                                <div class="form-outline col-md-6">
                                    <label class="form-label" for="team_name">Team Name</label>
                                    <input type="text" id="team_name" name="team_name" class="form-control" value="{{old('team_name')}}"/>
                                    @error('team_name')
                                    <p class="d-flex justify-content-start text-danger mt-2">{{$message}}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-row mb-4">
                                <div class="form-outline col-md-6">
                                    <label class="form-label" for="player_name1">Player Name</label>
                                    <input type="text" id="player_name1" name="player_name1" class="form-control" value="{{old('player_name1')}}"/>
                                    @error('player_name1')
                                    <p class="d-flex justify-content-start text-danger mt-2">{{$message}}</p>
                                    @enderror
                                </div>
                                <div class="form-outline col-md-6">
                                    <label class="form-label" for="kills1">Kills</label>
                                    <input type="text" id="kills1" name="kills1" class="form-control" value="{{old('kills1')}}"/>
                                    @error('kills1')
                                    <p class="d-flex justify-content-start text-danger mt-2">{{$message}}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-row mb-4">
                                <div class="form-outline col-md-6">
                                    <label class="form-label" for="player_name2">Player Name</label>
                                    <input type="text" id="player_name2" name="player_name2" class="form-control" value="{{old('player_name2')}}"/>
                                    @error('player_name2')
                                    <p class="d-flex justify-content-start text-danger mt-2">{{$message}}</p>
                                    @enderror
                                </div>
                                <div class="form-outline col-md-6">
                                    <label class="form-label" for="kills2">Kills</label>
                                    <input type="text" id="kills2" name="kills2" class="form-control" value="{{old('kills2')}}"/>
                                    @error('kills2')
                                    <p class="d-flex justify-content-start text-danger mt-2">{{$message}}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-row mb-4">
                                <div class="form-outline col-md-6">
                                    <label class="form-label" for="player_name3">Player Name</label>
                                    <input type="text" id="player_name3" name="player_name3" class="form-control" value="{{old('player_name3')}}"/>
                                    @error('player_name3')
                                    <p class="d-flex justify-content-start text-danger mt-2">{{$message}}</p>
                                    @enderror
                                </div>
                                <div class="form-outline col-md-6">
                                    <label class="form-label" for="kills3">Kills</label>
                                    <input type="text" id="kills3" name="kills3" class="form-control" value="{{old('kills3')}}"/>
                                    @error('kills3')
                                    <p class="d-flex justify-content-start text-danger mt-2">{{$message}}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-row mb-4">
                                <div class="form-outline col-md-6">
                                    <label class="form-label" for="player_name4">Player Name</label>
                                    <input type="text" id="player_name4" name="player_name4" class="form-control" value="{{old('player_name4')}}"/>
                                    @error('player_name4')
                                    <p class="d-flex justify-content-start text-danger mt-2">{{$message}}</p>
                                    @enderror
                                </div>
                                <div class="form-outline col-md-6">
                                    <label class="form-label" for="kills4">Kills</label>
                                    <input type="text" id="kills4" name="kills4" class="form-control" value="{{old('kills4')}}"/>
                                    @error('kills4')
                                    <p class="d-flex justify-content-start text-danger mt-2">{{$message}}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-outline mb-4">
                                <label class="form-label" for="placement">Placement</label>
                                <input type="text" id="placement" name="placement" class="form-control" value="{{old('placement')}}"/>
                                @error('placement')
                                <p class="d-flex justify-content-start text-danger mt-2">{{$message}}</p>
                                @enderror
                            </div>
                            <!-- Submit button -->
                            <button type="submit" class="btn btn-primary btn-block mb-4">Calculate</button>
                          </form>
                    </div>
                </div>
            </div>
        </div>

        <div  class="tab-pane fade in px-2" id=""></div>
        <div  class="tab-pane fade in px-2" id="settings">
            <nav>
                <div class="sidebar-button">
                    <svg class="sidebarBtn mr-3" xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
                      </svg>
                    <span class="dashboard">Settings</span>
                </div>
            </nav>
        </div>
    </div>
</section>
<!-- section sidebar content-->
@endsection
