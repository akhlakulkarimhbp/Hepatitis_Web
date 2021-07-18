@extends('welcome')
@section('content')
 <!-- Content Header (Page header) -->
 <div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-12">
      <div id="container" style="width:90%; height:550px;"></div>
       <script>
        document.addEventListener('DOMContentLoaded', function () {
        const chart = Highcharts.chart('container', {
            chart: {
                type: 'bar'
            },
            title: {
                text: 'GRAFIK TINGKAT KERAWANAN 2017'
            },
            xAxis: {
                categories:@json($datakecamatan)
            },            
            series: [{
                name: 'Rendah',
                color: 'Green',
                data: @json($clusterRendah)
       
            },
            {
                name:  'Sedang',
                color: 'Yellow',
                data: @json($clusterSedang)
                
            },
            {
                name:  'Tinggi',
                color: 'Red',
                data: @json($clusterTinggi)
            }
            ]
        });
    });
    </script>

      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
  @endsection
