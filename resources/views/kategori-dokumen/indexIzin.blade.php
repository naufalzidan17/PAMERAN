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
      <span class="fw-bold">Makhraj Huruf Hijaiyah</span> 
    </h5>

    <p class="text-center text-body mb-8">
      Makhraj adalah tempat keluarnya huruf-huruf hijaiyah dari alat ucap manusia. Menurut pendapat masyhur Imam Khalil bin Ahmad, makhraj huruf ada 17 yang terbagi menjadi 5 bagian. 
    </p>

    {{-- Swiper --}}
    <div class="swiper" id="swiper-reviews">
      <div class="swiper-wrapper">

        {{-- ITEM --}}
        @php
          $reviews = [
            [
              'logo' => 'logo-2.jpeg',
              'text' => '(Rongga Mulut)',
              'name' => '1. الجوف',
              'role' => 'ا و ي (huruf mad)'
            ],
            [
              'logo' => 'logo-5.jpg',
              'text' => 'Pangkal Tenggorokan',
              'name' => '2. أقصى الحلق',
              'role' => 'ء هـ'
            ],
            [
              'logo' => 'logo-1.jpeg',
              'text' => 'Tengah Tenggorokan',
              'name' => 'وسط الحلق',
              'role' => 'ع ح'
            ],
            [
              'logo' => 'logo-3.jpeg',
              'text' => 'Ujung Tenggorokan',
              'name' => 'أدنى الحلق',
              'role' => 'غ خ'
            ],
          ];
        @endphp

        @foreach ($reviews as $review)
        <div class="swiper-slide">
          <div class="card h-230">
            <div class="card-body text-center d-flex flex-column justify-content-between p-5">
              <img src="{{ asset('assets/img/front-pages/branding/' . $review['logo']) }}"
                   class="mb-4" style="max-height:230px">

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
