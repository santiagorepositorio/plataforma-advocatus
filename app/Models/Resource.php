<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resource extends Model
{
    protected $guarded = ['id'];

    use HasFactory;

    // Relacion polimorfica

    public function resourceable()
    {
        return $this->morphTo('');
    }
}
