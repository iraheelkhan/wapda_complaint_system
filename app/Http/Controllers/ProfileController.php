<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Session;
use Auth;
class ProfileController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function show(){

    	return view("profile.show_profile");
    }

    public function manage_users_show(){
    	$users = User::all();
    	return view('users.userlist')->with('users', $users);
    }

    public function add_user(){
        return view('users.user_add');
    }
    protected function store_user(Request $request)
    {
       $user = new User;
        $validatedData = $request->validate([
        'name' => 'required|regex:/^[\pL\s\-]+$/u|max:50|min:5|',
        'email' => 'required|max:50',
        'role' => 'required',
        'password' => 'required|max:20|min:6',
        'username' => 'required|alpha|unique:users|max:20|min:6'
        ]);
        $user->username = $request->username;
        $user->name     = $request->name;
        $user->email    = $request->email;
        $user->role    = $request->role;
        $user->password = bcrypt($request['password']);
        $user->save();
        Session::flash('message', 'User Successfull Added'); 
        return redirect('users');
    }

    public function edit($id){
        $data = User::findorFail($id);
        return view('users.users_edit')->with('data', $data);
    }

    public function update(Request $request){
        $id = $request->user_id;
        $data= User::findorFail($id);
        $validated = $request->validate([
            'user_email'=>'required|max:50',
            'full_name'=>'required|min:3']
        );
        $data->email = $request->user_email;
        $data->name = $request->full_name;
        $data->save();
        Session::flash('message', 'User Data Successfull Updated! <script> swal("User Updated", "Your Changes are sSuccessfully Done", "success");</script>'); 
        return redirect('users');
    }

     public function delete($id){

        if(Auth::user()->id == $id){
            Session::flash('stop', 'What are you doing? STOP'); 
            return redirect('users');
        }
        $data = User::findorFail($id);

        $data->delete();
        Session::flash('message', 'User Data Successfull Deleted'); 
        return redirect('users');
    }

}
