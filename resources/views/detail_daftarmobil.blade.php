@extends('layout.main')

@section('container')

    <section id="services" class="services section-bg" style="padding-top: 100px;" data-aos-delay="50">

            <div class="container mt-2 mb-2">
                <div class="row row-layanan">
                    <div class="col-lg-5 mt-5">
                        <figure class="figure">
                            <img src="{{ asset('assets/images/car1.jpg') }}" class="figure-img img-fluid" style="border-radius: 5px; width: 450px">
                            <figcaption class="figure-caption d-flex justify-content-evenly">
                                <a href="#">
                                    <img src="{{ asset('assets/images/car1.jpg') }}" class="figure-img img-fluid" style="border-radius: 5px; width: 100px">
                                </a>
                                <a href="#">
                                    <img src="{{ asset('assets/images/car1.jpg') }}" class="figure-img img-fluid" style="border-radius: 5px; width: 100px">
                                </a>
                                <a href="#">
                                    <img src="{{ asset('assets/images/car1.jpg') }}" class="figure-img img-fluid" style="border-radius: 5px; width: 100px">
                                </a>
                                <a href="#">
                                    <img src="{{ asset('assets/images/car1.jpg') }}" class="figure-img img-fluid" style="border-radius: 5px; width: 100px">
                                </a>
                                <a href="#">
                                    <img src="{{ asset('assets/images/car1.jpg') }}" class="figure-img img-fluid" style="border-radius: 5px; width: 100px">
                                </a>
                            </figcaption>
                        </figure>
                    </div>
                    <div class="col-lg-4">
                        <div class="nama-vendor">
                            <p class="fw-bold">Avanza 2023 | Avanza</p>
                        </div>
                        <div class="harga mt-2">
                            <p class="text-success fw-bold">Rp 350.000/hari</p>
                        </div>
                        <hr>
                        <hr>

                        <div class="row">
                            <div class="detail">
                                <p class="text-success fw-bold">Detail Layanan</p>
                            </div>

                            <div class="list-detail row">
                                <dd class="col-sm-3 text-muted" style="font-size: 13px">Kategori</dd>
                                <dd class="col-sm-9 text-success" style="font-size: 13px">Honda</dd>
                                <dd class="col-sm-3 text-muted" style="font-size: 13px">Alamat</dd>
                                <dd class="col-sm-9 text-success" style="font-size: 13px"><span class="d-inline-block text-truncate text-muted" style="max-width: 250px;">
                                    Jl.sukaria No.62A, RT.15/RW.19, Nanggulan, Maguwoharjo, Kec. Depok, Kabupaten Sleman, Daerah Istimewa Yogyakarta 55282
                                  </span></dd>
                            </div>

                            <div class="deskripsi">
                                <p>Jasa Penyewaan Mobil
                                </p>
                                <ul class="list-unstyled">
                                    <li>Spesifikasi layanan:
                                      <ul>
                                        <li>Surat Lengkap</li>
                                        <li>Kendaraan dibersihkan dan siap pakai</li>
                                      </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 mt-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <h6 class="fw-bold">Atur Pemesanan</h6>
                                    <div class="col-12 mt-3">
                                        <p for="tanggalmasuk" class="form-label" style="font-size: 14px">Tanggal Masuk</p>
                                        <input type="date" class="form-control" id="tanggal">
                                    </div>
                                    <div class="col-12 mt-3">
                                        <label for="tanggalkeluar" class="form-label" style="font-size: 14px">Tanggal Keluar</label>
                                        <input type="date" class="form-control" id="tanggal">
                                    </div>

                                    <div class="d-grid gap-2 col-12 mx-auto">
                                        <a class="btn btn-outline-success btn-sm" href="/pemesanan" role="button">Pesan</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
@endsection
