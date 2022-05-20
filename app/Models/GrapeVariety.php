<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Bottle;

class GrapeVariety extends Model
{
    function bottle()
    {
        return $this->belongsTo(Bottle::class);
    }
    use HasFactory;
}
