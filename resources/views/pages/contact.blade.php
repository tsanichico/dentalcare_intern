@extends('layouts.app')

@section('title')
    Dentist Contact
@endsection

@section('content')
    <div class="page-content page-contact">
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
                    Contact
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
            <div class="col-12 " data-aos="fade-up">
              <h4>Contact</h4>
              <h2>Kami dari Dental Care drg. Sri Kurniati</h2>
            </div>
          </div>
        </div>
      </section>
      <section class="dentist-image-contact">
        <div class="container">
          <div class="row">
            <div class="col-lg-12" data-aos="zoom-in">
              <img
                src="/images/Services1.png"
                class="d-block w-100 rounded"
                alt="Carousel Image"
              />
              <hr />
            </div>
          </div>
        </div>
      </section>
      <section class="dentist-contact-us" data-aos="fade-up">
        <div class="container">
          <div class="row">
            <div class="col-md-6 text-center">
              <h3>Anda dapat Menghubungi kami Via Whatsapp dan Instagram.</h3>
              <div class="mt-lg-5">
                <h5>Klinik Dokter Gigi drg. Sri Kurniati</h5>
                <p>
                  Jl. Kalijudan Elok No. 7, Mulyorejo, Surabaya, Jawa Timur 60114, Indonesia
                </p>
                <p>Working Hours : Monday to Friday (08:00 - 17:00)</p>
                <p>(+62 813-3621-4380)</p>
                <hr/>
                <div class="icon-social-media mb-5 mt-4">
                  <h5>Social Media</h5>
                  <a href="">
                    <img
                      src="images/icon-instagram.png"
                      class="img-fluid w-15"
                      alt=""
                    />
                  </a>
                  <a href="https://wa.me/6285156864386?text=Halo,%20Klinik%20Dokter%20Gigi%20drg.%20Sri%20Kurniati" target="_blank">
                    <img
                      src="images/icon-whatsapp.png"
                      class="img-fluid w-15 p-3"
                      alt=""
                    />
                  </a>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="text-center">
                <h3 class="mb-3">Hubungi Kami</h3>
                <p>
                  Anda dapat mengisi formulir di bawah ini untuk mengirimkan
                  pesan kepada kami.
                </p>
              </div>
              <div class="form-group">
                <label for="namaLengkap">Nama Lengkap</label>
                <input
                  type="text"
                  class="form-control text-center"
                  id="namaLengkap"
                  aria-describedby="emailHelp"
                  name="namaLengkap"
                />
              </div>
              <div class="form-group">
                <label for="email">Email</label>
                <input
                  type="text"
                  class="form-control text-center"
                  id="email"
                  aria-describedby="emailHelp"
                  name="email"
                />
              </div>
              <div class="form-group">
                <label for="notelp">No Telp</label>
                <input
                  type="text"
                  class="form-control text-center"
                  id="notelp"
                  aria-describedby="emailHelp"
                  name="notelp"
                />
              </div>
              <div class="form-group">
                <label for="message">Pesan anda</label>
                <input
                  type="text"
                  class="form-control text-center"
                  id="message"
                  aria-describedby="emailHelp"
                  name="message"
                />
              </div>
              <div class="">
                <a
                  href="/success.html"
                  class="btn btn-success mt-4 px-4 btn-block"
                >
                  Kirim
                </a>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="dentist-maps mt-5">
        <div class="container text-center">
          <div class="row justify-content-center">
            <div class="col-12" data-aos="zoom-in">
              <div class="mapouter">
                <div class="gmap_canvas">
                  <iframe
                    class="gmap_iframe"
                    width="100%"
                    frameborder="0"
                    scrolling="no"
                    marginheight="0"
                    marginwidth="0"
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.8762475636786!2d112.77792392280259!3d-7.254922656513702!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7f9defdec1307%3A0xca49ffe65362b415!2sDrg%20Sri%20Kurniati!5e0!3m2!1sen!2sid!4v1656438237688!5m2!1sen!2sid" width="2048" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"
                  ></iframe
                  ><a href="https://mcpepro.com/">MCPE</a>
                </div>
                <style>
                  .mapouter {
                    position: relative;
                    text-align: right;
                    width: 100%;
                    height: 400px;
                  }
                  .gmap_canvas {
                    overflow: hidden;
                    background: none !important;
                    width: 100%;
                    height: 400px;
                  }
                  .gmap_iframe {
                    height: 400px !important;
                  }
                </style>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="dentist-maps-desc mt-5">
        <div class="container text-center">
          <div class="row justify-content-center" data-aos="zoom-in">
            <h2>Kenapa harus ke Klinik Dokter Gigi drg. Sri Kurniati ?</h2>
            <p class="text-center">
              Klinik Dokter Gigi drg. Sri Kurniati adalah klinik dokter gigi pribadi yang berlokasi di Surabaya, Jawa Timur. 
              Klinik ini sudah dipercayai oleh 50+ pasien sejak awal dibuka pada Januari 2022.
            </p>
          </div>
        </div>
      </section>
    </div>
@endsection