@extends('layouts.layoutMaster')

@section('title', 'Kitab Viewer')

@section('content')
@php
    // FIX AGAR TIDAK ERROR JIKA CONTROLLER TIDAK KIRIM $kitabs
    $kitabs = $kitabs ?? [
        [
            'id' => 1,
            'judul' => 'Kitab Fiqih Dasar',
            'cover' => 'https://via.placeholder.com/300x420?text=Fiqih',
            'flip_url' => 'https://online.fliphtml5.com/agqrv/xibv/'
        ],
        [
            'id' => 2,
            'judul' => 'Kitab Tajwid',
            'cover' => 'https://via.placeholder.com/300x420?text=Tajwid',
            'flip_url' => 'https://online.fliphtml5.com/haapc/llfn/'
        ],
        [
            'id' => 3,
            'judul' => 'Kitab Akhlak',
            'cover' => 'https://via.placeholder.com/300x420?text=Akhlak',
            'flip_url' => 'https://online.fliphtml5.com/pccfk/kbsj/'
        ],
    ];
@endphp


<div class="container py-5">
    <h3 class="mb-4">📖 Viewer Kitab</h3>

    <!-- === EMBED FLIPHTML5 === -->
<div class="ratio ratio-16x9">
    <iframe 
        src="https://online.fliphtml5.com/agqrv/xibv/"
        width="100%"
        height="600"
        frameborder="0"
        allowfullscreen>
    </iframe>
</div>

    <!-- ======================= -->

</div>
<a href="{{ url('/kitab') }}" class="btn btn-secondary mb-3">
    ← Kembali ke Daftar Kitab
</a>

@endsection
