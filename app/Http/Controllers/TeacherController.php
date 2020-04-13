<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Teacher;
use Validator;

class TeacherController extends Controller
{
    public function index(){
    	return view('admin.Teacher.TeacherEntry');
    }

    public function Entry(Request $request){
    	$TeacherEntry= new Teacher();

    	$TeacherEntry->teacherName=$request->name;
    	$TeacherEntry->Address=$request->TeacherAddress;
    	$TeacherEntry->TeacherStatus=$request->TeacherStatus;
    	$TeacherEntry->entry();
    	return redirect('/teacher/entry')->with('message','Data Insert Succesfully.');
    }
}
