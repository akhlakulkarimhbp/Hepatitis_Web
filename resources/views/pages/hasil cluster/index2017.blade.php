@extends('welcome')
@section('content')
 <!-- Content Header (Page header) -->
 <div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-12">
        <h1 class="m-0">Hasil Cluster 2017</h1>
        <div class="float-left my-3">
          <table class="table table-striped table-hover table-sm table-bordered">
			    <thead class="thead-light">
				    <tr>
            <th>Kecamatan</th>
            <th>Histori Kasus</th>
            <th>Rumah Sehat</th>
            <th>Sanitasi Lingkungan</th>
            <th>Kepadatan Penduduk</th>
            <th>Air Bersih</th>
            <th>Cluster</th>
            </tr>
			    </thead>
          <tbody>
              @foreach ($collections as $data)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $data->kecamatan }}</td>
                            <td>{{ $data->jml_kasus }}</td>
                            <td>{{ $data->jml_rumah_sehat }}</td>
                            <td>{{ $data->jml_sanitasi }}</td>
                            <td>{{ $data->jml_penduduk }}</td>
                            <td>{{ $data->jml_air_bersih }}</td>
                            <td>{{ $data->cluster }}</td>                           
                        </tr>
                    @endforeach
            </tbody>
          </table>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
  @endsection

