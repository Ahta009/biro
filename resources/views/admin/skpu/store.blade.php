@extends('admin/layouts.app')

@section('title', 'Tambah Program SKPU')

@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Tambah Program SKPU</h1>
            </div>
        </div>
    </div>
</div>

<section class="content">
    <div class="container mt-5">
        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <div class="card">
            <div class="card-header">Assign Program to SKPU</div>
            <div class="card-body">
                <form action="{{ route('skpu.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="skpu_id">SKPU</label>
                        <select class="form-control" id="skpu_id" name="skpu_id" required>
                            <option value="">Select SKPU</option>
                            @foreach($skpus as $skpu)
                                <option value="{{ $skpu->id }}">{{ $skpu->skpu_nama }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="program_id_1">Parent Program</label>
                        <select class="form-control" id="program_id_1" name="program_id_1" required>
                            <option value="">Select Program</option>
                            @foreach($programs as $program)
                                <option value="{{ $program->id }}">{{ $program->program_nama }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="program_id_2">Child Program</label>
                        <select class="form-control" id="program_id_2" name="program_id_2">
                            <option value="">Select Program</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="program_id_3">Sub-child Program</label>
                        <select class="form-control" id="program_id_3" name="program_id_3">
                            <option value="">Select Program</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="harga_satuan">Harga Satuan</label>
                        <input type="number" class="form-control" id="harga_satuan" name="harga_satuan" required>
                    </div>
                    <div class="form-group">
                        <label for="volume">Volume</label>
                        <input type="number" class="form-control" id="volume" name="volume" required>
                    </div>
                    <div class="form-group">
                        <label for="jumlah">Jumlah</label>
                        <input type="number" class="form-control" id="jumlah" name="jumlah" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Assign</button>
                </form>
            </div>
        </div>
    </div>
</section>

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script>
$(document).ready(function () {
    $('#program_id_1').on('change', function () {
        var parentID = $(this).val();
        if (parentID) {
            $.ajax({
                url: '/skpu/' + parentID,
                type: "GET",
                dataType: "json",
                success: function (data) {
                    $('#program_id_2').empty().append('<option value="">Select Program</option>');
                    $.each(data, function (key, value) {
                        $('#program_id_2').append('<option value="' + value.id + '">' + value.program_nama + '</option>');
                    });
                },
                error: function (xhr, status, error) {
                    console.error('Error fetching child programs:', error);
                    // Optionally handle errors here
                }
            });
        } else {
            $('#program_id_2').empty().append('<option value="">Select Program</option>');
            $('#program_id_3').empty().append('<option value="">Select Program</option>');
        }
    });

    $('#program_id_2').on('change', function () {
        var parentID = $(this).val();
        if (parentID) {
            $.ajax({
                url: '/skpu/' + parentID,
                type: "GET",
                dataType: "json",
                success: function (data) {
                    $('#program_id_3').empty().append('<option value="">Select Program</option>');
                    $.each(data, function (key, value) {
                        $('#program_id_3').append('<option value="' + value.id + '">' + value.program_nama + '</option>');
                    });
                },
                error: function (xhr, status, error) {
                    console.error('Error fetching child programs:', error);
                    // Optionally handle errors here
                }
            });
        } else {
            $('#program_id_3').empty().append('<option value="">Select Program</option>');
        }
    });
});
</script>

@endsection
