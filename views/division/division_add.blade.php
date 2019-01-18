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
          <form id="my_form" action="{{route('store_division')}}" method="POST">
                    {{csrf_field()}}
                    <div class="form-group">
                      <label>Division Name</label>
                       <input id="division_name" class="form-control input-lg" name="division_name" type="text" placeholder="complaint_title">
                    <br>
                    </div>
                    <div class="form-group">
                      <label>Division Description</label>
                      <textarea id="division_description" class="form-control" name="division_description" rows="3" placeholder="complaint_description"></textarea>
                    </div>
                    <div class="form-group">
                      <label>Division Code</label>
                      <input id="division_code" class="form-control input-lg" name="division_code" type="text" placeholder="Enter your Code">
                     
                    </div>
                    


                    <div class="form-group">
                      <label>Select Province</label>
                      <select id="fk_province_id" class="form-control" name="fk_province_id">
                         @foreach($data['province'] as $pro)
                        <option value="{{$pro->province_id}}">{{$pro->province_name}}</option>
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