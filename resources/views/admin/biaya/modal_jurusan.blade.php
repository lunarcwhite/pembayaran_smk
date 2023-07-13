<div class="modal fade" id="modalBiaya" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Tambah Biaya {{$biaya->nama_biaya}} Tahun Ajaran {{$tahun_ajaran->tahun_ajaran}} </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('dashboard.biaya.jurusan.tambah')}}" method="POST">
                @csrf
                <div class="modal-body m-3">
                    <p>Jurusan : </p>
                    @php
                    $panjang = count($jurusans);
                    @endphp
                    @for ($i = 0; $i < $panjang; $i++)
                        <div class="form-group form-check-inline">
                           <input type="checkbox" class="form-check-input" value="{{$jurusans[$i]['id']}}"
                               name="jurusan_id[]">
                           <label class="form-check-label"
                               for="exampleCheck1">{{$jurusans[$i]["nama_jurusan"]}}</label>
                       </div>
                    @endfor 
                    <input type="hidden" name="id_biaya" value="{{$biaya->id}}">
                    <input type="hidden" name="id_tahun_ajaran" value="{{$tahun_ajaran->id}}">

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" onclick="formConfirmation('Tambah?')"
                        class="btn btn-primary">Tambah</button>
                </div>
            </form>
        </div>
    </div>
</div>
