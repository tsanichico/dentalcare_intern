@extends('layouts.app')

@section('title')
    Dentist Homepage
@endsection

@section('content')
    <div class="page-content page-home">
      <section class="store-carousel">
        <div class="container">
          <div class="row">
            <div class="col-lg-12" data-aos="zoom-in">
              <div
                id="storeCarousel"
                class="carousel slide"
                data-ride="carousel"
              >
                <ol class="carousel-indicators">
                  <li
                    data-target="#storeCarousel"
                    data-slide-to="0"
                    class="active"
                  ></li>
                  <li data-target="#storeCarousel" data-slide-to="1"></li>
                  <li data-target="#storeCarousel" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img
                      src="/images/Carousel 1.png"
                      class="d-block w-100"
                      alt="Carousel Image"
                    />
                  </div>
                  <div class="carousel-item">
                    <img
                      src="/images/Carousel 2.png"
                      class="d-block w-100"
                      alt="Carousel Image"
                    />
                  </div>
                  <div class="carousel-item">
                    <img
                      src="/images/Carousel 3.png"
                      class="d-block w-100"
                      alt="Carousel Image"
                    />
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="dentist-serivce">
        <div class="container">
          <div class="row text-center">
            <div class="col-12" data-aos="fade-up">
              <h2>Layanan</h2>
            </div>
          </div>
          <div class="row">
            @php $incrementService = 0 @endphp
            @forelse ($services as $service )
              <div
              class="col-6 col-md-3 col-lg-2"
              data-aos="fade-up"
              data-aos-delay="{{ $incrementService+=100 }}"
            >
              <a class="component-service-categories d-block" href="#">
                <div class="categories-image">
                  <img
                    src="{{ Storage::url($service->image) }}"
                    alt="Gadgets Categories"
                    class="w-100"
                  />
                </div>
                <p class="categories-text">
                    {{ $service->title }}
                </p>
              </a>
            </div>
            @empty
               <div
                            class="col-12 text-center py-5"
                            data-aos="fade-up"
                            data-aos-delay="100"
                        >
                            No Categories Found
                        </div>
            @endforelse
            
          </div>
        </div>
      </section>
      <section class="store-new-products">
        <div class="container">
          <div class="row text-center">
            <div class="col-12" data-aos="fade-up">
              <h2>Fasilitas</h2>
            </div>
          </div>
          <div class="row text-center">
          @php $incrementFacility = 0 @endphp
          @forelse ( $facilities as $facility )
            <div
              class="col-6 col-md-4 col-lg-3"
              data-aos="fade-up"
              data-aos-delay="{{ $incrementFacility +=100 }}"
            >
              <a class="component-products d-block" href="/facilites.html">
                <div class="products-thumbnail">
                  <div
                    class="products-image"
                    style="
                      @if($facility->galleries)
                      background-image: url('{{ Storage::url($facility->galleries->first()->photos) }}');
                      @else
                      background-color: #eee;
                      @endif
                    "
                  ></div>
                </div>
                <div class="products-text">
                  {{ $facility->name }}
                </div>
                <div class="products-price">
                  {!!$facility->description!!}
                </div>
              </a>
            </div>
          @empty
            <div
                class="col-12 text-center py-5"
                data-aos="fade-up"
                data-aos-delay="100"
            >
                No Products Found
                </div>
          @endforelse
         
          </div>
        </div>
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
              <p>
              Klinik Dokter Gigi drg. Sri Kurniati adalah klinik dokter gigi pribadi yang berlokasi di Surabaya, Jawa Timur. 
              Klinik ini sudah dipercayai oleh 50+ pasien sejak awal dibuka pada Januari 2022.
              </p>
            </div>
          </div>
        </section>
      </section>
    </div>
@endsection