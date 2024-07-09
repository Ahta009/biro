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
                        <form method="POST" action="/rencanas/{{$rencana->id}}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                                <div class="form-group">
                                    <label>Judul Rencana</label>
                                    <input type="text" class="form-control" placeholder="Enter ..." name="rencana_judul"
                                    value="{{$rencana->rencana_judul}}">
                                    @error('rencana_judul')
                                        <div class="error-message">{{$message}}</div>
                                    @enderror
                                </div>
                                <!-- PDF Preview -->
                                <div class="form-group">
                                    <label>Preview PDF</label>
                                    @php
                                        // Construct the public URL to the PDF file
                                        $pdfUrl = asset('storage/' . $rencana->rencana_berkas);
                                    @endphp
                                    <iframe id="pdf-preview" src="{{ $pdfUrl }}" width="100%" height="700px"></iframe>
                                </div>

                                <div class="form-group">
                                    <label for="status_kegiatan">Status Laporan</label>
                                    <select class="custom-select form-control-border border-width-2" id="rencana_status" name="rencana_status">
                                        <option value="Pending" {{ $rencana->rencana_status == 'Pending' ? 'selected' : '' }}>Pending</option>
                                        <option value="Diterima" {{ $rencana->rencana_status == 'Diterima' ? 'selected' : '' }}>Diterima</option>
                                        <option value="Ditolak" {{ $rencana->rencana_status == 'Ditolak' ? 'selected' : '' }}>Ditolak</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="rencana_jenis">Jenis Rencana</label>
                                    <select class="custom-select form-control-border border-width-2" id="rencana_jenis" name="rencana_jenis" disabled>
                                        <option value="Strategis" {{ $rencana->rencana_jenis == 'Strategis' ? 'selected' : '' }}>
                                            Strategis
                                        </option>
                                        <option value="Operasional" {{ $rencana->rencana_jenis == 'Operasinal' ? 'selected' : '' }}>
                                            Operasional
                                        </option>
                                        <option value="Tahunan" {{ $rencana->rencana_jenis == 'Tahunan' ? 'selected' : '' }}>
                                            Tahunan
                                        </option>
                                        <option value="Evaluasi" {{ $rencana->rencana_jenis == 'Evaluasi' ? 'selected' : '' }}>
                                            Evaluasi
                                        </option>
                                        <option value="Pengembangan" {{ $rencana->rencana_jenis == 'Pengembangan' ? 'selected' : '' }}>
                                            Pengembangan
                                        </option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label>Keterangan</label>
                                    <textarea class="form-control custom-textarea" style="height: 400px" placeholder="Keterangan..." id="rencana_keterangan" name="rencana_keterangan">
                                        {{ $rencana->rencana_keterangan }}
                                    </textarea>
                                    @error('rencana_keterangan')
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