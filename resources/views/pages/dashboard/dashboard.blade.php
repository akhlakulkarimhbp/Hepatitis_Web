@extends('welcome')
@section('content')
<style type="text/css">
.leaflet-tooltip.no-background{
    background: transparent;
    border:0;
    box-shadow: none;
    font-size:10px;
}
</style>
  <!-- Content Header (Page header) -->
  <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12">
            <h1 class="m-0">Pemetaan Tingkat Kerawanan Penyakit Hepatitis A Tahun 2017</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <div class="col-12">
        <div id="map" style="height: 440px;"></div>
    </div>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script type="text/javascript">
    var peta = L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
		attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
			'<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
			'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
		id: 'mapbox/streets-v11'
	});
    var map = L.map('map', {
        center: [-8.13333,111.16667],
        zoom: 10,
        layers: [peta]
    });
    var api = 'http://127.0.0.1:5000/data/2017';
    var dataCluster=[];
    var geojson=[];
    getData();
    function getColor(kluster){
        color="#3f48cc";
        if(kluster=='Rendah'){
            color="#00ff00";
        }
        else if(kluster=='Sedang'){
            color="#ffff00";
        }
        else if(kluster=='Tinggi'){
            color="#ff0000";
        }
        return color;
    }
    // atur style
    function style(f) {
        var kecamatan=f.properties.Kecamatan;
        console.log(kecamatan);
        result = dataCluster[kecamatan];
        console.log(result);
        return {
            weight: 0.5,
            opacity: 1,
            color: 'white',
            dashArray: '5',
            fillOpacity: 0.8,
            fillColor: getColor(result.cluster)
            
        };
    }
    function highlightFeature(e) {
	    var layer = e.target;
	    layer.setStyle({
            weight: 0.5,
            color: '#f00',
            dashArray: '',
            fillOpacity: 0.8
	    });
	    if (!L.Browser.ie && !L.Browser.opera && !L.Browser.edge) {
		    layer.bringToFront();
	    }
    }
    
    // update info
	function resetHighlight(e) {
		var layer = e.target;
		layer.setStyle({
			weight: 0.5,
			opacity: 1,
			color: 'white',
			dashArray: '3',
			fillOpacity: 0.8,
		})
	}
    function onEachFeature(f, layer){
        layer.on({
            mouseover: highlightFeature,
            mouseout: resetHighlight
        });
        var kecamatan= f.properties.kecamatan;
        data = dataCluster[kecamatan];
        // console.log(data);
        // var popUp='<table>'+
		// 			'<tr>'+
		// 				'<td colspan="4"><h6>'+data.kecamatan+'</h6></td>'+
		// 			'</tr>'+
		// 			'</table>';
		// layer.bindPopup(popUp);
        layer.bindTooltip(f.properties['kecamatan'],{
            permanent:true,
            direction:"center",
            className:"no-background"
        });
    }

    function popUp(f,l){
          var out = [];
          if (f.properties){
              for(key in f.properties){
                  out.push(key+": "+f.properties[key]);
              }
              l.bindPopup(out.join("<br />"));
          }
    }
    function getData(){
        $.ajax({
            url: api,
            dataType:'JSON',
            success:function(data){
                for(i=0;i<data.length;i++){
                    var data_cluster = data[i];
                    var kec = data_cluster.kecamatan;
                    dataCluster[kec]=data_cluster;
                    console.log(data_cluster);
                }      
                
                $.getJSON("{{asset('assets')}}/kabupatenpacitancode.geojson", function(data_coordinate){
                        for(i=0;i<12;i++){
                            var kecamatan = data_coordinate.features[i].properties.Kecamatan;
                            // console.log(kecamatan);
                        }
                        geojson[kecamatan]=L.geoJSON(data_coordinate,{
                            onEachFeature: popUp,
                            style: style
                        }).addTo(map);
                });
                
            }
        });
    }
     
</script>        

          
@endsection
      