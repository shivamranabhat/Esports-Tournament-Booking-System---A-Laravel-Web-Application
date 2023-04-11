@extends('layouts.main')
@section('title', 'Reviews')
@section('page-name')
    <!-- banner-section start -->
    <section id="banner-section" class="inner-banner tournaments">
        <div class="ani-img">
            <img class="img-1" src="http://127.0.0.1:8000/images/banner-circle-1.png" alt="icon">
            <img class="img-2" src="http://127.0.0.1:8000/images/banner-circle-2.png" alt="icon">
            <img class="img-3" src="http://127.0.0.1:8000/images/banner-circle-2.png" alt="icon">
        </div>
        <div class="banner-content d-flex align-items-center">
            <div class="container py-2">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <div class="main-content">
                            <h1>Organizer</h1>
                            <div class="breadcrumb-area">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb d-flex justify-content-center">
                                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                        <li class="breadcrumb-item active mb-3" aria-current="page">Reviews</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="headign-info">
                <div class="top-area">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-4 d-flex justify-content-center">
                            <img src="http://127.0.0.1:8000/images/character_01.png" alt="image">
                        </div>
                        <div
                            class="col-lg-4 col-md-4 col-sm-4 d-flex align-items-center justify-content-sm justify-content-center">
                            <div class="mid-area text-center">
                                <h3>Reviews</h3>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 zindex">
                            <img src="http://127.0.0.1:8000/images/character_02.png" alt="image">
                        </div>
                    </div>
                </div>
                <div class="bottom-area">
                    <div class="bottom">

                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="review-tab" data-toggle="tab" href="#review" role="tab"
                                    aria-controls="review" aria-selected="true">Add Review</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="my-review-tab" data-toggle="tab" href="#my-review" role="tab"
                                    aria-controls="my-reviews" aria-selected="true">My Reviews</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="overview-tab" data-toggle="tab" href="#overview" role="tab"
                                    aria-controls="overview" aria-selected="true">Overview</a>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- banner-section end -->
    <!-- Testimonials Content Start -->
    <section id="tournaments-content">
        <div class="tab-content" id="myTabContent">
            <!-- Testimonials Content End -->
            <div class="tab-pane fade show active" id="review" role="tabpanel" aria-labelledby="review-tab">
                <div class="participants">
                    <div class="container p-30">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="participants-area dashboard-container">
                                    <h4 class="py-3">Give Review</h4>
                                    <form method="POST" action="{{ route('add-ratings') }}" class="entry-form px-2">
                                        @csrf
                                        <label class="form-label text-white" for="comments">Rate</label>
                                        <p onmouseout="CRateSelected()" class="cursor">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30"
                                                id="span1" onmouseout="CRateOut(1)" onmouseover="CRateOver(1)"
                                                onclick="CRateClick(1)" fill="currentColor" class="bi bi-star-fill"
                                                viewBox="0 0 16 16">
                                                <path
                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30"
                                                id="span2" onmouseout="CRateOut(2)" onmouseover="CRateOver(2)"
                                                onclick="CRateClick(2)" fill="currentColor" class="bi bi-star-fill"
                                                viewBox="0 0 16 16">
                                                <path
                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30"
                                                id="span3" onmouseout="CRateOut(3)" onmouseover="CRateOver(3)"
                                                onclick="CRateClick(3)" fill="currentColor" class="bi bi-star-fill"
                                                viewBox="0 0 16 16">
                                                <path
                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30"
                                                id="span4" onmouseout="CRateOut(4)" onmouseover="CRateOver(4)"
                                                onclick="CRateClick(4)" fill="currentColor" class="bi bi-star-fill"
                                                viewBox="0 0 16 16">
                                                <path
                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30"
                                                id="span5" onmouseout="CRateOut(5)" onmouseover="CRateOver(5)"
                                                onclick="CRateClick(5)" fill="currentColor" class="bi bi-star-fill"
                                                viewBox="0 0 16 16">
                                                <path
                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                            </svg>
                                        </p>
                                        <p id="Message" class="text-danger mt-2"></p>
                                        <div>
                                            <input type="hidden" id="rating" name="rating" value="0" />
                                            <input type="hidden" id="comments_on" name="comments_on"
                                                value="{{ $comments_on->id }}" />
                                        </div>
                                        <div class="form-group form-outline mt-3">
                                            <label class="form-label text-white" for="comments">Please leave your comments
                                                on organizer</label>
                                            <textarea class="form-control bg-white text-dark" id="comment" name="comment" rows="4">{{ old('comment') }}</textarea>
                                            @error('comment')
                                                <p class="d-flex justify-content-start text-danger mt-2">{{ $message }}
                                                </p>
                                            @enderror
                                        </div>
                                        <div class="form-group mb-5">
                                            <button type="submit" class="btn update-btn text-white">Submit</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="my-review" role="tabpanel" aria-labelledby="my-review-tab">
                <div class="participants">
                    <div class="container p-30">
                        @if (count($user_rating) == 0)
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="participants-area dashboard-container p-30">
                                        <h4 class="py-3">My Review</h4>
                                        <div class="participants-single mb-5 d-flex justify-content-center">
                                            <h6 class="text-center">No Review Found</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @else
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="participants-area dashboard-container p-30 mb-5">
                                        <h4 class="py-3">My Reviews</h4>
                                        @foreach ($user_rating as $user)
                                            <div class="participants-single">
                                                <div class="left-area d-flex align-items-center">
                                                    <img src="{{ asset('storage/' . $profiles->image) }}"
                                                        style="width:70px;height:70px" alt="images">
                                                    <div class="right-side">
                                                        <p>
                                                            @for ($i = 0; $i < $user->rating; $i++)
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="25"
                                                                    height="25" fill="#00FADF" class="bi bi-star-fill"
                                                                    viewBox="0 0 16 16">
                                                                    <path
                                                                        d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                                    </path>
                                                                </svg>
                                                            @endfor
                                                            @for ($i = $user->rating; $i < 5; $i++)
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="25"
                                                                    height="25" fill="currentColor"
                                                                    class="bi bi-star-fill" viewBox="0 0 16 16">
                                                                    <path
                                                                        d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                                    </path>
                                                                </svg>
                                                            @endfor
                                                        </p>
                                                        <p class="mt-2">{{ $user->comment }}</p>
                                                    </div>
                                                </div>
                                                <div class="right-area">
                                                    <div class="nice-select"><span class="current single-item share">
                                                            <span class="dot"></span>
                                                            <span class="dot"></span>
                                                            <span class="dot"></span>
                                                        </span>
                                                        <ul class="list">
                                                            <li><a href="#" data-toggle="modal"
                                                                    data-target="#delete_team"><i
                                                                        class="fa-solid fa-trash"></i>Delete</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <!-- Modal -->
                                                <div class="modal fade" id="delete_team" tabindex="-1" role="dialog"
                                                    aria-labelledby="delete_teamTitle" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                                        <div class="modal-content"
                                                            style="background: rgb(55,8,152) !important;">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLongTitle">
                                                                    Delete Review</h5>
                                                                <button type="button" class="close"
                                                                    data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body text-white">
                                                                Are you sure want to delete this?
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button"
                                                                    class="btn btn-secondary text-white"
                                                                    data-dismiss="modal">Close</button>
                                                                <form action="{{route('rating.destroy',$user->id)}}" method="POST">
                                                                    @csrf
                                                                    @method('DELETE')
                                                                    <button type="submit"
                                                                        class="btn btn-danger text-white">Delete</button>
                                                                </form>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="overview" role="tabpanel" aria-labelledby="overview-tab">
                <div class="participants">
                    <div class="container p-30">
                        @if (count($ratings) == 0)
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="participants-area dashboard-container p-30">
                                        <h4 class="py-3">Reviews</h4>
                                        <div class="participants-single mb-5 d-flex justify-content-center">
                                            <h6 class="text-center">No Review Found</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @else
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="participants-area dashboard-container p-30 mb-5">
                                        <h4 class="py-3">Reviews</h4>
                                        @foreach ($ratings as $rating)
                                            <div class="participants-single">
                                                <div class="left-area d-flex align-items-center">
                                                    <img src="http://127.0.0.1:8000/images/default-avatar.png" alt="images">
                                                    <div class="right-side">
                                                        <p>
                                                            @for ($i = 0; $i < $rating->rating; $i++)
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="25"
                                                                    height="25" fill="#00FADF" class="bi bi-star-fill"
                                                                    viewBox="0 0 16 16">
                                                                    <path
                                                                        d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                                    </path>
                                                                </svg>
                                                            @endfor
                                                            @for ($i = $rating->rating; $i < 5; $i++)
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="25"
                                                                    height="25" fill="currentColor"
                                                                    class="bi bi-star-fill" viewBox="0 0 16 16">
                                                                    <path
                                                                        d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                                    </path>
                                                                </svg>
                                                            @endfor
                                                        </p>
                                                        <p class="mt-2">{{ $rating->comment }}</p>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>

@endsection
