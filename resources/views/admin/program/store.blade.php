<!-- resources/views/dashboard.blade.php -->
@extends('admin/layouts.app')

@section('title', 'Berita')

@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Tambah Program</h1>
            </div>
        </div>
    </div>
</div>

<section class="content">
    <div class="container-fluids">
                <div class="card card-outline card-info">
                    <div class="card-body">
                        <form method="POST" action="/admin/program" enctype="multipart/form-data">
                        @csrf
                                <div class="form-group">
                                    <label>Nama Program</label>
                                    <input type="text" class="form-control" placeholder="Enter ..." name="program_nama">
                                    @error('title')
                                        <div class="error-message">{{$message}}</div>
                                    @enderror
                                </div>

                                <div>
                                    <label for="parent_id">Parent Program:</label>
                                    <select id="parent_id" name="parent_id">
                                        <option value="">-- Select Parent Program --</option>
                                        @foreach($programs as $program)
                                            <option value="{{ $program->id }}">{{ $program->program_nama }}</option>
                                        @endforeach
                                    </select>
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
