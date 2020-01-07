<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;

class MainController extends Controller
{
    public function first_fx() {
    	dd('Hai awak');
    }


    public function store_student(Request $request) {
    	$name = $request->name;
		$nric_number = $request->nric_number;
    	$course_code = $request->course_code;
    	$current_semester = intval($request->current_semester);
    	$studentid = $request->studentid;

    	$student = new Student;
    	$student->name = $name;
    	$student->nric_number = $nric_number;
    	$student->course_code = $course_code;
    	$student->current_semester = $current_semester;
    	$student->studentid = $studentid;
    	$student->save();
    }



    public function update_student0(Request $request) {
    	$id = $request->id;
    	$new_course_code = $request->new_course_code;

    	$student = Student::where('id', $id);
		$student->course_code = $new_course_code;
		$student->save();
    }



    public function update_student(Request $request) {
    	$id = $request->id;
    	$new_course_code = $request->new_course_code;
    	$new_current_semester = intval($request->new_current_semester);

    	$stuent = Student::where('id', $id)
          ->update([
          	'course_code' => $new_course_code,
          	'current_semester' => $new_current_semester,
          ]);
    }


    public function delete_student(Request $request) {
    	$id = $request->id;
    	$student = Student::where('id', $id)->delete();

    	$student = Student::destroy(1);

		$student = Student::destroy(1, 2, 3);

		$student = Student::destroy([1, 2, 3]);

		$student = Student::destroy(collect([1, 2, 3]));
    }

    public function show($id){
        return view('student.profile', ['student' => Student::findOrFail($id)]);
    }
}






