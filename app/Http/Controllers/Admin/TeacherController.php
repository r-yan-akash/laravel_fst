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
        //
    }

    public function store(Request $request)
    {
        //
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

    public function update(Request $request, $id)
    {
        //
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
}
