@extends('sb-admin/app')
@section('title', 'User')
    
@section('content')
     <!-- Page Heading -->
     <h1 class="h3 mb-4 text-gray-800">Edit - User</h1>
     <div class="mb-3">
      <div class="col-md-6">
          <label for="formGroupNIM" class="form-label">NIM</label>
          <input type="number" class="form-control" id="formGroupNIM" placeholder="111111">
        </div><br>
        <div class="mb-3">
          <div class="col-md-6">
          <label for="formGroupNama" class="form-label">Nama</label>
          <input type="text" class="form-control" id="formGroupNama" placeholder="Sugus">
        </div><br>
        <div class="mb-3">
          <div class="col-md-6">
          <label for="formGroupProdi" class="form-label">Prodi</label>
          <input type="text" class="form-control" id="formGroupProdi" placeholder="Teknik Informatika">
        </div><br>
        <div class="mb-3">
        <div class="col-md-6">
          <label for="inputEmail" class="form-label">Email</label>
          <input type="email" class="form-control" id="inputEmail" placeholder="sugus@gmail.com">
        </div><br>
        <div class="mb-3">
          <div class="col-md-6">
          <label for="formGroupIPK" class="form-label">IPK</label>
          <input type="number" class="form-control" id="formGroupIPK" placeholder="4.95">
        </div><br>
        <div class="mb-3">
          <div class="col-md-6">
          <label for="formGroupTelp" class="form-label">Telp</label>
          <input type="number" class="form-control" id="formGroupTelp" placeholder="08122212121">
        </div><br>
        <fieldset class="row mb-3">
          <div class="col-md-6">
          <legend class="col-form-label col-sm-2 pt-0">Jenis Kelamin</legend>
          <div class="col-sm-10">
               <div class="form-check">
                 <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
                 <label class="form-check-label" for="gridRadios1">
                   Laki-laki
                 </label>
               </div>
               <div class="form-check">
                 <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
                 <label class="form-check-label" for="gridRadios2">
                   Perempuan
                 </label>
               </div><br>
        <button type="button" class="btn btn-primary btn-sm">Update</button>
        <button type="button" class="btn btn-secondary btn-sm">Cancel</button>
@endsection