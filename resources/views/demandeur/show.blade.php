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
        <aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3 bg-gray-600" id="sidenav-main">
            <div class="sidenav-header">
                <a class="navbar-brand m-0" href="#" target="_blank">
                    <!--logo-->
                    <img src="{{ asset('assets/img/marsa.png') }}" width="160px" height="260px" class="navbar-brand-img" alt="main_logo">
                </a>
            </div>
            <hr class="horizontal light mt-0 mb-2">
            <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link text-white " href="{{ route('demandeur.index') }}">
                            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                                <i class="material-icons opacity-10">dashboard</i>
                            </div>
                            <span class="nav-link-text ms-1">Tableau de bord</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white active"  style="background-color:#e10505;" href="{{ route('engins.index') }}">
                            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                                <svg fill="#ffffff" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="28px" height="28px" viewBox="0 0 479.512 479.512" xml:space="preserve" stroke="#ffffff"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <g id="iconos_42_"> <path d="M474.037,438.871v-31.078c0-21.124-12.346-33.469-33.469-33.469H230.193c-28.391,0-43.031,13.445-43.031,33.469v40.344 c0,20.914,14.047,31.375,43.031,31.375h210.375C461.691,479.512,474.037,465.465,474.037,438.871z M435.787,441.262H225.412 v-28.688h210.375V441.262z"></path> <path d="M311.475,154.387v9.562v81.96l0,0v0.01l12.183,32.78h-20.502L103.127,0L59.053,26.584l13.359,23.418v123.509H58.298 l9.486,66.938h4.15h0.478v20.225c-8.606,3.911-18.169,12.307-18.169,27.387c0,10.127,3.95,17.519,9.725,22.453l-51.857,44.686 h14.65l45.929-39.579c4.16,1.626,8.606,2.524,13.005,2.524c4.418,0,8.807-1.176,12.766-3.309l49.792,40.363h14.927l0.105-0.134 l-57.279-46.426c3.882-4.677,6.455-10.949,6.455-18.973c0-5.288-4.284-9.562-9.562-9.562c-5.279,0-9.562,4.274-9.562,9.562 c0,3.434-0.928,5.585-2.142,6.972l-2.62-2.123c-1.788-1.444-4.38-1.425-6.129,0.096l-3.586,3.089 c-3.099-1.435-5.489-4.246-5.489-9.63c0-8.645,8.578-10.738,10.194-11.045c4.609-0.793,7.975-4.771,7.975-9.438v-27.139h6.694 h3.92l13.378-66.938h-9.648H101.1v-69.405l114.75,220.846v1.521v2.878v6.723h38.25v19.125h133.875h9.562v-19.125h47.812h9.562 V154.387H311.475z M228.759,204.112l0.115,0.163l-39.015,25.389l20.062-51.466L228.759,204.112z M91.537,173.512h-4.781h-4.781 V68.037l9.562,18.035V173.512z M99.856,76.032L83.352,44.686l25.733-16.916L99.856,76.032z M122.233,47.296l18.341,31.824 l-29.605,19.068L122.233,47.296z M125.168,116.471l27.894-18.14l-10.92,49.677L125.168,116.471z M164.853,114.54l20.569,29.997 l-30.925,19.804L164.853,114.54z M161.678,187.196l34.559-23.677l-19.68,52.708L161.678,187.196z M212.828,278.125l-16.667-29.414 l41.376-29.548L212.828,278.125z M225.813,299.02l28.286-60.961l23.008,31.375L225.813,299.02z M416.662,250.012h-66.938v-57.375 h66.938V250.012z"></path> <polygon points="15.037,412.574 5.475,412.574 5.475,431.699 158.475,431.699 158.475,412.574 139.35,412.574 139.35,393.449 139.35,383.887 158.475,383.887 158.475,364.762 5.475,364.762 5.475,383.887 24.6,383.887 24.6,412.574 "></polygon> </g> </g> </g></svg>
                            </div>
                            <span class="nav-link-text ms-1">Engins</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white " href="{{ route('demandes.index') }}">
                            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                                <svg width="28px" height="28px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" stroke="#ffffff"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M11 19H6.2C5.07989 19 4.51984 19 4.09202 18.782C3.71569 18.5903 3.40973 18.2843 3.21799 17.908C3 17.4802 3 16.9201 3 15.8V8.2C3 7.0799 3 6.51984 3.21799 6.09202C3.40973 5.71569 3.71569 5.40973 4.09202 5.21799C4.51984 5 5.0799 5 6.2 5H17.8C18.9201 5 19.4802 5 19.908 5.21799C20.2843 5.40973 20.5903 5.71569 20.782 6.09202C21 6.51984 21 7.0799 21 8.2V12M3 9H21M18 21V15M21 18.0008L15 18" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                            </div>
                            <span class="nav-link-text ms-1">Demandes</span>
                        </a>
                    </li>
                </ul>
            </div>
        </aside>
        <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
            <!-- Navbar -->
            <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" data-scroll="true">
                <div class="container-fluid py-1 px-3">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
                            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Demandeur</a></li>
                            <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Engins</li>
                        </ol>
                        <h6 class="font-weight-bolder mb-0">Engins</h6>
                    </nav>
                    <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4 justify-content-end" id="navbar">
                        <ul class="navbar-nav align-items-center">
                            <li class="nav-item">
                                <a class="nav-link text-dark" href="{{ route('profile.show') }}">
                                    <div class="d-flex align-items-center">
                                        <svg width="40px" height="40px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path opacity="0.4" d="M12.1207 12.78C12.0507 12.77 11.9607 12.77 11.8807 12.78C10.1207 12.72 8.7207 11.28 8.7207 9.50998C8.7207 7.69998 10.1807 6.22998 12.0007 6.22998C13.8107 6.22998 15.2807 7.69998 15.2807 9.50998C15.2707 11.28 13.8807 12.72 12.1207 12.78Z" stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path> <path opacity="0.34" d="M18.7398 19.3801C16.9598 21.0101 14.5998 22.0001 11.9998 22.0001C9.39977 22.0001 7.03977 21.0101 5.25977 19.3801C5.35977 18.4401 5.95977 17.5201 7.02977 16.8001C9.76977 14.9801 14.2498 14.9801 16.9698 16.8001C18.0398 17.5201 18.6398 18.4401 18.7398 19.3801Z" stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path> <path d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z" stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                                    </div>
                                </a>
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
            <div class="container-fluid py-4">
                <div class="row">
                    <div class="col-12">
                        <div class="card my-4">
                            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                                <div class="shadow-primary border-radius-lg pt-4 pb-3" style="background-color:#e10505;">
                                    <h6 class="text-white text-capitalize ps-3">détail de l'engin</h6>
                                </div>
                            </div>
                            <div class="card-body px-0 pb-2">
                                <div class="container-fluid py-4">
                                    <div class="row-2">
                                        <A class="btn btn-danger" style="background-color:#e10505; width: 120px; height: 40px;" href="javascript:history.back();">
                                            <H6>
                                                <svg fill="#fff" height="30px" width="30px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512" xml:space="preserve" stroke="#fff"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <g> <path d="M466.811,210.812H154.283l114.691-114.69c17.618-17.619,17.618-46.288,0-63.907c-8.536-8.536-19.883-13.235-31.954-13.235 c-12.07,0-23.418,4.701-31.953,13.235L13.236,224.047C4.7,232.583,0,243.931,0,256.001s4.7,23.417,13.236,31.953l191.832,191.832 c8.535,8.536,19.883,13.236,31.953,13.236c12.071,0,23.419-4.7,31.954-13.234c17.618-17.619,17.618-46.288,0-63.907 l-114.691-114.69h312.528c24.918,0,45.189-20.271,45.189-45.189S491.729,210.812,466.811,210.812z M466.811,280.791H129.66 c-4.126,0-7.844,2.485-9.423,6.296c-1.579,3.811-0.706,8.198,2.211,11.115L254.55,430.303c9.667,9.666,9.667,25.393,0,35.059 c-4.682,4.682-10.907,7.261-17.529,7.261c-6.621,0-12.847-2.578-17.529-7.261L27.659,273.53 c-4.682-4.682-7.261-10.908-7.261-17.529s2.578-12.847,7.261-17.529L219.491,46.639c4.682-4.682,10.908-7.261,17.529-7.261 c6.622,0,12.847,2.578,17.529,7.261c9.667,9.666,9.667,25.393,0,35.059L122.449,213.799c-2.917,2.917-3.79,7.305-2.211,11.115 c1.579,3.81,5.299,6.296,9.423,6.296h337.151c13.67,0,24.79,11.121,24.79,24.79C491.602,269.67,480.481,280.791,466.811,280.791z"></path> </g> </g> <g> <g> <path d="M152.042,140.166c-3.984-3.983-10.442-3.983-14.425,0l-3.06,3.06c-3.983,3.984-3.983,10.442,0,14.425 c1.991,1.992,4.602,2.987,7.212,2.987s5.221-0.995,7.213-2.987l3.06-3.06C156.024,150.607,156.024,144.149,152.042,140.166z"></path> </g> </g> <g> <g> <path d="M126.034,166.174c-3.984-3.983-10.442-3.983-14.425,0l-80.574,80.574c-3.983,3.984-3.983,10.442,0,14.425 c1.991,1.992,4.602,2.987,7.212,2.987s5.221-0.995,7.213-2.987l80.574-80.574C130.016,176.615,130.017,170.157,126.034,166.174z"></path> </g> </g> </g></svg>
                                                Retour
                                            </H6>
                                        </A>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="card" style="width: 30rem; margin-left: 18rem; background-color: #d8d8d8;">
                                                <img src="{{asset( $engins->Image )}}" class="card-img-top" alt="Image de {{ $engins->Nom }}">
                                                <div class="card-body">
                                                    <h5 class="card-title text-center">{{ $engins->Nom }}</h5>
                                                    <p class="card-text">
                                                        <strong>id: </strong>{{ $engins->id }}
                                                        </br>
                                                        <strong>Capacité: </strong>{{ $engins->Capacité }}
                                                        </br>
                                                        <strong>Compteur: </strong>{{ $engins->Compteur }}
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
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