@extends('layouts.admin.master')
@section('menuTitle')
    Data Jurusan
@stop
@section('pageTitle')
    <div class="d-flex justify-content-between">
        <a href="{{route('dashboard.ksiswa.tahunAjaran') }}" class="btn btn-primary">Kembali</a>
    </div>
@stop
@section('content')
    <div class="row">
        <div class="col-md-12 col-sm-12">
            <div class="table-responsive">
                <table class="table table-hover text-dark" id="dataTable">
                    <thead>
                        <th>#</th>
                        <th>Nama Jurusan</th>
                        <th>Aksi</th>
                    </thead>
                    <tbody>
                        @forelse ($jurusans as $no => $jurusan)
                            <tr>
                                <td>{{ $no + 1 }}</td>
                                <td>{{ $jurusan->nama_jurusan }}</td>
                                <td><a href="{{url('dashboard/ksiswa/'.$tahunAjaran.'/'.$jurusan->id.'')}}" class="btn btn-sm btn-info">Lihat</a></td>
                            </tr>
                        @empty
                            <h3>Belum Ada Data</h3>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <hr />
@stop
