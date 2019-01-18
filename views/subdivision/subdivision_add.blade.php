@extends('layouts.master');
@section('content')
<div class="row">
      
        <div class="col-md-8 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  
          <form id="my_form" action="{{route('store_subdivision')}}" method="POST">
                    {{csrf_field()}}
                    <div class="form-group">
                      <label>Sub Division Name</label>
                       <input id="subdivision_name" class="form-control input-lg" name="subdivision_name" type="text" placeholder="complaint_title" value="{{ old('subdivision_name') }}">
                       @if ($errors->has('subdivision_name')) <p class="alert alert-danger">{{ $errors->first('subdivision_name') }}</p> @endif
                    <br>
                    </div>
                    
                    <div class="form-group">
                      <label>Sub Division Code</label>
                      <input id="subdivision_code" class="form-control input-lg" name="subdivision_code" type="text" placeholder="Enter your Code"  value="{{ old('subdivision_code') }}">
                      @if ($errors->has('subdivision_code')) <p class="alert alert-danger">{{ $errors->first('subdivision_code') }}</p> @endif
                    </div>
                    
                    <div class="form-group">
                      <label>Select Division</label>
                      <select id="fk_division_id" class="form-control" name="fk_division_id">

                         @foreach($data['division'] as $div)
                        <option value="{{$div->id}}">{{$div->division_name}}</option>
                        @endforeach 
                      </select>
                      @if ($errors->has('fk_division_id')) <p class="alert alert-danger">{{ $errors->first('fk_division_id') }}</p> @endif
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