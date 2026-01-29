@extends('layouts.layoutMaster')
@php
    $configData = Helper::appClasses();
@endphp

@section('title', 'WEBSITE DIGITAL LIBRARY SANTRI - AL-FALAH')

@section('page-style')
    @vite('resources/assets/vendor/scss/pages/front-page-help-center.scss')
@endsection
@section('page-script')
<script>
    
    // Simpan URL awal saat user pertama kali masuk
    if (!sessionStorage.getItem('startUrl')) {
        sessionStorage.setItem('startUrl', window.location.href);
    }
</script>
@endsection

@section('content')
    <!-- Help Center Header: Start -->
   <section class="section-py first-section-pt help-center-header position-relative overflow-hidden">
    <img class="banner-bg-img z-n1"
         src="{{ asset('assets/img/pages/header-' . $configData['theme'] . '.png') }}"
         alt="Help center header" />

    <h4 class="text-center text-primary">
        Cari Kitab, Buku, dan Artikel Keagamaan
    </h4>

    <form action="{{ route('search') }}" method="GET"
          class="input-wrapper my-4 input-group input-group-merge position-relative mx-auto z-0"
          style="max-width: 480px;">

        <span class="input-group-text">
            <i class="ri ri-search-line"></i>
        </span>

        <input type="text" name="q" class="form-control"
               placeholder="Search dokumen..."
               value="{{ request('q') }}" required>

        <button class="btn btn-primary" type="submit">
            Cari
        </button>
    </form>

    <p class="text-center px-4 mb-0">
        Platform baca modern yang menghadirkan Kitab Kuning, Buku Pelajaran,
        Artikel Keagamaan, dan Karya Santri.
    </p>
</section>   {{-- ✅ SECTION HEADER DITUTUP --}}

   <section class="section-py">
    <div class="container">
        <h4 class="text-center mb-4">Layanan Digital Santri</h4>

        <div class="row g-4 justify-content-center">
            <!-- Card 1 -->
            <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                <div class="card border shadow-sm h-100 text-center">
                    <div class="card-body d-flex flex-column justify-content-between">
                        <div>
<i class="bi bi-book-half text-primary" style="font-size:2.5rem;"></i>
                            <h6 class="my-3">Kitab Kuning</h6>
                            <p class="small text-muted">
                                Kitab Kuning digital dengan viewer Arab Pegon.
                            </p>
                        </div>
                        <a class="btn btn-outline-primary btn-sm mt-auto" href="peraturan-gubernur">
                            Detail
                        </a>
                    </div>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                <div class="card border shadow-sm h-100 text-center">
                    <div class="card-body d-flex flex-column justify-content-between">
                        <div>
<i class="bi bi-patch-question-fill text-info" style="font-size:2.5rem;"></i>

                            <h6 class="my-3">Quiz</h6>
                            <p class="small text-muted">
                                Quiz.
                            </p>
                        </div>
                        <a class="btn btn-outline-primary btn-sm mt-auto" href="santri">
                            Detail
                        </a>
                    </div>
                </div>
            </div>

                        <!-- Card 2 -->
            <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                <div class="card border shadow-sm h-100 text-center">
                    <div class="card-body d-flex flex-column justify-content-between">
                        <div>
<i class="bi bi-calendar-event text-success" style="font-size:2.5rem;"></i>

                            <h6 class="my-3">Kalender</h6>
                            <p class="small text-muted">
                               Kalender
                            </p>
                        </div>
                        <a class="btn btn-outline-primary btn-sm mt-auto" href="sop">
                            Detail
                        </a>
                    </div>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                <div class="card border shadow-sm h-100 text-center">
                    <div class="card-body d-flex flex-column justify-content-between">
                        <div>
<i class="bi bi-bookmark-star-fill text-secondary" style="font-size:2.5rem;"></i>
                            <h6 class="my-3">Tajwid Digital</h6>
                            <p class="small text-muted">
                                Panduan membaca Al-Qur’an sesuai kaidah tajwid.
                            </p>
                        </div>
                        <a class="btn btn-outline-primary btn-sm mt-auto" href="perizinan">
                            Detail
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


    <!-- Popular Articles: End -->

    <!-- Hover Style -->
    {{-- <style>
  .card:hover {
    transform: translateY(-5px);
    transition: 0.3s;
    box-shadow: 0 6px 16px rgba(0,0,0,0.1);
  }
  .card p {
    display: -webkit-box;
    -webkit-line-clamp: 2; 
    -webkit-box-orient: vertical;
    overflow: hidden;
  }
</style> --}}

  
    </div>
    </div>



@endsection
