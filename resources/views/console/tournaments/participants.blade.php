@extends('layouts.organizer')
@section('title','Dashboard')
@section('child-page')
    <div class="tab-pane fade show active" id="personal-info" role="tabpanel"
    aria-labelledby="personal-info-tab">
    <div class="tournament-table d-flex justify-content-between">
        <div class="table-responsive mt-3">

            <table class="table">
                <thead>
                    <tr>
                    <th scope="col">logo</th>
                    <th scope="col">Name</th>
                    <th scope="col">Member 1</th>
                    <th scope="col">Member 2</th>
                    <th scope="col">Member 3</th>
                    <th scope="col">Member 4</th>
                    </tr>
                </thead>

                <tbody>

                    @foreach ($participants as $participant)
                    <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$participant->team_id}}</td>
                    <td>{{$participant->team->logo}}</td>
                    <td>{{$participant->team->player_1}}</td>
                    <td>{{$participant->team->player_2}}</td>
                    <td>{{$participant->team->player_3}}</td>
                    <td>{{$participant->team->player_4}}</td>
                    <td>
                        <a href="/participants/{{$tournament->id}}" class="btn del-btn "><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
                            <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                            <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
                          </svg> </a>
                        <a href="/tournament/edit/{{$tournament->id}}" class="btn create-btn "><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pen-fill" viewBox="0 0 16 16">
                            <path d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001z"/>
                          </svg> </a>
                        <a href="/tournament/edit/{{$tournament->id}}" class="btn del-btn "><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="rgb(70,9,195)" class="bi bi-trash-fill del" viewBox="0 0 16 16">
                            <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/>
                          </svg> </a>
                    </td>
                </tr>
                    @endforeach

                </tbody>
                </table>


        </div>
    </div>
    </div>
@endsection
