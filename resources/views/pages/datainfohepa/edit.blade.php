@extends('welcome')
@section('content')
<div class="content-header">
  <div class="container-fluid">
  <div class="row mb-2">
        <div class="col-sm-12">
          <h1 class="m-0">Data Informasi Hepatitis A</h1>
          <br>
          <form action="{{ route('infohepas.update',$info_hepas->id_info)}}" method="POST"> 
          {{ csrf_field()}}
          <div class="row">
          <div class="col-xs-3 col-sm-3 col-md-3">
              <div class="form-group">
                  <strong>Nama Informasi:</strong>
                  <input type="text" name="nama_info" class="form-control" placeholder="Nama Informasi" value="{{$info_hepas->nama_info}}">
              </div>
          </div>
          <div class="col-xs-6 col-sm-6 col-md-12">
              <div class="form-group">
                  <strong>Isi Informasi:</strong>
                  <textarea class="form-control" style="height:150px" name="isi_info" placeholder="Isi Informasi">{{$info_hepas->isi_info}}</textarea>
              </div>
          </div>
          <div class="col-xs-6 col-sm-6 col-md-12">
              <button class="btn btn-success">Update</button>
              <a class="btn btn-success " href="{{ url('/datainfohepa') }}">Kembali</a>
          </div>
        </div><!-- /.col -->
        </form>
      </div><!-- /.row -->
  </div>
</div>
@endsection