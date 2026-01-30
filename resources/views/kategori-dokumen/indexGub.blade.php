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
            'judul' => 'Bidayatul Hidayah',
            'cover' => 'https://via.placeholder.com/300x420?text=Akhlak',
            'flip_url' => 'https://online.fliphtml5.com/pccfk/kbsj/'
        ],
           4 => ['id'=>4, 'judul'=>'Nashoihul Ibad', 'cover'=>'https://via.placeholder.com/300x420?text=Kitab+4', 'flip_url'=>'https://online.fliphtml5.com/MTSSALAFIYAHAL-MUTTAQIYNW/orth/'],
    5 => ['id'=>5, 'judul'=>'Kitab 5', 'cover'=>'https://via.placeholder.com/300x420?text=Kitab+5', 'flip_url'=>'https://online.fliphtml5.com/xxxx/0005/'],
    6 => ['id'=>6, 'judul'=>'Kitab 6', 'cover'=>'https://via.placeholder.com/300x420?text=Kitab+6', 'flip_url'=>'https://online.fliphtml5.com/xxxx/0006/'],
    7 => ['id'=>7, 'judul'=>'Kitab 7', 'cover'=>'https://via.placeholder.com/300x420?text=Kitab+7', 'flip_url'=>'https://online.fliphtml5.com/xxxx/0007/'],
    8 => ['id'=>8, 'judul'=>'Kitab 8', 'cover'=>'https://via.placeholder.com/300x420?text=Kitab+8', 'flip_url'=>'https://online.fliphtml5.com/xxxx/0008/'],
    9 => ['id'=>9, 'judul'=>'Kitab 9', 'cover'=>'https://via.placeholder.com/300x420?text=Kitab+9', 'flip_url'=>'https://online.fliphtml5.com/xxxx/0009/'],
    10 => ['id'=>10, 'judul'=>'Kitab 10', 'cover'=>'https://via.placeholder.com/300x420?text=Kitab+10', 'flip_url'=>'https://online.fliphtml5.com/xxxx/0010/'],
    11 => ['id'=>11, 'judul'=>'Kitab 11', 'cover'=>'https://via.placeholder.com/300x420?text=Kitab+11', 'flip_url'=>'https://online.fliphtml5.com/xxxx/0011/'],
    12 => ['id'=>12, 'judul'=>'Kitab 12', 'cover'=>'https://via.placeholder.com/300x420?text=Kitab+12', 'flip_url'=>'https://online.fliphtml5.com/xxxx/0012/'],
    13 => ['id'=>13, 'judul'=>'Kitab 13', 'cover'=>'https://via.placeholder.com/300x420?text=Kitab+13', 'flip_url'=>'https://online.fliphtml5.com/xxxx/0013/'],
    14 => ['id'=>14, 'judul'=>'Kitab 14', 'cover'=>'https://via.placeholder.com/300x420?text=Kitab+14', 'flip_url'=>'https://online.fliphtml5.com/xxxx/0014/'],
    15 => ['id'=>15, 'judul'=>'Kitab 15', 'cover'=>'https://via.placeholder.com/300x420?text=Kitab+15', 'flip_url'=>'https://online.fliphtml5.com/xxxx/0015/'],
    16 => ['id'=>16, 'judul'=>'Kitab 16', 'cover'=>'https://via.placeholder.com/300x420?text=Kitab+16', 'flip_url'=>'https://online.fliphtml5.com/xxxx/0016/'],
    17 => ['id'=>17, 'judul'=>'Kitab 17', 'cover'=>'https://via.placeholder.com/300x420?text=Kitab+17', 'flip_url'=>'https://online.fliphtml5.com/xxxx/0017/'],
    18 => ['id'=>18, 'judul'=>'Kitab 18', 'cover'=>'https://via.placeholder.com/300x420?text=Kitab+18', 'flip_url'=>'https://online.fliphtml5.com/xxxx/0018/'],
    19 => ['id'=>19, 'judul'=>'Kitab 19', 'cover'=>'https://via.placeholder.com/300x420?text=Kitab+19', 'flip_url'=>'https://online.fliphtml5.com/xxxx/0019/'],
    20 => ['id'=>20, 'judul'=>'Kitab 20', 'cover'=>'https://via.placeholder.com/300x420?text=Kitab+20', 'flip_url'=>'https://online.fliphtml5.com/xxxx/0020/'],
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
