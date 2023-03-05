@extends('layouts.dashboard')
@section('title', 'Dashboard')
@section('dashboard-page')
    <div class="row">
        <div class="col-lg-12">
            <div class="participants-area dashboard-container pb-120">
                <h4 class="py-3">Tournament Result</h4>
                <div class="tournament-table d-flex justify-content-between">
                    <div class="table-responsive mt-1">
                        @if ($results->count()== 0)
                        <table class="table">
                            <thead>
                                <tr>
                                <th scope="col">S.N.</th>
                                <th scope="col">Tournament Name</th>
                                <th scope="col">Team</th>
                                <th scope="col">kills</th>
                                <th scope="col">Placement</th>
                                <th scope="col">Total</th>
                                <th scope="col">Action</th>
                                </tr>
                            </thead>

                            <tbody>
                                <tr>
                                <th scope="row"></th>
                                <td></td>
                                <td></td>
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
                                    <th scope="col">S.N.</th>
                                    <th scope="col">Tournament Name</th>
                                    <th scope="col">Team</th>
                                    <th scope="col">kills</th>
                                    <th scope="col">Placement</th>
                                    <th scope="col">Total</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>

                            <tbody>

                                @foreach ($results as $result)
                                <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$result->tournament->name}}</td>
                                <td>{{$result->team->name}}</td>
                                <td>{{$result->kills}}</td>
                                <td>{{$result->placement}}</td>
                                <td>{{$result->total}}</td>
                                <td>
                                    <a href="/result/edit/{{$result->id}}" class="btn create-btn mb-2"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pen-fill" viewBox="0 0 16 16">
                                        <path d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001z"/>
                                        </svg> </a>
                                    <a href="/result/edit/{{$result->id}}" class="btn del-btn mb-2"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="rgb(70,9,195)" class="bi bi-trash-fill del" viewBox="0 0 16 16">
                                        <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/>
                                        </svg> </a>
                                </td>
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
