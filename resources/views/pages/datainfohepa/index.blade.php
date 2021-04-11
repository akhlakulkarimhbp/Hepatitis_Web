@extends('welcome')
@section('content')
 <!-- Content Header (Page header) -->
 <div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-12">
        <h1 class="m-0">Data Informasi Hepatitis A</h1>
            <div class="float-left my-3">
            <a class="btn btn-success" href="{{ route('infohepas.create') }}"> Tambah Data</a>
            </div>
        <table class="table table-striped table-hover table-sm table-bordered">
			  <thead class="thead-light">
				<tr>
					<th>Id</th>
					<th>Nama Informasi</th>
					<th>Isi Informasi</th>
					<th>Aksi</th>
				</tr>
			</thead>
      <tbody>
      @foreach($info_hepas as $info)
      <tr>
        <td>
        {{$loop->iteration}}
        </td>
        <td>
          {{$info->nama_info }}
        </td>
        <td>
          {{$info->isi_info }}
        </td>
        <td>
        <a class="btn btn-primary btn-sm" href="{{ route('infohepas.edit',$info->id_info) }}" >Edit</a>
        <a href="{{ route('infohepas.delete',$info->id_info) }}"class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Delete</button>
        </td>
      </tr>
      @endforeach
      </tbody>
      </table>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
  @endsection
