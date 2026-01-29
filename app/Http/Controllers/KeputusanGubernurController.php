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
            'flip_url' => 'https://online.fliphtml5.com/haapc/llfn/'
        ],
        3 => [
            'id' => 3,
            'judul' => 'Kitab Akhlak',
            'flip_url' => 'https://online.fliphtml5.com/pccfk/kbsj/'
        ],
    ];

    public function index()
    {
        return view('kitab.index', [
            'kitabs' => $this->kitabs
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
