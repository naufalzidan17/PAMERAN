<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class QuizResult extends Model
{
    protected $fillable = ['santri_id', 'score'];

    public function santri()
    {
        return $this->belongsTo(Santri::class);
    }
}
