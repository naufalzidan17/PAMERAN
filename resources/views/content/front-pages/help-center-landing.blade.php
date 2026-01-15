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
        <h4 class="text-center mb-4">Cari Kitab, Buku, dan Artikel Keagamaan</h4>

        <div class="row g-4 justify-content-center">
            <!-- Card 1 -->
            <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                <div class="card border shadow-sm h-100 text-center">
                    <div class="card-body d-flex flex-column justify-content-between">
                        <div>
                            <i class="bi bi-journal-text text-primary" style="font-size:2.2rem;"></i>
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
                            <i class="bi bi-file-earmark-richtext text-info" style="font-size:2.2rem;"></i>
                            <h6 class="my-3">Audio Ngaji</h6>
                            <p class="small text-muted">
                                Kumpulan audio ngaji, syarah, dan ceramah.
                            </p>
                        </div>
                        <a class="btn btn-outline-primary btn-sm mt-auto" href="peraturan-direktur">
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
                            <i class="bi bi-journal-richtext text-secondary" style="font-size:2.2rem;"></i>
                            <h6 class="my-3">Tajwid Digital</h6>
                            <p class="small text-muted">
                                Panduan membaca Al-Qur’an sesuai kaidah tajwid.
                            </p>
                        </div>
                        <a class="btn btn-outline-primary btn-sm mt-auto" href="#">
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

    <div class="container mb-6">
        <div class="row">
            <!-- Kolom Kiri -->
            <div class="col-md-6">
                <div class="card shadow-sm border-0">
                    <div class="card-header bg-black border-bottom">
                        <h5 class="mb-0 text-primary">Dokumen Terbaru</h5>
                    </div>
                    <div class="card-body p-0">
                        <ul class="list-group list-group-flush">
                            @foreach ($documents as $doc)
                                <li class="list-group-item px-3 py-3 d-flex justify-content-between align-items-start">
                                    <div class="me-3">
                                        <a href="{{ url('documents/' . $doc->id) }}"
                                            class="fw-bold text-primary d-block mb-1">
                                            {{ \Illuminate\Support\Str::limit($doc->judul, 61) }}
                                        </a>
                                        <div class="text-muted small">
                                            {{ \Illuminate\Support\Str::limit($doc->pemrakarsa, 100) }}
                                        </div>
                                    </div>
                                    @if ($doc->status == 2)
                                        <span class="badge bg-warning text-dark align-self-start mt-1">Berlaku</span>
                                    @endif
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Kolom Kanan (kosong dulu) -->
    <div class="col-md-6">
        <!-- Konten lain nanti -->
    </div>
    </div>
    </div>



@endsection
