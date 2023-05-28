@extends('layouts.admin.master')
@section('menuTitle')
    Data Siswa
@stop
@section('pageTitle')
    Daftar Siswa
@stop
@section('content')
<div class="table-responsive">
    <table class="table table-hover" id="dataTable">
        <thead>
        <tr>
            <th class="font-weight-semi-bold border-top-0 py-2">#</th>
            <th class="font-weight-semi-bold border-top-0 py-2">Nama Siswa</th>
            <th class="font-weight-semi-bold border-top-0 py-2">NISN</th>
            <th class="font-weight-semi-bold border-top-0 py-2">Angkatan</th>
            <th class="font-weight-semi-bold border-top-0 py-2">Jurusan</th>
            <th class="font-weight-semi-bold border-top-0 py-2">Aksi</th>
        </tr>
        </thead>
        <tbody>
            @forelse ($siswas as $no => $siswa)
            <tr>
                <td class="py-3">{{$no+1}}</td>
                <td class="py-3">{{$siswa->nama_siswa}}
                    <td>{{$siswa->nisn}}</td>
                    <td>{{$siswa->angkatan->angkatan}}</td>
                    <td>{{$siswa->jurusan->nama_jurusan}}</td>
                </td>
                <td class="py-3"><a href="{{route('dashboard.pembayaran.show',$siswa->id)}}" class="badge badge-info">Detail Pembayaran</a></td>
            </tr> 
            @empty
            <h3>Belum Ada Data Siswa</h3>    
            @endforelse
        </tbody>
    </table>
</div>
@stop
