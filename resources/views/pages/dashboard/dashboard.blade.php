@extends('welcome')
@section('content')
<style>
    #mapid { height: 450px; }
          </style>
  <!-- Content Header (Page header) -->
  <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Map Kerawanan 2017</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
          <div id="mapid"></div>
          <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
          <!-- <script src="leaflet.ajax.min.js"></script> -->
          
      <script>
        // var mymap = L.map('mapid').setView([-8.13333,111.16667], 11);
        // L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        //     attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
        //     maxZoom: 18,
        //     id: 'mapbox/streets-v11',
        //     tileSize: 512,
        //     zoomOffset: -1,
        // }).addTo(mymap);
    var peta = L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
		attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
			'<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
			'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
		id: 'mapbox/streets-v11'
	});
    var map = L.map('mapid', {
        center: [-8.13333, 111.16667],
        zoom: 11.4,
        layers: [peta]
    });
    
    
        var geojson=[];
        
            $.ajax({ 
                dataType:'JSON',
                success:function(data){      
                $.getJSON("{{asset('assets')}}/sby.geojson", function(data_coordinate){
                    for(i=0;i<31;i++){
                      var kecamatan = data_coordinate.features[i].properties.kecamatan;
                      console.log(kecamatan);
                    }
                      geojson[kecamatan]=L.geoJSON(data_coordinate,{
                      onEachFeature: onEachFeature,
                      style: style      
                      }).addTo(mapid);
                    });
                }
            });
      
      </script>

          
@endsection
      