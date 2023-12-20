@foreach ($tipemobil as $item)
    <div class="modal fade" id="exampleModalEdit{{ $item->id }}" tabindex="-1"
        aria-labelledby="exampleModalLabel{{ $item->id }}" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header hader">
                    <h3 class="modal-title" id="exampleModalLabel{{ $item->id }}">
                        Edit Tipe Mobil
                    </h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{ route('tipemobil.update', $item->id) }}" method="POST"
                    enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    <div class="modal-body">
                        <div class="row">
                            <div class="form-group mb-3">
                                <label>Merek Mobil</label>
                                <div>
                                    <select class="form-select" name="jenismobil_id" id="jenismobil_id">
                                        <option value="">-- Pilih --</option>
                                        @foreach ($jenismobil as $sdata)
                                            <option value="{{ $sdata->id }}"
                                                @if ($sdata->id == $item->jenismobil_id) selected @endif>
                                                {{ $sdata->nama_mobil }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Tipe Mobil</label>
                                <input type="text" name="tipemobil" class="form-control"
                                    value="{{ $item->tipemobil }}" required>
                                @error('tipemobil')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer d-md-block">
                        <button type="submit" class="btn btn-success btn-sm">Simpan</button>
                        <button type="button" class="btn btn-danger btn-sm" data-bs-dismiss="modal">Batal</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endforeach
