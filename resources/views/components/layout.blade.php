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

</head>
<body>


	<!-- SIDEBAR -->
	<section id="sidebar">
		<a href="#" class="brand">
			<svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 24 24"><path fill="currentColor" d="M2 5.27L3.28 4L20 20.72L18.73 22l-6-6H7.97L5 19c-.33.3-.77.5-1.25.5A1.75 1.75 0 0 1 2 17.75v-.25l1-7.38c.1-1.03.53-1.95 1.19-2.66L2 5.27M5 10v1h2v2h1v-1.73L6.73 10H5m11.5-4c2.36 0 4.29 1.81 4.5 4.12l1 7.38v.25c0 .66-.36 1.25-.9 1.53L7.82 6h8.68m0 2a.75.75 0 0 0-.75.75a.75.75 0 0 0 .75.75a.75.75 0 0 0 .75-.75a.75.75 0 0 0-.75-.75m-1.75 1.75a.75.75 0 0 0-.75.75a.75.75 0 0 0 .75.75a.75.75 0 0 0 .75-.75a.75.75 0 0 0-.75-.75m3.5 0a.75.75 0 0 0-.75.75a.75.75 0 0 0 .75.75a.75.75 0 0 0 .75-.75a.75.75 0 0 0-.75-.75M16.5 11.5a.75.75 0 0 0-.75.75a.75.75 0 0 0 .75.75a.75.75 0 0 0 .75-.75a.75.75 0 0 0-.75-.75Z"/></svg>
			<span class="text logo">ScoreSensi</span>
		</a>
		<ul class="side-menu top">
			<li class="active">
				<a href="{{route('index')}}">
					<i class='bx bxs-dashboard' ></i>
					<span class="text">Dashboard</span>
				</a>
			</li>
			<li>
				<a href="{{route('users')}}">
					<i class='bx bxs-user' ></i>
					<span class="text">Users</span>
				</a>
			</li>
			<li>
				<a href="{{route('tournaments')}}">
					<i class='bx bxs-joystick' ></i>
					<span class="text">Tournaments</span>
				</a>
			</li>
			<li>
				{{-- <a href="{{route('games')}}"> --}}
				<a href="{{route('games')}}">
					<i class='bx bxs-game' ></i>
					<span class="text">Games</span>
				</a>
			</li>
			<li>
				<a href="{{route('teams')}}">
					<i class='bx bxs-group' ></i>
					<span class="text">Teams</span>
				</a>
			</li>
		</ul>
		<ul class="side-menu">
			<li>
				<a href="#">
					<i class='bx bxs-cog' ></i>
					<span class="text">Settings</span>
				</a>
			</li>
			<li>
				<a href="#" class="logout">
					<i class='bx bxs-log-out-circle' ></i>
					<span class="text">Logout</span>
				</a>
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
			{{$slot}}
		</main>
		<!-- MAIN -->
	</section>
	<!-- CONTENT -->

	<script src="http://127.0.0.1:8000/js/admin.js"></script>
    <script src="http://127.0.0.1:8000/js/jquery-3.5.1.min.js"></script>
</body>
</html>
