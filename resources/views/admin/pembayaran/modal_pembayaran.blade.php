<div class="modal fade" id="modalTambahPembayaran" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Submit Pembayaran</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body m-3">
                <form action="{{ route('dashboard.pembayaran.store') }}" method="POST">
                    @csrf
                    <input type="hidden" name="siswa_id" value="{{ $siswa->id }}" id="">
                    <div class="form-group">
                        <label for="">Pilih Pembayaran: </label>
                        <select class="form-control mb-3" name="biaya_id">
                            <option value="">--> Pilih Pembayaran <-- </option>
                                    @foreach ($detail_biayas as $biaya)
                            <option value="{{ $biaya->biaya_id }}">{{ $biaya->biaya->nama_biaya }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Jumlah Pembayaran</label>
                        <input type="number" class="form-control" placeholder="Rp. " name="jumlah_bayar">
                    </div>
                    <div class="form-group">
                        <label for="">Keterangan</label>
                        <textarea name="keterangan" id="" class="form-control" cols="30" rows="5" placeholder="Keterangan"></textarea>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" onclick="formConfirmation('Submit Informasi Pembayaran?')"
                    class="btn btn-primary">Tambah</button>
                </form>
            </div>
        </div>
    </div>
</div>