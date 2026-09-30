<nav class="navbar admin-navbar">
    <div class="container-fluid px-3 px-lg-4">
        <div class="d-flex align-items-center">
            <button class="btn btn-link admin-sidebar-toggle d-lg-none" id="sidebarToggle" type="button" aria-label="Toggle sidebar">
                <i class="bi bi-list"></i>
            </button>
            <a class="navbar-brand admin-brand" href="{{ route('admin.dashboard') }}">
                <span class="brand-mark">A</span>
                Admin Panel
            </a>
        </div>

        <div class="dropdown admin-user-menu">
            <button class="btn dropdown-toggle admin-user-button" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                <span class="user-avatar">{{ strtoupper(substr(Auth::guard('admin')->user()->name ?? 'A', 0, 2)) }}</span>
                <span class="user-meta">
                    <span class="user-name">{{ Auth::guard('admin')->user()->name ?? 'Admin' }}</span>
                    <small>Administrator</small>
                </span>
            </button>
            <ul class="dropdown-menu dropdown-menu-end custom-dropdown-menu">
                <li><a class="dropdown-item" href="#"><i class="bi bi-person-circle"></i> Profile</a></li>
                <li><a class="dropdown-item" href="#"><i class="bi bi-gear"></i> Settings</a></li>
                <li><hr class="dropdown-divider"></li>
                <li>
                    <form method="POST" action="{{ route('admin.logout') }}">
                        @csrf
                        <button type="submit" class="dropdown-item text-start" style="width: 100%; border: 0; background: transparent;">
                            <i class="bi bi-box-arrow-right"></i> Logout
                        </button>
                    </form>
                </li>
            </ul>
        </div>
    </div>
</nav>
