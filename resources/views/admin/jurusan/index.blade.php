@extends('layouts.admin.master')
@section('title', isset($pageTitle) ? $pageTitle : 'Jurusan')
@section('menuTitle')
    Data Jurusan
@stop
@section('pageTitle')
    <div class="d-flex justify-content-between">
        <a href="{{ url()->previous() }}" class="btn btn-primary">Kembali</a>
        <button type="button" onclick="clearInput('formJurusan','Tambah Jurusan','dashboard/jurusan')" class="btn btn-info"
            data-toggle="modal" data-target="#modalJurusan">Tambah</button>
    </div>
@stop
@section('content')
    <div class="row">
        <div class="col-md-12 col-sm-12">
            <div class="table-responsive">
                <table class="table table-hover text-dark" id="dataTable">
                    <thead>
                        <th>#</th>
                        <th>Nama Jurusan</th>
                        <th>Aksi</th>
                    </thead>
                    <tbody>
                        @forelse ($jurusans as $no => $jurusan)
                            <tr>
                                <td>{{ $no + 1 }}</td>
                                <td>{{ $jurusan->nama_jurusan }}</td>
                                <td>
                                    <form action="{{ route('dashboard.jurusan.destroy', $jurusan->id) }}"
                                        method="post">
                                        @csrf
                                        @method('delete')
                                        <button type="button" class="btn btn-info" data-toggle="modal"
                                            data-target="#modalJurusan"
                                            onclick="editJurusan('{{ $jurusan->id }}','formJurusan')">
                                            Edit
                                        </button>
                                        <button type="button"
                                            onclick="formConfirmation('Hapus Jurusan {{ $jurusan->nama_jurusan }}')"
                                            class="btn btn-danger">Hapus</button>
                                    </form>

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
    @include('admin.jurusan.modal_jurusan')
@stop
@push('js')
    <script>
        function editJurusan(id, idForm) {
            $.ajax({
                type: "get",
                url: `{{ url('dashboard/jurusan/${id}/edit') }}`,
                dataType: 'json',
                success: function(res) {
                    $("#nama_jurusan").val(res.nama_jurusan);
                    $(`#labelModal`).text('Edit Jurusan');
                    $(`#btn-submit`).text('Update');
                    $('#update').append(
                        `@method('put')`
                    );
                    document.getElementById(idForm).action = `{{ url('dashboard/jurusan/${res.id}') }}`;
                }
            });
        }
    </script>
@endpush
