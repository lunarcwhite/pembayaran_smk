@extends('layouts.admin.master')
@section('title', isset($pageTitle) ? $pageTitle : 'Siswa')
@section('menuTitle')
    Data Siswa Tahun Ajaran {{$tahunAjaran->tahun_ajaran}} Jurusan {{$jurusan->nama_jurusan}}
@stop
@section('pageTitle')
    <div class="d-flex justify-content-between">
        <a href="{{ url()->previous() }}" class="btn btn-primary">Kembali</a>
        <div class="button-group">
            <button type="button" onclick="clearInput('formImport','Import Siswa','dashboard/ksiswa/import')"
                class="btn btn-success" data-toggle="modal" data-target="#modalImport">
                Import
            </button>
            <button type="button" onclick="clearInput('formSiswa','Tambah Siswa','dashboard/ksiswa')" class="btn btn-info"
                data-toggle="modal" data-target="#modalSiswa">
                Tambah
            </button>
        </div>
    </div>
@stop
@section('content')
    <div class="table-responsive">
        <table class="table table-hover" id="dataTable">
            <thead>
                <tr>
                    <th class="font-weight-semi-bold border-top-0 py-2">#</th>
                    <th class="font-weight-semi-bold border-top-0 py-2">Nama Siswa</th>
                    <th class="font-weight-semi-bold border-top-0 py-2">NISN</th>
                    <th class="font-weight-semi-bold border-top-0 py-2">Tahun Ajaran</th>
                    <th class="font-weight-semi-bold border-top-0 py-2">Jurusan</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($siswas as $no => $siswa)
                    <tr>
                        <td class="py-3">{{ $no + 1 }}</td>
                        <td class="py-3">{{ $siswa->nama_siswa }}
                        <td>{{ $siswa->nisn }}</td>
                        <td>{{ $siswa->tahun_ajaran->tahun_ajaran }}</td>
                        <td>{{ $siswa->jurusan->nama_jurusan }}</td>
                        </td>
                    </tr>
                @empty
                    <h3>Belum Ada Data Siswa</h3>
                @endforelse
            </tbody>
        </table>
    </div>
    @include('admin.siswa.modal_form_siswa')
    @include('admin.siswa.modal_import_siswa')
@stop
