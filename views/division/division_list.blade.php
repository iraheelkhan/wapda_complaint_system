@extends('layouts.master');
@section('content')
<div class="row">
            <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                   <h2 class="">Divisions List</h2>
                  @if(Session::has('message'))
                    <p class="alert alert-success">{!! Session::get('message') !!}</p>
                  @endif
                  <a href="{{ route('DivisionAdd') }}" class="btn btn-primary">New Divisions</a>
                 
                 @can('viewD', Auth::user())
                  <div class="table-responsive">
                    <table class="table">
                      <thead>
                        <tr>
                          <th>S.No</th>
                          <th>Division Name</th>
                          <th>Division Description</th>
                          <th>Division Code</th>.
                          <th>Action</th>

                        </tr>
                      </thead>
                      <tbody>
                        <?php $index = 1; ?>
                        @foreach($data as $list)
                        <tr>
                          <td> <?= $index++ ?>
                          <td>{{ $list->division_name }}</td>
                          <td> {{ $list->division_description}} </td>
                          <td> {{ $list->division_code }}</td>
                          <td> <a href="{{route('DivisionEdit',$list->id)}}" class="btn btn-info">E</a>
                              <a href="{{route('DivisionDelete',$list->id)}}" class="btn btn-danger">D</a>
                          </td> 
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                  @endcan
                </div>
              </div>
            </div>
            
           
          </div>

@endsection