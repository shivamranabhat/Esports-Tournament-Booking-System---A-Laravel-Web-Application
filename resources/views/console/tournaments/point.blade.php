@extends('layouts.organizer')
@section('title','Dashboard')
@section('child-page')
<div class="tab-pane fade show active pb-120" id="personal-info"
    aria-labelledby="personal-info-tab">
    <div class="create">
        <div class="button d-flex justify-content-end">
            <a href="/points/show" class="btn  text-white create-btn px-3 py-2"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-circle-fill" viewBox="0 0 16 16">
                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z"/>
              </svg> Create</a>
        </div>
    </div>
    <div class="tournament-table d-flex justify-content-between">
        <div class="table-responsive mt-3">
            @if ($points->count()== 0)
            <table class="table">
                <thead>
                    <tr>
                    <th scope="col">S.N.</th>
                    <th scope="col">Kills_pts</th>
                    <th scope="col">Placement_pts</th>
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
                <h5>You haven't set any points yet.</h5>
            </div>
            @else
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">S.N.</th>
                        <th scope="col">Kills_pts</th>
                        <th scope="col">Placement_pts</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>

                <tbody>

                    @foreach ($points as $point)
                    <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$point->kills_point}}</td>
                    <td>{{$point->placement_point}}</td>
                    <td>
                        <a href="/point/edit/{{$point->id}}" class="btn create-btn "><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pen-fill" viewBox="0 0 16 16">
                            <path d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001z"/>
                          </svg> </a>
                        <a href="/point/edit/{{$point->id}}" class="btn del-btn "><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="rgb(70,9,195)" class="bi bi-trash-fill del" viewBox="0 0 16 16">
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
