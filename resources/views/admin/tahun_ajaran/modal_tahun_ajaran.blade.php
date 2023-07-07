<div class="modal fade" id="modalTahunAjaran" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Tambah Tahun Ajaran</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('dashboard.tahunAjaran.store') }}" method="POST">
                @csrf
                <div class="modal-body m-3">
                    <div class="form-group">
                        <label for="">Tahun Ajaran</label>
                        <input type="text" class="form-control" placeholder="2023/2024" name="tahun_ajaran">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" onclick="formConfirmation('Tambah Tahun Ajaran?')"
                        class="btn btn-primary">Tambah</button>
                </div>
            </form>
        </div>
    </div>
</div>
