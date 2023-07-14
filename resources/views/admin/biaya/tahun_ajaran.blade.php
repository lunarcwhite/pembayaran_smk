@extends('layouts.admin.master')
@section('menuTitle')
    Data Biaya {{$detail_biayas[0]->biaya->nama_biaya}}
@stop
@section('pageTitle')
<div class="d-flex justify-content-between">
    <a href="{{route('dashboard.biaya.index')}}" class="btn btn-primary">Kembali</a>
    <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modalBiaya">Tambah Tahun Ajaran</button>
</div>
@stop
@section('content')
<div class="table-responsive-xl">
    <table class="table text-nowrap mb-0 table-hover">
        <thead>
        <tr>
            <th class="font-weight-semi-bold border-top-0 py-2">#</th>
            <th class="font-weight-semi-bold border-top-0 py-2">Tahun Ajaran</th>
            <th class="font-weight-semi-bold border-top-0 py-2">Aksi</th>
        </tr>
        </thead>
        <tbody>
            @forelse ($detail_biayas as $no => $detail_biaya)
            <tr>
                <td class="py-3">{{$no+1}}</td>
                <td class="py-3">{{$detail_biaya->tahun_ajaran->tahun_ajaran}}
                </td>
                <td class="py-3"><a href="{{url('dashboard/biaya/'.$detail_biaya->biaya_id.'/'.$detail_biaya->tahun_ajaran_id)}}" class="badge badge-info">Detail Biaya</a></td>
            </tr> 
            @empty
            <h3>Belum Ada Data Pembiayaan</h3>    
            @endforelse
        </tbody>
    </table>
</div>
@include('admin.biaya.modal_tahun_ajaran')
@stop
