@extends('sb-admin/app')
@section('title', 'Riwayat Kerja')
    
@section('content')
<div class="card shadow mb-4">
     <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-primary">Data Alumni</h6>
     </div>
     <div class="card-body">
          <img src="{{  asset('vendor/sb-admin/img/logo excel.png')  }}" width='30' type="button ">Export</a>
          <a href="" class="btn btn-primary">Tambah Data</a>
          <div class="table-responsive">
               <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                         <tr>
                              <th>No</th>
                              <th>Nama</th>
                              <th>NIM</th>
                              <th>Jurusan</th>
                         </tr>
                         <tr>
                              <td>1.</td>
                              <td>Nabilah</td>
                              <td>3312201038</td>
                              <td>Teknik Informatika</td>
                         </tr>
                    </thead>  
                    <tbody>
                         <th href="" class="btn btn-warning">Edit</th>
                         <th href="" class="btn btn-danger">Hapus</th>
                    @endsection
