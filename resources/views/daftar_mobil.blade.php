@extends('layout.main')

@section('container')
    <section id="services" class="services section-bg" style="padding-top: 100px;" data-aos-delay="50" data-aos="fade-up">

        <div class="container mt-2 mb-2" style="width: 50%, height: 100%">
            <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
                <div class="carousel-indicators">
                  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="{{ asset('assets/img/coba.jpg') }}" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                      <h5>Penyewaan Mobil Terlengkap</h5>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img src="{{ asset('assets/img/coba.jpg') }}" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                      <h5>Second slide label</h5>
                      <p>Some representative placeholder content for the second slide.</p>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img src="{{ asset('assets/img/coba.jpg') }}" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                      <h5>Third slide label</h5>
                      <p>Some representative placeholder content for the third slide.</p>
                    </div>
                  </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>

        <div class="container layanan">
          <div class="row-container">
            <div class="row">
              <div class="col-3">
                <div style="width: 18rem;">
                  <div class="card-body">
                    <h5 class="card-title fw-bold text-muted">Jenis Kendaraan</h5>
                    <hr>
                    <a href="#" class="card-link text-dark">Toyota</a><br>
                    <a href="#" class="card-link text-dark">Honda</a><br>
                    <a href="#" class="card-link text-dark">Hyundai</a><br>
                    <a href="#" class="card-link text-dark">Suzuki</a><br>
                  </div>
                </div>
              </div>

              <div class="col-9">
                <div class="container">
                  <div class="row-container">
                    <div class="col-12">
                      <form class="d-flex mt-3" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                      </form>
                    </div>

                    <div class="row row-cols-1 row-cols-md-3 g-3">
                      <div class="col">
                        <div class="card mt-4 card-layanan">
                          <figure class="figure">
                            <img src="{{ asset('assets/images/car1.jpg') }}" class="figure-img img-fluid rounded" alt="kendaraan style= " border-radius:5px width:300px;>
                          </figure>
                          <div class="card-body">
                            <p class="card-title fw-bold fs-6">Avanza 2020</p>
                            <p class="text-success"><b style="font-size: 16px">Rp 500.000/hari</b><br>
                              <small><span class="d-inline-block text-truncate text-muted" style="max-width: 250px;">
                                Pekalongan Jawa Tengah
                              </span></small>
                            </p>
                            <div class="hstack gap-2">
                            <div class="fw-bold text-muted justify-content-start">1,8 Km</div>
                              <div class="vr"></div>
                              <div class="fw-bold text-success">Tersedia</div>
                            </div>
                        </div>
                      </div>
                    </div>

                    <div class="col">
                      <div class="card mt-4 card-layanan">
                        <figure class="figure">
                          <a href="/detailmobil"><img src="{{ asset('assets/images/car1.jpg') }}" class="figure-img img-fluid rounded" alt="kendaraan" style="border-radius: 5px; width:300px"></a>
                        </figure>
                          <div class="card-body">
                            <a href="/detailmobil"><p class="card-title fw-bold fs-6 text-dark">Avanza</p></a>
                            <p class="text-success"><b style="font-size: 16px">Rp 350.000/hari</b><br>
                              <small><span class="d-inline-block text-truncate text-muted" style="max-width: 250px;">
                                Pekalongan Jawa Tengah
                              </span></small>
                            </p>
                            <div class="hstack gap-2">
                            <div class="fw-bold text-muted justify-content-start">1,8 Km</div>
                              <div class="vr"></div>
                              <div class="fw-bold text-success">Tersedia</div>
                            </div>
                        </div>
                      </div>
                    </div>
                    <div class="col">
                      <div class="card mt-4 card-layanan">
                        <figure class="figure">
                          <a href="/user/kategori/detail"><img src="{{ asset('assets/images/car1.jpg') }}" class="figure-img img-fluid rounded img-layanan" alt="kendaraan" style="border-radius: 5px; width:300px"></a>
                        </figure>
                        <div class="card-body">
                          <a href="/user/kategori/detail"><p class="card-title fw-bold fs-6 text-dark">Pepi Parkir</p></a>
                          <p class="text-success"><b style="font-size: 16px">Rp 400.000/hari</b><br>
                            <small><span class="d-inline-block text-truncate text-muted" style="max-width: 250px;">
                              Pekalongan Jawa
                            </span></small>
                          </p>
                          <div class="hstack gap-2">
                            <div class="fw-bold text-muted justify-content-start">1,8 Km</div>
                            <div class="vr"></div>
                            <div class="fw-bold text-danger">Tidak Tersedia</div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
    </section>
@endsection
