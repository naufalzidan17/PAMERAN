<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\QuizResult;

class QuizController extends Controller
{
    public function index()
    {
        // pastikan santri sudah isi data
        if (!session()->has('santri_id')) {
            return redirect()->route('santri.create');
        }

        return view('quiz.index');
    }

    public function submit(Request $request)
    {
        $request->validate([
            'score' => 'required|integer'
        ]);

        QuizResult::create([
            'santri_id' => session('santri_id'),
            'score'     => $request->score
        ]);

        return response()->json(['success' => true]);
    }

    public function leaderboard()
    {
        $leaders = QuizResult::with('santri')
            ->orderByDesc('score')
            ->limit(10)
            ->get();

        return view('quiz.leaderboard', compact('leaders'));
    }
}
