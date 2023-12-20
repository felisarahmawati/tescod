<nav class="navbar">
    <a href="#" class="sidebar-toggler">
        <i data-feather="menu"></i>
    </a>

    <div class="navbar-content">
        <form class="search-form">
            <div class="input-group">
                <div class="input-group-text">
                    <i data-feather="search"></i>
                </div>
                <input type="text" class="form-control" id="navbarForm" placeholder="Search here...">
            </div>
        </form>

        {{-- <ul class="navbar-nav">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="profileDropdown" role="button"
                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    @if (Auth::check() && Auth::user()->photo)
                        <img src="{{ Storage::url(Auth::user()->photo) }}" alt="User Photo"
                            class="wd-30 ht-30 rounded-circle img-thumbnail mx-auto d-block">
                    @else
                        <img src="{{ asset('assets/admin/images/profile.png') }}" alt="Default Photo"
                            class="wd-30 ht-30 rounded-circle img-thumbnail mx-auto d-block">
                    @endif
                </a>
                <div class="dropdown-menu p-0" aria-labelledby="profileDropdown">
                    <div class="d-flex flex-column align-items-center border-bottom px-5 py-3">
                        <div class="mb-3">
                            @if (Auth::check() && Auth::user()->photo)
                                <img src="{{ Storage::url(Auth::user()->photo) }}" alt="User Photo"
                                    class="wd-30 ht-30 rounded-circle img-thumbnail mx-auto d-block">
                            @else
                                <img src="{{ asset('assets/admin/images/profile.png') }}" alt="Default Photo"
                                    class="wd-30 ht-30 rounded-circle img-thumbnail mx-auto d-block">
                            @endif
                        </div>
                        <div class="text-center">
                            <p class="tx-16 fw-bolder">{{ Auth::user()->name }}</p>
                            <p class="tx-12 text-muted">{{ Auth::user()->email }}</p>
                        </div>
                    </div>

                    <ul class="list-unstyled p-1">
                        <li class="dropdown-item py-2">
                            <a href="{{ route('landingPage.index') }}" class="text-body ms-0">
                                <i class="me-2 icon-md" data-feather="home"></i>
                                <span>Home</span>
                            </a>
                        </li>
                        <li class="dropdown-item py-2">
                            <a href="{{ route('profile.index') }}" class="text-body ms-0">
                                <i class="me-2 icon-md" data-feather="user"></i>
                                <span>Profile</span>
                            </a>
                        </li>

                        <li class="dropdown-item py-2">
                            {{-- <a href="{{ route('logout') }}" class="text-body ms-0">
                                <i class="me-2 icon-md" data-feather="log-out"></i>
                                <span>Log Out</span>
                            </a> --}}
                            {{-- @if (Auth::user()->level == 'anggota' || Auth::user()->level == '1')
                            <form action="{{ url('logout') }}" method="POST">
                                @csrf
                                <button class="dropdown-item" type="submit" data-toggle="modal" data-target="#logoutModal">
                                    <i class="bi bi-box-arrow-right"></i>
                                    <span>Logout</span>
                                </button>
                            </form>
                                @elseif (Auth::user()->level == 'petugas' || Auth::user()->level == '0')
                                <form action="{{ route('login.admin.logout') }}" method="POST">
                                    @csrf
                                    <button class="dropdown-item" type="submit" data-toggle="modal" data-target="#logoutModal">
                                        <i class="bi bi-box-arrow-right"></i>
                                        Logout
                                    </button>
                                </form>
                            @endif
                        </li>
                    </ul>
                </div>
            </li>
        </ul>  --}}
    </div>
</nav>
