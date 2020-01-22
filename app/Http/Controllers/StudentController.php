<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Session;

class StudentController extends Controller
{
    // display all students
    public function index()
    {
        $data = [
            'students' => Student::all()
        ];
        return view('student.index')->with($data);
    }

    // display all students
    public function create()
    {
        return view('student.add');
    }

    public function store(Request $request)
    {
        $student = new Student;
        $student->name = $request->name;
        $student->student_id = $request->student_id;
        $student->age = $request->age;
        $student->mobile = $request->mobile;
        if ($student->save())
        {
            Session::flash('success', 'Student Added Succesfully');
            return redirect()->route('student.index');
        }else{
            Session::flash('error', 'Student Add Failed');
            return redirect()->back();
        }
    }


    // display all students
    public function edit(student $student)
    {
        $data=[
            'student'=>$student
        ];
        return view('student.edit')->with($data);
    }

    public function update(Request $request, student $student)
    {
        $student->name=$request->name;
        $student->student_id=$request->student_id;
        $student->mobile=$request->mobile;
        $student->age=$request->age;
        $student->status=$request->status;
        if ($student->save()){
            Session::flash('success','Update successfully');
            return redirect()->route('student.index');
        }else{
            Session::flash('error','Update successfully');
            return redirect()->route('student.index');
        }
    }


    public function show($id)
    {

    }
    public function destroy($id)
    {
        $del=Student::find($id);

        if ($del->delete()){
            Session::flash('success','Delete successfully...');
            return back();
        }else{
            Session::flash('error','failed------!!');
            return back();
        }

    }

}
