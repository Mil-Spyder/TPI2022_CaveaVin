<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bottle extends Model
{
    protected $fillable =['description','vintage','cuvee_name','appelation','capacity','color','consumable_date','peak_date','danger_date','culture_id','grape_variety_id','unit'];
    
    function section(){
        return $this->belongsTo(GrapeVariety::class,'grape_variety_id');
    }

    use HasFactory;
}
