@extends('layouts.admin.master')
@section('menuTitle')
    Data Biaya Angkatan
@stop
@section('pageTitle')
<div class="d-flex justify-content-between">
    <h5>Pilih Angkatan</h5>
    <a href="{{url()->previous()}}" class="btn btn-primary">Kembali</a>
</div>
@stop
@section('content')
<div class="table-responsive-xl">
    <table class="table text-nowrap mb-0 table-hover">
        <thead>
        <tr>
            <th class="font-weight-semi-bold border-top-0 py-2">#</th>
            <th class="font-weight-semi-bold border-top-0 py-2">Angkatan</th>
            <th class="font-weight-semi-bold border-top-0 py-2">Aksi</th>
        </tr>
        </thead>
        <tbody>
            @forelse ($detail_biayas as $no => $detail_biaya)
            <tr>
                <td class="py-3">{{$no+1}}</td>
                <td class="py-3">{{$detail_biaya->angkatan->angkatan}}
                </td>
                <td class="py-3"><a href="{{url('dashboard/biaya/'.$detail_biaya->biaya_id.'/'.$detail_biaya->angkatan_id)}}" class="badge badge-info">Detail Biaya</a></td>
            </tr> 
            @empty
            <h3>Belum Ada Data Pembiayaan</h3>    
            @endforelse
        </tbody>
    </table>
</div>
@stop
