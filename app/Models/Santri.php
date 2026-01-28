<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Santri extends Model
{
    protected $fillable = [
        'nama',
        'nis',
        'kelas',
        'kobong',
        'jenis_santri',
        'asal_daerah'
    ];

    public function quizResults()
    {
        return $this->hasMany(QuizResult::class);
    }
}
