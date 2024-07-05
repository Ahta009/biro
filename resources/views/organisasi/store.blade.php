<!-- resources/views/dashboard.blade.php -->
@extends('admin/layouts.app')

@section('title', 'Pengajuan Prodi')

@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Pengajuan Prodi Baru</h1>
            </div>
        </div>
    </div>
</div>

<section class="content">
    <div class="container-fluids">
                <div class="card card-outline card-info">
                    <div class="card-body">
                        <form method="POST" action="/organisasi/store" enctype="multipart/form-data">
                        @csrf
                                <div class="form-group">
                                    <label>Judul Proposal Kegiatan</label>
                                    <input type="text" class="form-control" placeholder="Enter ..." name="judul_kegiatan">
                                    @error('judul_kegiatan')
                                        <div class="error-message">{{$message}}</div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="image">Upload File Pengajuan (.PDF) (Ukuran Maksimal 3mb)</label>
                                    <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" name="proposal_kegiatan">
                                        <label class="custom-file-label" for="proposal_kegiatan">Choose file</label>
                                    </div>
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
    $(document).ready(function() {
        bsCustomFileInput.init();

        $('#summernote').summernote({
            height: 300, // Adjust as needed
        });
    });
</script>
    
@endsection