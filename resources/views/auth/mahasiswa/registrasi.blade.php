@extends('auth.layouts.app')

@section('title', 'Registrasi Akun')

<body class="hold-transition register-page">
    <div class="container" style="max-width: 1200px; margin: auto;">
        <div class="register-box" style="width: 100%;">
            <div class="card card-outline card-primary">
                <div class="card-header text-center">
                    <a href="#" class="h1"><b>Biro Kemahasiswaan</b></a>
                </div>
                <div class="card-body">
                    <p class="login-box-msg">Registrasi Akun Baru</p>

                    <form action="{{ route('register.mahasiswa') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" name="nim" placeholder="NIM" value="{{ old('nim') }}" required>
                                    <div class="input-group-append">
                                        <div class="input-group-text">
                                            <span class="fas fa-id-card"></span>
                                        </div>
                                    </div>
                                </div>

                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" name="nama" placeholder="Nama" value="{{ old('nama') }}" required>
                                    <div class="input-group-append">
                                        <div class="input-group-text">
                                            <span class="fas fa-user"></span>
                                        </div>
                                    </div>
                                </div>

                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" name="alamat" placeholder="Alamat" value="{{ old('alamat') }}">
                                    <div class="input-group-append">
                                        <div class="input-group-text">
                                            <span class="fas fa-home"></span>
                                        </div>
                                    </div>
                                </div>

                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" name="no_hp" placeholder="No HP" value="{{ old('no_hp') }}">
                                    <div class="input-group-append">
                                        <div class="input-group-text">
                                            <span class="fas fa-phone"></span>
                                        </div>
                                    </div>
                                </div>

                                <div class="input-group mb-3">
                                    <input type="email" class="form-control" name="email" placeholder="Email" value="{{ old('email') }}" required>
                                    <div class="input-group-append">
                                        <div class="input-group-text">
                                            <span class="fas fa-envelope"></span>
                                        </div>
                                    </div>
                                </div>

                                <div class="input-group mb-3">
                                    <input type="number" class="form-control" name="tahun_masuk" placeholder="Tahun Masuk" value="{{ old('tahun_masuk') }}" required>
                                    <div class="input-group-append">
                                        <div class="input-group-text">
                                            <span class="fas fa-calendar"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" name="username" placeholder="Username" value="{{ old('username') }}" required>
                                    <div class="input-group-append">
                                        <div class="input-group-text">
                                            <span class="fas fa-user"></span>
                                        </div>
                                    </div>
                                </div>

                                <div class="input-group mb-3">
                                    <input type="password" class="form-control" name="password" placeholder="Password" required>
                                    <div class="input-group-append">
                                        <div class="input-group-text">
                                            <span class="fas fa-lock"></span>
                                        </div>
                                    </div>
                                </div>

                                <div class="input-group mb-3">
                                    <input type="password" class="form-control" name="password_confirmation" placeholder="Retype password" required>
                                    <div class="input-group-append">
                                        <div class="input-group-text">
                                            <span class="fas fa-lock"></span>
                                        </div>
                                    </div>
                                </div>

                                <div class="input-group mb-3">
                                    <input type="file" class="form-control" name="foto" placeholder="Foto">
                                    <div class="input-group-append">
                                        <div class="input-group-text">
                                            <span class="fas fa-camera"></span>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-8">
                                        <div class="icheck-primary">
                                            <input type="checkbox" id="agreeTerms" name="terms" value="agree" required>
                                            <label for="agreeTerms">
                                                Saya menyatakan bahwa data diatas adalah benar dan dapat dipertanggungjawabkan
                                            </label>
                                        </div>
                                    </div>
                                    <!-- /.col -->
                                    <div class="col-4">
                                        <button type="submit" class="btn btn-primary btn-block">Register</button>
                                    </div>
                                    <!-- /.col -->
                                </div>
                            </div>
                        </div>
                    </form>

                    <a href="{{ route('login.mahasiswa') }}" class="text-center">Sudah Punya Akun ?</a>
                </div>
                <!-- /.form-box -->
            </div><!-- /.card -->
        </div>
    </div>
</body>
