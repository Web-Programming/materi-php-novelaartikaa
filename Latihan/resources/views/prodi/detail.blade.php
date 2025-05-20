@extends('layout.master')

@section('title', "Detail Program Studi")

@section('content')
<div class="app-content-header">
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-6"><h3 class="mb-0">Detail Program Studi</h3></div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-end">
          <li class="breadcrumb-item"><a href="{{ url("/") }}">Home</a></li>
          <li class="breadcrumb-item"><a href="{{ url("/prodi") }}">Program Studi</a></li>
          <li class="breadcrumb-item active" aria-current="page">Detail Program Studi</li>
        </ol>
      </div>
    </div>
  </div>
</div>

<div class="app-content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Detail Program Studi</h3>
          </div>
          <div class="card-body">
            <table class="table table-bordered">
              <tr>
                <th>ID Prodi</th>
                <td>{{ $prodi->id }}</td>
              </tr>
              <tr>
                <th>Nama Prodi</th>
                <td>{{ $prodi->nama }}</td>
              </tr>
              <tr>
                <th>Kode Prodi</th>
                <td>{{ $prodi->kode_prodi }}</td>
              </tr>
              <tr>
                <th>Tanggal Buat</th>
                <td>{{ $prodi->created_at }}</td>
              </tr>
              <tr>
                <th>Tanggal Update</th>
                <td>{{ $prodi->updated_at }}</td>
              </tr>
            </table>
          </div>
          <div class="card-footer">Footer</div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
