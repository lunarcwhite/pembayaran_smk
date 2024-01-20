@extends('layouts.admin.master')
@section('title', isset($pageTitle) ? $pageTitle : 'Tahun Ajaran')
@section('menuTitle')
    Tahun Ajaran
@stop
@section('pageTitle')
    <div class="d-flex justify-content-between">
        <a href="{{ url()->previous() }}" class="btn btn-primary">Kembali</a>
        <button type="button" onclick="clearInput('formTahunAjaran','Tambah Tahun Ajaran','dashboard/tahunAjaran')"
            class="btn btn-info" data-toggle="modal" data-target="#modalTahunAjaran">Tambah</button>
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
                        @forelse ($tahunAjarans as $no => $tahunAjaran)
                            <tr>
                                <td>{{ $no + 1 }}</td>
                                <td>{{ $tahunAjaran->tahun_ajaran }}</td>
                                <td>

                                        <button type="button" class="btn btn-info" data-toggle="modal"
                                            data-target="#modalTahunAjaran"
                                            onclick="editTahunAjaran('{{ $tahunAjaran->id }}','formTahunAjaran')">
                                            Edit
                                        </button>

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
    @include('admin.tahun_ajaran.modal_tahun_ajaran')
@stop
@push('js')
    <script>
        function editTahunAjaran(id, idForm) {
            $.ajax({
                type: "get",
                url: `{{ url('dashboard/tahunAjaran/${id}/edit') }}`,
                dataType: 'json',
                success: function(res) {
                    $("#tahun_ajaran").val(res.tahun_ajaran);
                    $(`#labelModal`).text('Edit Tahun Ajaran');
                    $(`#btn-submit`).text('Update');
                    $('#update').append(
                        `@method('put')`
                    );
                    document.getElementById(idForm).action = `{{ url('dashboard/tahunAjaran/${res.id}') }}`;
                }
            });
        }
    </script>
@endpush
