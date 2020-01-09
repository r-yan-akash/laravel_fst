<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Myinfo;
use Session;
use Illuminate\Http\Request;

class MyinfoController extends Controller
{
    public function index()
    {
        $data=[
          'myinfos'=>Myinfo::all()
        ];
        return view('myInfo.index')->with($data);
    }

    public function create()
    {
        return view('myInfo.create');
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

    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }

    private function validation(){
        return request()->validate([
            'name'=>'required',
            'roll'=>'required|unique:myinfos|min:3'
        ]);
    }

}


