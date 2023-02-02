@extends('layouts.organizer')
@section('title','Dashboard')
@section('child-page')
    <div class="tab-pane fade show active" id="personal-info" role="tabpanel"
    aria-labelledby="personal-info-tab">
    <div class="row">
        @foreach ( $games as $game)
        <div class="column col-6 col-sm-4 col-md-2 col-lg-2 mb-3 mx-0 mt-0 p-1 game-row">
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
@endsection
