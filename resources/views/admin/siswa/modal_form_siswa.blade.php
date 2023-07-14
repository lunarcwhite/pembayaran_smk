<div class="modal fade" id="modalSiswa" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="labelModal"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('dashboard.ksiswa.store') }}" method="POST" id="formSiswa">
                    @csrf
                    <div id="update">

                    </div>
                    <div class="form-group mb-3">
                        <label for="">Nama Siswa</label>
                        <input type="text" class="form-control" id="nama_siswa" name="nama_siswa">
                    </div>
                    <div class="form-group mb-3">
                        <label for="">NISN</label>
                        <input type="number" class="form-control" id="nisn" name="nisn">
                    </div>
                    <div class="form-group mb-3">
                        <label for="">Jurusan</label>
                        <select name="jurusan_id" id="jurusan_id" class="form-control">
                            <option value="{{$jurusan->id}}" selected>{{$jurusan->nama_jurusan}}</option>
                        </select>
                    </div>
                    <div class="form-group mb-3">
                        <label for="">Tahun Ajaran</label>
                        <select name="tahun_ajaran_id" id="tahun_ajaran_id" class="form-control">
                            <option value="{{$tahunAjaran->id}}" selected>{{$tahunAjaran->tahun_ajaran}}</option>
                        </select>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" onclick="formConfirmation('Simpan Data?')"
                    class="btn btn-primary">Simpan</button>
                </form>
            </div>
        </div>
    </div>
</div>