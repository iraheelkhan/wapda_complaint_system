@extends('layouts.master');
@section('content')
<div class="row">
            <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                   <h2 class="">Sub Divisions List</h2>
                  @if(Session::has('message'))
                    <p class="alert alert-success">{{ Session::get('message') }}</p>
                  @endif
                  <a href="{{ route('SubDivisionAdd') }}" class="btn btn-primary">New Sub Division</a>
                 
                 <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
  
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
<script type="text/javascript" charset="utf8" src="https://editor.datatables.net/extensions/Editor/js/dataTables.editor.min.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>



<table id="table_id" class="display">
      <thead>
                        <tr>
                          <th>S.No</th>
                          <th>Division Name</th>
                          <th>Division Description</th>
                          <th>Division Code</th>
                          <th>Action</th>
                        </tr>
                      </thead>
      <tbody>
                        <?php $index = 1; ?>
                        @foreach($data as $list)
                        <tr>
                          <td> <?= $index++ ?>
                          <td>{{ $list->subdivision_name }}</td>
                          <td> {{ $list->subdivision_code}} </td>
                          <td> {{ $list->division->division_name }}</td>

                          <td> 
                            <form action="{{route('DeleteSubDivision')}}" method="POST">
                              {{ method_field('DELETE') }}
                              {{ csrf_field() }}
                              <input type="hidden" name="id" value="{{$list->id}}">
                              <button type="submit" class="btn btn-danger">D</button>
                            </form>
                              <a href="{{route('SubDivisionEdit', $list->id)}}" class="btn btn-info">E</a>
                            
                          </td>

                        @endforeach
                      </tbody>
</table>


<script type="text/javascript">
  var editor;  
  $(document).ready( function () {
    $('#table_id').DataTable();
  } );
  $('#table_id').on( 'click', 'tbody td:not(:first-child)', function (e) {
        editor.inline( this );
    } );
</script>
                
                </div>
              </div>
            </div>
            
           
          </div>

@endsection