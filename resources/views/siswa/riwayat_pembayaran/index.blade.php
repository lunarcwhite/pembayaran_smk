@extends('layouts.siswa.master')
@section('pageTitle')
    Riwayat Pembayaran
@stop
@section('content')
   <div class="section mt-2">
    <div class="card mb-3">
        <div class="card-header bg-success">
            <h4>Riwayat Pembayaran</h4>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped" id="dataTable">
                    <thead>
                        <th>#</th>
                        <th>No Kwitansi</th>
                        <th>Pembayaran</th>
                        <th>Tanggal</th>
                        <th>Jumlah Pembayaran</th>
                        <th>Keterangan</th>
                    </thead>
                    <tbody>
                        @forelse ($riwayat_pembayarans as $no => $riwayat_pembayaran)
                            <tr>
                                <td>{{$no+1}}</td>
                                <td>{{$riwayat_pembayaran->no_kwitansi}}</td>
                                <td>{{$riwayat_pembayaran->biaya->nama_biaya}}</td>
                                <td>{{$riwayat_pembayaran->created_at->format('d-m-Y')}}</td>
                                <td>{{$riwayat_pembayaran->jumlah_bayar}}</td>
                                <td>{{$riwayat_pembayaran->keterangan}}</td>
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
@endsection