@extends('skpu.layouts.app')

@section('title', 'Dashboard')

@section('content')

<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header bg-primary text-white">
                    <h2 class="card-title">Pengajuan Dana</h2>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('register.mahasiswa') }}">
                        @csrf
                        <hr>
                        <div class="form-group row">
                            <label for="headline" class="col-sm-7 col-form-label">A. Operasional Pendidikan</label>
                            <div class="col-sm-4">
                                <div class="input-group">
                                    <input type="text" id="headline" class="form-control autonumeric" placeholder="Jumlah Biaya">
                                </div>
                            </div>
                        </div>
                        <div class="form-group row ml-3">
                            <label for="subheading" class="col-sm-3 col-form-label">a) Belanja Pegawai</label>
                            <div class="col-sm-2">
                                <input type="text" id="volume_subheading" class="form-control" placeholder="Volume">
                            </div>
                            <div class="col-sm-2">
                                <input type="text" id="harga_satuan_subheading" class="form-control autonumeric" placeholder="Harga Satuan">
                            </div>
                            <div class="col-sm-4">
                                <div class="input-group">
                                    <input type="text" id="subheading" class="form-control autonumeric" placeholder="Jumlah Biaya">
                                </div>
                            </div>
                        </div>
                        <div class="form-group row ml-5">
                            <label for="content" class="col-sm-3 col-form-label">1. Belanja Pendidikan Tenaga Pendidikan</label>
                            <div class="col-sm-2">
                                <input type="text" id="volume_content" class="form-control" placeholder="Volume">
                            </div>
                            <div class="col-sm-2">
                                <input type="text" id="harga_satuan_content" class="form-control autonumeric" placeholder="Harga Satuan">
                            </div>
                            <div class="col-sm-4">
                                <div class="input-group">
                                    <input type="text" id="content" class="form-control autonumeric" placeholder="Jumlah Biaya">
                                </div>
                            </div>
                        </div>
                        <div class="form-group row" style="margin-left: 5rem">
                            <label for="details" class="col-sm-3 col-form-label">- Kursus</label>
                            <div class="col-sm-2">
                                <input type="text" id="volume_details" class="form-control" placeholder="Volume">
                            </div>
                            <div class="col-sm-2">
                                <input type="text" id="harga_satuan_details" class="form-control autonumeric" placeholder="Harga Satuan">
                            </div>
                            <div class="col-sm-4">
                                <div class="input-group">
                                    <input type="text" id="details" class="form-control autonumeric" placeholder="Jumlah Biaya">
                                </div>
                            </div>
                        </div>
                        <div class="form-group row ml-3">
                            <label for="subheading" class="col-sm-3 col-form-label">b) Belanja Barang dan Jasa</label>
                            <div class="col-sm-2">
                                <input type="text" id="volume_subheading" class="form-control" placeholder="Volume">
                            </div>
                            <div class="col-sm-2">
                                <input type="text" id="harga_satuan_subheading" class="form-control autonumeric" placeholder="Harga Satuan">
                            </div>
                            <div class="col-sm-4">
                                <div class="input-group">
                                    <input type="text" id="subheading" class="form-control autonumeric" placeholder="Jumlah Biaya">
                                </div>
                            </div>
                        </div>
                        <div class="form-group row ml-5">
                            <label for="content" class="col-sm-3 col-form-label">1. Belanja Keperluan Sehari-hari</label>
                            <div class="col-sm-2">
                                <input type="text" id="volume_content" class="form-control" placeholder="Volume">
                            </div>
                            <div class="col-sm-2">
                                <input type="text" id="harga_satuan_content" class="form-control autonumeric" placeholder="Harga Satuan">
                            </div>
                            <div class="col-sm-4">
                                <div class="input-group">
                                    <input type="text" id="content" class="form-control autonumeric" placeholder="Jumlah Biaya">
                                </div>
                            </div>
                        </div>
                        <div class="form-group row" style="margin-left: 5rem">
                            <label for="details" class="col-sm-3 col-form-label">- Makan minum sehari-hari</label>
                            <div class="col-sm-2">
                                <input type="text" id="volume_details" class="form-control" placeholder="Volume">
                            </div>
                            <div class="col-sm-2">
                                <input type="text" id="harga_satuan_details" class="form-control autonumeric" placeholder="Harga Satuan">
                            </div>
                            <div class="col-sm-4">
                                <div class="input-group">
                                    <input type="text" id="details" class="form-control autonumeric" placeholder="Jumlah Biaya">
                                </div>
                            </div>
                        </div>
                        <div class="form-group row" style="margin-left: 5rem">
                            <label for="details" class="col-sm-3 col-form-label">- Makan minum rapat</label>
                            <div class="col-sm-2">
                                <input type="text" id="volume_details" class="form-control" placeholder="Volume">
                            </div>
                            <div class="col-sm-2">
                                <input type="text" id="harga_satuan_details" class="form-control autonumeric" placeholder="Harga Satuan">
                            </div>
                            <div class="col-sm-4">
                                <div class="input-group">
                                    <input type="text" id="details" class="form-control autonumeric" placeholder="Jumlah Biaya">
                                </div>
                            </div>
                        </div>
                        <div class="form-group row" style="margin-left: 5rem">
                            <label for="details" class="col-sm-3 col-form-label">- ATK</label>
                            <div class="col-sm-2">
                                <input type="text" id="volume_details" class="form-control" placeholder="Volume">
                            </div>
                            <div class="col-sm-2">
                                <input type="text" id="harga_satuan_details" class="form-control autonumeric" placeholder="Harga Satuan">
                            </div>
                            <div class="col-sm-4">
                                <div class="input-group">
                                    <input type="text" id="details" class="form-control autonumeric" placeholder="Jumlah Biaya">
                                </div>
                            </div>
                        </div>
                        <div class="form-group row" style="margin-left: 5rem">
                            <label for="details" class="col-sm-3 col-form-label">- Cetakan</label>
                            <div class="col-sm-2">
                                <input type="text" id="volume_details" class="form-control" placeholder="Volume">
                            </div>
                            <div class="col-sm-2">
                                <input type="text" id="harga_satuan_details" class="form-control autonumeric" placeholder="Harga Satuan">
                            </div>
                            <div class="col-sm-4">
                                <div class="input-group">
                                    <input type="text" id="details" class="form-control autonumeric" placeholder="Jumlah Biaya">
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="form-group row">
                            <label for="headline" class="col-sm-7 col-form-label">B. Penunjang Pendidikan</label>
                            <div class="col-sm-4">
                                <div class="input-group">
                                    <input type="text" id="headline" class="form-control autonumeric" placeholder="Jumlah Biaya">
                                </div>
                            </div>
                        </div>
                        <div class="form-group row ml-3">
                            <label for="subheading" class="col-sm-3 col-form-label">a) Kemahasiswaan</label>
                            <div class="col-sm-2">
                                <input type="text" id="volume_subheading" class="form-control" placeholder="Volume">
                            </div>
                            <div class="col-sm-2">
                                <input type="text" id="harga_satuan_subheading" class="form-control autonumeric" placeholder="Harga Satuan">
                            </div>
                            <div class="col-sm-4">
                                <div class="input-group">
                                    <input type="text" id="subheading" class="form-control autonumeric" placeholder="Jumlah Biaya">
                                </div>
                            </div>
                        </div>
                        <div class="form-group row ml-5">
                            <label for="content" class="col-sm-3 col-form-label">1. Belanja Kemahasiswaan Lainnya</label>
                            <div class="col-sm-2">
                                <input type="text" id="volume_content" class="form-control" placeholder="Volume">
                            </div>
                            <div class="col-sm-2">
                                <input type="text" id="harga_satuan_content" class="form-control autonumeric" placeholder="Harga Satuan">
                            </div>
                            <div class="col-sm-4">
                                <div class="input-group">
                                    <input type="text" id="content" class="form-control autonumeric" placeholder="Jumlah Biaya">
                                </div>
                            </div>
                        </div>
                        <div class="form-group row" style="margin-left: 5rem">
                            <label for="details" class="col-sm-3 col-form-label">- Pembinaan Mahasiswa</label>
                            <div class="col-sm-2">
                                <input type="text" id="volume_details" class="form-control" placeholder="Volume">
                            </div>
                            <div class="col-sm-2">
                                <input type="text" id="harga_satuan_details" class="form-control autonumeric" placeholder="Harga Satuan">
                            </div>
                            <div class="col-sm-4">
                                <div class="input-group">
                                    <input type="text" id="details" class="form-control autonumeric" placeholder="Jumlah Biaya">
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="form-group row">
                            <div class="col-sm-11 text-right">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
