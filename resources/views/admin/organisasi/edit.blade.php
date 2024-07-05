<!-- resources/views/dashboard.blade.php -->
@extends('admin/layouts.app')

@section('title', 'Berita')

@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Verifikasi Kegiatan</h1>
            </div>
        </div>
    </div>
</div>

<section class="content">
    <div class="container-fluids">
                <div class="card card-outline card-info">
                    <div class="card-body">
                        <form method="POST" action="/organisasis/{{$organisasi->id}}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                                <div class="form-group">
                                    <label>Judul Pengajuan</label>
                                    <input type="text" class="form-control" placeholder="Enter ..." name="judul_kegiatan"
                                    value="{{$organisasi->judul_kegiatan}}">
                                    @error('judul_kegiatan')
                                        <div class="error-message">{{$message}}</div>
                                    @enderror
                                </div>
                                <!-- PDF Preview -->
                                <div class="form-group">
                                    <label>Preview PDF</label>
                                    @php
                                        // Construct the public URL to the PDF file
                                        $pdfUrl = asset('storage/' . $organisasi->proposal_kegiatan);
                                    @endphp
                                    <iframe id="pdf-preview" src="{{ $pdfUrl }}" width="100%" height="700px"></iframe>
                                </div>

                                <div class="form-group">
                                    <label for="status_kegiatan">Status Prodi</label>
                                    <select class="custom-select form-control-border border-width-2" id="status_kegiatan" name="status_kegiatan">
                                        <option value="Pending" {{ $organisasi->status_kegiatan == 'Pending' ? 'selected' : '' }}>Pending</option>
                                        <option value="Diterima" {{ $organisasi->status_kegiatan == 'Diterima' ? 'selected' : '' }}>Diterima</option>
                                        <option value="Ditolak" {{ $organisasi->status_kegiatan == 'Ditolak' ? 'selected' : '' }}>Ditolak</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label>Keterangan</label>
                                    <textarea class="form-control custom-textarea" style="height: 400px" placeholder="Keterangan..." id="keterangan_kegiatan" name="keterangan_kegiatan">
                                        {{ $organisasi->keterangan_kegiatan }}
                                    </textarea>
                                    @error('keterangan_kegiatan')
                                        <div class="error-message">{{$message}}</div>
                                    @enderror
                                </div>
                            
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>    
    </div>
</section>
@endsection

@section('scripts')
    <script>
        
    </script>
@endsection