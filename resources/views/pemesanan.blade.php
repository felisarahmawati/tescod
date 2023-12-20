@extends('layout.main')

    <section id="services" class="services section-bg" style="padding-top: 100px;" data-aos-delay="50">
        <div class="container mt-4 mb-4" data-aos="fade-up">
            <div class="row row-layanan">
                <div class="col-lg-5 mt-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <h6 class="fw-bold">Alamat Saya</h6><hr>
                                <div class="col-6">
                                    <p><b>Michele</b><br>
                                        0832553141241
                                    </p>
                                </div>
                                <div class="col-6 text-end">
                                    <button type="button" class="btn btn-outline-success btn-sm" disabled>Utama</button>
                                </div>
                                <div class="col-12">
                                    <p>Pemalang Jawa Tengah</p>
                                </div>

                                <h6 class="fw-bold mt-4">Kendaraan Disewa</h6><hr>
                                <div class="col-md-4">
                                    <figure class="figure">
                                        <img src="{{ asset('assets/images/car1.jpg') }}" class="figure-img img-fluid rounded" alt=" " kendaraan style="border-radius: 5px; width:100px">
                                    </figure>
                                </div>
                                <div class="col-md-4 mt-3">
                                    <p>Avanza 2023</p>
                                </div>
                                <div class="col-md-1 text-end mt-3">
                                    <p>1</p>
                                </div>
                                <div class="col-md-3 text-end mt-3">
                                    <p>Rp 350.000</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-7 mt-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <h6 class="fw-bold">Detail Pesanan</h6><hr>
                            <div class="col-6">
                                <p>Durasi Peminjaman</p>
                            </div>
                            <div class="col-6 text-end">
                                <p>4 hari</p>
                            </div>
                            <div class="col-6">
                                <p>Pick Up</p>
                            </div>
                            <div class="col-6 text-end">
                                <a href="#" class="text-dark" data-bs-toggle="modal" data-bs-target="#pickup">Antar-jemput</a>
                            </div>

                            <h6 class="fw-bold mt-4">Detail Pembayaran</h6><hr>
                            <div class="col-6">
                                <p>Sub total</p>
                            </div>
                            <div class="col-6 text-end">
                                <p>Rp 350.000 x 4</p>
                            </div>
                            <div class="col-6">
                                <p>Biaya Penjemputan</p>
                            </div>
                            <div class="col-6 text-end">
                                <p>Rp 150.000</p>
                            </div>
                            <div class="col-6">
                                <p>Total Pembayaran</p>
                            </div>
                            <div class="col-6 text-end">
                                <p>Rp 1.550.000</p>
                            </div>
                            <hr>
                            <div class="col-6">
                                <p>Metode Pembayaran</p>
                            </div>
                            <div class="col-6 text-end">
                                <a href="#" class="text-dark" data-bs-toggle="modal" data-bs-target="#paymentmethod">Transfer</a>
                            </div>
                            <div class="d-grid gap-2 mb-3">
                                <a class="btn btn-outline-success" href="/pembayaran" role="button">Bayar</a>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal-->
        <div class="modal fade" id="pickup" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header text-white bg-success">
                        <h5 class="modal-title" id="exampleModalLabel"><b>Pilih Pick Up</b></h5>
                        <button type="button" class="btn-close bg-white rounded" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                            <label class="form-check-label" for="flexRadioDefault1">
                                Antar - jemput
                            </label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                            <label class="form-check-label" for="flexRadioDefault1">
                            Antar langsung ke tempat
                            </label>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-success" data-bs-dismiss="modal">Pilih</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="paymentmethod" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header text-white bg-success">
                        <h5 class="modal-title" id="exampleModalLabel"><b>Pilih Pick Up</b></h5>
                        <button type="button" class="btn-close bg-white rounded" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p>
                            <a class="btn bg-white" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                            Transfer Bank <i class="bi bi-chevron-down"></i>
                            </a>
                        </p>
                        <div class="collapse" id="collapseExample">
                            <div class="card card-body">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                    Bank BCA
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                    Bank BRI
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                    Bank MANDIRI
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                    Bank BNI
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                            <label class="form-check-label" for="flexRadioDefault1">
                              COD
                            </label>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-success" data-bs-dismiss="modal">Pilih</button>
                    </div>
                </div>
            </div>
        </div>
    </section>



