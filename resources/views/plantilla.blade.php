<!DOCTYPE html>
<!--
Jampack
Author: Hencework
Contact: contact@hencework.com
-->
<html lang="en">

<head>
    <!-- Meta Tags -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Panel de Administracion</title>
    <meta name="description" content="A modern CRM Dashboard Template with reusable and flexible components for your SaaS web applications by hencework. Based on Bootstrap." />
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}">
    <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
    @stack('styles')
    <link href="{{ asset('dist/css/style.css') }}" rel="stylesheet" type="text/css">
    <script src="{{ asset('js/app.js') }}"></script>

</head>

<body>
    <!-- Wrapper -->
    <div class="hk-wrapper" data-layout="vertical" data-layout-style="default" data-menu="light" data-footer="simple">
        <!-- Top Navbar -->
        <nav class="hk-navbar navbar navbar-expand-xl navbar-light fixed-top">
            <div class="container-fluid">
                <!-- Start Nav -->
                <div class="nav-start-wrap">
                    <button class="btn btn-icon btn-rounded btn-flush-dark flush-soft-hover navbar-toggle d-xl-none"><span class="icon"><span class="feather-icon"><i data-feather="align-left"></i></span></span></button>

                    <!-- Search -->
                    <form class="dropdown navbar-search">
                        <div class="dropdown-toggle no-caret" data-bs-toggle="dropdown" data-dropdown-animation data-bs-auto-close="outside">
                            <a href="#" class="btn btn-icon btn-rounded btn-flush-dark flush-soft-hover  d-xl-none"><span class="icon"><span class="feather-icon"><i data-feather="search"></i></span></span></a>
                            <div class="input-group d-xl-flex d-none">
                                <span class="input-affix-wrapper input-search affix-border">
                                    <input type="text" class="form-control  bg-transparent" data-navbar-search-close="false" placeholder="Search..." aria-label="Search">
                                    <span class="input-suffix"><span>/</span>
                                        <span class="btn-input-clear"><i class="bi bi-x-circle-fill"></i></span>
                                        <span class="spinner-border spinner-border-sm input-loader text-primary" role="status">
                                            <span class="sr-only">Loading...</span>
                                        </span>
                                    </span>
                                </span>
                            </div>
                        </div>
                        <div class="dropdown-menu p-0">
                            <!-- Mobile Search -->
                            <div class="dropdown-item d-xl-none bg-transparent">
                                <div class="input-group mobile-search">
                                    <span class="input-affix-wrapper input-search">
                                        <input type="text" class="form-control" placeholder="Search..." aria-label="Search">
                                        <span class="input-suffix">
                                            <span class="btn-input-clear"><i class="bi bi-x-circle-fill"></i></span>
                                            <span class="spinner-border spinner-border-sm input-loader text-primary" role="status">
                                                <span class="sr-only">Loading...</span>
                                            </span>
                                        </span>
                                    </span>
                                </div>
                            </div>
                            <!--/ Mobile Search -->
                            <div data-simplebar class="dropdown-body p-2">
                                <h6 class="dropdown-header">Recent Search
                                </h6>
                                <div class="dropdown-item bg-transparent">
                                    <a href="#" class="badge badge-pill badge-soft-secondary">Grunt</a>
                                    <a href="#" class="badge badge-pill badge-soft-secondary">Node JS</a>
                                    <a href="#" class="badge badge-pill badge-soft-secondary">SCSS</a>
                                </div>
                                <div class="dropdown-divider"></div>
                                <h6 class="dropdown-header">Help
                                </h6>
                                <a href="javascript:void(0);" class="dropdown-item">
                                    <div class="media align-items-center">
                                        <div class="media-head me-2">
                                            <div class="avatar avatar-icon avatar-xs avatar-soft-light avatar-rounded">
                                                <span class="initial-wrap">
                                                    <span class="svg-icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-corner-down-right" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                            <path d="M6 6v6a3 3 0 0 0 3 3h10l-4 -4m0 8l4 -4"></path>
                                                        </svg>
                                                    </span>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="media-body">
                                            How to setup theme?
                                        </div>
                                    </div>
                                </a>
                                <a href="javascript:void(0);" class="dropdown-item">
                                    <div class="media align-items-center">
                                        <div class="media-head me-2">
                                            <div class="avatar avatar-icon avatar-xs avatar-soft-light avatar-rounded">
                                                <span class="initial-wrap">
                                                    <span class="svg-icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-corner-down-right" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                            <path d="M6 6v6a3 3 0 0 0 3 3h10l-4 -4m0 8l4 -4"></path>
                                                        </svg>
                                                    </span>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="media-body">
                                            View detail documentation
                                        </div>
                                    </div>
                                </a>
                                <div class="dropdown-divider"></div>
                                <h6 class="dropdown-header">Users
                                </h6>
                                <a href="javascript:void(0);" class="dropdown-item">
                                    <div class="media align-items-center">
                                        <div class="media-head me-2">
                                            <div class="avatar avatar-xs avatar-rounded">
                                                <img src="{{ asset('dist/img/avatar3.jpg') }}" alt="user" class="avatar-img">
                                            </div>
                                        </div>
                                        <div class="media-body">
                                            Sarah Jone
                                        </div>
                                    </div>
                                </a>
                                <a href="javascript:void(0);" class="dropdown-item">
                                    <div class="media align-items-center">
                                        <div class="media-head me-2">
                                            <div class="avatar avatar-xs avatar-soft-primary avatar-rounded">
                                                <span class="initial-wrap">J</span>
                                            </div>
                                        </div>
                                        <div class="media-body">
                                            Joe Jackson
                                        </div>
                                    </div>
                                </a>
                                <a href="javascript:void(0);" class="dropdown-item">
                                    <div class="media align-items-center">
                                        <div class="media-head me-2">
                                            <div class="avatar avatar-xs avatar-rounded">
                                                <img src="{{ asset('dist/img/avatar4.jpg') }}" alt="user" class="avatar-img">
                                            </div>
                                        </div>
                                        <div class="media-body">
                                            Maria Richard
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="dropdown-footer d-xl-flex d-none"><a href="#"><u>Search all</u></a></div>
                        </div>
                    </form>
                    <!-- /Search -->
                </div>
                <!-- /Start Nav -->

                <!-- End Nav -->
                <div class="nav-end-wrap">
                    <ul class="navbar-nav flex-row">
                        <li class="nav-item">
                            <a href="email.html" class="btn btn-icon btn-rounded btn-flush-dark flush-soft-hover"><span class="icon"><span class=" position-relative"><span class="feather-icon"><i data-feather="inbox"></i></span><span class="badge badge-sm badge-soft-primary badge-sm badge-pill position-top-end-overflow-1">4</span></span></span></a>
                        </li>
                        <li class="nav-item">
                            <div class="dropdown dropdown-notifications">
                                <a href="#" class="btn btn-icon btn-rounded btn-flush-dark flush-soft-hover dropdown-toggle no-caret" data-bs-toggle="dropdown" data-dropdown-animation role="button" aria-haspopup="true" aria-expanded="false"><span class="icon"><span class="position-relative"><span class="feather-icon"><i data-feather="bell"></i></span><span class="badge badge-success badge-indicator position-top-end-overflow-1"></span></span></span></a>
                                <div class="dropdown-menu dropdown-menu-end p-0">
                                    <h6 class="dropdown-header px-4 fs-6">Notifications<a href="#" class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"><span class="icon"><span class="feather-icon"><i data-feather="settings"></i></span></span></a>
                                    </h6>
                                    <div data-simplebar class="dropdown-body  p-2">
                                        <a href="javascript:void(0);" class="dropdown-item">
                                            <div class="media">
                                                <div class="media-head">
                                                    <div class="avatar avatar-rounded avatar-sm">
                                                        <img src="{{ asset('dist/img/avatar2.jpg') }}" alt="user" class="avatar-img">
                                                    </div>
                                                </div>
                                                <div class="media-body">
                                                    <div>
                                                        <div class="notifications-text">Morgan Freeman accepted your invitation to join the team</div>
                                                        <div class="notifications-info">
                                                            <span class="badge badge-soft-success">Collaboration</span>
                                                            <div class="notifications-time">Today, 10:14 PM</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="javascript:void(0);" class="dropdown-item">
                                            <div class="media">
                                                <div class="media-head">
                                                    <div class="avatar  avatar-icon avatar-sm avatar-success avatar-rounded">
                                                        <span class="initial-wrap">
                                                            <span class="feather-icon"><i data-feather="inbox"></i></span>
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="media-body">
                                                    <div>
                                                        <div class="notifications-text">New message received from Alan Rickman</div>
                                                        <div class="notifications-info">
                                                            <div class="notifications-time">Today, 7:51 AM</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="javascript:void(0);" class="dropdown-item">
                                            <div class="media">
                                                <div class="media-head">
                                                    <div class="avatar  avatar-icon avatar-sm avatar-pink avatar-rounded">
                                                        <span class="initial-wrap">
                                                            <span class="feather-icon"><i data-feather="clock"></i></span>
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="media-body">
                                                    <div>
                                                        <div class="notifications-text">You have a follow up with Jampack Head on Friday, Dec 19 at 9:30 am</div>
                                                        <div class="notifications-info">
                                                            <div class="notifications-time">Yesterday, 9:25 PM</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="javascript:void(0);" class="dropdown-item">
                                            <div class="media">
                                                <div class="media-head">
                                                    <div class="avatar avatar-sm avatar-rounded">
                                                        <img src="{{ asset('dist/img/avatar3.jpg') }}" alt="user" class="avatar-img">
                                                    </div>
                                                </div>
                                                <div class="media-body">
                                                    <div>
                                                        <div class="notifications-text">Application of Sarah Williams is waiting for your approval</div>
                                                        <div class="notifications-info">
                                                            <div class="notifications-time">Today 10:14 PM</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="javascript:void(0);" class="dropdown-item">
                                            <div class="media">
                                                <div class="media-head">
                                                    <div class="avatar avatar-sm avatar-rounded">
                                                        <img src="{{ asset('dist/img/avatar10.jpg') }}" alt="user" class="avatar-img">
                                                    </div>
                                                </div>
                                                <div class="media-body">
                                                    <div>
                                                        <div class="notifications-text">Winston Churchil shared a document with you</div>
                                                        <div class="notifications-info">
                                                            <span class="badge badge-soft-violet">File Manager</span>
                                                            <div class="notifications-time">2 Oct, 2021</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="javascript:void(0);" class="dropdown-item">
                                            <div class="media">
                                                <div class="media-head">
                                                    <div class="avatar  avatar-icon avatar-sm avatar-danger avatar-rounded">
                                                        <span class="initial-wrap">
                                                            <span class="feather-icon"><i data-feather="calendar"></i></span>
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="media-body">
                                                    <div>
                                                        <div class="notifications-text">Last 2 days left for the project to be completed</div>
                                                        <div class="notifications-info">
                                                            <span class="badge badge-soft-orange">Updates</span>
                                                            <div class="notifications-time">14 Sep, 2021</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="dropdown-footer"><a href="#"><u>View all notifications</u></a></div>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item">
                            <div class="dropdown ps-2">
                                <a class=" dropdown-toggle no-caret" href="#" role="button" data-bs-display="static" data-bs-toggle="dropdown" data-dropdown-animation data-bs-auto-close="outside" aria-expanded="false">
                                    <div class="avatar avatar-rounded avatar-xs">
                                        <img src="{{ asset('dist/img/avatar12.jpg') }}" alt="user" class="avatar-img">
                                    </div>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <div class="p-2">
                                        <div class="media">
                                            <div class="media-head me-2">
                                                <div class="avatar avatar-primary avatar-sm avatar-rounded">
                                                    <span class="initial-wrap">Hk</span>
                                                </div>
                                            </div>
                                            @auth
                                            <div class="media-body">
                                                <div class="dropdown">
                                                    <a href="#" class="d-block dropdown-toggle link-dark fw-medium" data-bs-toggle="dropdown" data-dropdown-animation data-bs-auto-close="inside">{{ Auth::user()->nombre }} {{ Auth::user()->apellido }}</a>
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <div class="p-2">
                                                            <div class="media align-items-center active-user mb-3">
                                                                <div class="media-head me-2">
                                                                    <div class="avatar avatar-primary avatar-xs avatar-rounded">
                                                                        <span class="initial-wrap">E</span>
                                                                    </div>
                                                                </div>
                                                                <div class="media-body">
                                                                    <a href="#" class="d-flex align-items-center link-dark">{{ Auth::user()->name }} <i class="ri-checkbox-circle-fill fs-7 text-primary ms-1"></i></a>
                                                                    <a href="#" class="d-block fs-8 link-secondary"><u>Manage your account</u></a>
                                                                </div>
                                                            </div>
                                                            <div class="media align-items-center mb-3">
                                                                <div class="media-head me-2">
                                                                    <div class="avatar avatar-xs avatar-rounded">
                                                                        <img src="{{ asset('dist/img/avatar12.jpg') }}" alt="user" class="avatar-img">
                                                                    </div>
                                                                </div>
                                                                <div class="media-body">
                                                                    <a href="#" class="d-block link-dark">Jampack Team</a>
                                                                    <a href="#" class="d-block fs-8 link-secondary">{{ Auth::user()->email }}</a>
                                                                </div>
                                                            </div>
                                                            <button class="btn btn-block btn-outline-light btn-sm">
                                                                <span><span class="icon"><span class="feather-icon"><i data-feather="plus"></i></span></span>
                                                                    <span>Add Account</span></span>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="fs-7">{{ Auth::user()->email }}</div>
                                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                    @csrf
                                                </form>
                                                <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="d-block fs-8 link-secondary"><u>Sign Out</u></a>
                                            </div>
                                            @endauth
                                        </div>
                                    </div>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="{{ route('perfil') }}">Perfil</a>

                                    <div class="dropdown-divider"></div>
                                    <h6 class="dropdown-header">Administra tu cuenta</h6>

                                    <a class="dropdown-item" href="#"><span class="dropdown-icon feather-icon"><i data-feather="settings"></i></span><span>Settings</span></a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">Terminos & Condiciones</a>
                                    <a class="dropdown-item" href="{{ route('ayuda') }}">Ayuda & Soporte</a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <!-- /End Nav -->
            </div>
        </nav>
        <!-- /Top Navbar -->

        <!-- Vertical Nav -->
        <div class="hk-menu">
            <!-- Brand -->
            <div class="menu-header">
                <span>
                    <a class="navbar-brand" href="index.html">
                        <img class="brand-img img-fluid" src="{{ asset('dist/img/brand-sm.svg') }}" alt="brand" />
                        <img class="brand-img img-fluid" src="{{ asset('dist/img/Jampack.svg') }}" alt="brand" />
                    </a>
                    <button class="btn btn-icon btn-rounded btn-flush-dark flush-soft-hover navbar-toggle">
                        <span class="icon">
                            <span class="svg-icon fs-5">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-arrow-bar-to-left" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <line x1="10" y1="12" x2="20" y2="12"></line>
                                    <line x1="10" y1="12" x2="14" y2="16"></line>
                                    <line x1="10" y1="12" x2="14" y2="8"></line>
                                    <line x1="4" y1="4" x2="4" y2="20"></line>
                                </svg>
                            </span>
                        </span>
                    </button>
                </span>
            </div>
            <!-- /Brand -->

            <!-- Main Menu -->
            <div data-simplebar class="nicescroll-bar">
                <div class="menu-content-wrap">
                    <div class="menu-group">
                        <ul class="navbar-nav flex-column">
                            <li class="nav-item active">
                                <a class="nav-link" href="{{ URL::to('/') }}">
                                    <span class="nav-icon-wrap">
                                        <span class="svg-icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-template" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                <rect x="4" y="4" width="16" height="4" rx="1" />
                                                <rect x="4" y="12" width="6" height="8" rx="1" />
                                                <line x1="14" y1="12" x2="20" y2="12" />
                                                <line x1="14" y1="16" x2="20" y2="16" />
                                                <line x1="14" y1="20" x2="20" y2="20" />
                                            </svg>
                                        </span>
                                    </span>
                                    <span class="nav-link-text">Dashboard</span>
                                    <span class="badge badge-sm badge-soft-pink ms-auto">Hot</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="menu-gap"></div>
                    <div class="menu-group">
                        <div class="nav-header">
                            <span>Apps</span>
                        </div>
                        <ul class="navbar-nav flex-column">


                            <li class="nav-item">
                                <a class="nav-link" href="{{ URL::to('solicitudes') }}">
                                    <span class="nav-icon-wrap">
                                        <span class="svg-icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-calendar-time" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                <path d="M11.795 21h-6.795a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v4" />
                                                <circle cx="18" cy="18" r="4" />
                                                <path d="M15 3v4" />
                                                <path d="M7 3v4" />
                                                <path d="M3 11h16" />
                                                <path d="M18 16.496v1.504l1 1" />
                                            </svg>
                                        </span>
                                    </span>
                                    <span class="nav-link-text">Solicitudes</span>
                                    <span class="badge badge-soft-success ms-2">2</span>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="{{ URL::to('fotografo') }}">
                                    <span class="nav-icon-wrap">
                                        <span class="svg-icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-photo" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                <line x1="15" y1="8" x2="15.01" y2="8" />
                                                <rect x="4" y="4" width="16" height="16" rx="3" />
                                                <path d="M4 15l4 -4a3 5 0 0 1 3 0l5 5" />
                                                <path d="M14 14l1 -1a3 5 0 0 1 3 0l2 2" />
                                            </svg>
                                        </span>
                                    </span>
                                    <span class="nav-link-text">Fotografos</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ URL::to('evento') }}">
                                    <span class="nav-icon-wrap">
                                        <span class="svg-icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-list-details" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                <path d="M13 5h8" />
                                                <path d="M13 9h5" />
                                                <path d="M13 15h8" />
                                                <path d="M13 19h5" />
                                                <rect x="3" y="4" width="6" height="6" rx="1" />
                                                <rect x="3" y="14" width="6" height="6" rx="1" />
                                            </svg>
                                        </span>
                                    </span>
                                    <span class="nav-link-text">Eventos</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="menu-gap"></div>
                    <div class="menu-group">
                        <div class="nav-header">
                            <span>Documentation</span>
                        </div>
                        <ul class="navbar-nav flex-column">
                            <li class="nav-item">
                                <a class="nav-link" href="https://nubra-ui.hencework.com/" target="_blank">
                                    <span class="nav-icon-wrap">
                                        <span class="svg-icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-file-code-2" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                <path d="M10 12h-1v5h1" />
                                                <path d="M14 12h1v5h-1" />
                                                <path d="M14 3v4a1 1 0 0 0 1 1h4" />
                                                <path d="M17 21h-10a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2z" />
                                            </svg>
                                        </span>
                                    </span>
                                    <span class="nav-link-text">Documentation</span>
                                </a>
                            </li>

                        </ul>
                    </div>

                </div>
            </div>
            <!-- /Main Menu -->
        </div>
        <div id="hk_menu_backdrop" class="hk-menu-backdrop"></div>
        <!-- /Vertical Nav -->

        <!-- Main Content -->
        <div class="hk-pg-wrapper">

            @yield('content')

            <!-- Page Footer -->
            <div class="hk-footer">
                <footer class="container-xxl footer">
                    <div class="row">
                        <div class="col-xl-8">
                            <p class="footer-text"><span class="copy-text">Jampack © 2022 All rights reserved.</span> <a href="#" class="" target="_blank">Privacy Policy</a><span class="footer-link-sep">|</span><a href="#" class="" target="_blank">T&C</a><span class="footer-link-sep">|</span><a href="#" class="" target="_blank">System Status</a></p>
                        </div>
                        <div class="col-xl-4">
                            <a href="#" class="footer-extr-link link-default"><span class="feather-icon"><i data-feather="external-link"></i></span><u>Send feedback to our help forum</u></a>
                        </div>
                    </div>
                </footer>
            </div>
            <!-- / Page Footer -->

        </div>
        <!-- /Main Content -->
    </div>
    <!-- /Wrapper -->

    <!-- jQuery -->
    <script src="{{ asset('vendors/jquery/dist/jquery.min.js') }} "></script>
    <!-- Bootstrap Core JS -->
    <script src="{{ asset('vendors/bootstrap/dist/js/bootstrap.bundle.min.js') }} "></script>
    <!-- FeatherIcons JS -->
    <script src="{{ asset('dist/js/feather.min.js') }}"></script>
    <!-- Fancy Dropdown JS -->
    <script src="{{ asset('dist/js/dropdown-bootstrap-extended.js') }}"></script>
    <!-- Simplebar JS -->
    <script src="{{ asset('vendors/simplebar/dist/simplebar.min.js') }} "></script>

    @stack('scripts')
    <!-- Init JS -->
    <script src="{{ asset('dist/js/init.js') }}"></script>
    <script src="{{ asset('dist/js/chips-init.js') }}"></script>

</body>

</html>
