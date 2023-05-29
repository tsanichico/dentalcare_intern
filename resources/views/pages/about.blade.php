@extends('layouts.app')

@section('title')
    Dentist About
@endsection

@section('content')
    <div class="page-content page-about-us">
      <section
        class="store-breadcrumbs"
        data-aos="fade-down"
        data-aos-delay="100"
      >
        <div class="container">
          <div class="row">
            <div class="col-12">
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="/">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">
                    About
                  </li>
                </ol>
              </nav>
            </div>
          </div>
        </div>
      </section>
      <section class="dentist-greeting">
        <div class="container text-center">
          <div class="row">
            <div class="col-12" data-aos="fade-up">
              <h4>About Us</h4>
              <h2>Kami dari Dental Care drg. Sri Kurniati</h2>
            </div>
          </div>
        </div>
      </section>
      <section class="dentist-image-about-us">
        <div class="container">
          <div class="row">
            <div class="col-lg-12" data-aos="zoom-in">
              <img
                src="/images/AboutUS.png"
                class="d-block w-100 rounded"
                alt="Carousel Image"
              />
              <hr />
            </div>
          </div>
        </div>
      </section>
      <section class="dentist-desc">
        <div class="container">
          <div class="row text-center">
            <div class="col-12" data-aos="fade-down">
              <p>
                Praktik Dokter Gigi drg. Sri Kurniati, yaitu Klinik atau Praktik
                Dokter Gigi yang didirikan oleh drg. Sri Kurniati, berlokasi di
                Jl. Kalijudan Elok No. 7. Surabaya. Klinik atau Praktik ini
                berdiri kurang dari 1 tahun, dan dipimpin oleh Drg. Sri Kurniati
                sebagai dokter umum, serta memiliki asisten dalam menjalankan
                layanan kesehatan gigi. Selama beroperasinya layanan kesehatan
                Klinik atau Praktik Dokter Gigi drg. Sri Kurniati, didapatkan
                kendala dalam mendapatkan pelanggan atau pasien.
              </p>
            </div>
          </div>
        </div>
      </section>
      <section class="dentist-founder">
        <div class="container text-center">
          <div class="row justify-content-center">
            <div class="col-sm-6 col-md-9 col-lg-3" data-aos="zoom-in">
              <img
                src="images/drg.sri.jpeg"
                class="rounded-circle d-block img-fluid w-auto p-4"
                alt=""
              />
            </div>
            <div
              class="col-sm-12 col-md-9 col-lg-7 align-self-lg-center"
              data-aos="zoom-in"
            >
              <h4><b>drg. Sri Kurniati</b></h4>
              <p></p>
              <p>
                Dikenal dengan panggilan drg.Sri Kurniati, memulai karirnya di dunia kedokteran gigi setelah tamat dari Universitas Prof. Dr. Moestopo 
                tahun 1999
              </p>
            </div>
            <!-- <div
              class="col-sm-12 col-md-9 col-lg-4 align-self-lg-center"
              data-aos="zoom-in"
            >
              <h5>Para Pendiri</h5>
              <p>
                Palapa Dentists merupakan klinik gigi spesialis di Jakarta
                Selatan dengan konsep pelayanan klinik gigi profesional dan
                terpadu dengan nuansa rumah yang nyaman (homey) sehingga berbeda
                dengan nuansa rumah sakit pada umumnya.
              </p>
            </div> -->
          </div>
        </div>
      </section>

    </div>
@endsection