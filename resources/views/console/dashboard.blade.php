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
                                <h1 class="text-success text-center"><strong>0</strong></h1>
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
                            <table class="table">
                                <thead>
                                  <tr>
                                    <th scope="col">Name</th>
                                    <th scope="col">Type</th>
                                    <th scope="col">Starts</th>
                                    <th scope="col">Ends</th>
                                    <th scope="col">Prize</th>
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div  class="tab-pane fade in px-2" id="tournament">
            <nav>
                <div class="sidebar-button">
                    <svg class="sidebarBtn mr-3" xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
                      </svg>
                    <span class="dashboard">Tournament</span>
                </div>
            </nav>
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
                            <input type="text" class="form-control" placeholder="Search your game">
                            <i class="fa fa-search"></i>
                        </div>
                        <div class="row mx-2">
                            @foreach ( $games as $game)
                            <div class="column col-6 col-sm-4 col-md-3 col-lg-2 mb-3 mx-0 mt-0 p-1">
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
        <div  class="tab-pane fade in px-2" id="calculate">
            <nav>
                <div class="sidebar-button">
                    <svg class="sidebarBtn mr-3" xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
                      </svg>
                    <span class="dashboard">Calculate Points</span>
                </div>
            </nav>
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
