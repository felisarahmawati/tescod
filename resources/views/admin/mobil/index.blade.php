@extends('admin.layout.main')
@section('title', 'Mobil')

@section('mobil')
    <div class="page-content">
        <nav class="page-breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="">Table</a></li>
                <li class="breadcrumb-item active" aria-current="page">Data Mobil</li>
            </ol>
        </nav>
        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h6 class="card-title">Data Mobil</h6>
                        <div class="col-12 text-end">
                            <div class="mt-2 text-end">
                                <a href="#" class="btn btn-primary" data-bs-toggle="modal"
                                    data-bs-target="#exampleModalTambah"
                                    class="btn btn-primary fw-bold rounded-pill px-4 shadow btn-sm">Tambah +</a>
                            </div>
                        </div>
                        <br>
                        <div class="table-responsive">
                            @if (session('berhasil'))
                                <div class="alert alert-success">
                                    {{ session('berhasil') }}
                                </div>
                            @elseif (session('gagal'))
                                <div class="alert alert-danger">
                                    {{ session('gagal') }}
                            @endif
                            <table id="dataTableExample" class="table">
                                <thead>
                                    <tr>
                                        <th class="text-center">No.</th>
                                        <th class="text-center">Merek Mobil</th>
                                        <th class="text-center">Tipe Mobil</th>
                                        <th class="text-center">Nomor Plat</th>
                                        <th class="text-center">Harga</th>
                                        <th class="text-center">Gambar</th>
                                        <th class="text-center">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($mobil as $data)
                                        <tr>
                                            <td class="text-center">{{ $loop->iteration }}</td>
                                            <td class="text-center">{{ $data->jenismobil->nama_mobil }}</td>
                                            <td class="text-center">{{ $data->tipemobil->tipemobil }}</td>
                                            <td class="text-center">{{ $data->nomor_plat }}</td>
                                            <td class="text-center">{{ $data->harga }}</td>
                                            <td class="text-center"><img src="{{ Storage::url($data->Gambar) }}"
                                                style="width: 50%;" style="height: 50%;"></td>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
      <!-- Form Tambah -->
      <div class="modal fade" id="exampleModalTambah" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header hader">
                    <h3 class="modal-title" id="exampleModalLabel">
                        Tambah Mobil
                    </h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{ route('mobil.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="mb-3">
                                    <label class="jenismobil">Merek Mobil</label>
                                    <div>
                                        <select class="form-select" name="jenismobil_id" id="jenismobil_id">
                                            <option value="">-- Pilih --</option>
                                            @foreach ($jenismobil as $sdata)
                                                <option value="{{ $sdata->id }}">{{ $sdata->nama_mobil }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div><!-- Col -->
                            <div class="col-sm-6">
                                <div class="mb-3">
                                    <label class="tipemobil">Tipe Mobil</label>
                                    <div>
                                        <select class="form-select" name="tipemobil_id" id="tipemobil_id">
                                            <option value="">-- Pilih --</option>
                                            @foreach ($tipemobil as $sdata)
                                                <option value="{{ $sdata->id }}">{{ $sdata->tipemobil }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div><!-- Col -->
                        </div><!-- Row -->
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="mb-3">
                                    <label class="nomor_plat">Nomor Plat</label>
                                    <input type="text" name="nomor_plat" class="form-control"
                                        placeholder="nomor plat">
                                </div>
                            </div><!-- Col -->
                            <div class="col-sm-6">
                                <div class="mb-3">
                                    <label class="harga">Harga</label>
                                    <input type="text" name="harga" class="form-control"
                                        placeholder="harga">
                                </div>
                            </div><!-- Col -->
                            <div class="col-sm-12">
                                <div class="mb-3">
                                    <label class="gambar">Gambar</label>
                                    <input type="file" name="Gambar" id="gambar" class="form-control">
                                </div>
                            </div><!-- Col -->

                        </div><!-- Row -->
                        <div class="modal-footer d-md-block">
                            <button type="submit" class="btn btn-success btn-sm" onclick="if (validateForm()) { disable1(this); }"><span id="buttonText">Simpan</span></button>
                            <button type="button" class="btn btn-danger btn-sm" data-bs-dismiss="modal">Batal</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- END -->
@endsection
