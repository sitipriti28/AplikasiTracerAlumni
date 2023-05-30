@extends('sb-perusahaan/app')
@section('title', 'User')
    
@section('content')
     <!-- Page Heading -->
     <h1 class="h3 mb-4 text-gray-800">Edit - User Perusahan</h1>
     <div class="mb-3">
      <div class="col-md-6">
          <label for="formGroupNIM" class="form-label">ID Perusahaan</label>
          <input type="number" class="form-control" id="formGroupNIM" placeholder="10001">
        </div><br>
        <div class="mb-3">
          <div class="col-md-6">
          <label for="formGroupNama" class="form-label">Nama Perusahaan</label>
          <input type="text" class="form-control" id="formGroupNama" placeholder="PT.Sumber Sari">
        </div><br>
        <div class="mb-3">
        <div class="col-md-6">
          <label for="inputEmail" class="form-label">Email Perusahaan</label>
          <input type="email" class="form-control" id="inputEmail" placeholder="SumberSari@gmail.com">
        </div><br>
        <div class="mb-3">
          <div class="col-md-6">
          <label for="formGroupTelp" class="form-label">No.Telp Perusahaan</label>
          <input type="number" class="form-control" id="formGroupTelp" placeholder="08122212121">
        </div><br>
        <div class="mb-3">
          <div class="col-md-6">
          <label for="formGroupAlamat" class="form-label">Alamat Perusahaan</label>
          <input type="Text" class="form-control" id="formGroupAlamat" placeholder="Jl.Ahmad Yani">
        </div><br>
        <button type="button" class="btn btn-primary btn-sm">Update</button>
        <button type="button" class="btn btn-secondary btn-sm">Cancel</button>
@endsection