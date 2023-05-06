<?php

namespace App\Http\Controllers\Frontend\Result;

use App\Models\Year;
use App\Models\Result;
use App\Models\Subject;
use App\Models\YearResult;
use App\Models\ResultTable;
use Illuminate\Http\Request;
use App\Models\SubjectResult;
use App\Models\RoutineSemester;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Http\Controllers\Controller;

class FrontendResultController extends Controller
{
    // ** SEMESTER
    public function semesterIndex(){
        $allSemester = RoutineSemester::all();
        return view('frontend.result.semester',compact('allSemester'));
    }

    /**
     *
     *  ......
     *
     */
    public function allSubject($id){
        $subject = RoutineSemester::with('subject')->find($id);
        return view('frontend.result.subjectList',compact('subject'));
    }

/**
     *
     *  ......
     *
     */

    public function showResult($id){
        $resultList = Subject::with('getResultDetails')->find($id);
        return view('frontend.result.resultDetails',compact('resultList'));
    }

    /**
     *
     *  RESULT PDF......
     *
     */

    public function pdfView($id){
        $resultPDF = Result::with('responces')->find($id);
        $pdf = Pdf::loadView('frontend.result.showPdf', compact('resultPDF'))->setPaper('a4','portrait');
        return $pdf->stream('result.pdf');
    }

}
