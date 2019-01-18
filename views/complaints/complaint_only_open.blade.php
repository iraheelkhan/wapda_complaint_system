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
                    <p class="alert alert-success">{!! Session::get('message') !!}</p>
                  @endif
                  <a href="{{ route('ComplaintAdd') }}" class="btn btn-primary">New Complaint</a>
                  <h2 class="card-title">Complaints List</h2>
                 
                  <div class="table-responsive">
                    <table class="table"> 
                      <thead>
                        <tr>
                          <th>S.No</th>
                          <th>Action</th>
                          <th>Status</th>
                          <th>Title</th>
                          <!-- <th>Description</th> -->
                          <th>Email</th>
                          <th>Address</th>
                          <th>Phone</th>
                          <th>Customer</th>
                          <th>Sub Divison</th>
                          <th>Reference ID</th>
                          <th>Tracking ID</th>
                          
                        </tr>
                      </thead>
                      <tbody>

                       
                        <?php $index = 1; ?>
                        @foreach($data as $list)
                        @if($list->created_at->diffinHours() > 6 && $list->status === 'open' && Auth::user()->role === 'clerk')
                        <tr>
                          <td> <?= $index++ ?> || {{$list->created_at->diffinHours()}}</td>
                          <td> 
                           <!--  if(Auth::user()->id == $list->user_id) -->
                            <form action="{{route('DeleteComplaint')}}" method="POST">
                              {{ method_field('DELETE') }}
                              {{ csrf_field() }}
                              <input type="hidden" name="id" value="{{$list->id}}">
                              <button type="submit" class="btn btn-danger">D</button>
                            </form>
                              <a href="{{route('ComplaintView', $list->id)}}" class="btn btn-info">V</a>
                              <!-- endif -->
                          </td>
                          <td>
                            <span style="font-size: 18px;" class="badge 
                              @if($list->status == 'solve') badge-success">
                                Solved
                              @endif
                              @if($list->status == "open")
                              badge-warning">
                                Opened
                              @endif  
                              </span></td>
                          <td>{{ $list->c_title }}</td>
                          <!-- <td> {{ $list->c_description}} </td> -->
                          <td> {{ $list->c_email }}</td>
                          <td> {{ $list->c_address }}</td>
                          <td> {{ $list->c_phone }}</td>
                          <td> {{ $list->user->name }}</td>
                          <td> {{ $list->subdivision->subdivision_name}}
                          </td>
                          <td> {{ $list->c_reference_no }}</td>
                          <td> {{ $list->c_tracking_no }}</td>
                          </tr>
                          @endif
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
            
           
          </div>
<script type="text/javascript">

</script>
@endsection