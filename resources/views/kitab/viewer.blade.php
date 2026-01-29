@extends('layouts.autoLayout')

@section('title', $kitab['judul'])

@section('content')
@extends('layouts.layoutMaster')

@section('title', 'Kitab Viewer')

@section('content')

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

<div class="container py-4">

    <div class="d-flex justify-content-between align-items-center mb-3">
        <h4>{{ $kitab['judul'] }}</h4>
        <a href="{{ url()->previous() }}" class="btn btn-outline-secondary">
            ⬅ Kembali
        </a>
    </div>

    <div class="ratio ratio-16x9 shadow rounded overflow-hidden">
        <iframe
            src="{{ $kitab['flip_url'] }}"
            frameborder="0"
            allowfullscreen
            scrolling="no">
        </iframe>
    </div>

</div>
@endsection
