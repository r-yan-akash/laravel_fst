<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Department;
use App\Models\Myinfo;
use Illuminate\Support\Facades\Auth;
use Session;
use Illuminate\Http\Request;

class MyinfoController extends Controller
{
    public function index()
    {
        if(!Auth::check()){
            return redirect('/');
        }

        $data=[
//          'myinfos'=>Myinfo::all()
//                'user_data'=>Auth::user(),
                'myinfos'=>Myinfo::with('department')->get()
            ];
//        dd($data['myinfos']);
//            return $data['user_data'];
            return view('myInfo.index')->with($data);
    }

    public function create()
    {
        $data=[
            'departments'=>Department::orderBy('department_name','asc')->get()
        ];
        return view('myInfo.create')->with($data);
    }

    public function store(Request $request)
    {
        $infoData=$this->validation();
        if (Myinfo::create($infoData)){
            Session::flash('success','Info added successfullly');
            return redirect()->route('myinfo.index');
        }else{
            Session::flash('error','Something went wrong---!');
            return redirect()->route('myinfo.create');
        }
    }


    public function show($id)
    {
        //
    }

    public function edit(myinfo $myinfo)
    {
//        return $myinfo;
        $data=[
            'myinfo'=>$myinfo,
            'departments'=>Department::orderBy('department_name','asc')->get()
        ];
        return view('myinfo.edit')->with($data);
    }


    public function update(Request $request, myinfo $myinfo)
    {
        $myinfo->name=$request->name;
        $myinfo->roll=$request->roll;
        $myinfo->department_id=$request->department_id;
        $myinfo->status=$request->status;
        if($myinfo->save()){
            Session::flash('success','Update successfully');
            return redirect()->route('myinfo.index');
        }else{
            Session::flash('error','Something is wrong');
            return redirect()->route('myinfo.index');
        }
    }

    public function destroy(myinfo $myinfo)
    {
        if ($myinfo->delete()){
            Session::flash('success','Delete Successfully');
            return back();
        }else{
            Session::flash('error','Something is error..!!');
            return back();
        }
    }

    private function validation(){
        return request()->validate([
            'name'=>'required',
            'roll'=>'required|unique:myinfos|min:3',
            'department_id'=>'required'
        ]);
    }

}


