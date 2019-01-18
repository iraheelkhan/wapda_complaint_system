<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Complaint;
use App\City;
use App\Division;
use App\Subdivision;
use Session;
class SubDivisionController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    
    public function list(){
    	$data = SubDivision::orderBy("id", 'desc')->get();
    	return view('subdivision.subdivision_list')->with('data', $data);
    }

    public function add(){
        $data['subdivision'] = SubDivision::all();
    	$data['division'] = Division::all();
    	return view('subdivision.subdivision_add')->with('data', $data);
    }

    public function edit($id){
        $data = SubDivision::findorFail($id);
        $data['division']= Division::all();
        return view('subdivision.subdivision_edit')->with('data', $data);
    }

    public function update(Request $request){
        $id = $request->id;
        $data= SubDivision::findorFail($id);
        $validated = $request->validate([
            'subdivision_name'=>'required|min:8|max:50',
            'subdivision_code'=>'required|min:3',
            'fk_division_id'=> 'required']);
        $data->subdivision_name = $request->subdivision_name;
        $data->subdivision_code = $request->subdivision_code;
        $data->division_id = $request->fk_division_id;
        $data->save();
        Session::flash('message', 'Data Successfull Updated'); 
        return redirect('subdivisions');
    }

    public function store_subdivision(Request $request){
    	$division = new SubDivision;
        //SubDivision::create('')
        $validatedData = $request->validate([
        'subdivision_name' => 'required|unique:subdivisions|max:50|min:10',
        'fk_division_id' => 'required',
        'subdivision_code' => 'required'
        ]);
        $division->subdivision_name = $request->subdivision_name;
        $division->division_id = $request->fk_division_id;
        $division->subdivision_code = $request->subdivision_code;
        $division->save();
        Session::flash('message', 'Data Successfull Inserted'); 
        return redirect('subdivisions');
    }
    public function delete($id){
        $data = SubDivision::findorFail($id);
        $data->delete();
        Session::flash('message', 'Data Successfull Deleted'); 
        return redirect('subdivisions');
    }

    public function destroy(Request $request){
        $id = $request->id;
        $data = SubDivision::findorFail($id);
        $data->delete();
        Session::flash('message', 'Data Successfull Deleted'); 
        return redirect('subdivisions');
    }

    public function datatable(){
        $data = SubDivision::orderBy("id", 'desc')->get();
        return view('subdivision.datatable_subdivision')->with('data', $data);
    }



}
