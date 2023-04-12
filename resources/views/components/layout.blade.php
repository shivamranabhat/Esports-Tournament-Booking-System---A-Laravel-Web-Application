<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Boxicons -->
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<!-- My CSS -->
	<link rel="stylesheet" href="http://127.0.0.1:8000/css/admin.css">
	<title>Score Sensi</title>
<!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>


	<!-- SIDEBAR -->
	<section id="sidebar">
		<a href="#" class="brand">
			<svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 24 24"><path fill="currentColor" d="M2 5.27L3.28 4L20 20.72L18.73 22l-6-6H7.97L5 19c-.33.3-.77.5-1.25.5A1.75 1.75 0 0 1 2 17.75v-.25l1-7.38c.1-1.03.53-1.95 1.19-2.66L2 5.27M5 10v1h2v2h1v-1.73L6.73 10H5m11.5-4c2.36 0 4.29 1.81 4.5 4.12l1 7.38v.25c0 .66-.36 1.25-.9 1.53L7.82 6h8.68m0 2a.75.75 0 0 0-.75.75a.75.75 0 0 0 .75.75a.75.75 0 0 0 .75-.75a.75.75 0 0 0-.75-.75m-1.75 1.75a.75.75 0 0 0-.75.75a.75.75 0 0 0 .75.75a.75.75 0 0 0 .75-.75a.75.75 0 0 0-.75-.75m3.5 0a.75.75 0 0 0-.75.75a.75.75 0 0 0 .75.75a.75.75 0 0 0 .75-.75a.75.75 0 0 0-.75-.75M16.5 11.5a.75.75 0 0 0-.75.75a.75.75 0 0 0 .75.75a.75.75 0 0 0 .75-.75a.75.75 0 0 0-.75-.75Z"/></svg>
			<span class="text logo">ScoreSensi</span>
		</a>
		<ul class="side-menu top">
			<li class="{{(request()->segment(2)=='index') ? 'active' : ''}}">
				<a href="{{route('index')}}">
					<i class='bx bxs-dashboard' ></i>
					<span class="text">Dashboard</span>
				</a>
			</li>
			<li class="{{(request()->segment(2)=='users') ? 'active' : ''}}">
				<a href="{{route('users')}}">
					<i class='bx bxs-user' ></i>
					<span class="text">Users</span>
				</a>
			</li>
			<li class="{{(request()->segment(2)=='games')?'active':''}}">
				<a href="{{route('games')}}">
					<i class='bx bxs-game' ></i>
					<span class="text">Games</span>
				</a>
			</li>
			<li class="{{(request()->segment(2)=='teams')?'active':''}}">
				<a href="{{route('teams')}}">
					<i class='bx bxs-group' ></i>
					<span class="text">Teams</span>
				</a>
			</li>
			<li class="{{(request()->segment(2)=='avatars')?'active':''}}">
				<a href="{{route('avatars')}}">
					<i class='bx bxs-image-add'></i>
					<span class="text">Avatars</span>
				</a>
			</li>
            <li class="{{(request()->segment(2)=='tournaments')?'active':''}}">
				<a href="{{route('tournaments')}}">
					<i class='bx bxs-joystick' ></i>
					<span class="text">Tournaments</span>
				</a>
			</li>
            <li class="{{(request()->segment(2)=='contact')?'active':''}}">
				<a href="{{route('show-contacts')}}">
					<i class='bx bxs-message-dots'></i>
					<span class="text">Message</span>
				</a>
			</li>
		</ul>
		<ul class="side-menu">
			<li class="logout">
                <form action="/logout" method="post">
                    @csrf
                        <button type="submit" class="btn log-btn mt-2 d-flex text-danger align-items-center"><i class='bx bxs-log-out-circle'></i>
                            <span type="submit" class="text">Logout</span>
                        </button>
                </form>
			</li>
		</ul>
	</section>
	<!-- SIDEBAR -->
	<!-- CONTENT -->
	<section id="content">

		<!-- NAVBAR -->
		<nav>
			<i class='bx bx-menu' ></i>
			<a href="#" class="nav-link">Admin</a>
			<form action="#">
				<div class="form-input">
					<input type="search" placeholder="Search...">
					<button type="submit" class="search-btn"><i class='bx bx-search' ></i></button>
				</div>
			</form>
			<input type="checkbox" id="switch-mode" hidden>
			<label for="switch-mode" class="switch-mode"></label>
			{{-- <a href="#" class="profile">
				<img src="img/people.png">
			</a> --}}
		</nav>
		<!-- NAVBAR -->

		<!-- MAIN -->
		<main>
             {{-- Flash message --}}
            @if (session()->has('message'))
                <div class="flash-message text-center" id="flash">
                <h5> {{ session('message') }}</h5>
                </div>
            @endif
                {{$slot}}
            </main>
		<!-- MAIN -->
	</section>
	<!-- CONTENT -->
    <script>
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#imageResult')
                        .attr('src', e.target.result);
                };
                reader.readAsDataURL(input.files[0]);
            }
        }

        $(function () {
            $('#upload').on('change', function () {
                readURL(input);
            });
        });

        /*  ==========================================
            SHOW UPLOADED IMAGE NAME
        * ========================================== */
        var input = document.getElementById( 'upload' );
        var infoArea = document.getElementById( 'upload-label' );

        input.addEventListener( 'change', showFileName );
        function showFileName( event ) {
          var input = event.srcElement;
          var fileName = input.files[0].name;
          infoArea.textContent = 'File name: ' + fileName;
        }
   </script>
   <!-- jQuery first, then Popper.js, then Bootstrap JS -->
   <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<script src="http://127.0.0.1:8000/js/admin.js"></script>
    <script src="http://127.0.0.1:8000/js/jquery-3.5.1.min.js"></script>
    <script>
        $(document).ready(function() {
        var flash= $('#flash');

        // hide the div after 5 seconds
        setTimeout(function() {
            flash.hide();
        }, 2000);
        });

    </script>
</body>
</html>
