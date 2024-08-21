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
                        <a class="nav-link text-white" href="{{ route('technicien.index') }}">
                            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                                <i class="material-icons opacity-10">dashboard</i>
                            </div>
                            <span class="nav-link-text ms-1">Tableau de bord</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white active" style="background-color:#e10505;" href="{{ route('Reparation_panne.index') }}">
                            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                                <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="24px" height="24px" viewBox="0 0 343.162 343.162" style="enable-background:new 0 0 343.162 343.162;" xml:space="preserve">
                                    <g>
                                        <g>
                                            <path fill="#ffffff" d="M251.185,225.456c-0.643-0.637-1.327-1.195-2.42-2.054c-2.45-1.964-5.987-1.766-8.19,0.444l-8.545,8.545l-40.544-40.551l60.288-60.285c7.548,2.789,15.468,4.203,23.593,4.203c18.116,0,35.151-7.043,47.954-19.852 c19.924-19.936,25.424-50.597,13.679-76.279c-0.841-1.832-2.522-3.134-4.504-3.492s-4.005,0.276-5.44,1.702l-24.583,24.59l-20.188-1.549l-1.555-20.188l24.59-24.59c1.429-1.42,2.059-3.462,1.705-5.44c-0.366-1.981-1.67-3.666-3.495-4.494 C294.713,2.131,284.92,0,275.191,0c-18.11,0-35.128,7.046-47.93,19.849c-18.963,18.963-24.902,46.633-15.648,71.541 l-60.292,60.291L81.9,82.26l4.354-4.348c1.156-1.156,1.801-2.717,1.801-4.348s-0.646-3.197-1.801-4.348L39.96,22.929c-2.306-2.306-6.389-2.306-8.695,0l-17.39,17.387c-2.405,2.405-2.405,6.29,0,8.695l46.288,46.291c1.201,1.198,2.774,1.802,4.348,1.802s3.149-0.604,4.347-1.802l4.348-4.348l69.421,69.422l-51.239,51.232 c-7.551-2.786-15.465-4.203-23.593-4.203c-18.11,0-35.14,7.044-47.942,19.852C-0.083,247.193-5.586,277.854,6.171,303.53 c0.835,1.837,2.513,3.146,4.495,3.495c1.973,0.348,4.014-0.276,5.434-1.706l24.596-24.596l20.188,1.562l1.549,20.188 l-24.589,24.584c-1.42,1.424-2.06,3.465-1.703,5.44c0.357,1.981,1.667,3.669,3.492,4.498c8.818,4.035,18.618,6.167,28.346,6.167 l0,0c18.11,0,35.131-7.05,47.93-19.853c18.963-18.963,24.899-46.633,15.651-71.541l51.23-51.232l40.544,40.55l-8.538,8.539 c-2.198,2.191-2.09,6.089-0.187,8.533c0.559,0.721,1.141,1.429,1.783,2.077l69.529,69.53c5.164,5.17,12.106,8.124,19.048,8.124 c6.137,0,11.817-2.282,15.984-6.449l1.43-1.436c4.563-4.558,6.833-10.802,6.4-17.552c-0.408-6.473-3.278-12.67-8.076-17.468 L251.185,225.456z"/>
                                        </g>
                                    </g>
                                </svg>
                            </div>
                            <span class="nav-link-text ms-1">Liste des pannes</span>
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
                            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Technicien</a></li>
                            <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Liste des pannes</li>
                        </ol>
                        <h6 class="font-weight-bolder mb-0">Liste des pannes</h6>
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
                                    <h6 class="text-white text-capitalize ps-3">Tables des pannes</h6>
                                </div>
                            </div>
                            <div class="card-body px-0 pb-2">
                                <div class="container">
                                    <div class="row">
                                        <div class="table-responsive p-0">
                                            <table class="table align-items-center mb-0">
                                                <thead>
                                                    <tr>
                                                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Image</th>
                                                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Nom</th>
                                                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Les pannes</th>
                                                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">fonction</th>
                                                        <th class="text-secondary opacity-7"></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($engins as $engin)
                                                        <tr>
                                                            <td>
                                                                <div class="d-flex px-2 py-1">
                                                                    <center>
                                                                        <img src="{{asset( $engin->Image )}}" alt="Image de {{ $engin->Nom }}" width="140">
                                                                    </center>
                                                                </div>
                                                            </td>
                                                            <td class="text-center">{{ $engin->Nom }}</td>
                                                            <td class="text-center">
                                                                {{ $engin->details->pluck('critere.nom')->implode(', ') }}
                                                            </td>
                                                            <td class="text-center">
                                                                <div class="d-flex justify-content-center">
                                                                    <div class="mx-2">
                                                                        <a class="btn btn-primary" style="background-color: #00889d; width: 40px; height: 40px; padding: 4px; box-shadow: rgba(0, 136, 157, 0.16) 0px 10px 36px 0px, rgba(0, 136, 157, 0.06) 0px 0px 0px 1px;" href="{{ route('Reparation_panne.show', $engin->id) }}">
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
                                                                        <a class="btn btn-primary" style="background-color: #00811e; width: 40px; height: 40px; padding: 4px; box-shadow: rgba(0, 136, 157, 0.16) 0px 10px 36px 0px, rgba(0, 136, 157, 0.06) 0px 0px 0px 1px;" href="{{ route('Reparation_panne.create', $engin->id) }}">
                                                                            <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="24px" height="24px" viewBox="0 0 343.162 343.162" style="enable-background:new 0 0 343.162 343.162;" xml:space="preserve">
                                                                                <g>
                                                                                    <g>
                                                                                        <path fill="#ffffff" d="M251.185,225.456c-0.643-0.637-1.327-1.195-2.42-2.054c-2.45-1.964-5.987-1.766-8.19,0.444l-8.545,8.545l-40.544-40.551l60.288-60.285c7.548,2.789,15.468,4.203,23.593,4.203c18.116,0,35.151-7.043,47.954-19.852 c19.924-19.936,25.424-50.597,13.679-76.279c-0.841-1.832-2.522-3.134-4.504-3.492s-4.005,0.276-5.44,1.702l-24.583,24.59l-20.188-1.549l-1.555-20.188l24.59-24.59c1.429-1.42,2.059-3.462,1.705-5.44c-0.366-1.981-1.67-3.666-3.495-4.494 C294.713,2.131,284.92,0,275.191,0c-18.11,0-35.128,7.046-47.93,19.849c-18.963,18.963-24.902,46.633-15.648,71.541 l-60.292,60.291L81.9,82.26l4.354-4.348c1.156-1.156,1.801-2.717,1.801-4.348s-0.646-3.197-1.801-4.348L39.96,22.929c-2.306-2.306-6.389-2.306-8.695,0l-17.39,17.387c-2.405,2.405-2.405,6.29,0,8.695l46.288,46.291c1.201,1.198,2.774,1.802,4.348,1.802s3.149-0.604,4.347-1.802l4.348-4.348l69.421,69.422l-51.239,51.232 c-7.551-2.786-15.465-4.203-23.593-4.203c-18.11,0-35.14,7.044-47.942,19.852C-0.083,247.193-5.586,277.854,6.171,303.53 c0.835,1.837,2.513,3.146,4.495,3.495c1.973,0.348,4.014-0.276,5.434-1.706l24.596-24.596l20.188,1.562l1.549,20.188 l-24.589,24.584c-1.42,1.424-2.06,3.465-1.703,5.44c0.357,1.981,1.667,3.669,3.492,4.498c8.818,4.035,18.618,6.167,28.346,6.167 l0,0c18.11,0,35.131-7.05,47.93-19.853c18.963-18.963,24.899-46.633,15.651-71.541l51.23-51.232l40.544,40.55l-8.538,8.539 c-2.198,2.191-2.09,6.089-0.187,8.533c0.559,0.721,1.141,1.429,1.783,2.077l69.529,69.53c5.164,5.17,12.106,8.124,19.048,8.124 c6.137,0,11.817-2.282,15.984-6.449l1.43-1.436c4.563-4.558,6.833-10.802,6.4-17.552c-0.408-6.473-3.278-12.67-8.076-17.468 L251.185,225.456z"/>
                                                                                    </g>
                                                                                </g>
                                                                            </svg>
                                                                        </a>
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