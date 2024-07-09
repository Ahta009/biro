@extends('admin.layouts.app')

@section('title', 'Pengajuan Prodi Baru')

@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Dashboard</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Dashboard v1</li>
                </ol>
            </div>
        </div>
    </div>
</div>

<section class="content">
    <div class="dash-notice">
        <div class="tambah-redaksi">
            <a href="/admin/rencana/store">Pengajuan Laporan Rencana</a>
        </div>
        
        <div>
            <form action="/admin/rencana" method="GET">
                <div class="input-group">
                    <input type="search" id="agendasearch" name="search" class="form-control form-control-sm" placeholder="Type your keywords here">
                    <div class="input-group-append">
                        <button type="submit" class="btn btn-sm btn-default">
                            <i class="fa fa-search"></i>
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <table id="agenda-table" style="border: 1px solid">
        <thead>
            <tr>
                <th>Judul</th>
                <th>Status</th>
                <th>Jenis Rencana</th>
                <th>Tanggal</th>
                <th>Keterangan</th>
                <th>Review</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($rencanas as $rencana)
        <tr>
            <td>
                <div class="notice-title">{{$rencana->rencana_judul}}</div>
                <div class="action-container">
                    <div>
                        <a href="/admin/rencana/{{$rencana->id}}/edit" class="action-edit">Edit</a>
                    </div>
                    <div class="action-delete" data-toggle="modal" data-target="#modal-danger" data-id="{{$rencana->id}}">
                        <a href="#">Hapus</a>
                    </div>
                    <a href="#" class="action-show">Lihat</a>
                </div>
            </td>
            <td>{{$rencana->rencana_status}}</td>
            <td>{{$rencana->rencana_jenis}}</td>
            <td>{{$rencana->created_at}}</td>
            <td>{{implode(' ', array_slice(explode(' ', $rencana->rencana_keterangan), 0, 15))}}...</td>
            <td><a href="/admin/rencana/{{$rencana->id}}/edit">Review</a></td>
        </tr>    
        @endforeach
        </tbody>
    </table>
</section>
<div class="modal fade" id="modal-danger">
    <div class="modal-dialog">
        <div class="modal-content bg-danger">
            <div class="modal-header">
                <h4 class="modal-title">Konfirmasi Hapus</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Apakah Anda yakin ingin menghapus pengumuman ini?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-light" data-dismiss="modal">Batal</button>
                <form id="deleteAgenda" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-outline-light">Hapus</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
@stack('scripts')
<script src="{{ asset('js/agenda.js') }}"></script>
@endsection
