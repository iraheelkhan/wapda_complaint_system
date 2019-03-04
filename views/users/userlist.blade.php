@extends('layouts.master');
@section('content')
<div class="row">
            <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                   <h2 class="">User List</h2>
                  @if(Session::has('message'))
                    <p class="alert alert-success">{!! Session::get('message') !!}</p>
                  @elseif(Session::has('stop'))
                   <p class="alert alert-danger">{!! Session::get('stop') !!}</p>
                  @endif
                  <a href="{{ route('AddUser') }}" class="btn btn-primary">New Users</a>
                 
                 @can('viewD', Auth::user())
                  <div class="table-responsive">
                    <table class="table">
                      <thead>
                        <tr>
                          <th>S.No</th>
                          <th>Name</th>
                          <th>Email</th>
                          <th>Action</th>

                        </tr>
                      </thead>
                      <tbody>
                        <?php $index = 1; ?>
                        @foreach($users as $user)
                        <tr>
                          <td> <?= $index++ ?>
                          <td>{{ $user->name }}</td>
                          <td> {{ $user->email}} </td>
                          <td> 
                            <a href="{{route('UserEdit',$user->id)}}" class="btn btn-info">E</a>
                            <a href="{{route('UserDelete',$user->id)}}" class="btn btn-danger">D</a>
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