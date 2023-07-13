<div class="modal fade" id="modalBiaya" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Tambah Biaya Untuk Tahun Ajaran</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('dashboard.biaya.tambah.tahunAjaran',$detail_biayas[0]->biaya->id) }}" method="POST">
                @csrf
                <div class="modal-body m-3">
                    <p>Tahun Ajaran : </p>
                    @php
                    $panjang = count($tahunAjarans);
                    @endphp
                    @for ($i = 0; $i < $panjang; $i++)
                        <div class="form-group form-check-inline">
                           <input type="checkbox" class="form-check-input" value="{{$tahunAjarans[$i]['id']}}"
                               name="tahun_ajaran_id[]">
                           <label class="form-check-label"
                               for="exampleCheck1">{{$tahunAjarans[$i]["tahun_ajaran"]}}</label>
                       </div>
                    @endfor 
                    <input type="hidden" name="nama_biaya" value="{{$detail_biayas[0]['biaya_id']}}">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" onclick="formConfirmation('Tambah Biaya?')"
                        class="btn btn-primary">Tambah</button>
                </div>
            </form>
        </div>
    </div>
</div>
