<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Scores extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = ['subject_id', 'score', 'email'];

    public function subject()
    {
        return $this->belongsTo(Subject::class);
    }

}
