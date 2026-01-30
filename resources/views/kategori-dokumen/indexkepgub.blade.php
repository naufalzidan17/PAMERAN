@extends('layouts.layoutMaster')

@section('vendor-style')
@vite(['resources/assets/vendor/libs/swiper/swiper.scss'])
<style>
  .kitab-card {
    transition: all .25s ease;
    position: relative;
  }
  .kitab-card:hover {
    transform: translateY(-6px);
    box-shadow: 0 12px 30px rgba(0,0,0,.12);
  }
  .kitab-cover {
    height: 260px;
    background: #f8f9fa;
    display: flex;
    align-items: center;
    justify-content: center;
  }
  .kitab-cover img {
    max-height: 100%;
    max-width: 100%;
    object-fit: contain;
    padding: 12px;
  }
</style>
@endsection

@section('vendor-script')
@vite(['resources/assets/vendor/libs/swiper/swiper.js'])
@endsection

@section('title', 'Kitab Kuning Dan Terjemah - Al-Falah Nagreg')

@section('content')

@php
$kitabs = $kitabs ?? [ [ 'id' => 1, 'judul' => 'Safinatun Najah', 'cover' => 'assets/img/kitab/safinatun-najah.jpg', 'flip_url' => 'https://online.fliphtml5.com/agqrv/xibv/' ], [ 'id' => 2, 'judul' => 'Jazariyah', 'cover' => 'assets/img/kitab/jazariyah.jpg', 'flip_url' => 'https://online.fliphtml5.com/haapc/llfn/' ], [ 'id' => 3, 'judul' => 'Bidayatul Hidayah', 'cover' => 'assets/img/kitab/bidayatul.jpeg', 'flip_url' => 'https://online.fliphtml5.com/pccfk/kbsj/' ], 4 => ['id'=>4, 'judul'=>'Nashoihul Ibad',             'cover' => 'assets/img/kitab/nashoih.jpeg', 'flip_url'=>'https://online.fliphtml5.com/MTSSALAFIYAHAL-MUTTAQIYNW/orth/'], 5 => ['id'=>5, 'judul'=>'Tuhfatul Atfal', 'cover' => 'assets/img/kitab/tupah.jpeg', 'flip_url'=>'https://fliphtml5.com/xlqoq/zjna/Terjemah-matan-tuhfatul-athfal-wal-ghilman/'], 6 => ['id'=>6, 'judul'=>'At-Tibyan', 'cover' => 'assets/img/kitab/tibyan.jpeg', 'flip_url'=>'https://online.fliphtml5.com/urqx/akze/'], 7 => ['id'=>7, 'judul'=>'Arbain Nawawi', 'cover' => 'assets/img/kitab/arbain.jpg', 'flip_url'=>'https://online.fliphtml5.com/hytr/gkfl/'], 8 => ['id'=>8, 'judul'=>'Aqidatul Awwam', 'cover' => 'assets/img/kitab/awam.jpg', 'flip_url'=>'https://online.fliphtml5.com/rqyix/mesy/'], 9 => ['id'=>9, 'judul'=>'Fathul Qorib', 'cover' => 'assets/img/kitab/qorib.jpg',  'flip_url'=>'https://online.fliphtml5.com/pccfk/aykp/'], 10 => ['id'=>10, 'judul'=>'Ahlakul Banin', 'cover' => 'assets/img/kitab/banin.jpeg','flip_url'=>'https://fliphtml5.com/bjqgl/ebml/Kitab_Akhlak_Lil_Banin/5/'], 11 => ['id'=>11, 'judul'=>'Jurumiyah', 'cover' => 'assets/img/kitab/jurumiyah.jpg','flip_url'=>'https://online.fliphtml5.com/yngyi/wiqq/'], 12 => ['id'=>12, 'judul'=>'Sirah Nabawiyah', 'cover'=>'assets/img/kitab/sirah.jpeg', 'flip_url'=>'https://fliphtml5.com/jcfb/mkia/Sirah_Nabawiyah/'], 13 => ['id'=>13, 'judul'=>'Kitab 13', 'cover'=>'https://via.placeholder.com/300x420?text=Kitab+13', 'flip_url'=>'https://online.fliphtml5.com/xxxx/0013/'], 14 => ['id'=>14, 'judul'=>'Kitab 14', 'cover'=>'https://via.placeholder.com/300x420?text=Kitab+14', 'flip_url'=>'https://online.fliphtml5.com/xxxx/0014/'], 15 => ['id'=>15, 'judul'=>'Kitab 15', 'cover'=>'https://via.placeholder.com/300x420?text=Kitab+15', 'flip_url'=>'https://online.fliphtml5.com/xxxx/0015/'], 16 => ['id'=>16, 'judul'=>'Kitab 16', 'cover'=>'https://via.placeholder.com/300x420?text=Kitab+16', 'flip_url'=>'https://online.fliphtml5.com/xxxx/0016/'], 17 => ['id'=>17, 'judul'=>'Kitab 17', 'cover'=>'https://via.placeholder.com/300x420?text=Kitab+17', 'flip_url'=>'https://online.fliphtml5.com/xxxx/0017/'], 18 => ['id'=>18, 'judul'=>'Kitab 18', 'cover'=>'https://via.placeholder.com/300x420?text=Kitab+18', 'flip_url'=>'https://online.fliphtml5.com/xxxx/0018/'], 19 => ['id'=>19, 'judul'=>'Kitab 19', 'cover'=>'https://via.placeholder.com/300x420?text=Kitab+19', 'flip_url'=>'https://online.fliphtml5.com/xxxx/0019/'], 20 => ['id'=>20, 'judul'=>'Kitab 20', 'cover'=>'https://via.placeholder.com/300x420?text=Kitab+20', 'flip_url'=>'https://online.fliphtml5.com/xxxx/0020/'], ];
@endphp

