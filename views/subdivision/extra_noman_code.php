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
                 
                 
                  <div class="table-responsive">
                    <table id="showtable" class="table">
                      <thead>
                        <tr>
                          <th>S.No</th>
                          <th>SubDivision Name</th>
                          <th>SubDivision Description</th>
                          <th>SubDivision Code</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php $index = 1; $ind=1; ?>
                        @foreach($data as $list)
                        <tr>
                          <td> <?= $index ?>
                          <td id="subdivision_name{{$list->id}}">
                            <span class='editable{{$list->id}}'>{{ $list->subdivision_name }}</span>
                          </td>
                          <td id="subdivision_code{{$list->id}}">
                            <span class="edit_{{$list->id}}"> {{ $list->subdivision_code}}</span> 
                          </td>
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
                          <?  ?>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
            
           
          </div>
<script type="text/javascript">
 var x=0;
 var row = $('#showtable td').length;

        $("#showtable td").editable("dblclick", function(e){
          
         // alert(e.old_value + " => " + e.value);
          var div_name = $('#subdivision_name'+x).text();
          var div_code = $('#subdivision_code'+x).text();
          // if($('#subdivision_code').val().length<3){
          //   alert("error");
          // }
          console.log(div_name + " : " + div_code)
          alert( div_name + " : " + div_code);
        });

// for(x=0; x<=row;x++){
//         $(".edit_"+x).editable("dblclick", function(e){
//          // alert(e.old_value + " => " + e.value);
//           var div_name = $('#subdivision_name'+x).text();
//           var div_code = $('#subdivision_code'+x).text();

//           alert(div_name + " : " + div_code);


//         });
// }
      </script>
@endsection