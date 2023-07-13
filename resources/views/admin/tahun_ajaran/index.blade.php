@extends('layouts.admin.master')
@section('menuTitle')
    Rincian Pembayaran
@stop
@section('pageTitle')
    <div class="d-flex justify-content-between">
        <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modalTahunAjaran">Tambah</button>
        <a href="{{ url()->previous() }}" class="btn btn-primary">Kembali</a>
    </div>
@stop
@section('content')
    <div class="row">
        <div class="col-md-12 col-sm-12">
            <div class="card text-white mb-3">
                <div class="card-header">
                    <h4>Tahun Ajaran</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover text-dark" id="dataTable">
                            <thead>
                                <th>#</th>
                                <th>Tahun Ajaran</th>
                                <th>Aksi</th>
                            </thead>
                            <tbody>
                                @forelse ($tahunAjarans as $no => $tahunAjaran)
                                    <tr>
                                        <td>{{$no+1}}</td>
                                        <td>{{$tahunAjaran->tahun_ajaran}}</td>
                                        <td><button class="btn btn-info">Edit</button></td>
                                    </tr>
                                @empty
                                    <h3>Belum Ada Data Pembayaran</h3>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <hr />

    @include('admin.tahun_ajaran.modal_tahun_ajaran')
@stop
