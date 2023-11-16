    <!-- Topbar Start -->
    <div class="navbar-custom">

        <!-- LOGO -->
        <div class="logo-box">
            <a href="{{ url('sistemPenawaran/') }}" class="logo logo-light text-center">
                <span class="logo-sm">
                    <img src="{{ asset('images/trafindo_care_logo_only.png') }}" alt="" height="35">
                </span>
                <span class="logo-lg">
                    <img src="{{ asset('images/trafindo_care_logo.png') }}" alt="" height="50">
                </span>
            </a>
            <a href="{{ url('sistemPenawaran/') }}" class="logo logo-dark text-center">
                <span class="logo-sm">
                    <img src="{{ asset('images/trafindo_care_logo_only.png') }}" alt="" height="35">
                </span>
                <span class="logo-lg text-start px-3">
                    <img src="{{ asset('images/trafindo_care_logo.png') }}" alt="" height="50">
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
                <h4 class="page-title-main"><b>Welcome, User Name</b></h4>
            </li>
        </ul>

        <ul class="list-unstyled topnav-menu float-end mb-0">

            <li class="dropdown notification-list topbar-dropdown">
                <a class="nav-link dropdown-toggle waves-effect waves-light" data-bs-toggle="dropdown" href="#"
                role="button" aria-haspopup="false" aria-expanded="false">
                    <i class="fe-bell noti-icon"></i>
                    <span
                        class="badge bg-danger rounded-circle noti-icon-badge">{{auth()->user()->unreadNotifications->count()?? '0'}}</span>
                </a>
                <div class="dropdown-menu dropdown-menu-end dropdown-lg">

                    <!-- item-->
                    <div class="dropdown-item noti-title">
                        <h5 class="m-0">
                            <span class="float-end">
                                <a href="{{route('markAllNotification')}}" class="text-dark">
                                    <small>Clear All</small>
                                </a>
                            </span>Notification
                        </h5>
                    </div>

                    <div class="notify-scroll" data-simplebar>

                        <!-- item-->
                        @if(auth()->user()->unread_notifications_count != 0)
                            @foreach(auth()->user()->unreadNotifications as $notification)
                                <a class="dropdown-item notify-item" href="{{$notification->data['link']}}">
                                    <div
                                        class="notify-icon {{ $notification->data['type'] === 'warning' ? 'bg-warning' : 'bg-primary' }}">
                                        <i class="mdi mdi-{{ $notification->data['type'] === 'warning' ? 'alert' : 'comment-account-outline' }}"></i>
                                    </div>
                                    <p class="notify-details">
                                        {{ $notification->data['message']}}
                                        <small class="text-muted">from {{$notification->data['created_by']}}</small>
                                    </p>
                                </a>
                                <button class="btn btn-sm btn-light mark-as-read"
                                        data-notification-id="{{ $notification->id }}">
                                    <i class="fas fa-times"></i>
                                </button>
                            @endforeach
                        @else
                            <a class="dropdown-item notify-item">
                                <div class="notify-icon bg-primary">
                                    <i class="mdi mdi-comment-account-outline"></i>
                                </div>
                                <p class="notify-details">
                                    No Notification
                                </p>
                            </a>
                        @endif
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

                    <li class="{{ Request::is('sistemPenawaran') ? 'menuitem-active' : ''}}">
                        <a href="{{ url('sistemPenawaran/') }}">
                            <i class="mdi mdi-view-dashboard-outline"></i>
                            <span> Dashboard </span>
                        </a>
                    </li>

                    <li class="menu-title mt-2">Apps</li>

                    <li
                        class="{{ Request::is('sistemPenawaran/penawaran/*') ? 'menuitem-active' : ''}}">
                        <a href="{{ url('sistemPenawaran/penawaran') }}">
                            <i class="mdi mdi-file-document-multiple-outline"></i>
                            <span> Penawaran </span>
                        </a>
                    </li>

                    <li class="{{ Request::is('sistemPenawaran/approval/*') ? 'menuitem-active' : ''}}">
                        <a href="{{ url('sistemPenawaran/approval') }}">
                            <i class="mdi mdi-clipboard-check-multiple-outline"></i>
                            <span> Approval </span>
                        </a>
                    </li>

                    <li class="{{ Request::is('sistemPenawaran/mapping/*') ? 'menuitem-active' : ''}}">
                        <a href="{{ url('sistemPenawaran/mapping') }}">
                            <i class="mdi mdi-map-search-outline"></i>
                            <span> Mapping </span>
                        </a>
                    </li>

                    <li class="profile-section">
                        <div class=" user-box text-start">
                            <div class="row px-3">
                                <div class="col-3 profile-photo-column">
                                    <img
                                        src="{{ asset('images/profile_photo.png') }}"
                                        alt="user-img" title="Mat Helme" class="rounded img-thumbnail avatar-md">
                                </div>
                                <div class="col-7">
                                    <h5 class="mb-1">Pak Ipung</h5>
                                    <p class="text-muted left-user-info mb-0">Admin</p>
                                </div>
                                <div class="col-2 my-auto">
                                    <form method="POST" action="{{route('logout')}}">
                                        @csrf
                                        <button class="fe-log-out logout-font btn-logout" title="Logout System"
                                                type="submit"></button>
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
@section('pageScript')
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $('.mark-as-read').click(function () {
                let notification_id = $(this).data('notification-id');
                axios({
                    method: 'POST',
                    url: "{{ route('markNotification', '') }}" + "/" + notification_id,
                    data: {
                        _token: '{{ csrf_token() }}',
                        notification: notification_id
                    }
                }).then(function (response) {
                    console.log(response);
                    location.reload();
                }).catch(function (error) {
                    console.log(error);
                })
            })
        })
    </script>
@endsection
