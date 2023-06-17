<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="dashboard">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">OmahBan</sup></div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item">
        <a class="nav-link" href="{{ route('dashboard') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{ route('transaksi') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Detail Transaksi</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{ route('ban') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Katalog Ban</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{ route('mekanik') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Mekanik</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{ route('pembeli') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Pembeli</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('struk') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Struk</span></a>
    <li class="nav-item dropdown no-arrow">
        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
            <span class="fas fa-fw fa-tachometer-alt">{{ Auth::user()->name }}</span>
            <img class="img-profile rounded-circle" src="img/undraw_profile.svg">
        </a>
        <!-- Dropdown - User Information -->
        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
            <a class="dropdown-item" href="#">
                <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                Profile
            </a>
            <a class="dropdown-item" href="#">
                <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                Settings
            </a>
            <a class="dropdown-item" href="#">
                <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                Activity Log
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                Logout
            </a>
        </div>
    </li>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('user.logout') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Logout</span></a>
    </li>
    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>


</ul>
