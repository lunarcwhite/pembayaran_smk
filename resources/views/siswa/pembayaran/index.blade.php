@extends('layouts.siswa.master')
@section('pageTitle')
    Informasi Pembayaran
@stop
@section('content')
    <div class="section mt-2">
        <div class="card mb-3">
            <div class="card-header bg-success">
                <h4>Biodata Siswa</h4>
            </div>
            <div class="card-body">
                <table class="table-sm">
                    <tbody>
                        <tr>
                            <td>Nama</td>
                            <td>:</td>
                            <td>{{ $siswa->nama_siswa }}</td>
                        </tr>
                        <tr>
                            <td>NISN</td>
                            <td>:</td>
                            <td>{{ $siswa->nisn }}</td>
                        </tr>
                        <tr>
                            <td>Angkatan</td>
                            <td>:</td>
                            <td>{{ $siswa->angkatan->angkatan }}</td>
                        </tr>
                        <tr>
                            <td>Jurusan</td>
                            <td>:</td>
                            <td>{{ $siswa->jurusan->nama_jurusan }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="card mb-3">
            <div class="card-header bg-success">
                <h4>Rincian Pembayaran</h4>
            </div>
            <div class="card-body">
                <table class="table-sm">
                    <tbody>
                        @foreach ($detail_biayas as $item)
                            <tr>
                                <td>Biaya {{ $item->biaya->nama_biaya }}</td>
                                <td>:</td>
                                <td>Rp. {{ $item->jumlah_biaya }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class="card mb-3">
            <div class="card-header bg-success">
                <h4>Detail Pembayaran</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table-sm table-bordered table-striped">
                        <thead>
                            <th>Biaya</th>
                            <th>Total Biaya</th>
                            <th>Sudah Bayar</th>
                            <th>Sisa</th>
                        </thead>
                        <tbody>
                            @foreach ($detail_biayas as $item)
                                @php
                                    $total = $item->biaya_id == 1 ? $item->jumlah_biaya * 36 : $item->jumlah_biaya;
                                    $sudah_bayar = $riwayat_pembayarans->where('biaya_id', $item->biaya_id)->sum('jumlah_bayar');
                                    $sisa = $total - $sudah_bayar;
                                @endphp
                            <tr>
                                <td>{{$item->biaya->nama_biaya}}</td>
                                <td>Rp. {{$total}}</td>
                                <td>Rp. {{$sudah_bayar}}</td>
                                <td>Rp. {{$sisa}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <hr/>
                <table class="table table-bordered">
                    <tbody>
                        <tr>
                            <td>Total Pembayaran</td>
                            <td>:</td>
                            <td>Rp. {{$total_bayar}}</td>
                        </tr>
                        <tr>
                            <td>Sudah Bayar</td>
                            <td>:</td>
                            <td>Rp. {{ $riwayat_pembayarans->sum('jumlah_bayar') }}</td>
                        </tr>
                        <tr>
                            <td>Belum Bayar</td>
                            <td>:</td>
                            <td>Rp. {{ $total_bayar - $riwayat_pembayarans->sum('jumlah_bayar')}}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection