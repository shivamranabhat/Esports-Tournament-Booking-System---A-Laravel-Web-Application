@extends('layouts.organizer')
@section('title','Dashboard')
@section('child-page')
    <div class="tab-pane fade show active" id="personal-info" role="tabpanel"
    aria-labelledby="personal-info-tab">
    <div class="row">
        <form method="post" action="/tournament/store" class="px-3" enctype="multipart/form-data">
            @csrf
            <div class="form-row">
                <div class="form-outline col-md-5">
                    <label class="form-label" for="name">Tournament Name</label>
                    <input type="text" id="name" name="name" class="form-control" value="{{old('name')}}"/>
                    @error('name')
                    <p class="d-flex justify-content-start text-danger mt-2">{{$message}}</p>
                    @enderror
                </div>
                <div class="form-outline col-md-3">
                    <label class="form-label" for="fees">Entry Fees</label>
                    <input type="text" id="fees" name="fees" class="form-control" value="{{old('fees')}}"/>
                    @error('fees')
                    <p class="d-flex justify-content-start text-danger mt-2">{{$message}}</p>
                    @enderror
                </div>
                <div class="form-outline col-md-4">
                    <label class="form-label" for="type">Type</label>
                    <select name="type" id="type" class="form-control">
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
                <label class="form-label" for="image">Choose banner</label>
                <div class="row">
                    @foreach ($tournament_avatars as $avatar )
                    <div class="col-6 col-lg-2 col-sm-3 mb-2">
                        <img src="{{asset('storage/'. $avatar->image)}}" data-id="{{ $avatar->id }}" class="image w-100" width="150" height="150" alt="">
                    </div>
                    @endforeach
                </div>
            </div>
            <input type="hidden" class="form-control" id="image_id" name="image_id">
            <div class="form-row">
                <div class="form-outline col-md-6 mb-4">
                    <label class="form-label" for="closing_time">Closing time</label>
                    <input type="datetime-local" class="form-control" id="closing_time" name="closing_time" value="{{old('closing_time')}}"/>
                    @error('closing_time')
                    <p class="d-flex justify-content-start text-danger mt-2">{{$message}}</p>
                    @enderror
                  </div>

                  <div class="form-outline col-md-4 mb-4">
                      <label class="form-label" for="team_size">Max Team</label>
                    <input type="number" id="team_size" name="team_size" class="form-control" value="{{old('team_size')}}"/>
                    @error('team_size')
                    <p class="d-flex justify-content-start text-danger mt-2">{{$message}}</p>
                    @enderror
                  </div>
                  <div class="form-outline col-md-2 mb-4">
                    <label class="form-label" for="prize_pool">Prize pool</label>
                  <input type="text" id="prize_pool" name="prize_pool" class="form-control" value="{{old('prize_pool')}}"/>
                  @error('prize_pool')
                  <p class="d-flex justify-content-start text-danger mt-2">{{$message}}</p>
                  @enderror
                </div>
            </div>
            <div class="form-row">
                <div class="form-outline col-md-6 mb-4">
                    <label class="form-label" for="first_prize">1st Prize</label>
                  <input type="text" id="first_prize" name="first_prize" class="form-control" value="{{old('first_prize')}}"/>
                  @error('first_prize')
                  <p class="d-flex justify-content-start text-danger mt-2">{{$message}}</p>
                  @enderror
                </div>
                <div class="form-outline col-md-4 mb-4">
                    <label class="form-label" for="second_prize">2nd Prize</label>
                  <input type="text" id="second_prize" name="second_prize" class="form-control" value="{{old('second_prize')}}"/>
                  @error('second_prize')
                  <p class="d-flex justify-content-start text-danger mt-2">{{$message}}</p>
                  @enderror
                </div>
                <div class="form-outline col-md-2 mb-4">
                    <label class="form-label" for="third_prize">3rd Prize</label>
                  <input type="text" id="third_prize" name="third_prize" class="form-control"value="{{old('third_prize')}}"/>
                  @error('third_prize')
                  <p class="d-flex justify-content-start text-danger mt-2">{{$message}}</p>
                  @enderror
                </div>
            </div>
            <div class="form-outline mb-4">
                <label class="form-label" for="rules">Rules</label>
              <textarea class="form-control" id="rules" name="rules" rows="4" value="{{old('rules')}}"></textarea>
              @error('name')
              <p class="d-flex justify-content-start text-danger mt-2">{{$message}}</p>
              @enderror
            </div>
            <input type="hidden" id="game_id" name="game_id" value="{{ $game->id }}">
            <div class="form-group">
                <button type="submit" class="update-btn">Update</button>
            </div>
        </form>
    </div>
    </div>
@endsection
