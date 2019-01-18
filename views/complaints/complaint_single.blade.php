@extends('layouts.master');
@section('title')
Complaint List
@endsection
@section('content')
      <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  @if(Session::has('message'))
                    <p class="">{!! Session::get('message') !!}</p>
                  @endif
                  <a href="{{($data->status === 'solve')? route('ComplaintList') : route('ComplaintListOpen')}}" class="btn btn-primary">Back to Complaints List</a>

                  <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#exampleModalCenter">
					  Update Status
					</button>
                  <h2 class="card-title"></h2>

                 <div class="">
                    <table class="table"> 
	                      	
	                        <tr>
	                        	<td >Complaint Title </td>
	                        	<td>{{$data->c_title}}</td>	
	                        </tr>
	                        <tr>
	                        	<td >Complaint Description </td>
	                        	<td style="width: 100px; word-wrap: break-word;">{{$data->c_description}}</td>	
	                        </tr>
	                        <tr>
	                        	<td >Address</td>
	                        	<td>{{$data->c_address}}</td>	
	                        </tr>
	                        <tr>
	                        	<td >Phone </td>
	                        	<td>{{$data->c_phone}}</td>	
	                        </tr>
	                        <tr>
	                        	<td >Complainer Name</td>
	                        	<td>Mazhar Sahb</td>	
	                        </tr>
	                        <tr>
	                        	<td >Division </td>
	                        	<td>Division</td>	
	                        </tr>
	                        <tr>
	                        	<td >Sub Division </td>
	                        	<td>Sub Division</td>	
	                        </tr>
	                        <tr>
	                        	<td >Reference Number </td>
	                        	<td>{{$data->c_reference_no}}</td>	
	                        </tr>
	                        <tr>
	                        	<td >Time Ago </td>
	                        	<td><span class="badge badge-primary badge-xl"> {{$data->created_at->diffForHumans()}}</span>
	                        	</td>	
	                        </tr>
	                        <tr>
	                        	<td >Time Ago </td>
	                        	<td><span class="btn btn-primary btn-xl"> {{$data->c_tracking_no}}</span>
	                        	</td>	
	                        </tr>
	                        <tr>
	                        	<td>Status</td>
	                        	<td> 
	                        		<span style="font-size: 18px;" class="badge 
	                        		@if($data->status == 'solve') badge-success">
	                        			Solved
	                        		@endif
	                        		@if($data->status == "open")
	                        		badge-warning">
	                        			Opened
	                        		@endif	
	                        		</span></td>	
	                        </tr>
                    	
                    </table>
                </div>
                 </div>
              </div>
            </div>
            
           
          </div>

<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Complaint Status</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group">
        	<h2> Update the Status </h2>


        	<form action="{{route('ComplaintStatus')}}" method="POST">
        		<input type="hidden" name="c_id" value="{{$data->id}}">
        		{{csrf_field()}}
    			<div class="form-radio">
	            <label class="form-check-label">
	              <input type="radio" class="form-check-input" name="status" id="" value="open" checked=""> Opened
	            	<i class="input-helper"></i></label>
		          </div>

		          <div class="form-radio">
		            <label class="form-check-label">
		              <input type="radio" class="form-check-input" name="status" id="" value="solve" > Solved
		            <i class="input-helper"></i></label>
		          </div>

		          <div class="form-radio">
		            <label class="form-check-label">
		              <input type="radio" class="form-check-input" name="status" id="" value="2" disabled=""> Forward
		            <i class="input-helper"></i></label>
		          </div>
		        </div>	
		    
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
      </form>
    </div>
  </div>
</div>
<script type="text/javascript">
	$('#myModal').on('shown.bs.modal', function () {
	  $('#myInput').trigger('focus')
	});
</script>
@endsection