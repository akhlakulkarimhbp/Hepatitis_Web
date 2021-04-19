@extends('welcome')
@section('content')
 <!-- Content Header (Page header) -->
 <div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-12">
        <h1 class="m-0">Data Kriteria Hepatitis A</h1>
            <div class="float-left my-3">
            <a class="btn btn-success"> Tambah Data</a>
            </div>
        <table class="table table-striped table-hover table-sm table-bordered">
			  <thead class="thead-light">
				<tr>
        <th>Id</th>
					<th>Tahun</th>
					<th>Kecamatan</th>
          <th>Rumah Sehat</th>
          <th>Air Bersih</th>
          <th>Penduduk</th>
          <th>Kasus</th>
          <th>Sanitasi</th>
					<th>Aksi</th>
				</tr>
			</thead>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
  @endsection
