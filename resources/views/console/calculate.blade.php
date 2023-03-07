@extends('layouts.dashboard')
@section('title', 'Dashboard')
@section('dashboard-page')
    <div class="row">
        <div class="col-lg-12">
            <div class="participants-area dashboard-container pb-120">
                <h4 class="py-3">Calculate Points</h4>
                <form method="post" action="/calculate" class="entry-form p-2">
                    @csrf

                    <div class="form-row mb-4">
                        <div class="form-outline col-md-6">
                            <label class="form-label text-white" for="player_name1">Player Name</label>
                            <input type="text" id="player_name1" name="player_name1" class="form-control"
                                value="{{ $team->player_1 }}" readonly />
                            @error('player_name1')
                                <p class="d-flex justify-content-start text-danger mt-2">{{ $message }}</p>
                            @enderror
                            @error('player_name1')
                                <p class="d-flex justify-content-start text-danger mt-2">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="form-outline col-md-6">
                            <label class="form-label text-white" for="kills1">Kills</label>
                            <input type="text" id="kills1" name="kills1" class="form-control"
                                value="{{ old('kills1') }}" />
                            @error('kills1')
                                <p class="d-flex justify-content-start text-danger mt-2">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="form-row mb-4">
                        <div class="form-outline col-md-6">
                            <label class="form-label text-white" for="player_name2">Player Name</label>
                            <input type="text" id="player_name2" name="player_name2" class="form-control"
                                value="{{ $team->player_2 }}" readonly />
                            @error('player_name2')
                                <p class="d-flex justify-content-start text-danger mt-2">{{ $message }}</p>
                            @enderror
                            @error('player_name2')
                                <p class="d-flex justify-content-start text-danger mt-2">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="form-outline col-md-6">
                            <label class="form-label text-white" for="kills2">Kills</label>
                            <input type="text" id="kills2" name="kills2" class="form-control"
                                value="{{ old('kills2') }}" />
                            @error('kills2')
                                <p class="d-flex justify-content-start text-danger mt-2">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="form-row mb-4">
                        <div class="form-outline col-md-6">
                            <label class="form-label text-white" for="player_name3">Player Name</label>
                            <input type="text" id="player_name3" name="player_name3" class="form-control"
                                value="{{ $team->player_3 }}" readonly />
                            @error('player_name3')
                                <p class="d-flex justify-content-start text-danger mt-2">{{ $message }}</p>
                            @enderror
                            @error('player_name3')
                                <p class="d-flex justify-content-start text-danger mt-2">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="form-outline col-md-6">
                            <label class="form-label text-white" for="kills3">Kills</label>
                            <input type="text" id="kills3" name="kills3" class="form-control"
                                value="{{ old('kills3') }}" />
                            @error('kills3')
                                <p class="d-flex justify-content-start text-danger mt-2">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="form-row mb-4">
                        <div class="form-outline col-md-6">
                            <label class="form-label text-white" for="player_name4">Player Name</label>
                            <input type="text" id="player_name4" name="player_name4" class="form-control"
                                value="{{ $team->player_4 }}" readonly />
                            @error('player_name4')
                                <p class="d-flex justify-content-start text-danger mt-2">{{ $message }}</p>
                            @enderror
                            @error('player_name4')
                                <p class="d-flex justify-content-start text-danger mt-2">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="form-outline col-md-6">
                            <label class="form-label text-white" for="kills4">Kills</label>
                            <input type="text" id="kills4" name="kills4" class="form-control"
                                value="{{ old('kills4') }}" />
                            @error('kills4')
                                <p class="d-flex justify-content-start text-danger mt-2">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="form-row mb-4">
                        <div class="form-outline col-md-9">
                            <label class="form-label text-white" for="placement">Placement</label>
                            <input type="text" id="placement" name="placement" class="form-control"
                                value="{{ old('placement') }}" />
                            @error('placement')
                                <p class="d-flex justify-content-start text-danger mt-2">{{ $message }}</p>
                            @enderror
                            <input type="hidden" id="team_id" name="team_id" value="{{ $team->id }}">
                        </div>
                        <div class="form-group form-outline col-md-3">
                            <label class="form-label d-block ml-4 text-white" for="match_no">Game</label>
                            <select name="match_no" id="match_no">
                                <option value="#">Select Match No</option>
                                <option value="match_1">Match 1</option>
                                <option value="match_2">Match 2</option>
                                <option value="match_3">Match 3</option>
                                <option value="match_4">Match 4</option>
                                <option value="match_5">Match 5</option>
                                <option value="match_6">Match 6</option>
                            </select>
                            @error('match_no')
                                <p class="d-flex justify-content-start text-danger mt-2">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <!-- Submit button -->
                    <div class="form-group">
                        <button type="submit" class="btn px-3 py-2 text-white update-btn">Publish</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
@endsection
