@extends('layouts.main')
@section('titile','Update Profile')
@section('page-name')
 <!-- banner-section start -->
 <section id="banner-section" class="inner-banner profile">
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
                        <h1>Profile</h1>
                        <div class="breadcrumb-area">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb d-flex justify-content-center">
                                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Edit Profile</li>
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
                            <img src="images/profile-logo.png"  class="rounded-circle" width="90" id="avatar" alt="Image">
                        </div>
                        <div class="name-area">
                            @auth()
                            @if (auth()->user()->name == null)
                            <h4>Username</h4>
                            <p>Region:</p>
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
                                        <h5>Player information</h5>
                                        <p class="text-sm">Player's game specific information</p>
                                    </div>
                                </div>
                                <ul class="nav nav-tabs" id="myTab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="personal-info-tab" data-toggle="tab"
                                            href="#personal-info" role="tab" aria-controls="personal-info"
                                            aria-selected="true">Personal Details</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="team-tab" data-toggle="tab" href="#team" role="tab"
                                            aria-controls="team" aria-selected="false">Team Information</a>
                                    </li>
                                </ul>
                                <div class="tab-content" id="myTabContents">
                                    <div class="tab-pane fade show active" id="personal-info" role="tabpanel"
                                        aria-labelledby="personal-info-tab">
                                        <form method="post" action="/profile/store" class="px-3" enctype="multipart/form-data">
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
                                                    <label for="full_name">Full name</label>
                                                    <input placeholder="Enter your name" type="text" id="full_name" name="full_name" value="{{ old('full_name') }}">
                                                    @error('full_name')
                                                <p class="d-flex justify-content-start text-danger mt-2">{{$message}}</p>
                                                @enderror
                                                </div>
                                                <div class="form-group form-outline col-md-6">
                                                    <label for="phone">Phone</label>
                                                    <input placeholder="Enter your phone" type="phone" id="phone" name="phone" value="{{ old('phone') }}">
                                                    @error('phone')
                                                <p class="d-flex justify-content-start text-danger mt-2">{{$message}}</p>
                                                @enderror
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group form-outline col-md-6">
                                                    <label for="email">Email</label>
                                                    <input placeholder="Enter your email" type="email" id="email" name="email" value="{{ old('email') }}">
                                                    @error('email')
                                                <p class="d-flex justify-content-start text-danger mt-2">{{$message}}</p>
                                                @enderror
                                                </div>
                                                <div class="form-group form-outline col-md-6">
                                                    <label for="game_id">Game</label>
                                                    <select name="game_id" id="game_id">
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
                                                    <label for="level">Level</label>
                                                    <input placeholder="Enter your level" type="text" id="level" name="level" value="{{ old('level') }}">
                                                    @error('level')
                                                <p class="d-flex justify-content-start text-danger mt-2">{{$message}}</p>
                                                @enderror
                                                </div>
                                                <div class="form-group form-outline col-md-6">
                                                    <label for="uid">UID</label>
                                                    <input placeholder="Enter your uid" type="texts" id="uid" name="uid" value="{{ old('uid') }}">
                                                    @error('uid')
                                                <p class="d-flex justify-content-start text-danger mt-2">{{$message}}</p>
                                                @enderror
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <button type="submit" class="update-btn">Update</button>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="tab-pane fade" id="team" role="tabpanel" aria-labelledby="team-tab">
                                        <div class="others">
                                            <form method="post" action="/team/store" class="px-3" enctype="multipart/form-data">
                                                @csrf
                                                <div class="file-upload-container mx-auto mb-5">
                                                    <label for="user_image" class="file-upload-label">
                                                      <div class="file-upload-icon">
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
                                                    <label for="name">Team Name</label>
                                                    <input placeholder="Enter your team name" type="text" id="name" name="name">
                                                    @error('name')
                                                    <p class="d-flex justify-content-start text-danger mt-2">{{$message}}</p>
                                                    @enderror
                                                </div>

                                                <div class="form-row">
                                                    <div class="form-group form-outline col-md-6">
                                                        <label for="player_1">Player A</label>
                                                        <input placeholder="Enter your player name" type="text" id="player_1" name="player_1">
                                                        @error('player_1')
                                                        <p class="d-flex justify-content-start text-danger mt-2">{{$message}}</p>
                                                        @enderror
                                                    </div>
                                                    <div class="form-group form-outline col-md-6">
                                                        <label for="player_2">Player B</label>
                                                        <input placeholder="Enter your player name" type="text" id="player_2" name="player_2">
                                                        @error('player_2')
                                                        <p class="d-flex justify-content-start text-danger mt-2">{{$message}}</p>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="form-group form-outline col-md-6">
                                                        <label for="player_3">Player C</label>
                                                        <input placeholder="Enter your player name" type="text" id="player_3" name="player_3">
                                                        @error('player_3')
                                                        <p class="d-flex justify-content-start text-danger mt-2">{{$message}}</p>
                                                        @enderror
                                                    </div>
                                                    <div class="form-group form-outline col-md-6">
                                                        <label for="player_4">Option (Player D)</label>
                                                        <input placeholder="Enter your player name" type="text" id="player_4" name="player_4">
                                                    </div>
                                                <div class="form-group">
                                                    <button type="submit" class="update-btn">Update</button>
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
        </div>
    </div>
    </div>
</section>
<!-- Trophies Content End -->
@endsection
