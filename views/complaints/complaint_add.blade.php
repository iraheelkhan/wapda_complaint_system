@extends('layouts.master');
@section('title')
  Register New Complaint
@endsection
@section('content')
<div class="row">
      
        <div class="col-md-8 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                   @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                  @endif
          <form id="my_form" action="{{route('store_complaint')}}" method="POST">
                    {{csrf_field()}}

                    <input type="hidden" name="c_customer_id" value="{{Auth::user()->id }}">
                    <input type="hidden" name="c_tracking_no" value="{{str_random(8)}}">
                   <!--  <input type="text" name="c_tracking_no" value="{{uniqid(4)}}"> -->


                    <div class="form-group">
                      <label>Complaint Title</label>
                       <input id="c_title" class="form-control input-lg" name="complaint_title" type="text" placeholder="complaint_title"  value="{{ old('complaint_title') }}">
                    <br>
                    </div>
                    <div class="form-group">
                      <label>Complaint Description</label>
                      <textarea id="c_description" class="form-control" name="complaint_description" rows="3" placeholder="complaint_description" >{{ old('complaint_description') }}</textarea>
                    </div>
                    <div class="form-group">
                      <label>Email</label>
                      <input id="c_email" class="form-control input-lg" name="c_email" type="text" placeholder="Enter your Email" value="{{ old('c_email') }}">
                     
                    </div>
                    <div class="form-group">
                      <label>Address</label>
                      <input type="text" id="c_address" class="form-control" name="c_address" rows="3" placeholder="" value="{{ old('c_address') }}">
                    </div>
                    <div class="form-group">
                      <label>Phone</label>
                      <input type="tel" id="c_phone" class="form-control" name="c_phone" rows="3" placeholder="" value="{{ old('c_phone') }}">
                    </div>


                    <div class="form-group">
                      <label>Select Division</label>
                      <select id="c_division" class="form-control" name="c_division">
                        @foreach($data['division'] as $div)
                        <option value=" {{$div->id}}">{{$div->division_name}}</option>
                        @endforeach 
                      </select>
                    </div>

                    <div class="form-group">
                      <label>Select Sub Division</label>
                      <select id="c_subdivision" class="form-control" name="c_subdivision">
                        @foreach($data['subdivision'] as $div)
                        <option value=" {{$div->id}}">{{$div->subdivision_name}}</option>
                        @endforeach 
                      </select>
                    </div>
                     

                    <div class="box-footer">
                    <input id="btn_submit" type="submit" class="btn btn-primary" value="submit">
                  </div>

                    </form>
            
            </div>
          </div>
           </div>
          </div>

@endsection