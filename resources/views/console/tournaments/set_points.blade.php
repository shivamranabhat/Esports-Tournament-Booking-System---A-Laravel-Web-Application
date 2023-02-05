@extends('layouts.organizer')
@section('title','Dashboard')
@section('child-page')
    <div class="tab-pane fade show active" id="personal-info" role="tabpanel"
    aria-labelledby="personal-info-tab">
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
            <div class="form-group">
                <button type="submit" class="btn pax-3 py-2 update-btn">Add</button>
            </div>
          </form>
    </div>
@endsection
