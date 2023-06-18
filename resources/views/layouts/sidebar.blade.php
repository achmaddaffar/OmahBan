<script src={{ asset('js/sb-admin-2.js') }}></script>
<!-- Page Wrapper -->
<div id="wrapper">
    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="dashboard">
            <div class="sidebar-brand-icon rotate-n-15">
                <i class="fas fa-fw fa-cog"></i>
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
        </li>
        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block">
        <!-- User Information -Dropdown -->
        <li class="nav-item">
            <a class="nav-link">
                <img class="img-profile rounded-circle" src="img/undraw_profile.svg">
                <span>{{ Auth::user()->name }}</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('user.logout') }}">
                <i class="fas fa-fw fa-door-open"></i>
                <span>Logout</span></a>
        </li>

        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
            <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>
    </ul>
</div>
