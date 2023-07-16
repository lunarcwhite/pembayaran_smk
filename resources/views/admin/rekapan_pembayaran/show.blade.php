@extends('layouts.admin.master')
@section('menuTitle')
    Rekapan Pembayaran {{$tahunAjaran->tahun_ajaran}}
@stop
@section('pageTitle')
    <div class="d-flex justify-content-between">
        <a href="{{ url()->previous() }}" class="btn btn-primary">Kembali</a>
    </div>
@stop
@section('content')
    <div class="row">
        <div class="col-md-12 col-sm-12">
            <div class="table-responsive">
                <table class="table table-hover text-dark" id="dataTable">
                    <thead>
                        <th>#</th>
                        <th>Nama Data</th>
                        <th>Jumlah Siswa</th>
                        <th>Data</th>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Total Pembayaran</td>
                            <td>{{$siswa->count()}}</td>
                            <td><strong> Rp. {{$total_pembayaran}} </strong></td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Sudah Lunas</td>
                            <td>{{$sudah_lunas}}</td>
                            <td><strong> Rp. {{$sudah_bayar}} </strong></td>
                        </tr>
                        <tr>
                            <td>Selisih</td>
                            <td></td>
                            <td></td>
                            <td><strong> <h2> Rp. {{$total_pembayaran - $sudah_bayar}} </h2> </strong></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <hr />
@stop