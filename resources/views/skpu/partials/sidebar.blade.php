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
                @auth('skpu')
                    <a href="#" class="d-block">{{ Auth::guard('skpu')->user()->skpu_nama }}</a>
                @else
                    <a href="#" class="d-block">Guest</a>
                @endauth
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class with font-awesome or any other icon font library -->
                
                <li class="nav-item">
                    <a href="{{ url('pemohon/skpu/strategis') }}" class="nav-link">
                        <i class="nav-icon far fa-file"></i>
                        <p>Rencana Strategis</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('pages/widgets') }}" class="nav-link">
                        <i class="nav-icon far fa-file"></i>
                        <p>Rencana Operasional</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('pages/widgets') }}" class="nav-link">
                        <i class="nav-icon far fa-file"></i>
                        <p>Rencana Tahunan</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('pages/widgets') }}" class="nav-link">
                        <i class="nav-icon far fa-file"></i>
                        <p>Evaluasi</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('pages/widgets') }}" class="nav-link">
                        <i class="nav-icon fas fa-file-word"></i>
                        <p>Rencana Pengembangan</p>
                    </a>
                </li>
                <li class="nav-item mt-3">
                    <form id="logout-form" action="{{ route('logout.skpu') }}" method="POST">
                        @csrf
                        <button type="submit" class="nav-link btn btn-link" style="color: #c2c7d0; text-align: left;">
                            <i class="nav-icon fas fa-sign-out-alt"></i>
                            <p>Logout</p>
                        </button>
                    </form>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
