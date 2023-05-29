@extends('layouts.app')

@section('title')
Dentist Service
@endsection

@section('content')
<div class="page-content page-services">
  <section class="store-breadcrumbs" data-aos="fade-down" data-aos-delay="100">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="/">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">
                Services
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
          <h4>Service</h4>
          <h2>Kami dari Dental Care drg. Sri Kurniati</h2>
        </div>
      </div>
    </div>
  </section>
  <section class="dentist-image-services">
    <div class="container">
      <div class="row">
        <div class="col-lg-12" data-aos="zoom-in">
          <img src="/images/Services1.png" class="d-block w-100 rounded" alt="Carousel Image" />
          <hr />
        </div>
      </div>
    </div>
  </section>
  <section class="dentist-serivce">
    <div class="container">
      <div class="row">
        @php $incrementService = 0 @endphp
        @forelse ($services as $service )
        <div class="col-6 col-md-3 col-lg-2" data-aos="fade-up" data-aos-delay="{{ $incrementService+=100 }}">
          <a class="component-service-categories d-block" href="#">
            <div class="categories-image">
              <img src="{{ Storage::url($service->image) }}" alt="Gadgets Categories" class="w-100" />
            </div>
            <p class="categories-text">
              {{ $service->title }}
            </p>
          </a>
        </div>
        @empty
        <div class="col-12 text-center py-5" data-aos="fade-up" data-aos-delay="100">
          No Categories Found
        </div>
        @endforelse
      </div>
  </section>
</div>
@endsection