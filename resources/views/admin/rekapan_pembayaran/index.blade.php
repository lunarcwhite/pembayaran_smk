@extends('layouts.admin.master')
@section('title', isset($pageTitle) ? $pageTitle : 'Rekap Pembayaran')
@section('menuTitle')
    Rekapan Pembayaran
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
                        <th>Tahun Ajaran</th>
                        <th>Aksi</th>
                    </thead>
                    <tbody>
                        @forelse ($tahun_ajarans as $no => $tahunAjaran)
                            <tr>
                                <td>{{ $no + 1 }}</td>
                                <td>{{ $tahunAjaran->tahun_ajaran }}</td>
                                <td><a href="{{route('dashboard.rekapan.pembayaran.show', $tahunAjaran->id)}}" class="btn btn-sm btn-info">Lihat</a>
                                </td>
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
