<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{

    protected $guarded = ['id'];

    use HasFactory;

    // Relacion polimorfica

    public function commentable()
    {
        return $this->morphTo();
    }

    // Relacion uno a muchos Inversa

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    // Relacion uno a muchos polimorfica

    public function comments()
    {
        return $this->morphMany('App\Models\Comment', 'commenteable');
    }

    public function reactions()
    {
        return $this->morphMany('App\Models\Reaction', 'reactionable');
    }
}
