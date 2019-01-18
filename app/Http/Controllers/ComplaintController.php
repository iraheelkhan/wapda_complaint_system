<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Complaint;
use App\Http\Resources\Complaint as ComplaintResource;
use App\Division;
use App\SubDivision;
use Session;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Gate;
use Auth;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use Spatie\Activitylog\Models\Activity;
use Carbon\Carbon;

class ComplaintController extends Controller
{
    public function __construct(){
        $this->middleware('auth')->except('index');
        //$this->middleware('auth')->except('list');
    }

    //api code goes here 
    public function index(){
        $complaint = Complaint::all();

        return ComplaintResource::collection($complaint);
    }
    
    public function dashboard()
    {   $solved = Complaint::where('status', 'solve')->get()->count();
        $opened = Complaint::where('status', 'open')->get()->count();
        $total = Complaint::all()->count();
        $today = Complaint::where('created_at', Carbon::today())->count();
        return view('dashboard.dashboard')->with('solve', $solved)->with('open', $opened)->with('total', $total)->with('today', $today);
    }
    public function list(){
       // if(Gate::allows('u'))

    	$data = Complaint::orderBy("id", 'desc')->get();
    	return view('complaints.complaint_list')->with('data', $data);
    }

    public function list_open(){
        $data = Complaint::where('status','open')->orderBy("id", 'desc')->get();
        $user = Auth::user()->role;
        if($user === 'clerk')
            return view('complaints.complaint_only_open')->with('data', $data);
        else if($user === 'd_officer')
            return view('complaints.complaint_only_open_division_officer')->with('data', $data);
    }

    public function list_open_division(){
        $data = Complaint::where('status','open')->orderBy("id", 'desc')->get();
        return view('complaints.complaint_only_open_division_officer')->with('data', $data);
    }

    public function add(){
    	$data['complaints'] = Complaint::all();
        $data['division'] = Division::all();
        $data['subdivision'] = SubDivision::all();
        $data['str'] = Str::random();
    	return view('complaints.complaint_add')->with('data', $data);
    }

    public function store_complaint(Request $request){
    	$complaint = new Complaint;
        $validatedData = $request->validate([
        'complaint_title' => 'required|max:50|min:15',
        'complaint_description' => 'required|max:320|min:50',
        'c_email' => 'required',
        'c_phone' => 'required',
        'c_address' => 'required',
        'c_division' => 'required',
        'c_customer_id' => 'required',
        'c_tracking_no' => 'required|min:8|unique:complaints',
        'c_subdivision' => 'required'
        ]);

        $complaint->c_title = $request->complaint_title;
        $complaint->c_description = $request->complaint_description;
        $complaint->c_email = $request->c_email;
        $complaint->c_address = $request->c_address;
        $complaint->c_phone = $request->c_phone;
        $complaint->user_id = $request->c_customer_id;
        $complaint->status = "open";
        $complaint->division_id = $request->c_division;
        $complaint->subdivision_id = $request->c_subdivision;
        $complaint->c_reference_no = 2535;
        $complaint->c_tracking_no = strtolower($request->c_tracking_no);
        $complaint->save();
        Session::flash('message', 'Data Successfull Inserted!<script>swal("Complaint Registered", "Thank You for making Wapda a better place.", "success");</script>'); 
        return redirect('complaint');
    }

    public function view($id){
        $this->middleware(Auth::user());
        $data = Complaint::findorFail($id);
        return view('complaints.complaint_single')->with('data', $data);
       
    }
   /* public function view($id){
        $user = Auth::user();
        $complaint = Complaint::find($id);

        //$this->authorize('view', $complaint);
        if ($user->can('view', $complaint)) {
            $data = Complaint::findorFail($id);
            return view('complaints.complaint_single')->with('data', $data);
        }else{
            return view('errors.404_error');    
        }
    }*/

    public function destroy(Request $request){
        $id = $request->id;
        $data = Complaint::findorFail($id);
        $data->delete();
        Session::flash('message', 'Data Successfull Deleted'); 
        return redirect('complaint');
    }

    public function updateStatus(Request $request){
        $id = $request->c_id;
        $user = Auth::user();
        $complaint = Complaint::findorFail($id);
        $check = $complaint->status = $request->status;
        $complaint->save();
        activity('complaint_module')
           ->performedOn($complaint)
           ->causedBy($user)
           ->withProperties(['status_to' => $complaint->status])
           ->log('Look,'. $user->name . ' logged ' . $complaint->title . ' ' . $complaint->status . ' the satatus');

        if($check === "solve"){
            Session::flash('message', '<script>swal("Complaint Resolved", "Thank You for making Wapda a better service.", "success");</script>'); 
        }
        else{
            Session::flash('message', '<script>swal("Complaint Opened", "Complaint is set to Open.", "warning");</script>');
        }
        return redirect()->back();
    }

    public function logshowactivity(){
        $activity = Activity::all();
        return view('complaints.comploo')->with('data', $activity);
        //dd($activity);
    }


}
