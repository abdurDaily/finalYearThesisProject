<?php

namespace App\Models;

use App\Models\Subject;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class RoutineSemester extends Model
{
    use HasFactory;
    public function RoutineSemesterDetails(){
        return $this->hasMany(RoutineSemesterDetails::class);
    }

    // ** RELATION FOR RESULT SUBJECT
    public function semester_Parent_Subject(){
        return $this->hasMany(SubjectResult::class);
    }

    // ** RELATION FOR YAER
    public function getYear(){
        return $this->hasMany(YearResult::class);
    }

    // ** RELATION FOR RESULT DETAILS
    public function semester_Parent_result(){
        return $this->hasMany(ResultTable::class);
    }

    // ** MANY TO MANY RELATION FOR RESULT
    public function subject(){
        return $this->hasMany(Subject::class);
    }


}
