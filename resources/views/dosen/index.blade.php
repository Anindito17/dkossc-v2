@extends('layouts.admin')

@section('judul')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Data Dosen</h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-tambah">
                            <i class="fas fa-plus"></i>
                        </button>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="example2" class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nama</th>
                                <th>Alamat</th>
                                <th>Tahun</th>
                                <th>Action</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($dosens as $dosen)
                            <tr>
                                <td>Triden{{ $dosen->id }}</td>
                                <td>{{ $dosen->nama }}</td>
                                <td>{{ $dosen->alamat }}</td>
                                <td>{{ $dosen->ttl }}</td>
                                <td>
                                <button type="button" class="btn btn-warning" data-dos_id="{{ $dosen->id }}" data-mynama="{{ $dosen->nama }}" data-myalamat="{{ $dosen->alamat }}" data-myttl="{{ $dosen->ttl }}" data-toggle="modal" data-target="#edit">
                                <i class="fas fa-edit"></i>
                                 </button>
                                 :
                                 <button type="button" class="btn btn-danger" data-dos_id="{{ $dosen->id }}" data-toggle="modal" data-target="#hapus">
                                <i class="fas fa-trash"></i>
                                </button>
                                </td>

                            </tr>

                            @endforeach
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="modal-tambah">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Tambah Data Dosen</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('dosen.store') }}" method="post">
              {{ csrf_field() }}
            <div class="modal-body">
                @include('dosen.form')
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
            </form>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal tambah -->

<div class="modal fade" id="edit">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Edit Data Dosen</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('dosen.update','test') }}" method="post">
              {{ method_field('patch') }}
              {{ csrf_field() }}
            <div class="modal-body">
                <input type="hidden" name="dosen_id" id="dos_id" value="">
                @include('dosen.form')
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
            </div>
            </form>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal edit -->

<div class="modal modal-danger fade" id="hapus">
    <div class="modal-dialog">
        <div class="modal-content bg-warning">
            <div class="modal-header">
                <h4 class="modal-title">Konfirmasi Hapus Data Dosen</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('dosen.destroy','test') }}" method="post">
              {{ method_field('delete') }}
              {{ csrf_field() }}
            <div class="modal-body">
                <input type="hidden" name="dosen_id" id="dos_id" value="">
                <H5>Apakah anda yakin, untuk menghapus data ini?</H5>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-success" data-dismiss="modal">Tidak</button>
                <button type="submit" class="btn btn-danger">Ya, Hapus</button>
            </div>
            </form>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal edit -->



@endsection
