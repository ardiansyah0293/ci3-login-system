<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-seedling"></i>
        </div>
        <div class="sidebar-brand-text mx-3">tppCrop</div>

    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('/'); ?>">
            <i class="fas fa-home"></i>
            <span>Beranda</span></a>

    </li>
    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="<?= base_url('/dashboard'); ?>">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>
    <hr class="sidebar-divider">

    <!-- Data Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
            <i class="fas fa-database"></i>
            <span>Data</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Menu:</h6>
                <a class="collapse-item" href="<?= base_url('/lapang'); ?>">Data Lapang</a>
                <a class="collapse-item" href="<?= base_url('/lapang'); ?>">Data Potensi</a>
                <a class="collapse-item" href="<?= base_url('/datatanaman'); ?>">Data Tanaman</a>
                <a class="collapse-item" href="<?= base_url('/hama'); ?>">Data Hama</a>
                <a class="collapse-item" href="<?= base_url('/penyakit'); ?>">Data Penyakit</a>
                <a class="collapse-item" href="<?= base_url('/keluhan'); ?>">Data Keluhan</a>
            </div>
        </div>
    </li>
    <hr class="sidebar-divider">

    <!-- Tpp Menu -->
    <div class="sidebar-heading">
        TPP
    </div>
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-feather-alt"></i>
            <span>Laporan Harian</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="<?= base_url('/lapharian/tulis'); ?>">Tulis Laporan</a>
                <a class="collapse-item" href="<?= base_url('/lapharian/laporan'); ?>">Laporan</a>
                <a class="collapse-item" href="<?= base_url('/lapharian/arsip'); ?>">Arsip</a>
                <a class="collapse-item" href="<?= base_url('/lapharian/galeri'); ?>">Galeri</a>
                <a class="collapse-item" href="<?= base_url('/lapharian/kinerja'); ?>">Laporan Kinerja</a>
            </div>
        </div>
    </li>

    <!--^MLCKT Menu Lapor Crop Khusus TPP -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseCrtpp" aria-expanded="true" aria-controls="collapseCrtpp">
            <i class="fas fa-bullhorn"></i>
            <span>Crop</span>
        </a>
        <div id="collapseCrtpp" class="collapse" aria-labelledby="headingCrtpp" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="<?= base_url('/croptpp/lapor'); ?>">Lapor Keluhan/ Serangan</a>
                <a class="collapse-item" href="<?= base_url('/croptpp/lapormasuk'); ?>">Laporan Masuk</a>
                <a class="collapse-item" href="<?= base_url('/croptpp/laporbatal'); ?>">Laporan Dibatalkan</a>
                <a class="collapse-item" href="<?= base_url('/croptpp/jadwalkjg'); ?>">Jadwal Kunjungan</a>
            </div>
        </div>
    </li>
    <!-- ^End Of MLCKT -->

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Crop Menu -->
    <div class="sidebar-heading">
        Kegiatan TPP
    </div>
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('/story'); ?>">
            <i class="fas fa-fw fa-table"></i>
            <span>TPP Hari ini</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Crop Menu -->
    <div class="sidebar-heading">
        Crop Menu
    </div>
    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseCrop" aria-expanded="true" aria-controls="collapseTwo">
            <i class="far fa-calendar-alt"></i>
            <span>Laporan Keluhan</span>
        </a>
        <div id="collapseCrop" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Menu:</h6>
                <a class="collapse-item" href="buttons.html">List Laporan</a>
                <a class="collapse-item" href="cards.html">Jadwal Kunjungan</a>
            </div>
        </div>
    </li>


    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->