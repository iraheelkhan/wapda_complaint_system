<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Complaint;
use App\City;
use App\Province;
use Session;
class CityController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    
    public function list(){
    	$data = City::orderBy("id", 'desc')->get();
    	return view('city.city_list')->with('data', $data);
    }

    public function add(){
    	$data['city'] = City::all();
        $data['province'] = Province::all();
    	return view('city.city_add')->with('data', $data);
    }

    public function store_city(Request $request){
    	$complaint = new City;

        $validatedData = $request->validate([
        'city_name' => 'bail|required|unique:cities|max:20',
        'city_description' => 'required|max:120',
        'city_code' => 'required|unique:cities',
        'fk_province_id' => 'required',
        ]);
        $complaint->city_name = $request->city_name;
        $complaint->city_description = $request->city_description;
        $complaint->city_code = $request->city_code;
        $complaint->province_id = $request->fk_province_id;
        $complaint->save();
        Session::flash('message', 'Data Successfull Inserted'); 
        return redirect('cities');
    }
    public function delete($id){
        $data = City::findorFail($id);
        $data->delete();
        Session::flash('message', 'Data Successfull Deleted'); 
        return redirect('cities');
    }



}
