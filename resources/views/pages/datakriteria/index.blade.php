@extends('welcome')
@section('content')
 <!-- Content Header (Page header) -->
 <div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-12">
        <h1 class="m-0">Data Kriteria Hepatitis A</h1>
        <div class="float-left my-3">
          <a class="btn btn-success" href="{{ route('datakriteria.create') }}"> Tambah Data</a>
        </div>
          <table class="table table-striped table-hover table-sm table-bordered">
			    <thead class="thead-light">
				    <tr>
            <th>Id</th>
            <th>Kecamatan</th>
            <th>Tahun</th>
            <th>Air Bersih</th>
            <th>Histori Kasus</th>
            <th>Kepadatan Penduduk</th>
            <th>Sanitasi Lingkungan</th>
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
          {{$data->kecamatan->nama_kecamatan }}
        </td>
        <td>
          {{$data->tahun }}
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
        <a class="fa fa-pencil-square-o" aria-hidden="true"  href="{{ route('datakriteria.edit',$data->id_kriteria) }}" ></a>
        <a href="{{ route('datakriteria.delete',$data->id_kriteria) }}" class="fa fa-trash-o" aria-hidden="true" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')"></button>
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

