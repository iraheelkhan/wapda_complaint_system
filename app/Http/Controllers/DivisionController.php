<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Complaint;
use App\City;
use App\Division;
use App\Province;
use Session;
use Auth;
use App\Http\Controllers\Controller;

class DivisionController extends Controller
{

    public function __construct(){
        $this->middleware('auth');
        //$this->authorize('viewD', Division::class);

    }
   
    public function list(){
        //$this->authorize('viewD', Division::class);
    	$data = Division::orderBy("id", 'desc')->get();
    	return view('division.division_list')->with('data', $data);
    }

    public function add(){
    	$data['division'] = Division::all();
        $data['province'] = Province::all();
    	return view('division.division_add')->with('data', $data);
    }

    public function store_division(Request $request){
    	$division = new Division;
        $validatedData = $request->validate([
        'division_name' => 'required|max:150|min:5|',
        'division_description' => 'required|max:220|min:10',
        'division_code' => 'required'
        ]);
        $division->division_name = $request->division_name;
        $division->division_description = $request->division_description;
        $division->division_code = $request->division_code;
        $division->save();
        Session::flash('message', 'Data Successfull Inserted'); 
        return redirect('divisions');
    }

     public function edit($id){
        $data = Division::findorFail($id);
        $data['province']= Province::all();
        return view('division.division_edit')->with('data', $data);
    }

    public function update(Request $request){
        $id = $request->division_id;
        $data= Division::findorFail($id);
        $validated = $request->validate([
            'division_name'=>'required|min:8|max:50',
            'division_code'=>'required|min:3',
            'division_id'=> 'required']);
        $data->division_name = $request->division_name;
        $data->division_code = $request->division_code;
        $data->save();
        Session::flash('message', 'Data Successfull Updated! <script> swal("Division Edited", "Your Changes is Successfully Done", "success");</script>'); 
        return redirect('divisions');
    }

    public function delete($id){
        $data = Division::findorFail($id);
        $data->delete();
        Session::flash('message', 'Data Successfull Deleted'); 
        return redirect('divisions');
    }

    
}
