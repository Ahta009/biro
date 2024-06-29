
    <div class="containerevent">
        <div class="headevent">
            Layanan
        </div>
        <div class="line"></div>
        <div class="eventwrapper">
            <div>
                <div class="layananevent">
                    <div class="event">
                        <div class="gambar"><button class="icon-button"><i class="far fa-address-card"></i></button></div>
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
                            PANDUAN PENGAJUAN KEGIATAN
                        </div>
                    </div>
                    <div class="event">
                        <div class="gambar"><button class="icon-button"><i class="far fa-clipboard"></i></button></div>
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
                            PANDUAN PENGAJUAN PRODI BARU
                        </div>
                    </div>
                </div>
                <div class="layananevent">
                    <div class="panduan">
                        <div>
                            PANDUAN UNGGAH RENCANA KERJA
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
            <a href="/pengumuman">Pengumuman</a>
        </div>
        <div class="line2"></div>
        @foreach ($notices as $notice)
            <div class="pengumuman-box">
                <div class="notice-icon">
                    <i class="nav-icon fas fa-bullhorn"></i>
                </div>
                <div class="notice-title">
                    <a href="{{ route('pengumuman.show', $notice->id) }}">
                        {{ $notice->title }}
                    </a>
                </div>
            </div>    
        @endforeach
        
    </div>