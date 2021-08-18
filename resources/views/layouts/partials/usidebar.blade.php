<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon">
            <i class="fas fa-laptop-house"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Kominfo</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0 mb-3">

    <div class="sidebar-heading">
        Menu
    </div>

    <!-- Nav Item - Akun Saya -->
    <li class="nav-item {{ ($page === "Akun Saya") ? 'active' : ''}}">
        <a class="nav-link" href="/user/akun">
            <i class="fas fa-fw fa-id-card-alt"></i>
            <span>Akun Saya</span></a>
    </li>

    <!-- Nav Item - Dashboard -->
    <li class="nav-item {{ ($page === "Dashboard User") ? 'active' : ''}}">
        <a class="nav-link" href="/user/dashboard">
            <i class="fas fa-fw fa-columns"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item {{ ($page === "Tambah Permohonan")  ? 'active' : '' }}">
        <a class="nav-link collapsed" href="/user/tambah">
            <i class="fas fa-file-alt fa-cog"></i>
            <span>Tambah Permohonan</span>
        </a>
    </li>

    <!-- Nav Item - Utilities Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
            aria-expanded="true" aria-controls="collapseUtilities">
            <i class="fas fa-fw fa-wrench"></i>
            <span>Daftar Permohonan</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Daftar Permohonan</h6>
                <a class="collapse-item" href="/user/permohonan">Permohonan Terkirim</a>
                <a class="collapse-item" href="utilities-border.html">Konfirmasi</a>
                <a class="collapse-item" href="utilities-animation.html">Ditolak</a>
                <a class="collapse-item" href="utilities-other.html">Selesai</a>
            </div>
        </div>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Lainnya
    </div>

    <!-- Nav Item - Charts -->
    <li class="nav-item">
        <a class="nav-link" href="charts.html">
            <i class="fas fa-fw fa-address-book"></i>
            <span>Bantuan</span></a>
    </li>

    <!-- Nav Item - Tables -->
    <li class="nav-item">
        <a class="nav-link" href="tables.html">
            <i class="fas fa-fw fa-globe"></i>
            <span>FAQ</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->
