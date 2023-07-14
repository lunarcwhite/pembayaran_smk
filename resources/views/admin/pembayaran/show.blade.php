@extends('layouts.admin.master')
@section('menuTitle')
    Rincian Pembayaran
@stop
@section('pageTitle')
    <div class="d-flex justify-content-between">
        <a href="{{ url()->previous() }}" class="btn btn-primary">Kembali</a>
        <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modalTambahPembayaran">Tambah</button>
    </div>
@stop
@section('content')
    <div class="row">
        <div class="col-md-6 col-sm-12">
            <div class="card text-white mb-3" style="max-width: 18rem;">
                <div class="card-header bg-info">
                    <h4>Biodata Siswa</h4>
                </div>
                <div class="card-body">
                    <table class="table-sm text-dark">
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
                                <td>Tahun Ajaran</td>
                                <td>:</td>
                                <td>{{ $siswa->tahun_ajaran->tahun_ajaran }}</td>
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
        </div>
        <div class="col-md-6 col-sm-12">
            <div class="card text-white mb-3" style="max-width: 18rem;">
                <div class="card-header bg-secondary">
                    <h4>Rincian Pembayaran</h4>
                </div>
                <div class="card-body">
                    <table class="table-sm text-dark">
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
                    <hr/>
                </div>
            </div>
        </div>
        <div class="col-md-8 col-md-12">
            <div class="card text-white mb-3" style="max-width: 36rem;">
                <div class="card-header bg-success">
                    <h4>Detail Pembayaran</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table-sm text-dark table-bordered table-striped">
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
                    <p class="text-hint text-dark">Note: Biaya UDB dikali 36</p>
                    <hr/>
                    <table class="table text-dark table-bordered">
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
    </div>
    <hr />
    <h4>Riwayat Pembayaran</h4>
    <div class="table-responsive">
        <table class="table table-hover text-dark" id="dataTable">
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
@include('admin.pembayaran.modal_pembayaran')
@stop
