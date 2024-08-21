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
                        <a class="nav-link text-white" href="{{ route('assistant.index') }}">
                            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                                <i class="material-icons opacity-10">dashboard</i>
                            </div>
                            <span class="nav-link-text ms-1">Tableau de bord</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{ route('engin.index') }}">
                            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                                <svg fill="#ffffff" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="28px" height="28px" viewBox="0 0 479.512 479.512" xml:space="preserve" stroke="#ffffff"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <g id="iconos_42_"> <path d="M474.037,438.871v-31.078c0-21.124-12.346-33.469-33.469-33.469H230.193c-28.391,0-43.031,13.445-43.031,33.469v40.344 c0,20.914,14.047,31.375,43.031,31.375h210.375C461.691,479.512,474.037,465.465,474.037,438.871z M435.787,441.262H225.412 v-28.688h210.375V441.262z"></path> <path d="M311.475,154.387v9.562v81.96l0,0v0.01l12.183,32.78h-20.502L103.127,0L59.053,26.584l13.359,23.418v123.509H58.298 l9.486,66.938h4.15h0.478v20.225c-8.606,3.911-18.169,12.307-18.169,27.387c0,10.127,3.95,17.519,9.725,22.453l-51.857,44.686 h14.65l45.929-39.579c4.16,1.626,8.606,2.524,13.005,2.524c4.418,0,8.807-1.176,12.766-3.309l49.792,40.363h14.927l0.105-0.134 l-57.279-46.426c3.882-4.677,6.455-10.949,6.455-18.973c0-5.288-4.284-9.562-9.562-9.562c-5.279,0-9.562,4.274-9.562,9.562 c0,3.434-0.928,5.585-2.142,6.972l-2.62-2.123c-1.788-1.444-4.38-1.425-6.129,0.096l-3.586,3.089 c-3.099-1.435-5.489-4.246-5.489-9.63c0-8.645,8.578-10.738,10.194-11.045c4.609-0.793,7.975-4.771,7.975-9.438v-27.139h6.694 h3.92l13.378-66.938h-9.648H101.1v-69.405l114.75,220.846v1.521v2.878v6.723h38.25v19.125h133.875h9.562v-19.125h47.812h9.562 V154.387H311.475z M228.759,204.112l0.115,0.163l-39.015,25.389l20.062-51.466L228.759,204.112z M91.537,173.512h-4.781h-4.781 V68.037l9.562,18.035V173.512z M99.856,76.032L83.352,44.686l25.733-16.916L99.856,76.032z M122.233,47.296l18.341,31.824 l-29.605,19.068L122.233,47.296z M125.168,116.471l27.894-18.14l-10.92,49.677L125.168,116.471z M164.853,114.54l20.569,29.997 l-30.925,19.804L164.853,114.54z M161.678,187.196l34.559-23.677l-19.68,52.708L161.678,187.196z M212.828,278.125l-16.667-29.414 l41.376-29.548L212.828,278.125z M225.813,299.02l28.286-60.961l23.008,31.375L225.813,299.02z M416.662,250.012h-66.938v-57.375 h66.938V250.012z"></path> <polygon points="15.037,412.574 5.475,412.574 5.475,431.699 158.475,431.699 158.475,412.574 139.35,412.574 139.35,393.449 139.35,383.887 158.475,383.887 158.475,364.762 5.475,364.762 5.475,383.887 24.6,383.887 24.6,412.574 "></polygon> </g> </g> </g></svg>
                            </div>
                            <span class="nav-link-text ms-1">Engins</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{ route('affectation.index') }}">
                            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                                <svg viewBox="0 0 24 24" fill="none" height="28px" width="28px" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M3 5.25C3 4.00736 4.00736 3 5.25 3H18.75C19.9926 3 21 4.00736 21 5.25V12.0218C20.5368 11.7253 20.0335 11.4858 19.5 11.3135V5.25C19.5 4.83579 19.1642 4.5 18.75 4.5H5.25C4.83579 4.5 4.5 4.83579 4.5 5.25V18.75C4.5 19.1642 4.83579 19.5 5.25 19.5H11.3135C11.4858 20.0335 11.7253 20.5368 12.0218 21H5.25C4.00736 21 3 19.9926 3 18.75V5.25Z" fill="#ffffff"></path> <path d="M10.7803 7.71967C11.0732 8.01256 11.0732 8.48744 10.7803 8.78033L8.78033 10.7803C8.48744 11.0732 8.01256 11.0732 7.71967 10.7803L6.71967 9.78033C6.42678 9.48744 6.42678 9.01256 6.71967 8.71967C7.01256 8.42678 7.48744 8.42678 7.78033 8.71967L8.25 9.18934L9.71967 7.71967C10.0126 7.42678 10.4874 7.42678 10.7803 7.71967Z" fill="#ffffff"></path> <path d="M10.7803 13.2197C11.0732 13.5126 11.0732 13.9874 10.7803 14.2803L8.78033 16.2803C8.48744 16.5732 8.01256 16.5732 7.71967 16.2803L6.71967 15.2803C6.42678 14.9874 6.42678 14.5126 6.71967 14.2197C7.01256 13.9268 7.48744 13.9268 7.78033 14.2197L8.25 14.6893L9.71967 13.2197C10.0126 12.9268 10.4874 12.9268 10.7803 13.2197Z" fill="#ffffff"></path> <path d="M17.5 12C20.5376 12 23 14.4624 23 17.5C23 20.5376 20.5376 23 17.5 23C14.4624 23 12 20.5376 12 17.5C12 14.4624 14.4624 12 17.5 12ZM18.0011 20.5035L18.0006 18H20.503C20.7792 18 21.003 17.7762 21.003 17.5C21.003 17.2239 20.7792 17 20.503 17H18.0005L18 14.4993C18 14.2231 17.7761 13.9993 17.5 13.9993C17.2239 13.9993 17 14.2231 17 14.4993L17.0005 17H14.4961C14.22 17 13.9961 17.2239 13.9961 17.5C13.9961 17.7762 14.22 18 14.4961 18H17.0006L17.0011 20.5035C17.0011 20.7797 17.225 21.0035 17.5011 21.0035C17.7773 21.0035 18.0011 20.7797 18.0011 20.5035Z" fill="#ffffff"></path> <path d="M13.25 8.5C12.8358 8.5 12.5 8.83579 12.5 9.25C12.5 9.66421 12.8358 10 13.25 10H16.75C17.1642 10 17.5 9.66421 17.5 9.25C17.5 8.83579 17.1642 8.5 16.75 8.5H13.25Z" fill="#ffffff"></path> </g></svg>
                            </div>
                            <span class="nav-link-text ms-1">Affectation</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white " href="{{ route('panne.index') }}">
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
                    <li class="nav-item">
                        <a class="nav-link text-white active"  style="background-color:#e10505;" href="{{ route('sortie.index') }}">
                            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                                <svg width="28px" height="28px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 297 297" style="enable-background:new 0 0 297 297;" xml:space="preserve">
                                    <g> <g><g><path fill="#ffffff" d="M154.848,6.347c-30.18,0-59.013,9.345-83.385,27.026c-4.19,3.04-5.329,8.795-2.613,13.202l22.33,36.228 c1.445,2.344,3.8,3.98,6.502,4.515c2.7,0.534,5.502-0.08,7.731-1.697c13.303-9.65,29.046-14.752,45.528-14.752 c42.806,0,77.631,34.825,77.631,77.631c0,42.806-34.825,77.631-77.631,77.631c-16.482,0-32.225-5.101-45.528-14.752 c-2.228-1.617-5.029-2.233-7.731-1.697c-2.702,0.534-5.058,2.17-6.502,4.515l-22.33,36.228 c-2.716,4.406-1.577,10.162,2.613,13.202c24.372,17.68,53.206,27.026,83.385,27.026C233.231,290.651,297,226.882,297,148.499 S233.231,6.347,154.848,6.347z M154.848,270.861c-22.901,0-44.901-6.25-64.159-18.154l12.041-19.535 c14.635,8.367,31.108,12.747,48.212,12.747c53.718,0,97.421-43.703,97.421-97.421s-43.703-97.421-97.421-97.421 c-17.104,0-33.577,4.38-48.212,12.747L90.689,44.291c19.257-11.904,41.257-18.154,64.159-18.154 c67.47,0,122.362,54.892,122.362,122.362C277.21,215.969,222.318,270.861,154.848,270.861z"/><path fill="#ffffff" d="M94.81,202.148c1.722-3.218,1.534-7.122-0.491-10.158l-11.513-17.27h84.913c14.459,0,26.222-11.763,26.222-26.222 c0-14.459-11.763-26.222-26.222-26.222H82.806l11.513-17.27c2.024-3.036,2.213-6.94,0.491-10.158 c-1.722-3.217-5.075-5.226-8.724-5.226H42.548c-3.309,0-6.398,1.653-8.233,4.406l-32.653,48.98 c-2.216,3.323-2.216,7.654,0,10.977l32.653,48.98c1.835,2.753,4.924,4.406,8.233,4.406h43.538 C89.735,207.374,93.088,205.365,94.81,202.148z M47.843,187.586v-0.002l-26.056-39.085l26.056-39.085h19.753l-11.513,17.27 c-2.024,3.036-2.213,6.94-0.491,10.158c1.722,3.217,5.075,5.226,8.724,5.226h103.402c3.546,0,6.432,2.885,6.432,6.432 c0,3.547-2.885,6.432-6.432,6.432H64.317c-3.649,0-7.002,2.009-8.724,5.226c-1.722,3.218-1.534,7.122,0.491,10.158l11.513,17.27 H47.843z"/></g></g></g>
                                </svg>
                            </div>
                            <span class="nav-link-text ms-1">Sortie engin</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white " href="{{ route('entre.index') }}">
                            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                                <svg fill="#ffffff" height="28px" width="28px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 296.999 296.999" xml:space="preserve"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <g> <g> <path d="M146.603,0c-31.527,0-61.649,9.762-87.11,28.232c-4.377,3.176-5.567,9.188-2.73,13.791l23.329,37.845 c1.509,2.449,3.971,4.158,6.793,4.716c2.82,0.559,5.748-0.084,8.077-1.773c13.897-10.081,30.343-15.41,47.56-15.41 c44.718,0,81.098,36.38,81.098,81.098c0,44.718-36.38,81.098-81.098,81.098c-17.217,0-33.663-5.329-47.56-15.41 c-2.329-1.689-5.255-2.331-8.077-1.773c-2.821,0.558-5.283,2.267-6.793,4.716l-23.329,37.846 c-2.838,4.603-1.647,10.615,2.73,13.791c25.46,18.47,55.583,28.232,87.11,28.232c81.883,0,148.5-66.617,148.5-148.5 S228.486,0,146.603,0z M146.603,276.326c-23.925,0-46.906-6.529-67.024-18.965l12.579-20.407 c15.288,8.741,32.497,13.317,50.364,13.317c56.117,0,101.771-45.655,101.771-101.771c0-56.116-45.655-101.771-101.771-101.771 c-17.866,0-35.076,4.576-50.364,13.317L79.579,39.638c20.117-12.435,43.099-18.965,67.024-18.965 c70.483,0,127.826,57.343,127.826,127.826S217.087,276.326,146.603,276.326z"></path> <path d="M105.966,193.934c-2.115,3.172-2.312,7.25-0.513,10.611c1.799,3.36,5.302,5.459,9.113,5.459h45.482 c3.456,0,6.684-1.727,8.601-4.603l34.112-51.167c2.315-3.472,2.315-7.996,0-11.467L168.65,91.599 c-1.917-2.876-5.144-4.603-8.601-4.603h-45.482c-3.812,0-7.315,2.099-9.113,5.459c-1.799,3.361-1.602,7.44,0.513,10.611 l12.027,18.041H29.288c-15.104,0-27.393,12.288-27.393,27.393s12.288,27.393,27.393,27.393h88.705L105.966,193.934z M29.288,155.219c-3.705,0-6.719-3.014-6.719-6.719c0-3.705,3.014-6.719,6.719-6.719h108.02c3.812,0,7.315-2.099,9.113-5.459 c1.799-3.361,1.602-7.44-0.513-10.611l-12.027-18.041h20.635l27.22,40.83l-27.22,40.83h-20.635l12.027-18.041 c2.115-3.172,2.312-7.25,0.513-10.611c-1.799-3.36-5.302-5.459-9.113-5.459H29.288z"></path> </g> </g> </g> </g></svg>
                            </div>
                            <span class="nav-link-text ms-1">Entrée engin</span>
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
                            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Assistant</a></li>
                            <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Sortie engin</li>
                        </ol>
                        <h6 class="font-weight-bolder mb-0">Sortie engin</h6>
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
                                    <h6 class="text-white text-capitalize ps-3">Tables des affectations</h6>
                                </div>
                            </div>
                            <div class="card-body px-0 pb-2">
                                <div class="table-responsive p-0">
                                    <table class="table align-items-center mb-0">
                                        <thead>
                                        <tr>
                                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Date d'Affectation</th>
                                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">État</th>
                                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Engin</th>
                                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Utilisateur</th>
                                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"></th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($affectations as $affectation)
                                                <tr>
                                                    <td class="text-center">{{ $affectation->DateAffectation }}</td>
                                                    <td class="text-center">{{ $affectation->etat }}</td>
                                                    <td class="text-center">{{ $affectation->engin->Nom }}</td>
                                                    <!-- Trouver et afficher l'utilisateur associé à chaque affectation -->
                                                    <td class="text-center">
                                                        @php
                                                            $traitement = $traitements->firstWhere('demande_id', $affectation->demande_id);
                                                        @endphp
                                                        {{ $traitement ? $traitement->utilisateur->nom . ' ' . $traitement->utilisateur->prenom : 'Utilisateur non trouvé' }}
                                                    </td>
                                                    <td class="text-center">
                                                        <a href="{{ route('sortie.create', $affectation->id) }}" class="btn btn-primary" style="background-color: #00811e; height: 40px; width: 180px; padding: 4px;  box-shadow: rgba(255, 193, 7, 0.16) 0px 10px 36px 0px, rgba(255, 193, 7, 0.06) 0px 0px 0px 1px;">
                                                            <svg version="1.1" id="Icons" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"  viewBox="0 0 32 32" xml:space="preserve" width="26" height="26">
                                                                <path fill="#ffffff" d="M24,15c-4.4,0-8,3.6-8,8s3.6,8,8,8s8-3.6,8-8S28.4,15,24,15z M27.7,21.7l-4,4C23.5,25.9,23.3,26,23,26s-0.5-0.1-0.7-0.3 l-2-2c-0.4-0.4-0.4-1,0-1.4s1-0.4,1.4,0l1.3,1.3l3.3-3.3c0.4-0.4,1-0.4,1.4,0S28.1,21.3,27.7,21.7z" class="st0"/>
                                                                <g fill="#ffffff">
                                                                    <path d="M1,17v10c0,0.6,0.4,1,1,1h13.4c-0.9-1.5-1.4-3.2-1.4-5c0-2.3,0.8-4.3,2-6H1z" class="st0"/>
                                                                    <path d="M23,8h-2.2c0.3-1,0.3-2.1-0.2-3c-0.6-1.2-1.7-1.9-3-2c-1.5-0.1-2.9,0.7-3.8,2.1L12,8H12l-1.8-2.9C9.4,3.7,7.9,2.9,6.4,3 C5.1,3.1,4,3.8,3.4,5C2.9,5.9,2.9,7,3.2,8H1C0.4,8,0,8.4,0,9v5c0,0.6,0.4,1,1,1h17c1.7-1.2,3.7-2,6-2V9C24,8.4,23.6,8,23,8z M5.5,8 c0,0-0.1-0.1-0.1-0.1C5,7.2,4.9,6.5,5.2,5.9C5.5,5.2,6.2,5,6.5,5c0,0,0.1,0,0.1,0C7.2,5,8,5.3,8.5,6.1L9.6,8H5.5z M18.6,7.9 c0,0.1-0.1,0.1-0.1,0.1h-4.1l1.1-1.9C16,5.3,16.8,5,17.4,5c0,0,0.1,0,0.1,0c0.3,0,1,0.2,1.3,0.9C19.1,6.5,19,7.2,18.6,7.9z" class="st0"/>
                                                                </g>
                                                            </svg>
                                                            Confirmer la Sortie
                                                        </a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <div class="d-flex justify-content-center">
                                    {{ $affectations->links() }}
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