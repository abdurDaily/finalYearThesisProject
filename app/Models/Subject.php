<?php

namespace App\Models;

use App\Models\Year;
use App\Models\Result;
use App\Models\RoutineSemester;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Subject extends Model
{
    use HasFactory;

    public function getResultDetails(){
        return $this->hasMany(Result::class);
    }

    // *** SEMESTER CALL
    public function allSemesters(){
        return $this->belongsTo(RoutineSemester::class);
    }
}
