@extends('sb-admin/app')
@section('title', 'Riwayat Kerja')
    
@section('content')
     <!-- Page Heading -->
     <h1 class="h3 mb-4 text-gray-800">Edit - Riwayat Kerja</h1>
     <div class="mb-3">
      <div class="col-md-6">
          <label for="formGroupNamaPerushaant" class="form-label">Nama Perusahaan</label>
          <input type="text" class="form-control" id="formGroupNamaPerusahaan" placeholder="e.g PT. Mencari Cinta Sejati">
        </div><br>
        <div class="mb-3">
          <div class="col-md-6">
          <label for="formGroupPosisi" class="form-label">Posisi</label>
          <input type="text" class="form-control" id="formGroupPosisi" placeholder="e.g Full Stack Developer">
        </div><br>
        <div class="mb-3">
          <div class="col-md-6">
          <label for="formGroupDurasi" class="form-label"?>Durasi (Bulan/Tahun)</label>
          <input type="text" class="form-control" id="formGroupDurasi" placeholder="e.g 1 Bulan/Tahun">
        </div><br>
        <div class="mb-3">
          <div class="col-md-6">
          <label for="formGroupPendapatan" class="form-label">Pendapatan</label>
          <input type="text" class="form-control" id="formGroupPendapatan" placeholder="e.g 2.000.000">
        </div><br>
        <button type="button" class="btn btn-primary btn-sm">Update</button>
        <button type="button" class="btn btn-secondary btn-sm">Cancel</button>
        
@endsection