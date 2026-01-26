@php
  $configData = Helper::appClasses();
@endphp

@extends('layouts.layoutMaster')

@section('title', 'Makhraj Huruf Hijaiyah')

@section('vendor-style')
@vite(['resources/assets/vendor/libs/swiper/swiper.scss'])
@endsection

@section('vendor-script')
@vite(['resources/assets/vendor/libs/swiper/swiper.js'])
@endsection

@section('page-script')
<script>
document.addEventListener('DOMContentLoaded', function () {

  // AL JAUF
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

  // AL HALQI
  new Swiper('#swiper-halqi', {
    slidesPerView: 3,
    spaceBetween: 30,
    loop: false,
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

  // AL LISAN
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

  // ASY-SYAFATAIN (2 CARD DI TENGAH)
// ASY-SYAFATAIN (RAPI, TIDAK GEPENG)
new Swiper('#swiper-syafatain', {
  slidesPerView: 3,
  centeredSlides: true,
  spaceBetween: 30,
  loop: false,
  pagination: {
    el: '#swiper-syafatain .swiper-pagination',
    clickable: true
  },
  breakpoints: {
    0: { slidesPerView: 1, centeredSlides: true },
    768: { slidesPerView: 2, centeredSlides: true },
    1200: { slidesPerView: 3, centeredSlides: true }
  }
});


  // KHOISYUM (SAMA PERSIS DENGAN AL JAUF)
  new Swiper('#swiper-khoisyum', {
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

});
</script>
@endsection

@section('content')
<section class="section-py bg-body">
  <div class="container">

    <h4 class="text-center fw-bold mb-8">Makhraj Huruf Hijaiyah</h4>

    @php
      $alJauf = [
        ['logo'=>'logo-2.jpeg','text'=>'Rongga mulut','name'=>'الجوف','role'=>'ا و ي']
      ];

      $alHalqi = [
        ['logo'=>'logo-5.jpg','text'=>'Pangkal tenggorokan','name'=>'أقصى الحلق','role'=>'ء هـ'],
        ['logo'=>'logo-1.jpeg','text'=>'Tengah tenggorokan','name'=>'وسط الحلق','role'=>'ع ح'],
        ['logo'=>'logo-3.jpeg','text'=>'Ujung tenggorokan','name'=>'أدنى الحلق','role'=>'غ خ'],
      ];

      $alLisan = [
        ['logo'=>'logo-4.jpeg','text'=>'Pangkal lidah atas','name'=>'أقصى اللسان','role'=>'ق'],
        ['logo'=>'logo-4.jpeg','text'=>'Pangkal lidah bawah','name'=>'أقصى اللسان','role'=>'ك'],
        ['logo'=>'logo-4.jpeg','text'=>'Tengah lidah','name'=>'وسط اللسان','role'=>'ج ش ي'],
        ['logo'=>'logo-4.jpeg','text'=>'Samping lidah','name'=>'حافتا اللسان','role'=>'ض'],
        ['logo'=>'logo-4.jpeg','text'=>'Ujung lidah','name'=>'أدنى اللسان','role'=>'ل'],
        ['logo'=>'logo-4.jpeg','text'=>'Ujung lidah bawah','name'=>'طرف اللسان','role'=>'ن'],
        ['logo'=>'logo-4.jpeg','text'=>'Punggung lidah','name'=>'ظهر رأس اللسان','role'=>'ر'],
        ['logo'=>'logo-4.jpeg','text'=>'Ujung lidah + gigi atas','name'=>'طرف اللسان','role'=>'ت د ط'],
        ['logo'=>'logo-4.jpeg','text'=>'Ujung lidah + gigi bawah','name'=>'طرف اللسان','role'=>'ص ز س'],
        ['logo'=>'logo-4.jpeg','text'=>'Ujung lidah + ujung gigi','name'=>'طرف اللسان','role'=>'ظ ذ ث'],
      ];

      $asySyafatain = [
        ['logo'=>'logo-10.jpg','text'=>'Bibir bawah + gigi atas','name'=>'الشفتان','role'=>'ف'],
        ['logo'=>'logo-3.jpeg','text'=>'Dua bibir','name'=>'الشفتان','role'=>'ب م و'],
      ];

      $khoisyum = [
        ['logo'=>'logo-6.jpg','text'=>'Rongga hidung (ghunnah)','name'=>'الخيشوم','role'=>'غنة']
      ];
    @endphp

    {{-- AL JAUF --}}
    <h5 class="text-center fw-bold mb-4">الجوف</h5>

    <div class="swiper mb-10" id="swiper-jauf">
      <div class="swiper-wrapper">
        @foreach ($alJauf as $r)
        <div class="swiper-slide">
          <div class="card text-center p-5">
            <img src="{{ asset('assets/img/front-pages/branding/'.$r['logo']) }}" class="mb-4" style="max-height:200px">
            <p>{{ $r['text'] }}</p>
            <h6>{{ $r['name'] }}</h6>
            <p class="small">{{ $r['role'] }}</p>
          </div>
        </div>
        @endforeach
      </div>
    </div>

    {{-- AL HALQI --}}
    <h5 class="text-center fw-bold mb-4">الحلق</h5>

    <div class="swiper mb-10" id="swiper-halqi">
      <div class="swiper-wrapper">
        @foreach ($alHalqi as $r)
        <div class="swiper-slide">
          <div class="card text-center p-5">
            <img src="{{ asset('assets/img/front-pages/branding/'.$r['logo']) }}" class="mb-4" style="max-height:200px">
            <p>{{ $r['text'] }}</p>
            <h6>{{ $r['name'] }}</h6>
            <p class="small">{{ $r['role'] }}</p>
          </div>
        </div>
        @endforeach
      </div>
      <div class="swiper-pagination mt-4"></div>
    </div>

    {{-- AL LISAN --}}
    <h5 class="text-center fw-bold mb-4">اللسان</h5>

    <div class="swiper mb-10" id="swiper-lisan">
      <div class="swiper-wrapper">
        @foreach ($alLisan as $r)
        <div class="swiper-slide">
          <div class="card text-center p-5">
            <img src="{{ asset('assets/img/front-pages/branding/'.$r['logo']) }}" class="mb-4" style="max-height:200px">
            <p>{{ $r['text'] }}</p>
            <h6>{{ $r['name'] }}</h6>
            <p class="small">{{ $r['role'] }}</p>
          </div>
        </div>
        @endforeach
      </div>
      <div class="swiper-pagination mt-4"></div>
    </div>

    {{-- ASY SYAFATAIN --}}
    <h5 class="text-center fw-bold mb-4">الشفتان</h5>

    <div class="swiper mb-10" id="swiper-syafatain">
      <div class="swiper-wrapper">
        @foreach ($asySyafatain as $r)
        <div class="swiper-slide">
          <div class="card text-center p-5">
            <img src="{{ asset('assets/img/front-pages/branding/'.$r['logo']) }}" class="mb-4" style="max-height:200px">
            <p>{{ $r['text'] }}</p>
            <h6>{{ $r['name'] }}</h6>
            <p class="small">{{ $r['role'] }}</p>
          </div>
        </div>
        @endforeach
      </div>
      <div class="swiper-pagination mt-4"></div>
    </div>

    {{-- KHOISYUM --}}
    <h5 class="text-center fw-bold mb-4">الخيشوم</h5>

    <div class="swiper" id="swiper-khoisyum">
      <div class="swiper-wrapper">
        @foreach ($khoisyum as $r)
        <div class="swiper-slide">
          <div class="card text-center p-5">
            <img src="{{ asset('assets/img/front-pages/branding/'.$r['logo']) }}" class="mb-4" style="max-height:200px">
            <p>{{ $r['text'] }}</p>
            <h6>{{ $r['name'] }}</h6>
            <p class="small">{{ $r['role'] }}</p>
          </div>
        </div>
        @endforeach
      </div>
    </div>

  </div>
</section>
@endsection
