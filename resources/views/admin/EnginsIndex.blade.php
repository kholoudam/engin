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
            <div class="collapse navbar-collapse w-auto" id="sidenav-collapse-main">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link text-white " href="{{ route('admin.index') }}">
                            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                                <i class="material-icons opacity-10">dashboard</i>
                            </div>
                            <span class="nav-link-text ms-1">Tableau de bord</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white active"  style="background-color:#e10505;" href="{{ route('GestionEngins.index') }}">
                            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                                <svg fill="#ffffff" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="28px" height="28px" viewBox="0 0 479.512 479.512" xml:space="preserve" stroke="#ffffff"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <g id="iconos_42_"> <path d="M474.037,438.871v-31.078c0-21.124-12.346-33.469-33.469-33.469H230.193c-28.391,0-43.031,13.445-43.031,33.469v40.344 c0,20.914,14.047,31.375,43.031,31.375h210.375C461.691,479.512,474.037,465.465,474.037,438.871z M435.787,441.262H225.412 v-28.688h210.375V441.262z"></path> <path d="M311.475,154.387v9.562v81.96l0,0v0.01l12.183,32.78h-20.502L103.127,0L59.053,26.584l13.359,23.418v123.509H58.298 l9.486,66.938h4.15h0.478v20.225c-8.606,3.911-18.169,12.307-18.169,27.387c0,10.127,3.95,17.519,9.725,22.453l-51.857,44.686 h14.65l45.929-39.579c4.16,1.626,8.606,2.524,13.005,2.524c4.418,0,8.807-1.176,12.766-3.309l49.792,40.363h14.927l0.105-0.134 l-57.279-46.426c3.882-4.677,6.455-10.949,6.455-18.973c0-5.288-4.284-9.562-9.562-9.562c-5.279,0-9.562,4.274-9.562,9.562 c0,3.434-0.928,5.585-2.142,6.972l-2.62-2.123c-1.788-1.444-4.38-1.425-6.129,0.096l-3.586,3.089 c-3.099-1.435-5.489-4.246-5.489-9.63c0-8.645,8.578-10.738,10.194-11.045c4.609-0.793,7.975-4.771,7.975-9.438v-27.139h6.694 h3.92l13.378-66.938h-9.648H101.1v-69.405l114.75,220.846v1.521v2.878v6.723h38.25v19.125h133.875h9.562v-19.125h47.812h9.562 V154.387H311.475z M228.759,204.112l0.115,0.163l-39.015,25.389l20.062-51.466L228.759,204.112z M91.537,173.512h-4.781h-4.781 V68.037l9.562,18.035V173.512z M99.856,76.032L83.352,44.686l25.733-16.916L99.856,76.032z M122.233,47.296l18.341,31.824 l-29.605,19.068L122.233,47.296z M125.168,116.471l27.894-18.14l-10.92,49.677L125.168,116.471z M164.853,114.54l20.569,29.997 l-30.925,19.804L164.853,114.54z M161.678,187.196l34.559-23.677l-19.68,52.708L161.678,187.196z M212.828,278.125l-16.667-29.414 l41.376-29.548L212.828,278.125z M225.813,299.02l28.286-60.961l23.008,31.375L225.813,299.02z M416.662,250.012h-66.938v-57.375 h66.938V250.012z"></path> <polygon points="15.037,412.574 5.475,412.574 5.475,431.699 158.475,431.699 158.475,412.574 139.35,412.574 139.35,393.449 139.35,383.887 158.475,383.887 158.475,364.762 5.475,364.762 5.475,383.887 24.6,383.887 24.6,412.574 "></polygon> </g> </g> </g></svg>
                            </div>
                            <span class="nav-link-text ms-1">Engins</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white " href="{{ route('Utilisateurs.index') }}">
                            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                                <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" width="28px" height="28px" stroke="#ffffff"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M15.5 7.5C15.5 9.433 13.933 11 12 11C10.067 11 8.5 9.433 8.5 7.5C8.5 5.567 10.067 4 12 4C13.933 4 15.5 5.567 15.5 7.5Z" fill="#1C274C"></path> <path opacity="0.4" d="M19.5 7.5C19.5 8.88071 18.3807 10 17 10C15.6193 10 14.5 8.88071 14.5 7.5C14.5 6.11929 15.6193 5 17 5C18.3807 5 19.5 6.11929 19.5 7.5Z" fill="#1C274C"></path> <path opacity="0.4" d="M4.5 7.5C4.5 8.88071 5.61929 10 7 10C8.38071 10 9.5 8.88071 9.5 7.5C9.5 6.11929 8.38071 5 7 5C5.61929 5 4.5 6.11929 4.5 7.5Z" fill="#1C274C"></path> <path d="M18 16.5C18 18.433 15.3137 20 12 20C8.68629 20 6 18.433 6 16.5C6 14.567 8.68629 13 12 13C15.3137 13 18 14.567 18 16.5Z" fill="#1C274C"></path> <path opacity="0.4" d="M22 16.5C22 17.8807 20.2091 19 18 19C15.7909 19 14 17.8807 14 16.5C14 15.1193 15.7909 14 18 14C20.2091 14 22 15.1193 22 16.5Z" fill="#1C274C"></path> <path opacity="0.4" d="M2 16.5C2 17.8807 3.79086 19 6 19C8.20914 19 10 17.8807 10 16.5C10 15.1193 8.20914 14 6 14C3.79086 14 2 15.1193 2 16.5Z" fill="#1C274C"></path> </g></svg>
                            </div>
                            <span class="nav-link-text ms-1">Utilisateurs</span>
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
                            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Admin</a></li>
                            <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Liste des engins</li>
                        </ol>
                        <h6 class="font-weight-bolder mb-0">Liste des engins</h6>
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
                                    <h6 class="text-white text-capitalize ps-3">Tables des engins</h6>
                                </div>
                            </div>
                            <div class="card-body px-0 pb-2">
                                <div class="d-flex m-2 justify-content-start">
                                    <a class="btn btn-primary justify-content-center" style="background-color: #00811e; height: 40px; padding: 4px;  box-shadow: rgba(0, 129, 30, 0.16) 0px 10px 36px 0px, rgba(0, 129, 30, 0.06) 0px 0px 0px 1px;" href="{{ route('GestionEngins.create') }}">
                                        <div class="row">
                                            <div class="col-1 mb-2">
                                                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="28" height="28" viewBox="0,0,300,150">
                                                    <g fill="#ffffff" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal">
                                                        <g transform="scale(4,4)">
                                                            <path d="M32,6c-14.359,0 -26,11.641 -26,26c0,14.359 11.641,26 26,26c14.359,0 26,-11.641 26,-26c0,-14.359 -11.641,-26 -26,-26zM49,34l-14,1l-1,14h-4l-1,-14l-14,-1v-4l14,-1l1,-14h4l1,14l14,1z"></path>
                                                        </g>
                                                    </g>
                                                </svg>
                                            </div>
                                            <div class="col-10 mt-1">
                                                <p>
                                                    <em>
                                                        Ajouter
                                                    </em>
                                                </p>
                                            </div>
                                        </div>
                                    </a>  
                                </div>
                                <div class="table-responsive p-0">
                                    <table class="table align-items-center mb-0">
                                        <thead>
                                            <tr>
                                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Image</th>
                                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Nom</th>
                                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Capacité</th>
                                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Compteur</th>
                                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">fonction</th>
                                                <th class="text-secondary opacity-7"></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($engins as $engin)
                                                <tr>
                                                    <td>
                                                        <div class="d-flex px-2 py-1">
                                                            <center>
                                                                <img src="{{asset( $engin->Image )}}" alt="Image de {{ $engin->Nom }}" width="140">
                                                            </center>
                                                        </div>
                                                    </td>
                                                    <td class="text-center">{{ $engin->Nom }}</td>
                                                    <td class="text-center">{{ $engin->Capacité }}</td>
                                                    <td class="text-center">{{ $engin->Compteur }}</td>
                                                    <td>
                                                        <div class="d-flex justify-content-center">
                                                            <div class="mx-2">
                                                                <a class="btn btn-primary" style="background-color: #00889d; width: 40px; height: 40px; padding: 4px; box-shadow: rgba(0, 136, 157, 0.16) 0px 10px 36px 0px, rgba(0, 136, 157, 0.06) 0px 0px 0px 1px;" href="{{ route('GestionEngins.show', $engin->id) }}">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="28" height="28" viewBox="0,0,256,256">
                                                                        <g fill="#ffffff" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal">
                                                                            <g transform="scale(5.12,5.12)">
                                                                                <path d="M25,2c-12.703,0 -23,10.297 -23,23c0,12.703 10.297,23 23,23c12.703,0 23,-10.297 23,-23c0,-12.703 -10.297,-23 -23,-23zM25,11c1.657,0 3,1.343 3,3c0,1.657 -1.343,3 -3,3c-1.657,0 -3,-1.343 -3,-3c0,-1.657 1.343,-3 3,-3zM29,38h-2h-4h-2v-2h2v-13h-2v-2h2h4v2v13h2z"></path>
                                                                            </g>
                                                                        </g>
                                                                    </svg>
                                                                </a>
                                                            </div>
                                                            <div class="mx-2">
                                                                <a class="btn btn-success" style="background-color: #ffc107; height: 40px; width: 40px; padding: 4px;  box-shadow: rgba(255, 193, 7, 0.16) 0px 10px 36px 0px, rgba(255, 193, 7, 0.06) 0px 0px 0px 1px;" href="{{ route('GestionEngins.edit', $engin->id) }}">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="28" height="28" viewBox="0,0,256,256">
                                                                        <g fill="#ffffff" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal">
                                                                            <g transform="scale(4,4)">
                                                                                <path d="M22,51c-1,-1 -4,-1 -4,-1l-0.425,-1.274c-0.362,-1.086 -1.215,-1.939 -2.301,-2.301l-1.274,-0.425c0,0 0.5,-2.5 -1,-4l25,-25l8,10zM52,21l-9,-9l4.68,-4.68c0,0 3.5,-1.5 7,2c3.5,3.5 2,7 2,7zM9,50l-1.843,4.476c-0.614,1.49 0.877,2.981 2.367,2.367l4.476,-1.843z"></path>
                                                                            </g>
                                                                        </g>
                                                                    </svg>
                                                                </a>
                                                            </div>
                                                            <div class="mx-2">
                                                                <form method="POST" action="{{ route('GestionEngins.destroy', $engin->id) }}">
                                                                    @csrf
                                                                    @method("delete")
                                                                    <button type="submit" class="btn btn-primary" style="background-color: #dc3545; height: 40px; width: 40px; padding: 4px; box-shadow: rgba(255, 0, 0, 0.16) 0px 10px 36px 0px, rgba(255, 0, 0, 0.06) 0px 0px 0px 1px;">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="28" height="28" viewBox="0,0,256,256" class="me-2">
                                                                            <g fill="#ffffff" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal">
                                                                                <g transform="scale(4,4)">
                                                                                    <path d="M28,6c-2.209,0 -4,1.791 -4,4v2h-0.40039l-13.59961,2v3h44v-3l-13.59961,-2h-0.40039v-2c0,-2.209 -1.791,-4 -4,-4zM28,10h8v2h-8zM12,19l2.70117,33.32227c0.168,2.077 1.90428,3.67773 3.98828,3.67773h26.62305c2.084,0 3.81733,-1.59878 3.98633,-3.67578l2.625,-32.32422zM20,26c1.105,0 2,0.895 2,2v23h-3l-1,-23c0,-1.105 0.895,-2 2,-2zM32,26c1.657,0 3,1.343 3,3v22h-6v-22c0,-1.657 1.343,-3 3,-3zM44,26c1.105,0 2,0.895 2,2l-1,23h-3v-23c0,-1.105 0.895,-2 2,-2z"></path>
                                                                                </g>
                                                                            </g>
                                                                        </svg>
                                                                        Supprimer
                                                                    </button>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <div class="d-flex justify-content-center">
                                    {{ $engins->links() }}
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
        <script src="{{asset('assets/js/material-dashboard.min.js?v=3.1.0')}}"></script>
    </body>
</html>