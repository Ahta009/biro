<!-- resources/views/dashboard.blade.php -->
@extends('admin/layouts.app')

@section('title', 'Berita')

@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Edit Agenda</h1>
            </div>
        </div>
    </div>
</div>

<section class="content">
    <div class="container-fluids">
                <div class="card card-outline card-info">
                    <div class="card-body">
                        <form method="POST" action="/agendas/{{$agenda->id}}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                                <div class="form-group">
                                    <label>Judul Agenda</label>
                                    <input type="text" class="form-control" placeholder="Enter ..." name="agenda_title"
                                    value="{{$agenda->agenda_title}}">
                                    @error('agenda_title')
                                        <div class="error-message">{{$message}}</div>
                                    @enderror
                                </div>
                            
                                <div class="form-group">
                                    <label>Audiensi</label>
                                    <input type="text" class="form-control" placeholder="Enter ..." name="agenda_audiens"
                                    value="{{$agenda->agenda_audiens}}">
                                    @error('agenda_audiens')
                                        <div class="error-message">{{$message}}</div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label>Redaksi Pengumuman</label>
                                    <textarea id="summernote" name="agenda_description" 
                                    >{{$agenda->agenda_description}}</textarea>
                                </div>
                            
                                <div class="form-group">
                                    <label for="exampleInputFile">Gambar(Jika ada)</label>
                                    <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="exampleInputFile"
                                        value="{{$agenda->agenda_image}}">
                                        <label class="custom-file-label" for="exampleInputFile" name="agenda_image">Choose file</label>
                                    </div>
                                    <div class="input-group-append">
                                        <span class="input-group-text">Upload</span>
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
        $(function () {
            // Summernote
            $('#summernote').summernote()
        });
        
    </script>
@endsection