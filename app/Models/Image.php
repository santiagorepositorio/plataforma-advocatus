<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{

    protected $guarded = ['id'];
    
    use HasFactory;

    // Relacion polimorfica

    public function imageable()
    {
        return $this->morphTo();
    }
}
