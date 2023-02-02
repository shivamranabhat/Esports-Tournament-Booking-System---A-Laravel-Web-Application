@extends('layouts.organizer')
@section('title','Dashboard')
@section('child-page')
<div class="tab-pane fade show active" id="personal-info"
    aria-labelledby="personal-info-tab">
    {{-- <div class="filter d-flex ml-3 align-items-center">
        <span class="mt-3 text-white">Filter</span>
        <div class="dropdown ml-2">
            <button class="btn dropdown-toggle rounded px-4 mt-2 text-white" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Games
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                @foreach ($games as $game)
                    <a class="dropdown-item" href="#">{{$game->name}}</a>
                @endforeach

            </div>
          </div>
    </div> --}}
    <div class="create">
        <div class="button d-flex justify-content-end">
            <a href="/select" class="btn  text-white create-btn px-3 py-2"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-circle-fill" viewBox="0 0 16 16">
                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z"/>
              </svg> Create</a>
        </div>
    </div>
    <div class="tournament-table d-flex justify-content-between">
        <div class="table-responsive mt-3">
            @if ($tournaments->count()== 0)
            <table class="table">
                <thead>
                    <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Type</th>
                    <th scope="col">Starts</th>
                    <th scope="col">Ends</th>
                    <th scope="col">Prize</th>
                    <th scope="col">Action</th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                    <th scope="row"></th>
                    <td></td>
                    <td></td>
                    <td></td>
                    </tr>
                </tbody>
                </table>
                <div class="null-message text-center my-5">
                <img src="http://127.0.0.1:8000/images/null-icon.jpg" alt="error" width="80">
                <h2 class="mt-3"><strong>Nothing to show</strong></h2>
                <h5>You haven't created any tournaments yet. Please click on Create Tournament.</h5>
            </div>
            @else
            <table class="table">
                <thead>
                    <tr>
                    <th scope="col">S.N.</th>
                    <th scope="col">Name</th>
                    <th scope="col">Type</th>
                    <th scope="col">Starts</th>
                    <th scope="col">Ends</th>
                    <th scope="col">Prize</th>
                    <th scope="col">Action</th>
                    </tr>
                </thead>

                <tbody>

                    @foreach ($tournaments as $tournament)
                    <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$tournament->name}}</td>
                    <td>{{$tournament->type}}</td>
                    <td>{{$tournament->created_at}}</td>
                    <td>{{$tournament->closing_time}}</td>
                    <td>{{$tournament->prize_pool}}</td>
                    <td>
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

            @endif


        </div>
    </div>

</div>
@endsection
