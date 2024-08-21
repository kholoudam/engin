<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="apple-touch-icon" sizes="76x76" href="{{asset('assets/img/marsa.png')}}">
        <link rel="icon" type="image/png" href="{{asset('assets/img/marsa.png')}}">
        <title>
            Marsa maroc
        </title>
        <!--     Fonts and icons     -->
        <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
        <!-- Nucleo Icons -->
        <link href="{{asset('assets/css/nucleo-icons.css')}}" rel="stylesheet" />
        <link href="{{asset('assets/css/nucleo-svg.css')}}" rel="stylesheet" />
        <!-- Font Awesome Icons -->
        <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
        <!-- Material Icons -->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
        <!-- CSS Files -->
        <link id="pagestyle" href="{{asset('assets/css/material-dashboard.css?v=3.1.0')}}" rel="stylesheet" />
        <!-- Nepcha Analytics (nepcha.com) -->
        <!-- Nepcha is a easy-to-use web analytics. No cookies and fully compliant with GDPR, CCPA and PECR. -->
        <script defer data-site="YOUR_DOMAIN_HERE" src="https://api.nepcha.com/js/nepcha-analytics.js"></script>
    </head>
    <body class="g-sidenav-show  bg-gray-200">
        <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
            <!-- Navbar -->
            <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" data-scroll="true">
                <div class="container-fluid px-3">
                        <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4 justify-content-end" id="navbar">
                            <ul class="navbar-nav align-items-center">
                                <li class="nav-item">
                                    <img src="{{ asset('assets/img/marsa.png') }}" width="160px" height="80px" style="margin-right: 1100px;" class="navbar-brand-img" alt="main_logo">
                                </li>
                                <li class="nav-item">
                                    <form action="{{ route('logout') }}" method="POST">
                                        @csrf
                                        <button type="submit" class="btn btn-link nav-link text-dark ">
                                            <svg fill="#000000" height="28px" width="30px" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 384.971 384.971" xml:space="preserve"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <g id="Sign_Out"> <path d="M180.455,360.91H24.061V24.061h156.394c6.641,0,12.03-5.39,12.03-12.03s-5.39-12.03-12.03-12.03H12.03 C5.39,0.001,0,5.39,0,12.031V372.94c0,6.641,5.39,12.03,12.03,12.03h168.424c6.641,0,12.03-5.39,12.03-12.03 C192.485,366.299,187.095,360.91,180.455,360.91z"></path> <path d="M381.481,184.088l-83.009-84.2c-4.704-4.752-12.319-4.74-17.011,0c-4.704,4.74-4.704,12.439,0,17.179l62.558,63.46H96.279 c-6.641,0-12.03,5.438-12.03,12.151c0,6.713,5.39,12.151,12.03,12.151h247.74l-62.558,63.46c-4.704,4.752-4.704,12.439,0,17.179 c4.704,4.752,12.319,4.752,17.011,0l82.997-84.2C386.113,196.588,386.161,188.756,381.481,184.088z"></path> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> </g> </g></svg>
                                        </button>
                                    </form>
                                </li>
                            </ul>
                        </div>
                </div>
            </nav>
            <!-- End Navbar -->
            <div class="container-fluid px-2 px-md-4">
                <div class="page-header min-height-400 border-radius-xl" style="background-image: url('{{ asset('images/m1.png') }}');">
                    <span class="mask  bg-red-primary  opacity-2"></span>
                </div>
                <div class="card card-body mx-4 mx-md-5" style="margin-top: -200px;">
                    <div class="row-2">
                        <A class="btn btn-danger" style="background-color:#e10505; width: 120px; height: 40px;" href="javascript:history.back();">
                            <H6>
                                <svg fill="#fff" height="30px" width="30px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512" xml:space="preserve" stroke="#fff"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <g> <path d="M466.811,210.812H154.283l114.691-114.69c17.618-17.619,17.618-46.288,0-63.907c-8.536-8.536-19.883-13.235-31.954-13.235 c-12.07,0-23.418,4.701-31.953,13.235L13.236,224.047C4.7,232.583,0,243.931,0,256.001s4.7,23.417,13.236,31.953l191.832,191.832 c8.535,8.536,19.883,13.236,31.953,13.236c12.071,0,23.419-4.7,31.954-13.234c17.618-17.619,17.618-46.288,0-63.907 l-114.691-114.69h312.528c24.918,0,45.189-20.271,45.189-45.189S491.729,210.812,466.811,210.812z M466.811,280.791H129.66 c-4.126,0-7.844,2.485-9.423,6.296c-1.579,3.811-0.706,8.198,2.211,11.115L254.55,430.303c9.667,9.666,9.667,25.393,0,35.059 c-4.682,4.682-10.907,7.261-17.529,7.261c-6.621,0-12.847-2.578-17.529-7.261L27.659,273.53 c-4.682-4.682-7.261-10.908-7.261-17.529s2.578-12.847,7.261-17.529L219.491,46.639c4.682-4.682,10.908-7.261,17.529-7.261 c6.622,0,12.847,2.578,17.529,7.261c9.667,9.666,9.667,25.393,0,35.059L122.449,213.799c-2.917,2.917-3.79,7.305-2.211,11.115 c1.579,3.81,5.299,6.296,9.423,6.296h337.151c13.67,0,24.79,11.121,24.79,24.79C491.602,269.67,480.481,280.791,466.811,280.791z"></path> </g> </g> <g> <g> <path d="M152.042,140.166c-3.984-3.983-10.442-3.983-14.425,0l-3.06,3.06c-3.983,3.984-3.983,10.442,0,14.425 c1.991,1.992,4.602,2.987,7.212,2.987s5.221-0.995,7.213-2.987l3.06-3.06C156.024,150.607,156.024,144.149,152.042,140.166z"></path> </g> </g> <g> <g> <path d="M126.034,166.174c-3.984-3.983-10.442-3.983-14.425,0l-80.574,80.574c-3.983,3.984-3.983,10.442,0,14.425 c1.991,1.992,4.602,2.987,7.212,2.987s5.221-0.995,7.213-2.987l80.574-80.574C130.016,176.615,130.017,170.157,126.034,166.174z"></path> </g> </g> </g></svg>
                                Retour
                            </H6>
                        </A>
                    </div>
                    <div class="row" style="margin-left: 100px;">
                        <div class="col-12 col-xl-8">
                            <div class="card card-plain h-100">
                                <div class="card-header pb-0 p-3">
                                    <div class="row">
                                        <div class="col-md-8 d-flex align-items-center">
                                            <h6 class="mb-0">Profile Information</h6>
                                        </div>
                                        <div class="col-md-4 text-end">
                                            <a href="{{ route('profile.edit') }}">
                                                <i class="fas fa-user-edit text-secondary text-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit Profile"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body p-3">
                                    <p class="text-sm">
                                        Bonjour, M./Mme {{ $user->nom }} {{ $user->prenom }}
                                    </p>
                                    <hr class="horizontal gray-light my-4">
                                    <ul class="list-group">
                                        <li class="list-group-item border-0 ps-0 pt-0 text-sm"><strong class="text-dark">Nom:</strong> &nbsp; {{ $user->nom }}</li>
                                        <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">Prénom:</strong> &nbsp; {{ $user->prenom }}</li>
                                        <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">Usernamre:</strong> &nbsp; {{ $user->username }}</li>
                                        <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">Password:</strong> &nbsp; {{ $user->password }}</li>
                                        <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">Rôle:</strong> &nbsp; {{ $user->role }}</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div> 
                </div>
                <footer class="footer py-4  ">
                    <div class="container-fluid">
                        <div class="row align-items-center justify-content-lg-between">
                            <div class="col-lg-6 mb-lg-0 mb-4">
                                <div class="copyright text-center text-sm text-muted text-lg-start">
                                    ©<script>
                                        document.write(new Date().getFullYear())
                                    </script>,toutes les droits sont réservés
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <ul class="nav nav-footer justify-content-center justify-content-lg-end">
                                        <li class="nav-item">
                                            <a href="https://www.creative-tim.com" class="nav-link text-muted" target="_blank">Creative Tim</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </main>
        <!--   Core JS Files   -->
        <script src="{{asset('assets/js/core/popper.min.js')}}"></script>
        <script src="{{asset('assets/js/core/bootstrap.min.js')}}"></script>
        <script src="{{asset('assets/js/plugins/perfect-scrollbar.min.js')}}"></script>
        <script src="{{asset('assets/js/plugins/smooth-scrollbar.min.js')}}"></script>
        <script>
            var win = navigator.platform.indexOf('Win') > -1;
            if (win && document.querySelector('#sidenav-scrollbar')) {
            var options = {
                damping: '0.5'
            }
            Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
            }
        </script>
        <script async defer src="https://buttons.github.io/buttons.js')}}"></script>
        <script src="{{asset('assets/js/material-dashboard.min.js?v=3.1.0"></script>
    </body>
</html>