<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    {{-- <link rel="shortcut icon" href="http://127.0.0.1:8000/images/fav.png" type="image/x-icon"> --}}
    <link rel="stylesheet" href="http://127.0.0.1:8000/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://127.0.0.1:8000/css/slick.css">
    <link rel="stylesheet" href="http://127.0.0.1:8000/css/tablecss">
    <link rel="stylesheet" href="http://127.0.0.1:8000/css/magnific-popup.css">
    <link rel="stylesheet" href="http://127.0.0.1:8000/css/nice-select.css">
    <link rel="stylesheet" href="http://127.0.0.1:8000/css/animate.css">
    <link rel="stylesheet" href="http://127.0.0.1:8000/css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer">
</head>

<body>
    <!-- start preloader -->
    <div class="preloader" id="preloader"></div>
    <!-- end preloader -->
    {{-- Flash message --}}
    @if (session()->has('message'))
        <div class="flash-message text-center">
           <h5> {{ session('message') }}</h5>
        </div>
    @endif
    <a href="#" class="scrollToTop"><i class="fas fa-angle-double-up"></i></a>
    <!-- header-section start -->
    <x-navbar>
    </x-navbar>
    <!-- header-section end -->
    @yield('page-name')
     {{-- footer component --}}
     <x-footer>
    </x-footer>
    {{-- footer component --}}
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>


    <script>
        var data = {!! json_encode($tournament_data) !!};
        var player_names = Object.values(data.team_kills.player_name);
        var player_kills = Object.values(data.team_kills.total_kills);
        var match_no = Object.values(data.score.match_no);
        var kills = Object.values(data.score.kills);
        var match_number = Object.values(data.score.match_no);
        var score = Object.values(data.score.total);

        //To display the total kills of each player in a particular tournament
        var ctx = document.getElementById('killsChart').getContext('2d');
        var player_kills = new Chart(ctx, {
            type: 'line',
            data: {
                labels: player_names,
                datasets: [{
                    label: 'Player Kills',
                    data: player_kills,
                    backgroundColor: 'rgba(54, 162, 235, 0.2)',
                    borderColor: 'rgba(54, 162, 235, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                }
            }
        });
        //team kills in relation to match number
        var ctx = document.getElementById('teamChart').getContext('2d');
        var kills = new Chart(ctx, {
            type: 'line',
            data: {
                labels: match_no,
                datasets: [{
                    label: 'Total Kills',
                    data: kills,
                    backgroundColor: 'rgba(54, 162, 235, 0.2)',
                    borderColor: 'rgba(54, 162, 235, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                }
            }
        });

        //team score in relation to matches
        var ctx = document.getElementById('scoreChart').getContext('2d');
        var score = new Chart(ctx, {
            type: 'line',
            data: {
                labels: match_number,
                datasets: [{
                    label: 'Total Score',
                    data: score,
                    backgroundColor: 'rgba(54, 162, 235, 0.2)',
                    borderColor: 'rgba(54, 162, 235, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                }
            }
        });
    </script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js"></script>
    <script src="http://127.0.0.1:8000/js/jquery-3.5.1.min.js"></script>
    <script src="http://127.0.0.1:8000/js/timer.js"></script>
    <script src="http://127.0.0.1:8000/js/select_img.js"></script>
    <script src="http://127.0.0.1:8000/js/bootstrap.min.js"></script>
    <script src="http://127.0.0.1:8000/js/slick.js"></script>
    <script src="http://127.0.0.1:8000/js/jquery.nice-select.min.js"></script>
    <script src="http://127.0.0.1:8000/js/fontawesome.js"></script>
    <script src="http://127.0.0.1:8000/js/countdown.jquery.js"></script>
    <script src="http://127.0.0.1:8000/js/jquery.counterup.min.js"></script>
    <script src="http://127.0.0.1:8000/js/jquery.waypoints.min.js"></script>
    <script src="http://127.0.0.1:8000/js/wow.js"></script>
    <script src="http://127.0.0.1:8000/js/main.js"></script>
</body>

</html>
