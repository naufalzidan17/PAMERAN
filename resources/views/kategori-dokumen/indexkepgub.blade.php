@extends('layouts.autoLayout')

@section('title', 'Keputusan Gubernur - RSKK')

@section('content')

@php
    // DATA DUMMY JIKA CONTROLLER BELUM ADA
    $kitabs = $kitabs ?? [
        [
            'id' => 1,
            'judul' => 'Safinatun Najah',
            'cover' => 'https://via.placeholder.com/300x420?text=Fiqih',
            'flip_url' => 'https://online.fliphtml5.com/agqrv/xibv/'
        ],
        [
            'id' => 2,
            'judul' => 'Jazariyah',
            'cover' => 'https://via.placeholder.com/300x420?text=Tajwid',
            'flip_url' => 'https://online.fliphtml5.com/haapc/llfn/'
        ],
        [
            'id' => 3,
            'judul' => 'Kitab Akhlak',
            'cover' => 'https://via.placeholder.com/300x420?text=Akhlak',
            'flip_url' => 'https://online.fliphtml5.com/agqrv/xibv/'
        ],
    ];
@endphp

<section class="section-py py-4 mt-5">
    <div class="container">

        <!-- Breadcrumb -->
        <nav aria-label="breadcrumb" class="mb-3">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('/') }}">Beranda</a></li>
                <li class="breadcrumb-item active">Kitab Digital</li>
            </ol>
        </nav>

        <div class="d-flex justify-content-between align-items-center mb-4">
            <h4 class="mb-0">📚 Kitab Digital</h4>
            <button onclick="history.back()" class="btn btn-outline-primary">⬅ Kembali</button>
        </div>

        <!-- ================== -->
        <!-- DAFTAR KITAB -->
        <!-- ================== -->
        <div class="row g-3 mb-5">
            @forelse ($kitabs as $kitab)
                <div class="col-md-3 col-sm-6">
                    <div class="card h-100 shadow-sm border-0">

                        <img
                            src="{{ $kitab['cover'] ?? asset('assets/img/book-default.png') }}"
                            class="card-img-top"
                            style="height:220px; object-fit:cover;"
                        >

                        <div class="card-body d-flex flex-column">
                            <h6 class="card-title text-center mb-3">
                                {{ $kitab['judul'] }}
                            </h6>

                          <a href="{{ route('kitab.viewer', $kitab['id']) }}?url={{ urlencode($kitab['flip_url']) }}"
   class="btn btn-primary btn-sm mt-auto w-100">
    📖 Baca Kitab
</a>

                               class="btn btn-primary btn-sm mt-auto w-100">
                                📖 Baca Kitab
                            </a>
                        </div>

                    </div>
                </div>
            @empty
                <div class="col-12">
                    <div class="alert alert-light text-center">
                        Belum ada kitab digital.
                    </div>
                </div>
            @endforelse
        </div>

    </div>
</section>

@endsection
