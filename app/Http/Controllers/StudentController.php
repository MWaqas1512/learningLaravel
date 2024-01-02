<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $students = Student::all();                   /** $students = select * from users */
        return view('CRUD/show',compact('students'));    /** View means frontend/GUI */
//    return view('CRUD/show')
//        ->with([
//           'students' => $items                        /** 'variable_name_to_pass_to_view' => $variable_name_with _data */
//        ]);
    }

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
        return back();
    }

    public function edit($id)
    {
//        $item = Student::where('id','=',$id)->first();
//        $items = Student::where('name','=',$name)->get();
        $item = Student::find($id);
        return view('CRUD/update',compact('item','id'));
    }

    public function update(Request $request)
    {
        $item = Student::find($request['item_id']);
        $item->student_name = $request['student_name'];
        $item->student_marks = $request['student_marks'];
        $item->save();
        return redirect('show');
    }

    public function delete($id)
    {
        $item = Student::find($id);
        if (!empty($item))
        {
            $item->delete();
            return redirect('show');
        }
        else
        {
            return "Record not found";
        }
    }

    public function show($id)
    {
        $item = Student::where('id','=',$id)->first();
        return view('CRUD/show_single_record')
            ->with([
                'item' => $item
            ]);
    }
}
