<!-- resources/views/dashboard.blade.php -->
@extends('admin/layouts.app')

@section('title', 'Berita')

@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Tambah Berita</h1>
            </div>
        </div>
    </div>
</div>

<section class="content">
    <div class="container-fluids">
                <div class="card card-outline card-info">
                    <div class="card-body">
                        <form method="POST" action="/news/store" enctype="multipart/form-data">
                        @csrf
                                <div class="form-group">
                                    <label>Judul Berita</label>
                                    <input type="text" class="form-control" placeholder="Enter ..." name="news_title">
                                    @error('title')
                                        <div class="error-message">{{$message}}</div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="image">Gambar(Jika ada)</label>
                                    <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" name="news_image">
                                        <label class="custom-file-label" for="news_image">Choose file</label>
                                    </div>
                                </div>
                            
                                <div class="form-group">
                                    <label>Redaksi Berita</label>
                                    <textarea id="summernote" name="news_description"></textarea>
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