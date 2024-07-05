<!-- resources/views/partials/sidebar.blade.php -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ url('/') }}" class="brand-link">
        <img src="{{ asset('dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Dashboard Biro</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ asset('dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">Alexander Pierce</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="{{ url('admin/notice') }}" class="nav-link">
                        <i class="nav-icon fas fa-bullhorn"></i>
                        <p>Pengumuman</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('admin/news') }}" class="nav-link">
                        <i class="nav-icon fas fa-newspaper"></i>
                        <p>Berita</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('admin/agenda') }}" class="nav-link">
                        <i class="nav-icon fas fa-calendar"></i>
                        <p>Agenda</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('pages/widgets') }}" class="nav-link">
                        <i class="nav-icon fas fa-address-card"></i>
                        <p>Pengajuan KTM</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('pemohon/submisi') }}" class="nav-link">
                        <i class="nav-icon fas fa-file"></i>
                        <p>Pengajuan Prodi Baru</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('pages/widgets') }}" class="nav-link">
                        <i class="nav-icon far fa-file"></i>
                        <p>Pengajuan Kegiatan</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('pages/widgets') }}" class="nav-link">
                        <i class="nav-icon fas fa-file-word"></i>
                        <p>Pengajuan Rencana Kerja</p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
