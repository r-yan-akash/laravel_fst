<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Teacher;
use Illuminate\Http\Request;
use Session;

class TeacherController extends Controller
{

    public function index()
    {
        $data=[
            'teachers'=>Teacher::all()
        ];
        return view('teacher.index')->with($data);
    }

    public function create()
    {

        return view('teacher.add');
    }

    public function store(Request $request)
    {
        $teachers=$this->validation();
        if (Teacher::create($teachers)){
            Session::flash('success','Teacher created successfully');
            return redirect()->route('teacher.index');
        }else{
            Session::flash('error','Something going to be wrong');
            return redirect()->route('teacher.create');
        }
    }

    public function show($id)
    {
        //
    }

    public function edit(teacher $teacher)
    {
        $data=[
            'teacher'=>$teacher
        ];
        return view('teacher.edit')->with($data);
    }

    public function update(Request $request, teacher $teacher)
    {
        $teacher->name=$request->name;
        $teacher->teacher_id=$request->teacher_id;
        $teacher->age=$request->age;

        if ($teacher->save()){
            Session::flash('success','Teacher update successfully');
            return redirect()->route('teacher.index');
        }
    }

    public function destroy(teacher $teacher)
    {
        if ($teacher->delete()){
            Session::flash('success','Delete Successfully');
            return back();
        }else{
            Session::flash('error','Something is error..!!');
            return back();
        }
    }
    public function validation(){
        return request()->validate([
            'name'=>'required',
            'teacher_id'=>'required|unique:teachers|max:3',
            'age'=>'required|min:1|max:3'
        ]);
    }
}
