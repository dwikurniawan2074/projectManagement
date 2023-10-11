<!-- Topbar Start -->
<div class="navbar-custom">

    <!-- LOGO -->
    <div class="logo-box">
        <a href="{{ url('/') }}" class="logo logo-light text-center">
            <span class="logo-sm">
                <img src="{{ asset('images/logo_trafindo_only.png') }}" alt="" height="30">
            </span>
            <span class="logo-lg">
                <img src="{{ asset('images/logo_trafindo_full.png') }}" alt="" height="40">
            </span>
        </a>
        <a href="{{ url('/') }}" class="logo logo-dark text-center">
            <span class="logo-sm">
                <img src="{{ asset('images/logo_trafindo_only.png') }}" alt="" height="30">
            </span>
            <span class="logo-lg">
                <img src="{{ asset('images/logo_trafindo_full.png') }}" alt="" height="40">
            </span>
        </a>
    </div>

    <ul class="list-unstyled topnav-menu topnav-menu-left mb-0">
        <li>
            <button class="button-menu-mobile disable-btn waves-effect">
                <i class="fe-menu"></i>
            </button>
        </li>

        <li>
            <h4 class="page-title-main">Dashboard</h4>
        </li>
    </ul>

    <ul class="list-unstyled topnav-menu float-end mb-0">

        <li class="dropdown notification-list topbar-dropdown">
            <a class="nav-link dropdown-toggle waves-effect waves-light" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                <i class="fe-bell noti-icon"></i>
                <span class="badge bg-danger rounded-circle noti-icon-badge">9</span>
            </a>
            <div class="dropdown-menu dropdown-menu-end dropdown-lg">

                <!-- item-->
                <div class="dropdown-item noti-title">
                    <h5 class="m-0">
                        <span class="float-end">
                            <a href="" class="text-dark">
                                <small>Clear All</small>
                            </a>
                        </span>Notification
                    </h5>
                </div>

                <div class="noti-scroll" data-simplebar>

                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <div class="notify-icon bg-primary">
                            <i class="mdi mdi-comment-account-outline"></i>
                        </div>
                        <p class="notify-details">Caleb Flakelar commented on Admin
                            <small class="text-muted">1 min ago</small>
                        </p>
                    </a>

                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <div class="notify-icon bg-warning">
                            <i class="mdi mdi-account-plus"></i>
                        </div>
                        <p class="notify-details">New user registered.
                            <small class="text-muted">5 hours ago</small>
                        </p>
                    </a>

                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <div class="notify-icon bg-info">
                            <i class="mdi mdi-comment-account-outline"></i>
                        </div>
                        <p class="notify-details">Caleb Flakelar commented on Admin
                            <small class="text-muted">4 days ago</small>
                        </p>
                    </a>

                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <div class="notify-icon bg-secondary">
                            <i class="mdi mdi-heart"></i>
                        </div>
                        <p class="notify-details">Carlos Crouch liked
                            <b>Admin</b>
                            <small class="text-muted">13 days ago</small>
                        </p>
                    </a>
                </div>

                <!-- All-->
                <a href="javascript:void(0);" class="dropdown-item text-center text-primary notify-item notify-all">
                    View all
                    <i class="fe-arrow-right"></i>
                </a>

            </div>
        </li>

    </ul>

    <div class="clearfix"></div>

</div>
<!-- end Topbar -->

<!-- ========== Left Sidebar Start ========== -->
<div class="left-side-menu">

    <div class="h-100" data-simplebar>

        <!--- Sidemenu -->
        <div id="sidebar-menu">

            <ul id="side-menu">

                <li class="menu-title">Navigation</li>

                <li>
                    <a href="{{ url('/') }}">
                        <i class="mdi mdi-view-dashboard-outline"></i>
                        <span> Dashboard </span>
                    </a>
                </li>

                <li class="menu-title mt-2">Apps</li>

                <li
                    class="{{ Request::is('projects/*') || Request::is('milestone/*') || Request::is('top/*') ? 'menuitem-active' : ''}}">
                    <a href="{{ url('projects') }}">
                        <i class="mdi mdi-briefcase-variant-outline"></i>
                        <span> Projects </span>
                    </a>
                </li>

                <li class="{{ Request::is('operational/*') ? 'menuitem-active' : ''}}">
                    <a href="{{ url('operational') }}">
                        <i class="mdi mdi-book-clock-outline"></i>
                        <span> Operational </span>
                    </a>
                </li>

                <li class="{{ Request::is('approval/*') ? 'menuitem-active' : ''}}">
                    <a href="{{ url('approval/index') }}">
                        <i class="mdi mdi-clipboard-check-multiple-outline"></i>
                        <span> Approval </span>
                    </a>
                </li>

                <li class="{{ Request::is('calendar/*') ? 'menuitem-active' : ''}}">
                    <a href="{{ url('calendar') }}">
                        <i class="mdi mdi-calendar-blank-outline"></i>
                        <span> Calendar </span>
                    </a>
                </li>

                <li class="{{ Request::is('customer/*') || Request::is('customerContact/*') ? 'menuitem-active' : ''}}">
                    <a href="{{ url('customer') }}">
                        <i class="mdi mdi-account-supervisor-outline"></i>
                        <span> Customers </span>
                    </a>
                </li>

                <li class="{{ Request::is('summary/*') ? 'menuitem-active' : ''}}">
                    <a href="{{ url('summary') }}">
                        <i class="mdi mdi-bulletin-board"></i>
                        <span> Summary </span>
                    </a>
                </li>

                <li class="menu-title mt-2">Account Management</li>

                <li class="{{ Request::is('admin/*') ? 'menuitem-active' : ''}}">
                    <a href="{{ url('admin/users') }}">
                        <i class="mdi mdi-account-group-outline"></i>
                        <span> Data Akun </span>
                    </a>
                </li>
                
                <li class="profile-section">
                    <div class=" user-box text-start">
                        <div class="row px-3">
                            <div class="col-3 profile-photo-column">
                                <img src="https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_960_720.png"
                                    alt="user-img" title="Mat Helme" class="rounded img-thumbnail avatar-md">
                            </div>
                            <div class="col-7">
                                <h5 class="mb-1">Garcia Patel</h5>
                                <p class="text-muted left-user-info mb-0">Admin</p>
                            </div>
                            <div class="col-2 my-auto">
                                <form method="POST" action="{{route('logout')}}">
                                    @csrf
                                    <button class="fe-log-out logout-font btn-logout" title="Logout System" type="submit"></button>
                                </form>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>

        <div class="clearfix"></div>

    </div>
    <!-- Sidebar -left -->

</div>
<!-- Left Sidebar End -->