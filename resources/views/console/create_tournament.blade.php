@extends('layouts.userboard')
@section('title','Create tournament')
@section('page-name')
<!-- section sidebar content -->
    <section class="home-section">
        <div class="tab-content">
            <nav>
                <div class="sidebar-button">
                    <svg class="sidebarBtn mr-3" xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
                      </svg>
                    <span class="dashboard">Create Tournament</span>
                </div>
            </nav>
            <div class="home-content">
                <div class="bottom-content py-5">
                    <div class="container px-5">
                        <form method="post" action="/tournament/store" class="entry-form p-2">
                            @csrf
                            <div class="form-row">
                                <div class="form-outline col-md-6">
                                    <label class="form-label" for="name">Tournament Name</label>
                                    <input type="text" id="name" name="name" class="form-control" value="{{old('name')}}"/>
                                    @error('name')
                                    <p class="d-flex justify-content-start text-danger mt-2">{{$message}}</p>
                                    @enderror
                                </div>
                                <div class="form-outline col-md-4 mb-4">
                                    <label class="form-label" for="type">Type</label>
                                    <select name="type" id="type" class="form-control">
                                        <option value="#">Select type</option>
                                        <option value="Solo">Solo</option>
                                          <option value="Duo">Duo</option>
                                          <option value="Squad">Squad</option>
                                    </select>
                                </div>
                                <div class="form-outline col-md-2">
                                    <label class="form-label" for="fees">Entry Fees</label>
                                    <input type="text" id="fees" name="fees" class="form-control" value="{{old('fees')}}"/>
                                    @error('fees')
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
                            <!-- Submit button -->
                            <button type="submit" class="btn btn-primary btn-block mb-4">Create</button>
                          </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection



