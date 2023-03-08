@extends('layouts.dashboard')
@section('title', 'Dashboard')
@section('dashboard-page')
    <div class="row">
        <div class="col-lg-12">
            <div class="participants-area dashboard-container pb-120">
                <h4 class="py-3">Tournament Result</h4>
                <div class="tournament-table d-flex justify-content-between">
                    <div class="table-responsive mt-1">
                        @if ($results->count() == 0)
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">Rank</th>
                                        <th scope="col">Logo</th>
                                        <th scope="col">Team</th>
                                        <th scope="col">kills</th>
                                        <th scope="col">Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row"></th>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                </tbody>
                            </table>
                            <div class="null-message text-center my-5">
                                <img src="http://127.0.0.1:8000/images/null-icon.jpg" alt="error" width="80">
                                <h2 class="mt-3"><strong>Nothing to show</strong></h2>
                                <h5>You haven't published result yet.</h5>
                            </div>
                        @else
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">Rank</th>
                                        <th scope="col">Logo</th>
                                        <th scope="col">Team</th>
                                        <th scope="col">kills</th>
                                        <th scope="col">Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($results as $result)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td><img src="{{ asset('storage/' . $result->logo) }}" alt="logo" width="30" height="30"></td>
                                            <td>{{ $result->team_name }}</td>
                                            <td>{{ $result->total_kills }}</td>
                                            <td>{{ $result->total_points }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
