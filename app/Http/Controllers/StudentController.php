<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /** php artisan make:controller StudentController */
    public function store(Request $request)
    {
//        $object = new Student();
//        $object->student_name = $request['student_name'];
//        $object->student_marks = $request['student_marks'];
//        $object->save();
        Student::create([
            'student_name' => $request['student_name'],
            'student_marks' => $request['student_marks']
        ]);
        return "Data inserted successfully";
    }
}
