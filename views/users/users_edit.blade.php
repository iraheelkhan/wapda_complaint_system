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
                  <h2>Edit User</h2>
          <form id="my_form" action="{{route('UserUpdate')}}" method="POST">
                    {{csrf_field()}}
                    <input type="hidden" name="user_id" value="{{$data->id}}">
                    <div class="form-group">
                      <label>Full Name</label>
                       <input id="full_name" class="form-control input-lg" name="full_name" type="text" placeholder="" value="{{$data->name}}">
                    <br>
                    </div>
                    <div class="form-group">
                      <label>email</label>
                      <input id="user_email" class="form-control input-lg" name="user_email" type="text" placeholder="" value="{{$data->email}}">
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