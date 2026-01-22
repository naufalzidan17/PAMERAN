@php
  $configData = Helper::appClasses();
  $configData['layout'] = 'horizontal'; // ⬅️ HILANGKAN SIDEBAR
@endphp

@extends('layouts.layoutMaster')

@section('title', 'Pembelajaran Tajwid')

@section('content')
<section class="section-py first-section-pt py-4 mt-5">
    <div class="container">

        <!-- Sticky Header + Search -->
<div class="position-sticky top-0 z-3 mb-5" style="background: var(--bs-body-bg);">
    <div class="card border-0 shadow-sm">
        <div class="card-body py-3">
            <div class="row align-items-center g-3">

                <!-- Judul & Breadcrumb -->
             <ol class="breadcrumb mb-1 small">
    <li class="breadcrumb-item">
        <a href="{{ url('/') }}">Beranda</a>
    </li>
    <li class="breadcrumb-item">
        <a href="{{ url('/peraturan-gubernur') }}">Kitab Kuning</a>
    </li>
    <li class="breadcrumb-item">
        <a href="{{ url('/keputusan-gubernur') }}">Audio Ngaji</a>
    </li>
    <li class="breadcrumb-item active">Tajwid Digital</li>
</ol>


                <!-- Search -->
                <div class="col-lg-4">
                    <form method="GET" action="{{ url('/peraturan-direktur') }}">
                        <div class="input-group input-group-sm">
                            <span class="input-group-text">
                                <i class="ri ri-search-line"></i>
                            </span>
                            <input
                                type="text"
                                name="q"
                                value="{{ request('q') }}"
                                class="form-control"
                                placeholder="Cari materi pembelajaran…
">
                        </div>
                    </form>
                </div>

                




            </div>
        </div>
    </div>
</div>

        <!-- Header -->
        <div class="text-center mb-5">
            <h3 class="fw-bold">Pembelajaran Tajwid Interaktif</h3>
            <p class="text-muted">
                Belajar bacaan Al-Qur’an dengan tepat dari, sifat, dan hukum tajwid
            </p>
        </div>

        <!-- ================= SYEKH ================= -->
        <section id="syekh-section" class="mb-6">
            <h4 class="mb-4">Para Syekh / Qari</h4>
            <div class="row g-4">

                <!-- Card Syekh -->
                <div class="col-md-6">
                    <div class="card shadow-sm h-100">
                        <div class="card-body d-flex gap-3">
                            <img src="{{ asset('assets/img/syekh/muamar.jpg') }}"
                                 class="rounded" width="90">
                            <div>
                                <h6 class="mb-1">Muammar Z.A.</h6>
                                <p class="small text-muted">
                                    Qari Indonesia dengan bacaan merdu dan tartil.
                                </p>
                                <audio controls class="w-100">
                                    <source src="{{ asset('assets/audio/002.mp3') }}">
                                </audio>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="card shadow-sm h-100">
                        <div class="card-body d-flex gap-3">
                            <img src="{{ asset('assets/img/syekh/ali-jaber.jpg') }}"
                                 class="rounded" width="90">
                            <div>
                                <h6 class="mb-1">Sheikh Ali Jaber</h6>
                                <p class="small text-muted">
                                    Qari dan da’i dengan bacaan tajwid yang kuat.
                                </p>
                                <audio controls class="w-100">
                                    <source src="{{ asset('assets/audio/001.mp3') }}">
                                </audio>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>

        <!-- ================= TAJWID ================= -->
        <section id="tajwid-section" class="mb-6">
            <h4 class="mb-4">Hukum Tajwid</h4>

            <div class="row g-4">
                @foreach ([
                    'Izhar','Idgham','Ikhfa','Iqlab',
                    'Mad','Ghunna','Qalqalah',
                    'Tafkhim','Tarqiq','Waqf'
                ] as $tajwid)
                <div class="col-md-4">
                    <div class="card h-100 shadow-sm">
                        <div class="card-body">
                            <h6>{{ $tajwid }}</h6>
                            <p class="small text-muted">
                                Penjelasan singkat hukum {{ $tajwid }}.
                            </p>
                            <audio controls class="w-100">
                                <source src="{{ asset('assets/audio/'.$tajwid.'.mp3') }}">
                            </audio>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </section>

      
        

        <!-- ================= MAQAM ================= -->
        <section id="maqam-section" class="mb-6">
            <h4 class="mb-4">Maqamat / Nada Bacaan</h4>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="card shadow-sm">
                        <div class="card-body text-center">
                            <h6>Bayyati</h6>
                            <audio controls class="w-100">
                                <source src="{{ asset('assets/audio/maqam-bayyati.mp3') }}">
                            </audio>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card shadow-sm">
                        <div class="card-body text-center">
                            <h6>Hijaz</h6>
                            <audio controls class="w-100">
                                <source src="{{ asset('assets/audio/maqam-hijaz.mp3') }}">
                            </audio>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>
</section>
@endsection
