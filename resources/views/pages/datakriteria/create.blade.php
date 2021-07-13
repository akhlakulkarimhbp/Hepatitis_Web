@extends('welcome')
@section('content')
 <!-- Content Header (Page header) -->
 <div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0">Data Kriteria Hepatitis A</h1>
        <br>
        <form action="{{route ('datakriteria.store')}}" method="POST"> 
        @csrf
        <div class="row">
        <div class="col-xs-3 col-m-3 col-md-5">
            <div class="form-group">
                <strong>Kecamatan:</strong>
                <select class="form-control" name="id_kecamatan" id="id_kecamatan">
                <option disabled value>Pilih Kecamatan</option>
                @foreach($kec as $item)
                <option value="{{ $item->id_kecamatan }}">{{ $item->nama_kecamatan }}</option>
                @endforeach
                </select>
            </div>
            <div class="form-group">
                <strong>Tahun:</strong>
                <input type="number" name="tahun" class="form-control" placeholder="Tahun">
            </div>
            <div class="form-group">
                <strong>Air Bersih:</strong>
                <input type="number" name="air_bersih" class="form-control" placeholder="Air Bersih">
            </div>
            <div class="form-group">
                <strong>Kasus:</strong>
                <input type="number" name="kasus" class="form-control" placeholder="Kasus">
            </div>
            <div class="form-group">
                <strong>Penduduk:</strong>
                <input type="number" name="penduduk" class="form-control" placeholder="Penduduk">
            </div>
            <div class="form-group">
                <strong>Sanitasi Lingkungan:</strong>
                <input type="number" name="sanitasi" class="form-control" placeholder="Sanitasi">
            </div>
            <div class="form-group">
                <strong>Rumah Sehat:</strong>
                <input type="number" name="rumah_sehat" class="form-control" placeholder="Rumah Sehat">
            </div>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-12">
            <button class="btn btn-success">Simpan data</button>
            <a class="btn btn-success"href="{{ route('datakriteria.index') }}">Kembali</a>
        </div>
      </div>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
  @endsection
