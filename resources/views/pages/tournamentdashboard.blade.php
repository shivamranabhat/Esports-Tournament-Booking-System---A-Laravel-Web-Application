<!doctype html>
<html lang="en">

<head>
    <title>Dashboard</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- custom css link -->
    <link rel="stylesheet" href="css/tournamentdashboard.css">
    <link rel="shortcut icon" href="images/fav.png" type="image/x-icon">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/slick.css">
    <link rel="stylesheet" href="css/nice-select.css">
    <link rel="stylesheet" href="css/animate.css">
    <!-- Fontawosome cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer">

</head>

<body>
     <!-- start preloader -->
     <div class="preloader" id="preloader"></div>
     <!-- end preloader -->
    <!-- section sidebar -->
    <div class="sidebar box-shadow-2">
        <div class="admin-top">
            <div class="admin-profile d-flex py-5">
                <div class="admin-img mr-2">
                    <img src="images/organizerimg.png" alt="logo" class="img-fluid rounded-circle">
                </div>
                <div class="admin-details">
                    <h5 class="text-white"><strong>Shivam Ranabhat</strong></h5>
                    <h6 class="text-warning">Host Console</h6>
                </div>
            </div>
        </div>
        <ul class="nav nav-tabs navbar-nav nav-links">
            <li>
                <a href="#dashboard" class="active show" data-toggle="tab"
                data-target="#dashboard">
                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor"
                        class="bi bi-grid-fill mb-1" viewBox="0 0 16 16">
                        <path
                            d="M1 2.5A1.5 1.5 0 0 1 2.5 1h3A1.5 1.5 0 0 1 7 2.5v3A1.5 1.5 0 0 1 5.5 7h-3A1.5 1.5 0 0 1 1 5.5v-3zm8 0A1.5 1.5 0 0 1 10.5 1h3A1.5 1.5 0 0 1 15 2.5v3A1.5 1.5 0 0 1 13.5 7h-3A1.5 1.5 0 0 1 9 5.5v-3zm-8 8A1.5 1.5 0 0 1 2.5 9h3A1.5 1.5 0 0 1 7 10.5v3A1.5 1.5 0 0 1 5.5 15h-3A1.5 1.5 0 0 1 1 13.5v-3zm8 0A1.5 1.5 0 0 1 10.5 9h3a1.5 1.5 0 0 1 1.5 1.5v3a1.5 1.5 0 0 1-1.5 1.5h-3A1.5 1.5 0 0 1 9 13.5v-3z" />
                    </svg>
                    <span class="links_name">Dashboard</span>
                </a>
            </li>
            <li>
                <a href="#tournament" data-toggle="tab" class="mt-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-controller" viewBox="0 0 16 16">
                        <path d="M11.5 6.027a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0zm-1.5 1.5a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1zm2.5-.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0zm-1.5 1.5a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1zm-6.5-3h1v1h1v1h-1v1h-1v-1h-1v-1h1v-1z"/>
                        <path d="M3.051 3.26a.5.5 0 0 1 .354-.613l1.932-.518a.5.5 0 0 1 .62.39c.655-.079 1.35-.117 2.043-.117.72 0 1.443.041 2.12.126a.5.5 0 0 1 .622-.399l1.932.518a.5.5 0 0 1 .306.729c.14.09.266.19.373.297.408.408.78 1.05 1.095 1.772.32.733.599 1.591.805 2.466.206.875.34 1.78.364 2.606.024.816-.059 1.602-.328 2.21a1.42 1.42 0 0 1-1.445.83c-.636-.067-1.115-.394-1.513-.773-.245-.232-.496-.526-.739-.808-.126-.148-.25-.292-.368-.423-.728-.804-1.597-1.527-3.224-1.527-1.627 0-2.496.723-3.224 1.527-.119.131-.242.275-.368.423-.243.282-.494.575-.739.808-.398.38-.877.706-1.513.773a1.42 1.42 0 0 1-1.445-.83c-.27-.608-.352-1.395-.329-2.21.024-.826.16-1.73.365-2.606.206-.875.486-1.733.805-2.466.315-.722.687-1.364 1.094-1.772a2.34 2.34 0 0 1 .433-.335.504.504 0 0 1-.028-.079zm2.036.412c-.877.185-1.469.443-1.733.708-.276.276-.587.783-.885 1.465a13.748 13.748 0 0 0-.748 2.295 12.351 12.351 0 0 0-.339 2.406c-.022.755.062 1.368.243 1.776a.42.42 0 0 0 .426.24c.327-.034.61-.199.929-.502.212-.202.4-.423.615-.674.133-.156.276-.323.44-.504C4.861 9.969 5.978 9.027 8 9.027s3.139.942 3.965 1.855c.164.181.307.348.44.504.214.251.403.472.615.674.318.303.601.468.929.503a.42.42 0 0 0 .426-.241c.18-.408.265-1.02.243-1.776a12.354 12.354 0 0 0-.339-2.406 13.753 13.753 0 0 0-.748-2.295c-.298-.682-.61-1.19-.885-1.465-.264-.265-.856-.523-1.733-.708-.85-.179-1.877-.27-2.913-.27-1.036 0-2.063.091-2.913.27z"/>
                      </svg>
                    <span class="links_name">Tournaments</span>
                </a>
            </li>
            <li>
                <a href="#notification" data-toggle="tab" class="mt-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-bell" viewBox="0 0 16 16">
                        <path d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2zM8 1.918l-.797.161A4.002 4.002 0 0 0 4 6c0 .628-.134 2.197-.459 3.742-.16.767-.376 1.566-.663 2.258h10.244c-.287-.692-.502-1.49-.663-2.258C12.134 8.197 12 6.628 12 6a4.002 4.002 0 0 0-3.203-3.92L8 1.917zM14.22 12c.223.447.481.801.78 1H1c.299-.199.557-.553.78-1C2.68 10.2 3 6.88 3 6c0-2.42 1.72-4.44 4.005-4.901a1 1 0 1 1 1.99 0A5.002 5.002 0 0 1 13 6c0 .88.32 4.2 1.22 6z"/>
                      </svg>
                    <span class="links_name">Notification</span>
                </a>
            </li>
            <li>
                <a href="#create-tournament" data-toggle="tab" class="mt-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-plus-circle" viewBox="0 0 16 16">
                        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                        <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                      </svg>
                    <span class="links_name">Create tournament</span>
                </a>
            </li>
            <li>
                <a href="#calculate" data-toggle="tab" class="mt-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-plus-slash-minus" viewBox="0 0 16 16">
                        <path d="m1.854 14.854 13-13a.5.5 0 0 0-.708-.708l-13 13a.5.5 0 0 0 .708.708ZM4 1a.5.5 0 0 1 .5.5v2h2a.5.5 0 0 1 0 1h-2v2a.5.5 0 0 1-1 0v-2h-2a.5.5 0 0 1 0-1h2v-2A.5.5 0 0 1 4 1Zm5 11a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5A.5.5 0 0 1 9 12Z"/>
                      </svg>
                    <span class="links_name">Calculate Points</span>
                </a>
            </li>
            <h6 class="ml-3 mt-5 text-uppercase text-white">Account</h6>
            <li>
                <a href="#" data-toggle="tab">
                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-key" viewBox="0 0 16 16">
                        <path d="M0 8a4 4 0 0 1 7.465-2H14a.5.5 0 0 1 .354.146l1.5 1.5a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0L13 9.207l-.646.647a.5.5 0 0 1-.708 0L11 9.207l-.646.647a.5.5 0 0 1-.708 0L9 9.207l-.646.647A.5.5 0 0 1 8 10h-.535A4 4 0 0 1 0 8zm4-3a3 3 0 1 0 2.712 4.285A.5.5 0 0 1 7.163 9h.63l.853-.854a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .708 0l.646.647.793-.793-1-1h-6.63a.5.5 0 0 1-.451-.285A3 3 0 0 0 4 5z"/>
                        <path d="M4 8a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
                      </svg>
                    <span class="links_name">Privacy policy</span>
                </a>
            </li>
            <li>
                <a href="#settings" data-toggle="tab">
                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor"
                        class="bi bi-gear" viewBox="0 0 16 16">
                        <path
                            d="M8 4.754a3.246 3.246 0 1 0 0 6.492 3.246 3.246 0 0 0 0-6.492zM5.754 8a2.246 2.246 0 1 1 4.492 0 2.246 2.246 0 0 1-4.492 0z" />
                        <path
                            d="M9.796 1.343c-.527-1.79-3.065-1.79-3.592 0l-.094.319a.873.873 0 0 1-1.255.52l-.292-.16c-1.64-.892-3.433.902-2.54 2.541l.159.292a.873.873 0 0 1-.52 1.255l-.319.094c-1.79.527-1.79 3.065 0 3.592l.319.094a.873.873 0 0 1 .52 1.255l-.16.292c-.892 1.64.901 3.434 2.541 2.54l.292-.159a.873.873 0 0 1 1.255.52l.094.319c.527 1.79 3.065 1.79 3.592 0l.094-.319a.873.873 0 0 1 1.255-.52l.292.16c1.64.893 3.434-.902 2.54-2.541l-.159-.292a.873.873 0 0 1 .52-1.255l.319-.094c1.79-.527 1.79-3.065 0-3.592l-.319-.094a.873.873 0 0 1-.52-1.255l.16-.292c.893-1.64-.902-3.433-2.541-2.54l-.292.159a.873.873 0 0 1-1.255-.52l-.094-.319zm-2.633.283c.246-.835 1.428-.835 1.674 0l.094.319a1.873 1.873 0 0 0 2.693 1.115l.291-.16c.764-.415 1.6.42 1.184 1.185l-.159.292a1.873 1.873 0 0 0 1.116 2.692l.318.094c.835.246.835 1.428 0 1.674l-.319.094a1.873 1.873 0 0 0-1.115 2.693l.16.291c.415.764-.42 1.6-1.185 1.184l-.291-.159a1.873 1.873 0 0 0-2.693 1.116l-.094.318c-.246.835-1.428.835-1.674 0l-.094-.319a1.873 1.873 0 0 0-2.692-1.115l-.292.16c-.764.415-1.6-.42-1.184-1.185l.159-.291A1.873 1.873 0 0 0 1.945 8.93l-.319-.094c-.835-.246-.835-1.428 0-1.674l.319-.094A1.873 1.873 0 0 0 3.06 4.377l-.16-.292c-.415-.764.42-1.6 1.185-1.184l.292.159a1.873 1.873 0 0 0 2.692-1.115l.094-.319z" />
                    </svg>
                    <span class="links_name">Setting</span>
                </a>
            </li>
            <li class="log_out position-absolute w-100">
                <a href="{{route('page','index')}}">
                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor"
                        class="bi bi-box-arrow-left" viewBox="0 0 16 16">
                        <path fill-rule="evenodd"
                            d="M6 12.5a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v2a.5.5 0 0 1-1 0v-2A1.5 1.5 0 0 1 6.5 2h8A1.5 1.5 0 0 1 16 3.5v9a1.5 1.5 0 0 1-1.5 1.5h-8A1.5 1.5 0 0 1 5 12.5v-2a.5.5 0 0 1 1 0v2z" />
                        <path fill-rule="evenodd"
                            d="M.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L1.707 7.5H10.5a.5.5 0 0 1 0 1H1.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3z" />
                    </svg>
                    <span class="links_name">Log out</span>
                </a>
            </li>
        </ul>
    </div>
    <!-- section sidebar -->
    <!-- section sidebar content -->
    <section class="home-section">
        <div class="tab-content">
            <div class="tab-pane fade in active show" id="dashboard">
                <nav class="box-shadow-2">
                    <div class="sidebar-button">
                        <svg class="sidebarBtn mr-3" xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="#fff" class="bi bi-list" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
                          </svg>
                        <span class="dashboard text-white">Dashboard</span>
                    </div>
                </nav>
                <div class="home-content">
                    <div class="container-fluid">
                        <div class="row px-3">
                            <div class="col-12 col-lg-3  mr-5 rounded p-5 mb-4 box-shadow-2">
                                <div class="contents">
                                    <h1 class="text-warning text-center"><strong>0</strong></h1>
                                    <h5 class="text-center text-white">Live Tournaments</h5>
                                </div>
                            </div>
                            <div class="col-12 col-lg-3 rounded p-5 mb-4 box-shadow-2">
                                <div class="contents">
                                    <h1 class="text-success text-center"><strong>0</strong></h1>
                                    <h5 class="text-center text-white">Hosted Tournaments</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="bottom-content pl-3 pr-5 box-shadow-2">
                        <div class="filter d-flex ml-3 align-items-center">
                            <h5 class="mt-3 text-white">Filter</h5>
                            <div class="dropdown ml-2">
                                <button class="btn dropdown-toggle rounded px-4 mt-2 text-white" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                  All Games
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                  <a class="dropdown-item" href="#">Call of duty</a>
                                  <a class="dropdown-item" href="#">Mobile legends</a>
                                  <a class="dropdown-item" href="#">PUBG</a>
                                  <a class="dropdown-item" href="#">Ludo</a>
                                  <a class="dropdown-item" href="#">Freefire</a>
                                  <a class="dropdown-item" href="#">Valorant</a>
                                </div>
                              </div>
                        </div>
                        <div class="tournament-table d-flex justify-content-between">
                            <div class="table-responsive mt-3">
                                <table class="table">
                                    <thead class="text-white">
                                      <tr>
                                        <th scope="col">Name</th>
                                        <th scope="col">Type</th>
                                        <th scope="col">Starts</th>
                                        <th scope="col">Ends</th>
                                        <th scope="col">Prize</th>
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
                                    <img src="images/null-icon.jpg" alt="error" width="80">
                                    <h2 class="mt-3"><strong>Nothing to show</strong></h2>
                                    <h5>You haven't created any tournaments yet. Please click on Create Tournament.</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div  class="tab-pane fade in px-2" id="tournament">
                <nav class="box-shadow-2">
                    <div class="sidebar-button">
                        <svg class="sidebarBtn mr-3" xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="#fff" class="bi bi-list" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
                          </svg>
                        <span class="dashboard text-white">Tournament</span>
                    </div>
                </nav>
            </div>
            <div  class="tab-pane fade in px-2" id="notification"></div>
            <div  class="tab-pane fade in px-2" id="create-tournament">
                <nav class="box-shadow-2">
                    <div class="sidebar-button">
                        <svg class="sidebarBtn mr-3" xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="#fff" class="bi bi-list" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
                          </svg>
                        <span class="dashboard text-white">Create Tournament</span>
                    </div>
                </nav>
                <div class="home-content">
                    <div class="bottom-content mt-5 py-5 box-shadow-2">
                        <div class="container-fluid">
                            <div class="input-box mb-4 ml-2">
                                <input type="text" class="form-control" placeholder="Search your game">
                                <i class="fa fa-search text-dark"></i>
                            </div>
                            <div class="row mx-2">
                                <div class="column col-6 col-sm-4 col-md-3 col-lg-2 mb-3 mx-0 mt-0 p-0">
                                    <a href="#">
                                        <img src="./images/game-image/cod.jpg" alt="cod" class="img-fluid rounded" width="180">
                                        <div class="game-name d-flex align-items-center">
                                            <svg class="ml-3" xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="#fff"
                                                class="bi bi-phone" viewBox="0 0 16 16">
                                                <path
                                                    d="M11 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h6zM5 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H5z" />
                                                <path d="M8 14a1 1 0 1 0 0-2 1 1 0 0 0 0 2z" />
                                            </svg>
                                            <h5 class="mt-2 ml-1 text-white">Call of Duty</h5>
                                        </div>
                                    </a>
                                </div>
                                <div class="column col-6 col-sm-4 col-md-3 col-lg-2 mb-3 mx-0 mt-0 p-0">
                                    <a href="#">
                                        <img src="./images/game-image/Among-us.jpg" alt="cod" class="img-fluid rounded" width="180">
                                        <div class="game-name d-flex align-items-center">
                                            <svg class="ml-3" xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="#fff"
                                                class="bi bi-phone" viewBox="0 0 16 16">
                                                <path
                                                    d="M11 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h6zM5 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H5z" />
                                                <path d="M8 14a1 1 0 1 0 0-2 1 1 0 0 0 0 2z" />
                                            </svg>
                                            <h5 class="mt-2 ml-1 text-white">Among Us</h5>
                                        </div>
                                    </a>
                                </div>
                                <div class="column col-6 col-sm-4 col-md-3 col-lg-2 mb-3 mx-0 mt-0 p-0">
                                    <a href="#">
                                        <img src="./images/game-image/clash-royale.png" alt="cod" class="img-fluid rounded" width="180">
                                        <div class="game-name d-flex align-items-center">
                                            <svg class="ml-3" xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="#fff"
                                                class="bi bi-phone" viewBox="0 0 16 16">
                                                <path
                                                    d="M11 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h6zM5 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H5z" />
                                                <path d="M8 14a1 1 0 1 0 0-2 1 1 0 0 0 0 2z" />
                                            </svg>
                                            <h5 class="mt-2 ml-1 text-white">Clash Royale</h5>
                                        </div>
                                    </a>
                                </div>
                                <div class="column col-6 col-sm-4 col-md-3 col-lg-2 mb-3 mx-0 mt-0 p-0">
                                    <a href="#">
                                        <img src="./images/game-image/coc.png" alt="cod" class="img-fluid rounded" width="180">
                                        <div class="game-name d-flex align-items-center">
                                            <svg class="ml-3" xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="#fff"
                                                class="bi bi-phone" viewBox="0 0 16 16">
                                                <path
                                                    d="M11 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h6zM5 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H5z" />
                                                <path d="M8 14a1 1 0 1 0 0-2 1 1 0 0 0 0 2z" />
                                            </svg>
                                            <h5 class="mt-2 ml-1 text-white">Clash of Clan</h5>
                                        </div>
                                    </a>
                                </div>
                                <div class="column col-6 col-sm-4 col-md-3 col-lg-2 mb-3 mx-0 mt-0 p-0">
                                    <a href="#">
                                        <img src="./images/game-image/garen.png" alt="cod" class="img-fluid rounded" width="180">
                                        <div class="game-name d-flex align-items-center">
                                            <svg class="ml-3" xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="#fff"
                                                class="bi bi-phone" viewBox="0 0 16 16">
                                                <path
                                                    d="M11 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h6zM5 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H5z" />
                                                <path d="M8 14a1 1 0 1 0 0-2 1 1 0 0 0 0 2z" />
                                            </svg>
                                            <h5 class="mt-2 ml-1 text-white">Freefire</h5>
                                        </div>
                                    </a>
                                </div>
                                <div class="column col-6 col-sm-4 col-md-3 col-lg-2 mb-3 mx-0 mt-0 p-0">
                                    <a href="#">
                                        <img src="./images/game-image/ludo-king.png" alt="cod" class="img-fluid rounded" width="180">
                                        <div class="game-name d-flex align-items-center">
                                            <svg class="ml-3" xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="#fff"
                                                class="bi bi-phone" viewBox="0 0 16 16">
                                                <path
                                                    d="M11 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h6zM5 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H5z" />
                                                <path d="M8 14a1 1 0 1 0 0-2 1 1 0 0 0 0 2z" />
                                            </svg>
                                            <h5 class="mt-2 ml-1 text-white">Ludo king</h5>
                                        </div>
                                    </a>
                                </div>
                                <div class="column col-6 col-sm-4 col-md-3 col-lg-2 mb-3 mx-0 mt-0 p-0">
                                   <a href="#">
                                        <img src="./images/game-image/mbl.png" alt="cod" class="img-fluid rounded" width="180">
                                        <div class="game-name d-flex align-items-center">
                                            <svg class="ml-3" xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="#fff"
                                                class="bi bi-phone" viewBox="0 0 16 16">
                                                <path
                                                    d="M11 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h6zM5 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H5z" />
                                                <path d="M8 14a1 1 0 1 0 0-2 1 1 0 0 0 0 2z" />
                                            </svg>
                                            <h5 class="mt-2 ml-1 text-white">Mobile Legends</h5>
                                        </div>
                                   </a>
                                </div>
                                <div class="column col-6 col-sm-4 col-md-3 col-lg-2 mb-3 mx-0 mt-0 p-0">
                                  <a href="#">
                                    <img src="./images/game-image/minecraft.png" alt="cod" class="img-fluid rounded" width="180">
                                    <div class="game-name d-flex align-items-center">
                                        <svg class="ml-3" xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="#fff"
                                            class="bi bi-phone" viewBox="0 0 16 16">
                                            <path
                                                d="M11 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h6zM5 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H5z" />
                                            <path d="M8 14a1 1 0 1 0 0-2 1 1 0 0 0 0 2z" />
                                        </svg>
                                        <h5 class="mt-2 ml-1 text-white">Minecraft</h5>
                                    </div>
                                  </a>
                                </div>
                                <div class="column col-6 col-sm-4 col-md-3 col-lg-2 mb-3 mx-0 mt-0 p-0">
                                   <a href="#">
                                        <img src="./images/game-image/pubg-mobile.png" alt="cod" class="img-fluid rounded" width="180">
                                        <div class="game-name d-flex align-items-center">
                                            <svg class="ml-3" xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="#fff"
                                                class="bi bi-phone" viewBox="0 0 16 16">
                                                <path
                                                    d="M11 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h6zM5 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H5z" />
                                                <path d="M8 14a1 1 0 1 0 0-2 1 1 0 0 0 0 2z" />
                                            </svg>
                                            <h5 class="mt-2 ml-1 text-white">PUBG</h5>
                                        </div>
                                   </a>
                                </div>
                                <div class="column col-6 col-sm-4 col-md-3 col-lg-2 mb-3 mx-0 mt-0 p-0">
                                   <a href="#">
                                        <img src="./images/game-image/valorant.png" alt="cod" class="img-fluid rounded" width="180">
                                        <div class="game-name d-flex align-items-center">
                                            <svg class="ml-3" xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="#fff"
                                                class="bi bi-phone" viewBox="0 0 16 16">
                                                <path
                                                    d="M11 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h6zM5 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H5z" />
                                                <path d="M8 14a1 1 0 1 0 0-2 1 1 0 0 0 0 2z" />
                                            </svg>
                                            <h5 class="mt-2 ml-1 text-white">Valorant</h5>
                                        </div>
                                   </a>
                                </div>
                                <div class="column col-6 col-sm-4 col-md-3 col-lg-2 mb-3 mx-0 mt-0 p-0">
                                  <a href="#">
                                    <img src="./images/game-image/pes.jpg" alt="cod" class="img-fluid rounded" width="180">
                                    <div class="game-name d-flex align-items-center">
                                        <svg class="ml-3" xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="#fff"
                                            class="bi bi-phone" viewBox="0 0 16 16">
                                            <path
                                                d="M11 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h6zM5 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H5z" />
                                            <path d="M8 14a1 1 0 1 0 0-2 1 1 0 0 0 0 2z" />
                                        </svg>
                                        <h5 class="mt-2 ml-1 text-white">PES Mobile</h5>
                                    </div>
                                  </a>
                                </div>
                                <div class="column col-6 col-sm-4 col-md-3 col-lg-2 mb-3 mx-0 mt-0 p-0">
                                    <a href="#">
                                        <img src="./images/game-image/pool.png" alt="game" class="img-fluid rounded" width="180">
                                        <div class="game-name d-flex align-items-center">
                                            <svg class="ml-3" xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="#fff"
                                                class="bi bi-phone" viewBox="0 0 16 16">
                                                <path
                                                    d="M11 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h6zM5 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H5z" />
                                                <path d="M8 14a1 1 0 1 0 0-2 1 1 0 0 0 0 2z" />
                                            </svg>
                                            <h5 class="mt-2 ml-1 text-white">8 Ball Pool</h5>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div  class="tab-pane fade in px-2" id="calculate">
                <nav class="box-shadow-2">
                    <div class="sidebar-button">
                        <svg class="sidebarBtn mr-3" xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="#fff" class="bi bi-list" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
                          </svg>
                        <span class="dashboard text-white">Calculate Points</span>
                    </div>
                </nav>
            </div>
            <div  class="tab-pane fade in px-2" id=""></div>
            <div  class="tab-pane fade in px-2" id="settings">
                <nav class="box-shadow-2">
                    <div class="sidebar-button">
                        <svg class="sidebarBtn mr-3" xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="#fff" class="bi bi-list" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
                          </svg>
                        <span class="dashboard">Settings</span>
                    </div>
                </nav>
            </div>
        </div>
    </section>
    <!-- section sidebar content-->
    <!-- Optional JavaScript -->
    <script src="js/sidebar.js"></script>
    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/slick.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/fontawesome.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/wow.js"></script>
    <script src="js/main.js"></script>
</body>

</html>
