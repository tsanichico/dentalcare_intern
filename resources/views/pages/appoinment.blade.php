@extends('layouts.app')

@section('title')
    Dentist Homepage
@endsection

@section('content')
    <div class="page-content page-appoinment">
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
                    Appoinment
                  </li>
                </ol>
              </nav>
            </div>
          </div>
        </div>
      </section>
      <section class="dentist-appoinment">
        <div class="container">
          <div class="row" data-aos="fade-up" data-aos-delay="150">
            <div class="col-12">
              <hr />
            </div>
            <div class="col-12">
              <h2 class="mb-4">Form Appoinment</h2>
            </div>
          </div>
          <div class="row mb-2" data-aos="fade-up" data-aos-delay="200">
            <div class="col-md-6">
              <div class="form-group">
                <label for="namaLengkap">Nama Lengkap</label>
                <input
                  type="text"
                  class="form-control"
                  id="namaLengkap"
                  aria-describedby="emailHelp"
                  name="namaLengkap"
                  value="Kevin Anggara"
                />
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="addressTwo">Alamat</label>
                <input
                  type="text"
                  class="form-control"
                  id="addressOne"
                  aria-describedby="emailHelp"
                  name="addressOne"
                  value="Blok B2 No. 34"
                />
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label for="province">Province</label>
                <select name="province" id="province" class="form-control">
                  <option value="West Java">West Java</option>
                </select>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label for="city">City</label>
                <select name="city" id="city" class="form-control">
                  <option value="Bandung">Bandung</option>
                </select>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label for="postalCode">Postal Code</label>
                <input
                  type="text"
                  class="form-control"
                  id="postalCode"
                  name="postalCode"
                  value="40512"
                />
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="email">Email</label>
                <input
                  type="text"
                  class="form-control"
                  id="email"
                  aria-describedby="emailHelp"
                  name="email"
                  value="kevinanggara19@gmail.com"
                />
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="mobile">No Telepon</label>
                <input
                  type="text"
                  class="form-control"
                  id="mobile"
                  name="mobile"
                  value="+628 2020 11111"
                />
              </div>
            </div>
            <div class="col-md-12">
              <label for="yourmessage" class="form-label">Pesan Anda</label>
              <textarea
                class="form-control"
                id="yourmessage"
                rows="3"
              ></textarea>
            </div>
          </div>
          <div class="row" data-aos="fade-up" data-aos-delay="150">
            <div class="col-12">
              <hr />
            </div>
            <div class="col-12">
              <h2>Dentist Informations</h2>
            </div>
          </div>
          <div class="row" data-aos="fade-up" data-aos-delay="200">
            <div class="col-md-9">
              <div class="product-subtitle">
                Form terhubung langsung dengan tim perawat & administrasi kami
                (10:00 - 21:00). Setelah form ini di submit, kami akan
                menghubungi anda melalui whatsapp sebagai tanda konfirmasi
                penjadwalan.
              </div>
            </div>
            <div class="col-md-3">
              <a href="/success.html" class="btn btn-success px-4 btn-block">
                Kirim
              </a>
            </div>
          </div>
        </div>
      </section>
    </div>
@endsection



