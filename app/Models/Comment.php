<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Bottle;

class Comment extends Model
{

    protected $fillable = [
        'label',
        'bottle_id',
        'user_id'
    ];

    public function FunctionName()
    {
        return $this->belongsTo(Bottle::class);
    }
    use HasFactory;
}
