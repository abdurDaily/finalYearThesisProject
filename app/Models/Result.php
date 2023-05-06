<?php

namespace App\Models;

use App\Models\Year;
use App\Models\Result;
use App\Models\Subject;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Result extends Model
{
    use HasFactory;
    public function responces(){
        return $this->belongsTo(Subject::class);
    }
}
