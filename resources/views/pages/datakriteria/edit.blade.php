@extends('welcome')
@section('content')
 <!-- Content Header (Page header) -->
 <div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0">Data Kriteria Hepatitis A</h1>
        <br>
        <form action="{{ route('datakriteria.update',$data_kriteria->id_kriteria)}}" method="POST"> 
          {{ csrf_field()}}
        <div class="row">
        <div class="col-xs-3 col-sm-3 col-md-5">
        <div class="form-group">
                <strong>Tahun:</strong>
                <select class="form-control" name="id_tahun" id="id_tahun">
                <option disabled value>Pilih Tahun</option>
                @foreach($tahun as $item)
                @if($item->id_tahun==$data_kriteria->id_tahun)
                <option value="{{ $item->id_tahun }}" selected >{{ $item->tahun }}</option>
                @else
                <option value="{{ $item->id_tahun }}">{{ $item->tahun }}</option>
                @endif
                @endforeach
                </select>
            </div>
            <div class="form-group">
                <strong>Kecamatan:</strong>
                <select class="form-control" name="id_kecamatan" id="id_kecamatan">
                <option disabled value>Pilih Kecamatan</option>
                @foreach($kec as $item)
                @if($item->id_kecamatan==$data_kriteria->id_kecamatan)
                <option value="{{ $item->id_kecamatan }}" selected >{{ $item->nama_kecamatan }}</option>
                @else
                <option value="{{ $item->id_kecamatan }}">{{ $item->nama_kecamatan }}</option>
                @endif
                @endforeach
                </select>
            </div>
            <div class="form-group">
                <strong>Air Bersih:</strong>
                <input type="number" name="air_bersih" class="form-control" placeholder="Air Bersih"  value="{{$data_kriteria->air_bersih}}">
            </div>
            <div class="form-group">
                <strong>Kasus:</strong>
                <input type="number" name="kasus" class="form-control" placeholder="Kasus" value="{{$data_kriteria->kasus}}">
            </div>
            <div class="form-group">
                <strong>Penduduk:</strong>
                <input type="number" name="penduduk" class="form-control" placeholder="Penduduk" value="{{$data_kriteria->penduduk}}">
            </div>
            <div class="form-group">
                <strong>Sanitasi Lingkungan:</strong>
                <input type="number" name="sanitasi" class="form-control" placeholder="Sanitasi" value="{{$data_kriteria->sanitasi}}">
            </div>
            <div class="form-group">
                <strong>Rumah Sehat:</strong>
                <input type="number" name="rumah_sehat" class="form-control" placeholder="Rumah Sehat"value="{{$data_kriteria->rumah_sehat}}">
            </div>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-12">
            <button class="btn btn-success">Update</button>
            <a class="btn btn-success"href="{{ route('datakriteria.index') }}">Kembali</a>
        </div>
      </div>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
  @endsection
