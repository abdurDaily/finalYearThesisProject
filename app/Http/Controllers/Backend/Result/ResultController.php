<?php

namespace App\Http\Controllers\Backend\Result;

use App\Models\Year;
use App\Models\Result;
use App\Models\Subject;
use App\Models\YearResult;
use App\Models\ResultTable;
use Illuminate\Http\Request;
use App\Models\SubjectResult;
use App\Models\RoutineSemester;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\SubjectResult_YearResult;

class ResultController extends Controller
{
    // public function test(){
    //     $all = Result::with('getResponces')->get();
    //     dd($all);
    //     return view('Backend.Result.subjectResult');
    // }


    //SUBJECT
    public function subjectResult(){
        $allSemester = RoutineSemester::all();
        return view('Backend.Result.subjectResult',compact('allSemester'));
    }
    public function subjectResultInsert(Request $request){
        $request->validate([
            'semester' => 'required',
            'subjectName' => 'required',
        ]);

        // * INSERT DATA
        $subjectData = new Subject();
        $subjectData->routine_semester_id  = $request->semester;
        $subjectData->subject = $request->subjectName;
        $subjectData->save();
        return redirect()->route('subject.result.list')->with('success', 'Subject data insertd');
    }


    // ** SUBJECT RESULT LIST
    public function subjectResultList()
    {
        $allSubjectList = Subject::latest()->paginate(10);
        return view('Backend.Result.resultList',compact('allSubjectList'));
    }


    // ** SUBJECT EDIT
    public function subjectResultEdit($id){
        $allSubject = subject::find($id);
        $allSemester = RoutineSemester::all();
        return view('Backend.Result.editSubject',compact('allSubject','allSemester'));
    }

    // ** UPDATE RESULT DATA
    public function subjectResultUpdate(Request $request, $id){
        $request->validate([
            'semester' => 'required',
            'subjectName' => 'required',
        ]);

        $updateData = Subject::find($id);
        $updateData->routine_semester_id  = $request->semester;
        $updateData->subject = $request->subjectName;
        $updateData->save();
        return redirect()->route('subject.result.list')->with('success', 'Subject data insertd');

    }


    // ** DELEE SUBJECT
    public function deleteSubject($id){
        DB::table('subjects')->where('id', $id)->delete();
        return redirect()->route('subject.result.list')->with('delete', 'Subject data deleted !');
    }



    /**
     *
     *
     //*****************************__YEAR__*******************
     *
     *
     */



    public function subjectYear(){
        return view('Backend.Result.year');
    }

    // ** YEAR INSERT
    public function subjectYearInsert(Request $request){
        $request->validate([
            'subjectYear' => 'required|unique:year_results,passing_year',
        ]);

        $yearInsert = new Year();
        $yearInsert->year_session = $request->subjectYear;
        $yearInsert->save();
        return redirect()->route('subject.year.list')->with('success', 'new year inserted!');
    }


    // ** SUBJECT YEAR LIST
    public function subjectYearList(){
        $allYear = Year::latest()->paginate(10);
        return view('Backend.Result.yearList',compact('allYear'));
    }
    // **YEAR EDIT
    public function subjectYearListEdit($id){
        $findYear = Year::find($id);
        return view('Backend.Result.yearEdit',compact('findYear'));
    }
    // ** YEAR UPDATE
    public function yearUpdate(Request $request, $id, YearResult $year){
        $request->validate([

            'subjectYear' => 'required|unique:years,year_session,except'.$year->$id,

        ]);

        $updateYear = Year::find($id);
        $updateYear->year_session  = $request->subjectYear;
        $updateYear->save();
        return redirect()->route('subject.year.list')->with('success', 'new year updated !');
    }
    // ** DELEE SUBJECT
    public function deleteYear($id){
        DB::table('years')->where('id', $id)->delete();
        return redirect()->route('subject.year.list')->with('delete', 'year data deleted !');
    }

    /**
     *
     *
     //*****************************__DETAILS__*******************
     *
     *
     */
    public function resultDetails(){
        $allsubject = Subject::all();
        //dd($subjects);
        $allSemester = RoutineSemester::all();
        return view('Backend.Result.details',compact('allSemester','allsubject'));
    }

    public function resultDetailsUpload(Request $request){
 
        $request->validate([
            'year' => 'required',
            'resultDetails' => 'required',
            'semester' => 'required',
            'subject' => 'required',
        ]);


        $resultTable = new Result();
        $resultTable->year_session = $request->year;
        $resultTable->result = $request->resultDetails;
        $resultTable->routine_semester_id  = $request->semester;
        $resultTable->subject_id = $request->subject;
        $resultTable->save();
        return redirect()->route('result.details')->with('success', 'your result uploaded .');
    }
}
