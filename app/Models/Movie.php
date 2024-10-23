<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    public function movieType()

    {
        return $this->belongsTo(movietype::class);
    }
}
