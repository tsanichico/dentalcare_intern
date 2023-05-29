@extends('layouts.app')

@section('title')
    Dentist Facilities
@endsection

@section('content')
    <div class="page-content page-facilities">
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
                    Facilities
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
              <h4>Facilities</h4>
              <h2>Fasilitas Kami dari Dental Care drg. Sri Kurniati</h2>
            </div>
          </div>
        </div>
      </section>
      <section class="dentist-image-facilites">
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
      <section class="store-new-products">
        <div class="container">
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
      </section>
    </div>
@endsection