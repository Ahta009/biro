<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title', 'Dashboard')</title>
        <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
        <!-- Google Font: Source Sans Pro -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">
        <!-- Ionicons -->
        <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
        <!-- Tempusdominus Bootstrap 4 -->
        <link rel="stylesheet" href="{{ asset('plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
        <!-- iCheck -->
        <link rel="stylesheet" href="{{ asset('plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
        <!-- JQVMap -->
        <link rel="stylesheet" href="{{ asset('plugins/jqvmap/jqvmap.min.css') }}">
        <!-- Theme style -->
        <link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css') }}">
        <!-- overlayScrollbars -->
        <link rel="stylesheet" href="{{ asset('plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
        <!-- Daterange picker -->
        <link rel="stylesheet" href="{{ asset('plugins/daterangepicker/daterangepicker.css') }}">
        <!-- summernote -->
        <link rel="stylesheet" href="{{ asset('plugins/summernote/summernote-bs4.min.css') }}">
        @yield('styles')

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
        
        <link rel="stylesheet" href="{{ asset('css/app2.css') }}">
        
        <style>
            body {
                background-image: url('{{ asset("images/bg.png") }}');
            }
        </style>
    </head>
    <body>
        <script src="{{ asset('js/scroll.js') }}"></script>
        <div class="navutama">
            <div class="nav1">
                <div class="judul"><img src="{{ asset('images/uwgm.png')}}"></div>
                <div class="deskripsi">Biro<br>Kemahasiswaan dan Alumni</div>
            </div>
            <div class="nav2">
                <div class="nav-container">
                    <nav>Beranda</nav>
                    <nav class="profil">Profil
                        <ul class="profil-dropdown">
                            <li>Struktur Organisasi
                                <ul> <!-- Nested list starts here -->
                                    <li>Sub-item 1</li>
                                    <li>Sub-item 2</li>
                                </ul>
                            </li>
                            <li>Tugas Pokok dan Fungsi</li>
                        </ul>
                    </nav>
                    <nav class="profil">Kemahasiswaan
                        <ul class="profil-dropdown">
                            <li>Pengajuan KTM</li>
                            <li>Pengajuan Kegiatan Organisasi Mahasiswa</li>
                            <li>Informasi Beasiswa</li>
                        </ul>
                    </nav>
                    <nav class="profil">Bagian Perencanaan
                        <ul class="profil-dropdown">
                            <li>Pengajuan Prodi Baru</li>
                            <li>Rencana Strategis</li>
                            <li>Rencana Operasional</li>
                            <li>Rencana Kinerja Tahunan</li>
                            <li>Laporan Evaluasi Diri</li>
                            <li>Rencana Induk Pengembangan</li>
                        </ul>
                    </nav>
                    <nav class="profil">Tracer Study
                        <ul class="profil-dropdown">
                            <li>Pusat Karir</li>
                            <li>Alumni</li>
                        </ul>
                    </nav>
                    <nav>SIAKAD</nav>
                    <nav>University</nav>
                </div>
            </div>
        </div>
        <div class="main-container">
            <div class="main-content">
                <div class="slideshow-container">
                    <div class="slide fade" style="background-image: url('{{asset('images/Tes1.jpeg')}}');">
                        <div class="text">
                            <div class="content">
                                <div class="slidetitle">Judul Kegiatan</div>
                                <div class="slidedesc">Deskripsi 3 baris Kegiatan
                                    <br>Deskripsi 3 baris kegiatan
                                    <br>Deskripsi 3 baris kegiatan
                                </div>
                            </div>
                        </div>
                        <div class="button-container">
                            <button class="custom-button">Read More</button>
                        </div>
                    </div>
                    <div class="slide fade" style="background-image: url('{{asset('images/Tes2.jpeg')}}');">
                        <div class="text left-align">
                            <div class="slidetitle">Judul Kegiatan</div>
                            <div class="slidedesc">Deskripsi 3 baris kegiatan
                                <br>Deskripsi 3 baris kegiatan
                                <br>Deskripsi 3 baris kegiatan
                            </div>
                        </div>
                        <div class="button-container">
                            <button class="custom-button">Read More</button>
                        </div>
                    </div>
                    <div class="slide fade" style="background-image: url('{{asset('images/Tes1.jpeg')}}');">
                        <div class="text left-align">
                            <div class="slidetitle">Judul Kegiatan</div>
                            <div class="slidedesc">Deskripsi 3 baris kegiatan
                                <br>Deskripsi 3 baris kegiatan
                                <br>Deskripsi 3 baris kegiatan
                            </div>
                        </div>
                        <div class="button-container">
                            <button class="custom-button">Read More</button>
                        </div>
                    </div>
                    
                    <script src="{{ asset('js/slide.js') }}"></script>
                </div>
            </div>
        </div>
        
        <div class="layanan">
            <div class="containerevent">
                <div class="headevent">
                    LAYANAN
                </div>
                <div class="line"></div>
                <div class="eventwrapper">
                    <div>
                        <div class="layananevent">
                            <div class="event">
                                <div class="gambar"><button class="icon-button"><i class="fas fa-address-card"></i></button></div>
                                <div class="desc-container">
                                    <div class="keterangan">KTM</div>
                                </div>
                            </div>
                            <div class="panduan">
                                <div>
                                    PANDUAN PENGAJUAN KTM
                                </div>
                            </div>
                        </div>
                        <div class="layananevent">
                            <div class="panduan">
                                <div>
                                    PANDUAN PENGAJUAN KTM
                                </div>
                            </div>
                            <div class="event">
                                <div class="gambar"><button class="icon-button"><i class="far fa-file"></i></button></div>
                                <div class="desc-container">
                                    <div class="keterangan">Organisasi Mahasiswa</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="layananevent">
                            <div class="event">
                                <div class="gambar"><button class="icon-button"><i class="fas fa-file"></i></button></div>
                                <div class="desc-container">
                                    <div class="keterangan">Perencanaan/Pengajuan Prodi Baru</div>
                                </div>
                            </div>
                            <div class="panduan">
                                <div>
                                    PANDUAN PENGAJUAN KTM
                                </div>
                            </div>
                        </div>
                        <div class="layananevent">
                            <div class="panduan">
                                <div>
                                    PANDUAN PENGAJUAN KTM
                                </div>
                            </div>
                            <div class="event">
                                <div class="gambar"><button class="icon-button"><i class="far fa-file"></i></button></div>
                                <div class="desc-container">
                                    <div class="keterangan">Rencana Kerja Tahunan</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="noticecontainer">
                <div class="headevent">
                    Pengumuman
                </div>
                <div class="line2"></div>
                <div class="pengumuman-box">
                    <div class="notice-icon">
                        <i class="nav-icon fas fa-bullhorn"></i>
                    </div>
                    <div class="notice-title">
                        Pengumuman 1
                    </div>
                </div>
                <div class="pengumuman-box">
                    <div class="notice-icon">
                        <i class="nav-icon fas fa-bullhorn"></i>
                    </div>
                    <div class="notice-title">
                        Pengumuman 1
                    </div>
                </div>
                <div class="pengumuman-box">
                    <div class="notice-icon">
                        <i class="nav-icon fas fa-bullhorn"></i>
                    </div>
                    <div class="notice-title">
                        Pengumuman 1
                    </div>
                </div>
                <div class="pengumuman-box">
                    <div class="notice-icon">
                        <i class="nav-icon fas fa-bullhorn"></i>
                    </div>
                    <div class="notice-title">
                        Pengumuman 1
                    </div>
                </div>
                <div class="pengumuman-box">
                    <div class="notice-icon">
                        <i class="nav-icon fas fa-bullhorn"></i>
                    </div>
                    <div class="notice-title">
                        Pengumuman 1
                    </div>
                </div>
            </div>
        </div>
        <div class="newscontainer">
                <div class="newshead">Berita</div>
                <div class="newsparts">
                    <div class="news">
                        <div class="newspicture"><img class="pict" src={{asset('images/Tes1.jpeg')}}></div>
                        <div class="newstitle">Judul Berita Tertulis</div>
                        <div class="newsdate">24 Juni 2024</div>
                        <div class="newsdesc">Insipidity the sufficient discretion imprudence resolution sir him decisively. 
                            Proceed how any engaged visitor. Explained propriety off out perpetual his...</div>
                            <div class="newsmore">
                                <button>Selengkapnya</button>
                            </div>
                    </div>
                    <div class="news">
                        <div class="newspicture"><img class="pict" src={{asset('images/Tes1.jpeg')}}></div>
                        <div class="newstitle">Judul Berita Tertulis</div>
                        <div class="newsdate">24 Juni 2024</div>
                        <div class="newsdesc">Insipidity the sufficient discretion imprudence resolution sir him decisively. 
                            Proceed how any engaged visitor. Explained propriety off out perpetual his...</div>
                            <div class="newsmore">
                                <button>Selengkapnya</button>
                            </div>
                    </div>
                    <div class="news">
                        <div class="newspicture"><img class="pict" src={{asset('images/Tes1.jpeg')}}></div>
                        <div class="newstitle">Judul Berita Tertulis</div>
                        <div class="newsdate">24 Juni 2024</div>
                        <div class="newsdesc">Insipidity the sufficient discretion imprudence resolution sir him decisively. 
                            Proceed how any engaged visitor. Explained propriety off out perpetual his...</div>
                            <div class="newsmore">
                                <button>Selengkapnya</button>
                            </div>
                    </div>
                    <div class="news">
                        <div class="newspicture"><img class="pict" src={{asset('images/Tes1.jpeg')}}></div>
                        <div class="newstitle">Judul Berita Tertulis</div>
                        <div class="newsdate">24 Juni 2024</div>
                        <div class="newsdesc">Insipidity the sufficient discretion imprudence resolution sir him decisively. 
                            Proceed how any engaged visitor. Explained propriety off out perpetual his...</div>
                            <div class="newsmore">
                                <button>Selengkapnya</button>
                            </div>
                    </div>
                </div>
                <div class="newsall">
                    <button>Semua Berita</button>
                </div>
        </div>
    </body>
    <footer>
        <div class="footercontainer">
            <div class="left-footer">
                <div class="footerimage">
                    <img src="{{asset('images/uwgm.png')}}">
                </div>
                <div class="footerhead">UNIVERSITAS WIDYA GAMA MAHAKAM SAMARINDA</div>
                <div class="footerdesc">
                    Jl. Wahid Hasyim 2 No.28, Sempaja Sel., Kec. Samarinda Utara, Kota Samarinda, Kalimantan Timur 75243
                </div>
                <div class="botfooter"></div>
            </div>
            <div class="mid-footer">
                <div class="footerimage"></div>
                <div class="footerhead">Contact</div>
                <div class="footerdesc">
                    Phone : 
                    <br>Fax :
                    <br>Email :
                    <br>Website :
                </div>
                <div class="botfooter"></div>
            </div>
            <div class="right-footer">
                <div class="footerimage"></div>
                <div class="footerhead">Layanan</div>
                <div class="footerdesc">
                    Layanan 1 
                    <br>Layanan 2
                    <br>Layanan 3
                    <br>Layanan 4
                </div>
                <div class="botfooter"></div>
            </div>
        </div>
    </footer>
</html>