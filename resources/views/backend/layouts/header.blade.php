<!doctype html>
<html lang="en">
<!-- Mirrored from preview.pichforest.com/samply/layouts/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 15 Dec 2021 09:51:38 GMT -->

<head>

    <meta charset="utf-8" />
    <title>Dashboard | CSV - Centre of Science For Villages</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="CSV - Centre of Science For Villages" name="description" />
    <meta content="CSV - Centre of Science For Villages" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/admin/images/favicon.ico') }}">
    <link href="{{ asset('assets/admin/libs/sweetalert2/sweetalert2.min.css') }}" rel="stylesheet" type="text/css" />

    <!-- Bootstrap Css -->
    <link href="{{ asset('assets/admin/css/bootstrap.min.css') }}" id="bootstrap-style" rel="stylesheet"
        type="text/css" />
    <!-- Icons Css -->
    <link href="{{ asset('assets/admin/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{ asset('assets/admin/css/app.min.css') }}" id="app-style" rel="stylesheet" type="text/css" />
    <!-- Dark Mode Css-->
    <link href="{{ asset('assets/admin/css/dark-layout.min.css') }}" id="app-style" rel="stylesheet" type="text/css" />
    <!-- DataTables -->
    <link href="{{ asset('assets/admin/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css') }}" rel="stylesheet"
        type="text/css" />
    <link href="{{ asset('assets/admin/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css') }}"
        rel="stylesheet" type="text/css" />
    <!-- Select datatable -->
    <link href="{{ asset('assets/admin/libs/datatables.net-select-bs4/css/select.bootstrap4.min.css') }}"
        rel="stylesheet" type="text/css" />
    <!-- Responsive datatable -->
    <link href="{{ asset('assets/admin/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css') }}"
        rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">

</head>

