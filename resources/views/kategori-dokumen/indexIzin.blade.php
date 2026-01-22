@php
  $configData = Helper::appClasses();

@endphp

@extends('layouts.layoutMaster')
    

@section('title', 'Customer Reviews')

{{-- Vendor Style --}}
@section('vendor-style')
@vite([
  'resources/assets/vendor/libs/swiper/swiper.scss'
])
@endsection

{{-- Vendor Script --}}
@section('vendor-script')
@vite([
  'resources/assets/vendor/libs/swiper/swiper.js'
])
@endsection

@section('page-script')
<script>
document.addEventListener('DOMContentLoaded', function () {
  new Swiper('#swiper-reviews', {
    slidesPerView: 3,
    spaceBetween: 30,
    loop: true,
    pagination: {
      el: '.swiper-pagination',
      clickable: true
    },
    breakpoints: {
      0: { slidesPerView: 1 },
      768: { slidesPerView: 2 },
      1200: { slidesPerView: 3 }
    }
  });
});
</script>
@endsection

@section('content')

<section class="section-py bg-body">
  <div class="container">

    {{-- Title --}}
    <h6 class="text-center d-flex justify-content-center align-items-center mb-4">
      <img src="{{ asset('assets/img/front-pages/icons/section-title-icon.png') }}" height="18" class="me-2">
      <span class="text-uppercase">Real customers reviews</span>
    </h6>

    <h5 class="text-center mb-2">
      <span class="fw-bold">Success stories</span> from clients
    </h5>

    <p class="text-center text-body mb-8">
      See what our customers have to say about their experience.
    </p>

    {{-- Swiper --}}
    <div class="swiper" id="swiper-reviews">
      <div class="swiper-wrapper">

        {{-- ITEM --}}
        @php
          $reviews = [
            [
              'logo' => 'logo-2.jpeg',
              'text' => '1. Makhraj al-Jauf (Rongga Mulut)',
              'name' => 'Ada 1 Makhraj',
              'role' => 'ا و ي (huruf mad)'
            ],
            [
              'logo' => 'logo-5.png',
              'text' => 'I\'ve never used a theme as versatile and flexible as Vuexy. It\'s my go to for building dashboard sites.',
              'name' => 'Eugenia Moore',
              'role' => 'Founder of Hubspot'
            ],
            [
              'logo' => 'logo-1.png',
              'text' => 'Materio is awesome, and I particularly enjoy knowing that if I get stuck on something.',
              'name' => 'Tommy Haffman',
              'role' => 'Founder of Levis'
            ],
            [
              'logo' => 'logo-3.png',
              'text' => 'This template is superior in so many ways. The code, the design, the updates, the support.',
              'name' => 'Eugenia Moore',
              'role' => 'CTO of Airbnb'
            ],
          ];
        @endphp

        @foreach ($reviews as $review)
        <div class="swiper-slide">
          <div class="card h-100">
            <div class="card-body text-center d-flex flex-column justify-content-between p-5">
              <img src="{{ asset('assets/img/front-pages/branding/' . $review['logo']) }}"
                   class="mb-4" style="max-height:40px">

              <p class="mb-4 text-heading">“{{ $review['text'] }}”</p>

              <div>
                <h6 class="mb-1">{{ $review['name'] }}</h6>
                <p class="small mb-0 text-body">{{ $review['role'] }}</p>
              </div>
            </div>
          </div>
        </div>
        @endforeach

      </div>
      <div class="swiper-pagination mt-4"></div>
    </div>
    

    {{-- CLIENT LOGO --}}
    <div class="row justify-content-center mt-10 text-center">
      @for ($i = 1; $i <= 5; $i++)
        <div class="col-4 col-md-2 mb-4">
          <img src="{{ asset('assets/img/front-pages/branding/logo-' . $i . '-light.png') }}"
               class="img-fluid" style="max-height:40px">
        </div>
      @endfor
    </div>

  </div>
</section>

@endsection
