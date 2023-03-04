@extends('layouts.main')
@section('title', 'Tournaments')
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
                                        <li class="breadcrumb-item active" aria-current="page">Profile</li>
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
                        <div
                            class="col-lg-4 col-md-4 col-sm-4 d-flex align-items-center justify-content-sm justify-content-center">
                            <div class="mid-area text-center">
                                <h3>Edit Profile</h3>
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
                                <a class="nav-link active" id="overview-tab" data-toggle="tab" href="#overview"
                                    role="tab" aria-controls="overview" aria-selected="true">Overview</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="create-team-tab" data-toggle="tab" href="#create-team"
                                    role="tab" aria-controls="manage-team" aria-selected="true">Update Team</a>
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
                                <div class="participants-area dashboard-container">
                                    <h4 class="py-3">Player Information</h4>
                                    <form method="post" action="/profile/update/{{ $profile->id }}"
                                        class="entry-form px-3" enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')
                                        <div class="file-upload-container mx-auto mb-5">
                                            <label for="user_image" class="file-upload-label">
                                                <div class="file-upload-icon">
                                                    <i class="fas fa-upload"></i>
                                                </div>

                                            </label>
                                            <input type="file" id="image" name="image" class="file-upload-input"
                                                onchange="previewImage()" />
                                            @error('image')
                                                <p class="d-flex justify-content-start text-danger mt-4">{{ $message }}</p>
                                            @enderror
                                            <img id="preview-image" src="{{ asset('storage/' . $profile->image) }}"
                                                alt="Preview Image" />

                                        </div>
                                        <div class="form-row">
                                            <div class="form-group form-outline col-md-6">
                                                <label class="form-label text-white" for="full_name">Full name</label>
                                                <input placeholder="Enter your name" class="form-control" type="text"
                                                    id="full_name" name="full_name" value="{{ $profile->full_name }}">
                                                @error('full_name')
                                                    <p class="d-flex justify-content-start text-danger mt-2">{{ $message }}
                                                    </p>
                                                @enderror
                                            </div>
                                            <div class="form-group form-outline col-md-6">
                                                <label class="form-label text-white" for="phone">Phone</label>
                                                <input placeholder="Enter your phone" class="form-control" type="phone"
                                                    id="phone" name="phone" value="{{ $profile->phone }}">
                                                @error('phone')
                                                    <p class="d-flex justify-content-start text-danger mt-2">
                                                        {{ $message }}</p>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group form-outline col-md-6">
                                                <label class="form-label text-white" for="email">Email</label>
                                                <input placeholder="Enter your email" class="form-control" type="email"
                                                    id="email" name="email" value="{{ $profile->email }}">
                                                @error('email')
                                                    <p class="d-flex justify-content-start text-danger mt-2">
                                                        {{ $message }}</p>
                                                @enderror
                                            </div>
                                            <div class="form-group form-outline col-md-6">
                                                <label class="form-label d-block ml-4 text-white"
                                                    for="game_id">Game</label>
                                                <select name="game_id" id="game_id">
                                                    <option value="{{ $profile->game_id }}">{{ $profile->game->name }}
                                                    </option>
                                                    @foreach ($games as $game)
                                                        <option value="{{ $game->id }}" id="select"
                                                            value="{{ old('game_name') }}">{{ $game->name }}</option>
                                                    @endforeach
                                                </select>
                                                @error('game_id')
                                                    <p class="d-flex justify-content-start text-danger mt-2">
                                                        {{ $message }}</p>
                                                @enderror
                                            </div>

                                        </div>
                                        <div class="form-row">
                                            <div class="form-group form-outline col-md-6">
                                                <label class="form-label text-white" for="level">Level</label>
                                                <input placeholder="Enter your level" class="form-control" type="text"
                                                    id="level" name="level" value=" {{ $profile->level }}">
                                                @error('level')
                                                    <p class="d-flex justify-content-start text-danger mt-2">
                                                        {{ $message }}</p>
                                                @enderror
                                            </div>
                                            <div class="form-group form-outline col-md-6">
                                                <label class="form-label text-white" for="uid">UID</label>
                                                <input placeholder="Enter your uid" class="form-control" type="texts"
                                                    id="uid" name="uid" value="{{ $profile->uid }}">
                                                @error('uid')
                                                    <p class="d-flex justify-content-start text-danger mt-2">
                                                        {{ $message }}</p>
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
                                    @if (is_null($teams))
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
                                    @else
                                        <form method="post" action="/team/update/{{$teams->id}}" class="px-3"
                                            enctype="multipart/form-data">
                                            @csrf
                                            @method('PUT')
                                            {{-- @method('PUT') --}}
                                            <div class="file-upload-container mx-auto mb-5">
                                                <label for="user_image" class="file-upload-label">
                                                </label>
                                                <input type="file" id="image" name="image" class="file-upload-input"
                                                    onchange="showLogo()" />
                                                @error('image')
                                                    <p class="d-flex justify-content-start text-danger mt-4">{{ $message }}</p>
                                                @enderror
                                                <img id="preview-image" src="{{ asset('storage/' . $teams->logo) }}"
                                                    alt="Preview Image" />
                                                    <div class="file-upload-icon">
                                                        <i class="fas fa-upload"></i>
                                                    </div>

                                            </div>
                                            <div class="form-group form-outline">
                                                <label class="form-label text-white" for="name">Team Name</label>
                                                <input class="form-control" placeholder="Enter your team name"
                                                    type="text" id="name" name="name" value="{{$teams->name}}"/>
                                                @error('name')
                                                    <p class="d-flex justify-content-start text-danger mt-2">
                                                        {{ $message }}</p>
                                                @enderror
                                            </div>

                                            <div class="form-row">
                                                <div class="form-group form-outline col-md-6">
                                                    <label class="form-label text-white" for="player_1">Player A</label>
                                                    <input class="form-control" placeholder="Enter your player name"
                                                        type="text" id="player_1" name="player_1" value="{{$teams->player_1}}">
                                                    @error('player_1')
                                                        <p class="d-flex justify-content-start text-danger mt-2">
                                                            {{ $message }}</p>
                                                    @enderror
                                                </div>
                                                <div class="form-group form-outline col-md-6">
                                                    <label class="form-label text-white" for="player_2">Player B</label>
                                                    <input class="form-control" placeholder="Enter your player name"
                                                        type="text" id="player_2" name="player_2" value="{{$teams->player_2}}">
                                                    @error('player_2')
                                                        <p class="d-flex justify-content-start text-danger mt-2">
                                                            {{ $message }}</p>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group form-outline col-md-6">
                                                    <label class="form-label text-white" for="player_3">Player C</label>
                                                    <input class="form-control" placeholder="Enter your player name"
                                                        type="text" id="player_3" name="player_3" value="{{$teams->player_3}}">
                                                    @error('player_3')
                                                        <p class="d-flex justify-content-start text-danger mt-2">
                                                            {{ $message }}</p>
                                                    @enderror
                                                </div>
                                                <div class="form-group form-outline col-md-6">
                                                    <label class="form-label text-white" for="player_4">Player D</label>
                                                    <input class="form-control" placeholder="Enter your player name"
                                                        type="text" id="player_4" name="player_4" value="{{$teams->player_4}}">
                                                </div>
                                                <div class="form-group mb-5">
                                                    <button type="submit" class="btn text-white update-btn">Update</button>
                                                </div>
                                        </form>
                                    @endif
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
