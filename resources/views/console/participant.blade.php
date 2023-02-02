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
                        <div class="row">
                            @foreach ($participants as $participant)
                            <div class="col-12 col-sm-12 col-md-6">
                                <div class="card" style="width: 18rem;">
                                    <img class="card-img-top" src="..." alt="Card image cap">
                                    <div class="card-body">
                                      <h5 class="card-title">{{$participant->tournament_id}}</h5>
                                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                      <a href="#" class="btn btn-primary">Go somewhere</a>
                                    </div>
                                  </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection



