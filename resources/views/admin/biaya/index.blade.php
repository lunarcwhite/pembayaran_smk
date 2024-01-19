@extends('layouts.admin.master')
@section('title', isset($pageTitle) ? $pageTitle : 'Biaya')
@section('menuTitle')
    Data Biaya
@stop
@section('pageTitle')
<div class="d-flex justify-content-between">
    <a href="{{ url()->previous() }}" class="btn btn-primary">Kembali</a>
    <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modalBiaya">Tambah</button>
</div>
@stop
@section('content')
<div class="table-responsive-xl">
    <table class="table text-nowrap mb-0 table-hover">
        <thead>
        <tr>
            <th class="font-weight-semi-bold border-top-0 py-2">#</th>
            <th class="font-weight-semi-bold border-top-0 py-2">Nama Biaya</th>
            <th class="font-weight-semi-bold border-top-0 py-2">Aksi</th>
        </tr>
        </thead>
        <tbody>
            @forelse ($biayas as $no => $biaya)
            <tr>
                <td class="py-3">{{$no+1}}</td>
                <td class="py-3">{{$biaya->nama_biaya}}
                </td>
                <td class="py-3"><a href="{{route('dashboard.biaya.show',$biaya->id)}}" class="btn btn-sm btn-info">Detail Biaya</a>
                </td>
            </tr>
            @empty
            <h3>Belum Ada Data Pembiayaan</h3>
            @endforelse
        </tbody>
    </table>
</div>
@include('admin.biaya.modal_biaya')
@stop
