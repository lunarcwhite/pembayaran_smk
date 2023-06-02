@extends('layouts.admin.master')
@section('menuTitle')
    Biaya {{$biaya->nama_biaya}} Tahun Ajaran {{$tahun_ajaran->tahun_ajaran}}
@stop
@section('pageTitle')
<div class="d-flex justify-content-between">
    <button type="button" class="btn btn-warning" onclick="formConfirmationId('#form-biaya','Perbarui Biaya UDB?')">Simpan</button>
    <a href="{{url()->previous()}}" class="btn btn-primary">Kembali</a>
</div>
@stop
@section('content')
    <div class="table-responsive">
        <table class="table text-nowrap mb-0 table-hover">
            <thead>
                <tr>
                    <th class="font-weight-semi-bold border-top-0 py-2">#</th>
                    <th class="font-weight-semi-bold border-top-0 py-2">Jurusan</th>
                    <th class="font-weight-semi-bold border-top-0 py-2">Biaya</th>
                </tr>
            </thead>
            <tbody>
                <form action="{{route('dashboard.biaya.store')}}" method="post" id="form-biaya">
                    @csrf
                @forelse ($detail_biayas as $no => $detail_biaya)
                    <tr>
                        <td class="py-3">{{ $no + 1 }}</td>
                        <td class="py-3"><strong>{{ $detail_biaya->jurusan->nama_jurusan }}</strong></td>
                        <input type="hidden" name="id[]" value="{{$detail_biaya->id}}" id="">
                        <td class="py-3">Rp. <input type="number" value="{{$detail_biaya->jumlah_biaya}}" name="jumlah_biaya[]"></td>
                    </tr>
                @empty
                    <h3>Belum Ada Data Pembiayaan</h3>
                @endforelse
            </form>
            </tbody>
        </table>
    </div>
@stop
