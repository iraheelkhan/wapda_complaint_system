@extends('layouts.master');
@section('content')
@can('adminonly')
<div class="row">
            <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                   <h2 class="">Cities List</h2>
                  @if(Session::has('message'))
                    <p class="alert alert-success">{{ Session::get('message') }}</p>
                  @endif
                  <a href="{{ route('CityAdd') }}" class="btn btn-primary">New City</a>
                 
                 
                  <div class="table-responsive">
                    <table class="table">
                      <thead>
                        <tr>
                          <th>S.No</th>
                          <th>City Name</th>
                          <th>City Description</th>
                          <th>City Code</th>
                          <th>Province</th>
                          <th>Action</th>
                          
                         
                        </tr>
                      </thead>
                      <tbody>
                        <?php $index = 1; ?>
                        @foreach($data as $list)
                        <tr>
                          <td> <?= $index++ ?>
                          <td> {{ $list->city_name }} </td>
                          <td> {{ $list->city_description}} </td>
                          <td> {{ $list->city_code }} </td>
                          <td> {{ $list->province->province_name }} </td>
                          <td> <a href="" class="btn btn-info">E</a>
                              <a href="{{route('CityDelete',$list->id)}}" class="btn btn-danger">D</a>
                          </td> 
                          
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                 
                </div>
              </div>
            </div>
            
           
          </div>
 @endcan
@endsection