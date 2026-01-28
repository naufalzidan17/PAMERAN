<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Santri;

class SantriController extends Controller
{
    public function create()
    {
        return view('santri.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama'         => 'required|string|max:100',
            'nis'          => 'nullable|string|max:50',
            'kelas'        => 'required|string|max:50',
            'kobong'       => 'required|string|max:50',
            'jenis_santri' => 'required|string',
            'asal_daerah'  => 'nullable|string|max:100',
        ]);

        $santri = Santri::create($validated);

        // SIMPAN KE SESSION (PENTING)
        session(['santri_id' => $santri->id]);

        return redirect()->route('quiz.index');
    }
}
