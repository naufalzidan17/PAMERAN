<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
class KitabController extends Controller
{
    private $kitabs = [
        1 => [
            'id' => 1,
            'judul' => 'Kitab Fiqih Dasar',
            'flip_url' => 'https://online.fliphtml5.com/agqrv/xibv/'
        ],
        2 => [
            'id' => 2,
            'judul' => 'Kitab Tajwid',
            'cover' => 'assets/img/kitab/safinatun-najah.jpg',
            'flip_url' => 'https://online.fliphtml5.com/haapc/llfn/'
        ],
        3 => [
            'id' => 3,
            'judul' => 'Kitab Akhlak',
            'flip_url' => 'https://online.fliphtml5.com/pccfk/kbsj/'
        ],
    4 => [
        'id'=>4,
         'judul'=>'Kitab 4',
          'cover'=>'https://via.placeholder.com/300x420?text=Kitab+4',
           'flip_url'=>'https://online.fliphtml5.com/MTSSALAFIYAHAL-MUTTAQIYNW/orth/'],
           
    5 => ['id'=>5, 'judul'=>'Kitab 5', 'cover'=>'https://via.placeholder.com/300x420?text=Kitab+5', 'flip_url'=>'https://fliphtml5.com/xlqoq/zjna/Terjemah-matan-tuhfatul-athfal-wal-ghilman/'],
    6 => ['id'=>6, 'judul'=>'Kitab 6', 'cover'=>'https://via.placeholder.com/300x420?text=Kitab+6', 'flip_url'=>'https://online.fliphtml5.com/urqx/akze/'],
    7 => ['id'=>7, 'judul'=>'Kitab 7', 'cover'=>'https://via.placeholder.com/300x420?text=Kitab+7', 'flip_url'=>'https://online.fliphtml5.com/hytr/gkfl/'],
    8 => ['id'=>8, 'judul'=>'Kitab 8', 'cover'=>'https://via.placeholder.com/300x420?text=Kitab+8', 'flip_url'=>'https://online.fliphtml5.com/rqyix/mesy/'],
    9 => ['id'=>9, 'judul'=>'Kitab 9', 'cover'=>'https://via.placeholder.com/300x420?text=Kitab+9', 'flip_url'=>'https://online.fliphtml5.com/pccfk/aykp/'],
    10 => ['id'=>10, 'judul'=>'Kitab 10', 'cover'=>'https://via.placeholder.com/300x420?text=Kitab+10', 'flip_url'=>'https://fliphtml5.com/bjqgl/ebml/Kitab_Akhlak_Lil_Banin/5/'],
    11 => ['id'=>11, 'judul'=>'Kitab 11', 'cover'=>'https://via.placeholder.com/300x420?text=Kitab+11', 'flip_url'=>'https://online.fliphtml5.com/yngyi/wiqq/'],
    12 => ['id'=>12, 'judul'=>'Kitab 12', 'cover'=>'https://via.placeholder.com/300x420?text=Kitab+12', 'flip_url'=>'https://fliphtml5.com/jcfb/mkia/Sirah_Nabawiyah/'],
    13 => ['id'=>13, 'judul'=>'Kitab 13', 'cover'=>'https://via.placeholder.com/300x420?text=Kitab+13', 'flip_url'=>'https://online.fliphtml5.com/xxxx/0013/'],
    14 => ['id'=>14, 'judul'=>'Kitab 14', 'cover'=>'https://via.placeholder.com/300x420?text=Kitab+14', 'flip_url'=>'https://online.fliphtml5.com/xxxx/0014/'],
    15 => ['id'=>15, 'judul'=>'Kitab 15', 'cover'=>'https://via.placeholder.com/300x420?text=Kitab+15', 'flip_url'=>'https://online.fliphtml5.com/xxxx/0015/'],
    16 => ['id'=>16, 'judul'=>'Kitab 16', 'cover'=>'https://via.placeholder.com/300x420?text=Kitab+16', 'flip_url'=>'https://online.fliphtml5.com/xxxx/0016/'],
    17 => ['id'=>17, 'judul'=>'Kitab 17', 'cover'=>'https://via.placeholder.com/300x420?text=Kitab+17', 'flip_url'=>'https://online.fliphtml5.com/xxxx/0017/'],
    18 => ['id'=>18, 'judul'=>'Kitab 18', 'cover'=>'https://via.placeholder.com/300x420?text=Kitab+18', 'flip_url'=>'https://online.fliphtml5.com/xxxx/0018/'],
    19 => ['id'=>19, 'judul'=>'Kitab 19', 'cover'=>'https://via.placeholder.com/300x420?text=Kitab+19', 'flip_url'=>'https://online.fliphtml5.com/xxxx/0019/'],
    20 => ['id'=>20, 'judul'=>'Kitab 20', 'cover'=>'https://via.placeholder.com/300x420?text=Kitab+20', 'flip_url'=>'https://online.fliphtml5.com/xxxx/0020/'],
    ];

    public function index()
    {
        return view('kitab.index', [
            'kitabs' => $this->kitabs
        ]);
    }
    public function search(Request $request)
{
    $q = strtolower($request->q);

    $filtered = array_filter($this->kitabs, function ($kitab) use ($q) {
        return str_contains(strtolower($kitab['judul']), $q);
    });

    return view('kitab.index', [
        'kitabs' => $filtered,
        'q' => $request->q
    ]);
}


    public function show($id)
    {
        abort_unless(isset($this->kitabs[$id]), 404);

        return view('kitab.show', [
            'kitab' => $this->kitabs[$id]
        ]);
    }
}
