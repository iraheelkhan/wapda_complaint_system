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
                    <table id="myTable" class="table"> 
                      <thead>
                        <tr>
                          <th>S.No</th>
                          
                          <th>log_name</th>
                          <th>description</th>
                          <th>subject_id</th>
                          <th>subject_type</th>
                          <th>causer_id</th>
                          <th>causer_type</th>
                          <th>properties</th>
                          
                        </tr>
                      </thead>
                      <tbody>

                       
                        <?php $index = 1; ?>
                        @foreach($data as $list)
                        <tr>
                          <td> <?= $index++ ?>
                          
                          
                          <td> {{ $list->log_name }}</td>
                          <td> {{ $list->description }}</td>
                          <td> {{ $list->subject_id }}</td>
                          <td> {{ $list->subject_type }}</td>
                          <td> {{ $list->causer_id}}
                          </td>
                          <td> {{ $list->causer_type }}</td>
                          <td> {{ $list->properties }}</td>
                          
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
            
           <script type="text/javascript">
             $(document).ready( function () {
                $('#myTable').DataTable();
            } );
           </script>
          </div>

@endsection