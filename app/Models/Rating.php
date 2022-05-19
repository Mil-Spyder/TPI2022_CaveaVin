<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
    use HasFactory;
    protected $fillable=['label'];

    function User()
    {
        return $this->belongsTo(User::class, 'grape_variety_id');
    }
}
