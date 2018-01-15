<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Student;
use Illuminate\Support\Facades\Input;


class createsController extends Controller
{
    // for list
    public function getStudent(){
    	$student = \App\Student::all();
    	return view('home',['student'=>$student]);
    }

    // for add student form show
    public function addStudent(){
    	return view('addStudent');
    }


    public function addStu(Request $request){

    	$student = new \App\Student;
    	$student->name = Input :: get('name');
    	$student->age = Input :: get('age');
    	$student->email = Input :: get('email');
    	$student->address = Input :: get('address');
    	$student->save();
    	return "form submit";

    }

    public function editStu($id){
    	$student = \App\Student::find($id);
    	return view('editStudent',['detail'=>$student]);
    	
    }

    public function stuEdtted( Request $request, $id){
       $data  = array('name'=> Input :: get('name'),
                    'email'=> Input :: get('email'),
                    'age'=> Input :: get('age'),
                    'address'=> Input :: get('address'));
       \App\Student :: where('id',$id)->update($data);
       return redirect('/')->with('info','Student update successfully.');
    }

    public function stuDelete($id){
        \App\Student :: where('id',$id)->delete();
        return redirect('/')->with('info','Student deleted successfully.');
    }


}