<section class="section-py py-4 mt-5">
  <div class="container">

    <nav aria-label="breadcrumb" class="mb-3">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ url('/') }}">Beranda</a></li>
        <li class="breadcrumb-item active">Kitab Digital</li>
      </ol>
    </nav>

    <form action="{{ route('search') }}" method="GET"
      class="input-group input-group-merge mx-auto mb-4"
      style="max-width:480px">
      <span class="input-group-text"><i class="ri ri-search-line"></i></span>
      <input type="text" name="q" class="form-control"
        placeholder="Search kitab..." value="{{ request('q') }}" required>
      <button class="btn btn-primary">Cari</button>
    </form>

    <div class="d-flex justify-content-between align-items-center mb-4">
      <h4 class="mb-0">📚 Kitab Digital</h4>
      <button onclick="history.back()" class="btn btn-outline-primary">⬅ Kembali</button>
    </div>

    <div class="row g-4 mb-5">
      @forelse ($kitabs as $kitab)
      <div class="col-xl-3 col-lg-4 col-md-6">
        <div class="card kitab-card h-100 border-0">

          {{-- BADGE KATEGORI (TAMBAHAN) --}}
          <span class="badge bg-label-primary position-absolute m-2">
            {{ $kitab['kategori'] ?? 'Umum' }}
          </span>

          {{-- COVER --}}
          <div class="kitab-cover">
            <img src="{{ asset($kitab['cover']) }}">
          </div>

          <div class="card-body d-flex flex-column text-center">

            <h6 class="mb-2">{{ $kitab['judul'] }}</h6>

            {{-- RATING (TAMBAHAN) --}}
            <div class="d-flex justify-content-center align-items-center mb-1">
              <span class="text-warning me-1">⭐</span>
              <small class="fw-semibold">
                {{ $kitab['rating'] ?? '4.5' }}
              </small>
            </div>

            {{-- VIEW COUNT (TAMBAHAN) --}}
            <div class="text-muted small mb-3">
              👁️ {{ number_format($kitab['views'] ?? 0) }} dibaca
            </div>

            <a href="{{ route('kitab.viewer', $kitab['id']) }}"
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
