@extends('layouts.master');
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
                  <h2>Edit Division</h2>
          <form id="my_form" action="{{route('DivisionUpdate')}}" method="POST">
                    {{csrf_field()}}
                    <input type="hidden" name="division_id" value="{{$data->id}}">
                    <div class="form-group">
                      <label>Division Name</label>
                       <input id="division_name" class="form-control input-lg" name="division_name" type="text" placeholder="complaint_title" value="{{$data->division_name}}">
                    <br>
                    </div>
                    <div class="form-group">
                      <label>Division Description</label>
                      <textarea id="division_description" class="form-control" name="division_description" rows="3" placeholder="complaint_description">{{$data->division_description}}</textarea>
                    </div>
                    <div class="form-group">
                      <label>Division Code</label>
                      <input id="division_code" class="form-control input-lg" name="division_code" type="text" placeholder="Enter your Code" value="{{$data->division_code}}">
                     
                    </div>
                    


                    <div class="form-group">
                      <label>Select Province</label>
                      <select id="fk_province_id" class="form-control" name="fk_province_id">
                         @foreach($data['province'] as $pro)
                        <option value="{{$pro->id}}">{{$pro->province_name}}</option>
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