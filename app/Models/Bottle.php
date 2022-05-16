<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bottle extends Model
{
    use HasFactory;

    public function culture()
    {
        return $this->belongsTo(culture::class,'culture_id');
    }
}
