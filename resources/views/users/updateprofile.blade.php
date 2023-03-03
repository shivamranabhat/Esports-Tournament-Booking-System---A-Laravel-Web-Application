@extends('layouts.profile')
@section('title','Profile')
@section('profile-page')
    <div class="tab-pane fade show active" id="overview" role="tabpanel" aria-labelledby="overview-tab">
        <div class="participants">
            <div class="container p-30">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="participants-area dashboard-container">
                            <h4 class="py-3">Player Information</h4>
                            <form method="post" action="/profile/store" class="entry-form px-3" enctype="multipart/form-data">
                                @csrf
                                <div class="file-upload-container mx-auto mb-5">
                                    <label for="user_image" class="file-upload-label">
                                        <div class="file-upload-icon">
                                        <i class="fas fa-upload"></i>
                                        </div>
                                        <div class="file-upload-text">Choose profile picture</div>
                                    </label>
                                    <input type="file" id="image" name="image" class="file-upload-input" onchange="previewImage()"/>
                                    @error('image')
                                    <p class="d-flex justify-content-start text-danger mt-4">{{$message}}</p>
                                    @enderror
                                    <div class="file-upload-preview">
                                        <img id="preview-image" src="" alt="Preview Image"/>
                                    </div>
                                    </div>
                                <div class="form-row">
                                    <div class="form-group form-outline col-md-6">
                                        <label class="form-label text-white" for="full_name">Full name</label>
                                        <input  placeholder="Enter your name" class="form-control" type="text" id="full_name" name="full_name" value="{{ old('full_name') }}">
                                        @error('full_name')
                                    <p class="d-flex justify-content-start text-danger mt-2">{{$message}}</p>
                                    @enderror
                                    </div>
                                    <div class="form-group form-outline col-md-6">
                                        <label class="form-label text-white" for="phone">Phone</label>
                                        <input  placeholder="Enter your phone" class="form-control" type="phone" id="phone" name="phone" value="{{ old('phone') }}">
                                        @error('phone')
                                    <p class="d-flex justify-content-start text-danger mt-2">{{$message}}</p>
                                    @enderror
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group form-outline col-md-6">
                                        <label class="form-label text-white" for="email">Email</label>
                                        <input  placeholder="Enter your email" class="form-control" type="email" id="email" name="email" value="{{ old('email') }}">
                                        @error('email')
                                    <p class="d-flex justify-content-start text-danger mt-2">{{$message}}</p>
                                    @enderror
                                    </div>
                                    <div class="form-group form-outline col-md-6">
                                        <label class="form-label d-block ml-4 text-white" for="game_id">Game</label>
                                        <select name="game_id" id="game_id" >
                                            <option value="#">Choose Game</option>
                                            @foreach ( $games as $game)
                                            <option value="{{$game->id}}" id="select" value="{{ old('game_name') }}">{{$game->name}}</option>
                                            @endforeach
                                        </select>
                                        @error('game_id')
                                    <p class="d-flex justify-content-start text-danger mt-2">{{$message}}</p>
                                    @enderror
                                    </div>

                                </div>
                                <div class="form-row">
                                    <div class="form-group form-outline col-md-6">
                                        <label class="form-label text-white" for="level">Level</label>
                                        <input  placeholder="Enter your level" class="form-control" type="text" id="level" name="level" value="{{ old('level') }}">
                                        @error('level')
                                    <p class="d-flex justify-content-start text-danger mt-2">{{$message}}</p>
                                    @enderror
                                    </div>
                                    <div class="form-group form-outline col-md-6">
                                        <label class="form-label text-white" for="uid">UID</label>
                                        <input  placeholder="Enter your uid" class="form-control" type="texts" id="uid" name="uid" value="{{ old('uid') }}">
                                        @error('uid')
                                    <p class="d-flex justify-content-start text-danger mt-2">{{$message}}</p>
                                    @enderror
                                    </div>
                                </div>
                                <div class="form-group mb-5">
                                    <button type="submit" class="btn update-btn text-white">Update</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="tab-pane fade" id="create-team" role="tabpanel" aria-labelledby="create-team-tab">
        <div class="participants">
            <div class="container p-30">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="participants-area dashboard-container">
                            <h4 class="py-3">Team Information</h4>
                            <form method="post" action="/team/store" class="px-3" enctype="multipart/form-data">
                                @csrf
                                <div class="file-upload-container mx-auto mb-5">
                                    <label class="form-label text-white" for="user_image" class="file-upload-label">
                                        <div class="file-upload-icon text-center">
                                        <i class="fas fa-upload"></i>
                                        </div>
                                        <div class="file-upload-text">Choose Team Logo</div>
                                    </label>
                                    <input type="file" id="logo" name="logo" class="file-upload-input" onchange="showLogo()"/>
                                    @error('logo')
                                    <p class="d-flex justify-content-start text-danger mt-4">{{$message}}</p>
                                    @enderror
                                    <div class="logo-upload-preview">
                                        <img id="preview-logo" src="" alt="Preview logo"/>
                                    </div>
                                    </div>
                                <div class="form-group form-outline">
                                    <label class="form-label text-white" for="name">Team Name</label>
                                    <input class="form-control" placeholder="Enter your team name" type="text" id="name" name="name">
                                    @error('name')
                                    <p class="d-flex justify-content-start text-danger mt-2">{{$message}}</p>
                                    @enderror
                                </div>

                                <div class="form-row">
                                    <div class="form-group form-outline col-md-6">
                                        <label class="form-label text-white" for="player_1">Player A</label>
                                        <input class="form-control" placeholder="Enter your player name" type="text" id="player_1" name="player_1">
                                        @error('player_1')
                                        <p class="d-flex justify-content-start text-danger mt-2">{{$message}}</p>
                                        @enderror
                                    </div>
                                    <div class="form-group form-outline col-md-6">
                                        <label class="form-label text-white" for="player_2">Player B</label>
                                        <input class="form-control" placeholder="Enter your player name" type="text" id="player_2" name="player_2">
                                        @error('player_2')
                                        <p class="d-flex justify-content-start text-danger mt-2">{{$message}}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group form-outline col-md-6">
                                        <label class="form-label text-white" for="player_3">Player C</label>
                                        <input class="form-control" placeholder="Enter your player name" type="text" id="player_3" name="player_3">
                                        @error('player_3')
                                        <p class="d-flex justify-content-start text-danger mt-2">{{$message}}</p>
                                        @enderror
                                    </div>
                                    <div class="form-group form-outline col-md-6">
                                        <label class="form-label text-white" for="player_4">Player D</label>
                                        <input class="form-control" placeholder="Enter your player name" type="text" id="player_4" name="player_4">
                                    </div>
                                <div class="form-group mb-5">
                                    <button type="submit" class="btn text-white update-btn">Add</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <div class="tab-pane fade" id="team" role="tabpanel" aria-labelledby="team-tab">
        <div class="participants">
            <div class="container p-30">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="participants-area dashboard-container pb-120">
                            <h4 class="py-3">Team Information</h4>
                        @if (count($teams) == 0)
                            <div class="participants-single d-flex justify-content-center">
                            <h6 class="text-center">No team Found</h6>
                            </div>
                            @else
                            @foreach ($teams as $team)
                            <div class="participants-single">
                                <div class="left-area d-flex align-items-center">
                                    <img src="{{asset('storage/'.$team->logo)}}" alt="images">
                                    <div class="right-side">
                                        <h6>{{$team->name}}</h6>
                                    </div>
                                </div>
                                <div class="right-area">
                                    <div class="nice-select"><span class="current single-item share">
                                            <span class="dot"></span>
                                            <span class="dot"></span>
                                            <span class="dot"></span>
                                        </span>
                                        <ul class="list">
                                            <li><a href="/team/edit/{{$team->id}}"><i class="fa-solid fa-pen-to-square"></i>Edit Information</a></li>
                                            <li><a href="#" data-toggle="modal" data-target="#delete_team"><i class="fa-solid fa-trash"></i>Delete Team</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="participants-single">
                                <div class="left-area d-flex align-items-center">
                                    <div class="right-side">
                                        <h6>Member 1: {{$team->player_1}}</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="participants-single">
                                <div class="left-area d-flex align-items-center">
                                    <div class="right-side">
                                        <h6>Member 2: {{$team->player_2}}</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="participants-single">
                                <div class="left-area d-flex align-items-center">
                                    <div class="right-side">
                                        <h6>Member 3: {{$team->player_3}}</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="participants-single">
                                <div class="left-area d-flex align-items-center">
                                    <div class="right-side">
                                        <h6>Member 4: {{$team->player_4}}</h6>
                                    </div>
                                </div>
                            </div>
                            {{-- Modal for delete --}}
                            <!-- Modal -->
                            <div class="modal fade" id="delete_team" tabindex="-1" role="dialog" aria-labelledby="delete_teamTitle" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content" style="background: rgb(55,8,152) !important;">
                                    <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLongTitle">{{$team->name}}</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                    </div>
                                    <div class="modal-body text-white">
                                    Are you sure want to delete this?
                                    </div>
                                    <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary text-white" data-dismiss="modal">Close</button>
                                    <form action="{{ route('team.destroy', $team->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger text-white">Delete</button>
                                    </form>

                                    </div>
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
 @endsection


