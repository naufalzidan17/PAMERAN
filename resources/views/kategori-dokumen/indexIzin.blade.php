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

  // Swiper Al Jauf (tengah, ukuran sama)
  new Swiper('#swiper-jauf', {
    slidesPerView: 3,
    centeredSlides: true,
    spaceBetween: 30,
    loop: false,
    breakpoints: {
      0: { slidesPerView: 1, centeredSlides: true },
      768: { slidesPerView: 2, centeredSlides: true },
      1200: { slidesPerView: 3, centeredSlides: true }
    }
  });

  // Swiper Al Halqi
  new Swiper('#swiper-halqi', {
    slidesPerView: 3,
    spaceBetween: 30,
    loop: true,
    pagination: {
      el: '#swiper-halqi .swiper-pagination',
      clickable: true
    },
    breakpoints: {
      0: { slidesPerView: 1 },
      768: { slidesPerView: 2 },
      1200: { slidesPerView: 3 }
    }
  });

  // Swiper Al Lisan
  new Swiper('#swiper-lisan', {
    slidesPerView: 3,
    spaceBetween: 30,
    loop: true,
    pagination: {
      el: '#swiper-lisan .swiper-pagination',
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
      Makhraj adalah tempat keluarnya huruf-huruf hijaiyah dari alat ucap manusia.
      Menurut pendapat masyhur Imam Khalil bin Ahmad, makhraj huruf ada 17 yang terbagi menjadi 5 bagian.
    </p>

    {{-- DATA (TIDAK DIUBAH) --}}
    @php
      $reviews = [
        ['logo'=>'logo-2.jpeg','text'=>'(Rongga Mulut)','name'=>'1. الجوف','role'=>'ا و ي (huruf mad)'],
        ['logo'=>'logo-5.jpg','text'=>'Pangkal Tenggorokan','name'=>'2. أقصى الحلق','role'=>'ء هـ'],
        ['logo'=>'logo-1.jpeg','text'=>'Tengah Tenggorokan','name'=>'وسط الحلق','role'=>'ع ح'],

        ['logo'=>'logo-1.jpg','text'=>'Aqsa al-Lisan Fauqu','name'=>'Pangkal lidah bagian atas','role'=>'ق'],
        ['logo'=>'logo-1.jpg','text'=>'Aqsa al-Lisan Asfalu','name'=>'Pangkal lidah bagian bawah','role'=>'ك'],
        ['logo'=>'logo-1.jpg','text'=>'Wasto al-Lisan','name'=>'Tengah lidah','role'=>'ج ش ي'],
        ['logo'=>'logo-1.jpg','text'=>'Hafati al-Lisan ma al-Adros','name'=>'Samping lidah','role'=>'ض'],
        ['logo'=>'logo-1.jpg','text'=>'Adna al-Lisan li Muntahaha','name'=>'Ujung lidah','role'=>'ل'],
        ['logo'=>'logo-1.jpg','text'=>'Torfu al-Lisan tahta','name'=>'Ujung lidah bawah','role'=>'ن'],
        ['logo'=>'logo-1.jpg','text'=>'Dzohru Ro\'si al-Lisan','name'=>'Punggung lidah','role'=>'ر'],
        ['logo'=>'logo-1.jpg','text'=>'Torful al-Lisan ma Usuli','name'=>'Ujung lidah + gigi atas','role'=>'ت د ط'],
        ['logo'=>'logo-1.jpg','text'=>'Torful al-Lisan wa min Fauqi','name'=>'Ujung lidah + gigi bawah','role'=>'ص ز س'],
        ['logo'=>'logo-1.jpg','text'=>'Torfu al-Lisan ma Atrofi','name'=>'Ujung lidah + ujung gigi','role'=>'ظ ذ ث'],

        ['logo'=>'logo-3.jpeg','text'=>'Ujung Tenggorokan','name'=>'أدنى الحلق','role'=>'غ خ'],
      ];
    @endphp

    {{-- SWIPER : AL JAUF --}}
    <div class="swiper mb-8" id="swiper-jauf">
      <div class="swiper-wrapper">
        @foreach ($reviews as $index => $review)
          @if ($index == 0)
          <div class="swiper-slide">
            <div class="card h-230">
              <div class="card-body text-center p-5">
                <img src="{{ asset('assets/img/front-pages/branding/' . $review['logo']) }}" class="mb-4" style="max-height:230px">
                <p class="mb-4">{{ $review['text'] }}</p>
                <h6>{{ $review['name'] }}</h6>
                <p class="small">{{ $review['role'] }}</p>
              </div>
            </div>
          </div>
          @endif
        @endforeach
      </div>
    </div>

    {{-- SWIPER : AL HALQI --}}
    <div class="swiper mb-10" id="swiper-halqi">
      <div class="swiper-wrapper">
        @foreach ($reviews as $index => $review)
          @if ($index == 1 || $index == 2 || $index == count($reviews)-1)
          <div class="swiper-slide">
            <div class="card h-230">
              <div class="card-body text-center p-5">
                <img src="{{ asset('assets/img/front-pages/branding/' . $review['logo']) }}" class="mb-4" style="max-height:230px">
                <p class="mb-4">{{ $review['text'] }}</p>
                <h6>{{ $review['name'] }}</h6>
                <p class="small">{{ $review['role'] }}</p>
              </div>
            </div>
          </div>
          @endif
        @endforeach
      </div>
      <div class="swiper-pagination mt-4"></div>
    </div>

    {{-- SWIPER : AL LISAN --}}
    <div class="swiper" id="swiper-lisan">
      <div class="swiper-wrapper">
        @foreach ($reviews as $index => $review)
          @if ($index >= 3 && $index <= 12)
          <div class="swiper-slide">
            <div class="card h-230">
              <div class="card-body text-center p-5">
                <img src="{{ asset('assets/img/front-pages/branding/' . $review['logo']) }}" class="mb-4" style="max-height:230px">
                <p class="mb-4">{{ $review['text'] }}</p>
                <h6>{{ $review['name'] }}</h6>
                <p class="small">{{ $review['role'] }}</p>
              </div>
            </div>
          </div>
          @endif
        @endforeach
      </div>
      <div class="swiper-pagination mt-4"></div>
    </div>

  </div>
</section>

@endsection
