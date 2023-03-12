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
                <div class="participants-area dashboard-container pb-30">
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
                                        <li>
                                            <form action="{{ route('tournament.destroy', $tournament->id) }}"
                                                method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="text-white" style="background: rgb(14,6,61)"><i
                                                        class="fa-solid fa-trash"></i> Delete</button>
                                            </form>
                                        </li>
                                        <li><a href="/participants/{{ $tournament->id }}"><i
                                                    class="fa-solid fa-users"></i>Participants</a></li>
                                        <li><a href="/result/{{ $tournament->id }}"><i
                                                    class="fa-solid fa-square-poll-vertical"></i>Result</a></li>
                                    </ul>
                                </div>
                            </div>

                        </div>
                    @endforeach
                    <div class="pagination d-flex justify-content-end my-3">
                        <nav aria-label="Page navigation">
                            <ul class="pagination">
                                <li class="page-item">
                                    {{ $tournaments->links('vendor.pagination.simple-bootstrap-4') }}
                                </li>
                            </ul>
                        </nav>
                    </div>
                    {{-- Modal for delete --}}

                </div>
            </div>
        </div>
    @endif
@endsection
