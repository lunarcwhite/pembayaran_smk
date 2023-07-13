<div class="modal fade" id="modalJurusan" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="labelModal"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('dashboard.jurusan.store') }}" method="POST" id="formJurusan">
                @csrf
                <div id="update">
                
                </div>
                <div class="modal-body m-3">
                    <div class="form-group">
                        <label for="">Nama Jurusan</label>
                        <input type="text" class="form-control" id="nama_jurusan" placeholder="Nama Jurusan" name="nama_jurusan">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" onclick="formConfirmation('Simpan Data?')"
                        class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>
