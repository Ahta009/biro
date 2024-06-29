
@extends('admin/layouts.app')

@section('title', 'Pengumuman')

@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Tambah Pengumuman</h1>
            </div>
        </div>
    </div>
</div>

<section class="content">
    <div class="container-fluids">
                <div class="card card-outline card-info">
                    <div class="card-body">
                        <form method="POST" action="/notice/store" enctype="multipart/form-data">
                        @csrf
                                <div class="form-group">
                                    <label>Judul Pengumuman</label>
                                    <input type="text" class="form-control" placeholder="Enter ..." name="title">
                                    @error('title')
                                        <div class="error-message">{{$message}}</div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="image">Gambar(Jika ada)</label>
                                    <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" name="image">
                                        <label class="custom-file-label" for="image">Choose file</label>
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <label>Redaksi Pengumuman</label>
                                    <textarea id="summernote" name="description"></textarea>
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