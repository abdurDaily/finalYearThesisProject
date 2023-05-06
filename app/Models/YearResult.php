<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class YearResult extends Model
{
    use HasFactory;

    public function getResults(){
        return $this->hasMany(ResultTable::class);
    }


    public function getSemester(){
        return $this->belongsTo(RoutineSemester::class);
    }

}
