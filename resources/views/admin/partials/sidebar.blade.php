<div class="main-wrapper">
    <nav class="sidebar">
        <div class="sidebar-header">
            <a href="" class="sidebar-brand">
                <img src="{{ asset('assets/admin/images/logo.png') }}" alt="logo" width="150">
            </a>
            <div class="sidebar-toggler not-active">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>

        {{-- @if (Auth::user()->level == 'petugas' || Auth::user()->level == '0') --}}
            <div class="sidebar-body">
                <ul class="nav">
                    <li class="nav-item nav-category">Main</li>
                    <li class="nav-item {{ Request::routeIs('dashboard.index') ? 'active' : '' }}">
                        <a href="#" class="nav-link">
                            <i class="link-icon" data-feather="box"></i>
                            <span class="link-title">Dashboard</span>
                        </a>
                    </li>

                    <li class="nav-item nav-category">
                        Menu
                    </li>


                    <li class="nav-item {{ Request::routeIs(['categori.index', 'categori.edit']) }} ||">
                        <a class="nav-link" data-bs-toggle="collapse" href="#mobile" role="button"
                            aria-expanded="false" aria-controls="mobile">
                            <i class="link-icon" data-feather="plus">
                            </i>
                            <span class="link-title">
                                Mobil
                            </span>
                            <i class="link-arrow" data-feather="chevron-down">
                            </i>
                        </a>
                        <div class="collapse" id="mobile">
                            <ul class="nav sub-menu">
                                <li class="nav-item {{ Request::routeIs('jenismobil.index') ? 'active' : '' }}">
                                    <a href="{{ route('jenismobil.index') }}"
                                        class="nav-link {{ Request::routeIs('jenismobil.index') ? 'active' : '' }}">
                                        Merek Mobil
                                    </a>
                                </li>
                                <li class="nav-item {{ Request::routeIs('tipemobil.index') ? 'active' : '' }}">
                                    <a href="{{ route('tipemobil.index') }}"
                                        class="nav-link {{ Request::routeIs('tipemobil.index') ? 'active' : '' }}">
                                        Tipe Mobil
                                    </a>
                                </li>
                                <li
                                    class="nav-item {{ Request::routeIs(['mobil.index']) ? 'active' : '' }}">
                                    <a href="{{ route('mobil.index') }}"
                                        class="nav-link {{ Request::routeIs(['mobil.index']) ? 'active' : '' }}">
                                        Mobil
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="nav-item {{ Request::routeIs('pem.index') ? 'active' : '' }}">
                        <a href="#"
                            class="nav-link {{ Request::routeIs('pem.index') ? 'active' : '' }}">
                            <i class="link-icon" data-feather="file"></i>
                            <span class="link-title">Peminjaman</span>
                        </a>
                    </li>

                    <li class="nav-item {{ Request::routeIs('png.index') ? 'active' : '' }}">
                        <a href="#"
                            class="nav-link {{ Request::routeIs('png.index') ? 'active' : '' }}">
                            <i class="link-icon" data-feather="file"></i>
                            <span class="link-title">Pengembalian</span>
                        </a>
                    </li>
    </nav>

    <nav class="settings-sidebar">
        <div class="sidebar-body">
            <a href="#" class="settings-sidebar-toggler">
                <i data-feather="settings"></i>
            </a>
            <h6 class="text-muted mb-2">Sidebar:</h6>
            <div class="mb-3 pb-3 border-bottom">
                <div class="form-check form-check-inline">
                    <input type="radio" class="form-check-input" name="sidebarThemeSettings" id="sidebarLight"
                        value="sidebar-light" checked>
                    <label class="form-check-label" for="sidebarLight">
                        Light
                    </label>
                </div>

                <div class="form-check form-check-inline">
                    <input type="radio" class="form-check-input" name="sidebarThemeSettings" id="sidebarDark"
                        value="sidebar-dark">
                    <label class="form-check-label" for="sidebarDark">
                        Dark
                    </label>
                </div>
            </div>
        </div>
    </nav>
</div>
