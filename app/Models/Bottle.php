<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bottle extends Model
{
    protected $fillable =['appelation','cuvee_name','region','vintage','capacity','color','unit','consumable_date','peak_date','danger_date','description','culture_id','grape_variety_id'];
    
    function grapeVariety(){
        return $this->belongsTo(GrapeVariety::class,'grape_variety_id');
    }

    use HasFactory;
}
