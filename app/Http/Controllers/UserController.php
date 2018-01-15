<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use DB;
use Auth;
use App\Quotation;
use app\User;
class UserController extends Controller
{
    //
public function registractioForm(){

	return view('auth.register');
}
public function registraction(Request $request){

	$this->valiRegistred($request);
	$user = new \App\User;
	$user->name = Input ::get('name');
	$user->email = Input ::get('email');
	$user->password = bcrypt(Input ::get('password'));
	$user->role = Input ::get('role');
	$user->save();
	return redirect('/loginForm')->with('status','You are registred');

}

public function valiRegistred($request){
	return $this->validate($request, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
            'role' => 'required',
        ]);
}

public function loginForm(){
	return view('auth.login');
}

public function login(Request $request){
	 $this->valiLogin($request);
	 $data = array('email'=> Input ::get('email'),'password'=> Input ::get('password'));

	if(Auth::attempt($data)){
		 $user = DB::table('users')->where('email', Input ::get('email'))->first();
		if($user->role == 1){
			return redirect('/home');
		}else{
			return "Hello normal user Your name is {{ $user->role }}";
		}
		
	}else{
			return redirect('/loginForm')->with('errorData','Email or password are wrong.');

		}

	}

	public function logout(){
		auth()->logout(); 
		return redirect('/loginForm');
	}
	
	public function categoryAdd(){

		return view('addCategory');
	}

	public function categoryAdded(Request $request){
		if($request->hasFile('fileName')){
			$image = $request->file('fileName');
			$input['imagename'] = time().'.'.$image->getClientOriginalExtension();
			$destinationPath = public_path('/images');
			$image->move($destinationPath, $input['imagename']);
			return back()->with('success','Image Upload successful');
		}

	}

public function valiLogin($request){

	return $this->validate($request,
		['email'=>'required|string|email|max:255|',
		  'password'=>'required|string|min:6|',

	]);
}


public function teacherAdd(){
	return view('add_teacher');

}

public function teacherAdded(Request $request){
	//return Input::all();
	$user = new \App\User;
	$this->teacherValidate($request);
	if($request->hasFile('fileName')){
		$image = $request->file('fileName');
		$input['imagename'] = time().'.'.$image->getClientOriginalExtension();
		$destinationPath = public_path('/images');
		$image->move($destinationPath, $input['imagename']);
			//return back()->with('success','Image Upload successful');
	}
	$user->name = Input :: get('name');
	$user->email = Input :: get('email');
	$user->password = bcrypt(Input :: get('password'));
	$user->image = $input['imagename'];
	$use->role = Input :: get('role');
return $user->save();

}


public function teacherValidate($request){
	return $this->validate($request,
		['email'=>'required|string|email|max:255|',
		  'password'=>'required|string|min:6|',
		  'name'=>'required|string',
		  'fileName'=>'required|image',
	]);


}

}
