<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;
class Login extends Controller
{
    //


    public function show(){

    	return view('enter.login');
    }

    public function login(Request $request){

        $credentials = $request->only('email', 'password');

	        if (Auth::attempt($credentials)) {
	            // Authentication passed...
	            return redirect()->intended('complaint');
	        }
	        else{
	        	Session::flash('message', 'Data Successfull Deleted'); 
	        	return redirect('log');
	        }
    
		}

		public function logout(){
			Auth::logout();
			return redirect('/log');
		}
    
}
