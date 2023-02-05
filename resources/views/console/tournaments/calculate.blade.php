@extends('layouts.organizer')
@section('title','Dashboard')
@section('child-page')
    <div class="tab-pane fade show active" id="personal-info" role="tabpanel"
    aria-labelledby="personal-info-tab">
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
            {{-- <div class="form-outline col-md-6">
                <label class="form-label" for="team_name">Team Name</label>
                <input type="text" id="team_name" name="team_name" class="form-control" value="{{old('team_name')}}"/>
                @error('team_name')
                <p class="d-flex justify-content-start text-danger mt-2">{{$message}}</p>
                @enderror
            </div> --}}
            <div class="form-outline col-md-6">
                <label class="form-label" for="team_name">Team Name</label>
                <select name="team_name" id="team_name" class="form-control">
                    <option value="#">Select team</option>
                    @foreach ( $bookings as $booking)
                    <option value="{{$booking->team->name}}">{{$booking->team->name}}</option>
                    @endforeach
                </select>
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
         <div class="form-group">
            <button type="submit" class="btn pax-3 py-2 update-btn">Publish</button>
        </div>
      </form>

    </div>
@endsection
