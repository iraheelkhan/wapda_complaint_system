@extends('layouts.master');
@section('title')
Complaint List
@endsection
@section('content')
@can('adminonly')
      <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                    {{today()}}
                    <div id="container" style="min-width: 210px; height: 400px; margin: 0 auto"></div>
                    <table id="datatable" style="display: none">
                        <thead>
                            <tr>
                                <th></th>
                                <th>Complaints</th>
                            </tr>
                        </thead>
                        <tbody>

                            <tr>
                                <th>Total</th>
                                <td>{{$total}}</td>
                            </tr>
                            <tr>
                                <th>Today</th>
                                <td>{{$today}}</td>
                            </tr>
                            <tr>
                                <th>Open</th>
                                <td>{{$open}}</td>
                            </tr>
                            <tr>
                                <th>Solved</th>
                                <td>{{$solve}}</td>
                            </tr>
                            
                        </tbody>
                    </table>
                </div>
              </div>
            </div>
            
           
          </div>
<script type="text/javascript">

Highcharts.chart('container', {
    data: {
        table: 'datatable'
    },
    chart: {
        type: 'column'
    },
    title: {
        text: 'Total Number of Complaints'
    },
    yAxis: {
        allowDecimals: false,
        title: {
            text: 'Units'
        },
    },
    tooltip: {

        formatter: function () {
            return '<b>' + this.series.name + '</b><br/>' +
                this.point.y + ' ' + this.point.name.toLowerCase();
        }
    },
});
</script>
@endcan
@endsection