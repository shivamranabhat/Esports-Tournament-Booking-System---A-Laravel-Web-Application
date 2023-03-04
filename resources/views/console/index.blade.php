@extends('layouts.dashboard')
@section('title', 'Dashboard')
@section('dashboard-page')

    @if (count($tournaments) == 0)
        <div class="row">
            <div class="col-lg-12">
                <div class="participants-area dashboard-container pb-120">
                    <h4 class="py-3">Tournaments</h4>
                    <div class="participants-single d-flex justify-content-center">
                        <h6 class="text-center">No Tournament Found</h6>
                    </div>
                </div>
            </div>
        </div>
    @else
        <div class="row">
            <div class="col-lg-12">
                <div class="participants-area dashboard-container pb-120">
                    <h4 class="py-3">Tournaments</h4>
                    @foreach ($tournaments as $tournament)
                        <div class="participants-single">
                            <div class="left-area d-flex align-items-center">
                                <img src="{{ asset('storage/' . $tournament->image->image) }}" alt="images">
                                <div class="right-side">
                                    <h6>{{ $tournament->name }}</h6>
                                </div>
                            </div>
                            <div class="right-area">
                                <div class="nice-select"><span class="current single-item share">
                                        <span class="dot"></span>
                                        <span class="dot"></span>
                                        <span class="dot"></span>
                                    </span>
                                    <ul class="list">
                                        <li><a href="/tournament/edit/{{ $tournament->id }}"><i
                                                    class="fa-solid fa-pen-to-square"></i>Edit</a></li>
                                        <li><a href="#" data-toggle="modal" data-target="#delete_tournament"><i
                                                    class="fa-solid fa-trash"></i>Delete</a></li>
                                        <li><a href="/participants/{{ $tournament->id }}"><i
                                                    class="fa-solid fa-users"></i>Participants</a></li>
                                        <li><a href="/result/{{ $tournament->id }}"><i
                                                    class="fa-solid fa-square-poll-vertical"></i>Result</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    @endforeach
                        {{-- Modal for delete --}}
                        <!-- Modal -->
                    <div class="modal fade" id="delete_tournament" tabindex="-1" role="dialog"
                        aria-labelledby="delete_tournamentTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content" style="background: rgb(55,8,152) !important;">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLongTitle">{{ $tournament->name }}</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body text-white">
                                    Are you sure want to delete this?
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary text-white"
                                        data-dismiss="modal">Close</button>
                                    <form action="{{ route('tournament.destroy', $tournament->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger text-white">Delete</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif
@endsection
