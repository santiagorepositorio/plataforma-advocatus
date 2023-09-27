<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reaction extends Model
{
    protected $guarded = ['id'];

    use HasFactory;

    const Like = 1;
    const DISLIKE = 2;

    // Relacion uno a muchos Inversa

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    // Relacion polimorfica

    public function reactionable()
    {
        return $this->morphTo();
    }
}
