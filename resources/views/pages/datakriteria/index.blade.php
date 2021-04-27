@extends('welcome')
@section('content')
 <!-- Content Header (Page header) -->
 <div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-9">
        <h1 class="m-0">Data Kriteria Hepatitis A</h1>
        <div class="float-left my-3">
          <a class="btn btn-success" href="{{ route('datakriteria.create') }}"> Tambah Data</a>
        </div>
          <table class="table table-striped table-hover table-sm table-bordered">
			    <thead class="thead-light">
				    <tr>
            <th>Id</th>
            <th>Air Bersih</th>
            <th>Kasus</th>
            <th>Penduduk</th>
            <th>Sanitasi</th>
            <th>Rumah Sehat</th>
            <th>Aksi</th>
            </tr>
			    </thead>
          <tbody>
      @foreach($data_kriteria as $data)
      <tr>
        <td>
        {{$loop->iteration}}
        </td>
        <td>
          {{$data->air_bersih }}
        </td>
        <td>
          {{$data->kasus }}
        </td>
        <td>
          {{$data->penduduk }}
        </td>
        <td>
          {{$data->sanitasi }}
        </td>
        <td>
          {{$data->rumah_sehat }}
        </td>
        <td>
        <a class="btn btn-primary btn-sm"  href="{{ route('datakriteria.edit',$data->id_kriteria) }}" >Edit</a>
        <a href="{{ route('datakriteria.delete',$data->id_kriteria) }}" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Delete</button>
        </td>
      </tr>
      @endforeach
      </tbody>
      </table>
      @include('sweetalert::alert')
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
  @endsection