<body data-sidebar="dark">


    <!-- Begin page -->
    <div id="layout-wrapper">
        <header id="page-topbar">
            <div class="navbar-header">
                <div class="d-flex">
                    <!-- LOGO -->
                    <div class="navbar-brand-box">
                        <a href="{{ route('admin.dashboard') }}" class="logo logo-dark">
                            <span class="logo-sm">
                                <img src="{{ asset('assets/admin/images/logo.png') }}" alt="logo-sm" height="22">
                            </span>
                            <span class="logo-lg">
                                <img src="{{ asset('assets/admin/images/logo.png') }}" alt="logo-dark" height="23">
                            </span>
                        </a>

                        <a href="{{ route('admin.dashboard') }}" class="logo logo-light">
                            <span class="logo-sm">
                                <img src="{{ asset('assets/admin/images/logo2.png') }}" alt="logo-sm-light"
                                    height="30">
                            </span>
                            <span class="logo-lg">
                                <img src="{{ asset('assets/img/rays.png') }}" alt="logo-light" height="50">
                            </span>
                        </a>
                    </div>

                    <button type="button" class="btn btn-sm px-3 font-size-16 vertinav-toggle header-item waves-effect"
                        id="vertical-menu-btn">
                        <i class="fa fa-fw fa-bars"></i>
                    </button>

                    <button type="button"
                        class="btn btn-sm px-3 font-size-16 horinav-toggle header-item waves-effect waves-light"
                        data-bs-toggle="collapse" data-bs-target="#topnav-menu-content">
                        <i class="fa fa-fw fa-bars"></i>
                    </button>

                    <!-- App Search-->
                    <form class="app-search d-none d-lg-block">
                        <div class="position-relative">
                            <input type="text" class="form-control" placeholder="Search...">
                            <span class="mdi mdi-magnify"></span>
                        </div>
                    </form>
                </div>

                <div class="d-flex">

                    <div class="dropdown d-inline-block d-lg-none ms-2">
                        <button type="button" class="btn header-item noti-icon waves-effect"
                            id="page-header-search-dropdown" data-bs-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
                            <i class="mdi mdi-magnify"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0"
                            aria-labelledby="page-header-search-dropdown">

                            <form class="p-3">
                                <div class="form-group m-0">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Search ..."
                                            aria-label="Recipient's username">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="submit"><i
                                                    class="mdi mdi-magnify"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>



                    <div class="dropdown d-none d-lg-inline-block ms-1">
                        <button type="button" class="btn header-item noti-icon waves-effect"
                            data-toggle="fullscreen">
                            <i class="mdi mdi-fullscreen"></i>
                        </button>
                    </div>



                    <div class="dropdown d-inline-block">
                        <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="rounded-circle header-profile-user"
                                src="{{ asset('assets/admin/images/users/user.png') }}" alt="Header Avatar">
                            <span
                                class="d-none d-xl-inline-block ms-1">{{ Auth::guard('admin')->user()->name }}</span>
                            <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-end">
                            <!-- item-->
                            <h6 class="dropdown-header">Welcome {{ Auth::guard('admin')->user()->name }}</h6>
                            <div class="dropdown-divider"></div>

                            <a href="javascript:void(0);" class="dropdown-item"
                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                <i class="mdi mdi-logout text-muted font-size-16 align-middle me-1"></i>
                                <span class="align-middle">Logout</span>
                            </a>
                            <form id="logout-form" action="{{ route('admin.logout') }}" method="post"
                                style="display:none;">
                                @csrf
                            </form>


                        </div>
                    </div>

                </div>
            </div>
        </header>

        @php
            $roleActive = request()->is('admin/roles*');
            $PermissionActive = request()->is('admin/permissions*');
            $memberActive = request()->is('admin/members*');
            $planActive = request()->is('admin/plans*');
            $categoryActive = request()->is('admin/category*');
        @endphp

        <!-- ========== Left Sidebar Start ========== -->
        <div class="vertical-menu">

            <div data-simplebar class="h-100">

                <!--- Sidemenu -->
                <div id="sidebar-menu">
                    <!-- Left Menu Start -->
                    <ul class="metismenu list-unstyled" id="side-menu">
                        <li class="menu-title" key="t-menu">Menu</li>

                        <li class="{{ request()->routeIs('admin.dashboard') ? 'mm-active' : '' }}">
                            <a href="{{ route('admin.dashboard') }}" class="waves-effect">
                                <i class='bx bxs-dashboard'></i>
                                <span>Dashboard</span>
                            </a>
                        </li>

                        @if (auth('admin')->user()->hasPermission('create-member') || auth('admin')->user()->hasPermission('view-member'))

                            <li class="{{ $memberActive ? 'mm-active' : '' }}">
                                <a href="javascript:void(0);"
                                    class="has-arrow waves-effect {{ $memberActive ? 'mm-active' : '' }}">
                                    <i class="bx bx-user"></i>
                                    <span>Member</span>
                                </a>
                                <ul class="sub-menu {{ $memberActive ? 'mm-show' : '' }}">

                                    @if (auth('admin')->user()->hasPermission('create-member'))
                                        <li>
                                            <a href="{{ route('members.create') }}"
                                                class="{{ request()->routeIs('members.create') ? 'active' : '' }}">
                                                Add Member
                                            </a>
                                        </li>
                                    @endif

                                    @if (auth('admin')->user()->hasPermission('view-member'))
                                        <li>
                                            <a href="{{ route('members.index') }}"
                                                class="{{ request()->routeIs('members.index') ? 'active' : '' }}">
                                                Member List
                                            </a>
                                        </li>
                                    @endif
                                </ul>
                            </li>
                        @endif

                        @if (auth('admin')->user()->hasPermission('create-plan') || auth('admin')->user()->hasPermission('view-plan'))

                            <li class="{{ $planActive ? 'mm-active' : '' }}">
                                <a href="javascript:void(0);"
                                    class="has-arrow waves-effect {{ $planActive ? 'mm-active' : '' }}">
                                    <i class="bx bx-wallet"></i>
                                    <span>My Plan</span>
                                </a>

                                <ul class="sub-menu {{ $planActive ? 'mm-show' : '' }}">

                                    @if (auth('admin')->user()->hasPermission('create-plan'))
                                        <li>
                                            <a href="{{ route('plan.create') }}"
                                                class="{{ request()->routeIs('plans.create') ? 'active' : '' }}">
                                                Add Plan
                                            </a>
                                        </li>
                                    @endif

                                    @if (auth('admin')->user()->hasPermission('view-plan'))
                                        <li>
                                            <a href="{{ route('plan.index')}}"
                                                class="{{ request()->routeIs('plans.index') ? 'active' : '' }}">
                                                Plan List
                                            </a>
                                        </li>
                                    @endif

                                </ul>
                            </li>

                        @endif


                        @if (auth('admin')->user()->hasPermission('create-category') || auth('admin')->user()->hasPermission('view-category'))

                            <li class="{{ $categoryActive ? 'mm-active' : '' }}">
                                <a href="javascript:void(0);"
                                    class="has-arrow waves-effect {{ $categoryActive ? 'mm-active' : '' }}">
                                    <i class="bx bx-user"></i>
                                    <span>Category</span>
                                </a>
                                <ul class="sub-menu {{ $categoryActive ? 'mm-show' : '' }}">

                                    @if (auth('admin')->user()->hasPermission('create-category'))
                                        <li>
                                            <a href="{{ route('category.create') }}"
                                                class="{{ request()->routeIs('category.create') ? 'active' : '' }}">
                                                Add Category
                                            </a>
                                        </li>
                                    @endif

                                    @if (auth('admin')->user()->hasPermission('view-category'))
                                        <li>
                                            <a href="{{ route('category.index') }}"
                                                class="{{ request()->routeIs('category.index') ? 'active' : '' }}">
                                                Category List
                                            </a>
                                        </li>
                                    @endif
                                </ul>
                            </li>
                        @endif

                        @if (auth('admin')->user()->hasPermission('create-role') || auth('admin')->user()->hasPermission('view-role'))

                            <li class="{{ $roleActive ? 'mm-active' : '' }}">
                                <a href="javascript:void(0);"
                                    class="has-arrow waves-effect {{ $roleActive ? 'mm-active' : '' }}">
                                    <i class="fas fa-user-shield"></i>
                                    <span>Role</span>
                                </a>

                                <ul class="sub-menu {{ $roleActive ? 'mm-show' : '' }}">

                                    @if (auth('admin')->user()->hasPermission('create-role'))
                                        <li>
                                            <a href="{{ route('roles.create') }}"
                                                class="{{ request()->routeIs('roles.create') ? 'active' : '' }}">
                                                Add Role
                                            </a>
                                        </li>
                                    @endif

                                    @if (auth('admin')->user()->hasPermission('view-role'))
                                        <li>
                                            <a href="{{ route('roles.index') }}"
                                                class="{{ request()->routeIs('roles.index') ? 'active' : '' }}">
                                                Role List
                                            </a>
                                        </li>
                                    @endif

                                </ul>
                            </li>
                        @endif

                        @if (auth('admin')->user()->hasPermission('create-permission') ||
                                auth('admin')->user()->hasPermission('view-permission'))
                            <li class="{{ $PermissionActive ? 'mm-active' : '' }}">
                                <a href="javascript:void(0);"
                                    class="has-arrow waves-effect {{ $PermissionActive ? 'mm-active' : '' }}">
                                    <i class="bx bx-lock"></i>
                                    <span>Permission</span>
                                </a>
                                <ul class="sub-menu {{ $PermissionActive ? 'mm-show' : '' }}">

                                    @if (auth('admin')->user()->hasPermission('create-permission'))
                                        <li>
                                            <a href="{{ route('permissions.create') }}"
                                                class="{{ request()->routeIs('permissions.create') ? 'active' : '' }}">
                                                Add Permission
                                            </a>
                                        </li>
                                    @endif

                                    @if (auth('admin')->user()->hasPermission('view-permission'))
                                        <li>
                                            <a href="{{ route('permissions.index') }}"
                                                class="{{ request()->routeIs('permissions.index') ? 'active' : '' }}">
                                                Permission List
                                            </a>
                                        </li>
                                    @endif

                                </ul>
                            </li>
                        @endif

                    </ul>
                </div>
                <!-- Sidebar -->
            </div>
        </div>
        <!-- Left Sidebar End -->
