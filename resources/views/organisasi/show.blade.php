<!-- resources/views/dashboard.blade.php -->
@extends('submisi.layouts.app')

@section('title', 'Pengajuan Proposal')

@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Pengajuan Prodi</h1>
            </div>
        </div>
    </div>
</div>

<section class="content">
    <div class="container-fluid">
        <div class="card card-outline card-info">
            <div class="card-body">
                <div class="form-group">
                    <label>Judul Proposal Kegiatan</label>
                    <input type="text" class="form-control" placeholder="Enter ..." name="judul_kegiatan"
                           value="{{$organisasi->judul_kegiatan}}" disabled>
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
                    <iframe id="pdf-preview" src="{{ $pdfUrl }}" width="100%" height="700px" disabled></iframe>
                </div>

                <div class="form-group">
                    <label for="status_prodi">Status Prodi</label>
                    <select class="custom-select form-control-border border-width-2" id="status_prodi"
                            name="status_prodi" disabled>
                        <option value="Pending" {{ $organisasi->status_prodi == 'Pending' ? 'selected' : '' }}>Pending
                        </option>
                        <option value="Diterima" {{ $organisasi->status_prodi == 'Diterima' ? 'selected' : '' }}>
                            Diterima
                        </option>
                        <option value="Ditolak" {{ $organisasi->status_prodi == 'Ditolak' ? 'selected' : '' }}>Ditolak
                        </option>
                    </select>
                </div>

                <div class="form-group">
                    <label>Keterangan</label>
                    <textarea class="form-control custom-textarea" style="height: 400px"
                              placeholder="Keterangan..." id="keterangan_prodi" name="keterangan_prodi"
                              disabled>{{ $organisasi->keterangan_prodi }}</textarea>
                    @error('keterangan_prodi')
                    <div class="error-message">{{$message}}</div>
                    @enderror
                </div>

                <div class="card-footer">
                    <a href="{{ url()->previous() }}" class="btn btn-secondary">Back</a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@section('scripts')
    {{-- Optional: Include any additional scripts --}}
@endsection
