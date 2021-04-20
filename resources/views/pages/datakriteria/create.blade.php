@extends('welcome')
@section('content')
 <!-- Content Header (Page header) -->
 <div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-12">
        <h1 class="m-0">Data Informasi Hepatitis A</h1>
        <br>
        <div class="row">
        <div class="col-xs-3 col-sm-3 col-md-3">
            <div class="form-group">
                <strong>Nama Informasi:</strong>
                <input type="text" name="nama_info" class="form-control" placeholder="Nama Informasi">
            </div>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-12">
            <div class="form-group">
                <strong>Isi Informasi:</strong>
                <textarea class="form-control" style="height:150px" name="isi_info" placeholder="Isi Informasi"></textarea>
            </div>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-12">
            <button class="btn btn-success">Simpan data</button>
            <a class="btn btn-success">Kembali</a>
        </div>
      </div><!-- /.col -->
      </form>
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
  @endsection
