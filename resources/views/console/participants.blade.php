@extends('layouts.dashboard2')
@section('title','Dashboard')
@section('dashboard')
    <div class="row">
        <div class="col-lg-12">
            <div class="participants-area dashboard-container pb-120">
                <h4 class="py-3">Participants</h4>
            @if (count($participants) == 0)
                <div class="participants-single d-flex justify-content-center">
                <h6 class="text-center">No Participants Found</h6>
                </div>
                @else
                @foreach ($participants as $participant)
                <div class="participants-single">
                    <div class="left-area d-flex align-items-center">
                        <img src="{{asset('storage/'.$participant->team->logo)}}" alt="images">
                        <div class="right-side">
                            <h6>{{$participant->team->name}}</h6>
                        </div>
                    </div>
                    <div class="right-area">
                        <div class="nice-select"><span class="current single-item share">
                                <span class="dot"></span>
                                <span class="dot"></span>
                                <span class="dot"></span>
                            </span>
                            <ul class="list">
                                <li><a href="#"><i class="fa-solid fa-user"></i>Profile</a></li>
                                <li><a href="/calculate/{{$participant->id}}"><i class="fa-solid fa-calculator"></i>Calculate Points</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            @endif
        </div>
    </div>
@endsection

