<div class="modal fade text-left" id="modalImport" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="labelModal">
                    Import Siswa
                </h4>
                <button type="button" class="btn btn-outline-danger btn-close" data-dismiss="modal"
                    aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
            <a href="{{url('template/template_import_siswa.xlsx')}}" class="btn btn-info">Download Template</a>
            <hr/>
                <form action="{{ route('dashboard.ksiswa.import') }}" method="post" id="formImport" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group mb-3">
                        <label for="email">Pilih File Dari File Excel</label>
                        <input id="import_siswa" type="file" name="import_siswa"
                            class="form-control" />
                    </div>
                    <h6>Note: Sebelum Mengimport Siswa, Pastikan Tahun Ajaran Dan Jurusannya Sudah Dinputkan Terlebih Dahulu Melalui Menu <strong> Tahun Ajaran </strong> dan <strong> Jurusan </strong></h6>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
                    <button type="button" id="btn-submit" onclick="formConfirmation('Import Data Siswa?','#formImport')" class="btn btn-primary ms-1">Import</button>
            </form>
            </div>
        </div>
    </div>
</div>
