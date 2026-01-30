@extends('layouts.layoutMaster')

@section('title', $kitab['judul'])

@section('content')
<div class="container py-5">

    <div class="d-flex justify-content-between align-items-center mb-4">
        <h4 class="mb-0">📖 {{ $kitab['judul'] }}</h4>
        <a href="{{ url('/kitab') }}" class="btn btn-outline-secondary">
            ⬅ Kembali
        </a>
    </div>

    <div class="ratio ratio-16x9 shadow rounded overflow-hidden">
        <iframe
            src="{{ $kitab['flip_url'] }}"
            frameborder="0"
            allowfullscreen
            scrolling="no"
            style="border:0;">
        </iframe>
    </div>

</div>
@endsection
