<div class="modal fade" id="modalBiaya" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Tambah Biaya</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('dashboard.biaya.tambah') }}" method="POST">
                @csrf
                <div class="modal-body m-3">
                    <div class="form-group">
                        <label for="">Nama Biaya</label>
                        <input type="text" class="form-control" placeholder="Nama Biaya" name="nama_biaya">
                    </div>
                    <p>Tahun Ajaran : </p>
                    @foreach ($tahunAjarans as $no => $tahunAjaran)
                    <div class="form-group form-check-inline">
                        <input type="checkbox" class="form-check-input" value="{{$tahunAjaran->id}}" name="tahun_ajaran_id[]" id="tahunAjaran{{$no+1}}">
                        <label class="form-check-label" for="exampleCheck1">{{$tahunAjaran->tahun_ajaran}}</label>
                    </div>
                    @endforeach
                    <p>Jurusan : </p>
                    @foreach ($jurusans as $no => $jurusan)
                    <div class="form-group form-check-inline">
                        <input type="checkbox" class="form-check-input" value="{{$jurusan->id}}" name="jurusan_id[]" id="jurusan{{$no+1}}">
                        <label class="form-check-label" for="exampleCheck1">{{$jurusan->nama_jurusan}}</label>
                    </div>
                    @endforeach
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
