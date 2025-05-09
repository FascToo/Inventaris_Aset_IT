<?php
$current_page = basename($_SERVER['PHP_SELF']);
?>
<ul class="navbar-nav bg-gradient-dark sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class=""></i>
        </div>
        <div class="sidebar-brand-text mx-3">Inventoris Aset IT</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item <?= ($current_page == 'index.php') ? 'active' : '' ?>">
        <a class="nav-link" href="index.php">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span>
        </a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">
    <!-- Nav Item - Pages Product Menu -->
    <li
        class="nav-item <?= ($current_page == 'databarang.php' || $current_page == 'tambahbarang.php') ? 'active' : '' ?>">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseAset" aria-expanded="true"
            aria-controls="collapseAset">
            <i class="fas fa-fw fa-cog"></i>
            <span>Aset IT</span>
        </a>
        <div id="collapseAset"
            class="collapse <?= ($current_page == 'data_aset.php' || $current_page == 'tambahbarang.php') ? 'show' : '' ?>"
            aria-labelledby="headingAset" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item <?= ($current_page == 'data_aset.php') ? 'active' : '' ?>"
                    href="data_aset.php">Data Aset</a>
                <a class="collapse-item <?= ($current_page == 'tambahbarang.php') ? 'active' : '' ?>"
                    href="tambahbarang.php">Tambah Aset</a>
            </div>
        </div>
    </li>

    <!-- Nav Item - Utilities Collapse Menu -->
    <li class="nav-item <?= ($current_page == 'masuk.php' || $current_page == 'keluar.php' || $current_page == 'tambah_peminjaman.php') ? 'active' : '' ?>">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePermintaan"
            aria-expanded="true" aria-controls="collapsePermintaan">
            <i class="fas fa-fw fa-wrench"></i>
            <span>Permintaan</span>
        </a>
        <div id="collapsePermintaan"
            class="collapse <?= ($current_page == 'masuk.php' || $current_page == 'keluar.php') ? 'show' : '' ?>"
            aria-labelledby="headingPermintaan" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item <?= ($current_page == 'masuk.php') ? 'active' : '' ?>" href="masuk.php">Data
                    Permintaan</a>
                <a class="collapse-item <?= ($current_page == 'keluar.php') ? 'active' : '' ?>" href="keluar.php">Tambah
                    Permintaan</a>
                <a class="collapse-item <?= ($current_page == 'tambah_peminjaman.php') ? 'active' : '' ?>" href="tambah_peminjaman.php">Tambah
                    Peminjaman</a>
            </div>
        </div>
    </li>

    <!-- Nav Item - Utilities Collapse Menu -->
    <li class="nav-item <?= ($current_page == 'masuk.php' || $current_page == 'keluar.php') ? 'active' : '' ?>">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePengaduan"
            aria-expanded="true" aria-controls="collapsePengaduan">
            <i class="fas fa-fw fa-wrench"></i>
            <span>Pengaduan</span>
        </a>
        <div id="collapsePengaduan"
            class="collapse <?= ($current_page == 'masuk.php' || $current_page == 'keluar.php') ? 'show' : '' ?>"
            aria-labelledby="headingPengaduan" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item <?= ($current_page == 'data_pengaduan.php') ? 'active' : '' ?>" href="data_pengaduan.php">Data
                    Pengaduan</a>
                <a class="collapse-item <?= ($current_page == 'status_pengaduan.php') ? 'active' : '' ?>" href="status_pengaduan.php">Status
                    Pengaduan</a>
                <a class="collapse-item <?= ($current_page == 'data_maintenance.php') ? 'active' : '' ?>" href="data_maintenance.php">Data
                    Maintenance</a>
            </div>
        </div>
    </li>

    <!-- Nav Item - Utilities Collapse Menu -->
    <li
        class="nav-item <?= ($current_page == 'databarang.php' || $current_page == 'masuk.php' || $current_page == 'keluar.php') ? 'active' : '' ?>">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
            aria-expanded="true" aria-controls="collapseUtilities">
            <i class="fas fa-fw fa-wrench"></i>
            <span>Stock</span>
        </a>
        <div id="collapseUtilities"
            class="collapse <?= ($current_page == 'databarang.php' || $current_page == 'masuk.php' || $current_page == 'keluar.php') ? 'show' : '' ?>"
            aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item <?= ($current_page == 'databarang.php') ? 'active' : '' ?>"
                    href="databarang.php">Data Stok</a>
                <a class="collapse-item <?= ($current_page == 'masuk.php') ? 'active' : '' ?>" href="masuk.php">Stock
                    Masuk</a>
                <a class="collapse-item <?= ($current_page == 'keluar.php') ? 'active' : '' ?>" href="keluar.php">Stock
                    Keluar</a>
            </div>
        </div>
    </li>

    <!-- Nav Item - Report -->
    <li class="nav-item <?= ($current_page == 'report.php') ? 'active' : '' ?>">
        <a class="nav-link" href="laporan.php">
            <i class="fas fa-fw fa-folder"></i>
            <span>Laporan</span>
        </a>
    </li>

    <!-- Nav Item - Data Master -->
    <li class="nav-item <?= ($current_page == 'datamaster.php') ? 'active' : '' ?>">
        <a class="nav-link" href="datamaster.php">
            <i class="fas fa-fw fa-folder"></i>
            <span>Data Master</span>
        </a>
    </li>

    <!-- Nav Item - Management User -->
    <li class="nav-item <?= ($current_page == 'user.php') ? 'active' : '' ?>">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true"
            aria-controls="collapsePages">
            <i class="fas fa-fw fa-folder"></i>
            <span>Management User</span>
        </a>
        <div id="collapsePages" class="collapse <?= ($current_page == 'user.php') ? 'show' : '' ?>"
            aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item <?= ($current_page == 'user.php') ? 'active' : '' ?>" href="user.php">Tambah
                    User</a>
            </div>
        </div>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">
    <!-- Nav Item - Logoutt -->

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>
</ul