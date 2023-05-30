@extends('sb-alumni/app_alumni')
@section('title', 'Riwayat Kerja')
    
@section('content')
     <!-- Page Heading -->

     <h1 class="h3 mb-4 text-gray-900">Show - Riwayat Kerja</h1>
     <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
        <div class="container px-4 text-center">
                <div class="mb-3">
                        <div class="col-md-6">
                            <label for="formGroupNamaPerushaant" class="form-label">Nama Perusahaan</label>
                            <input type="text" class="form-control" id="formGroupNamaPerusahaan" placeholder="PT. Mencari Cinta Sejati">
                          </div><br>
                          <div class="mb-3">
                            <div class="col-md-6">
                            <label for="formGroupPosisi" class="form-label">Posisi</label>
                            <input type="text" class="form-control" id="formGroupPosisi" placeholder="Full Stack Developer">
                          </div><br>
                          <div class="mb-3">
                            <div class="col-md-6">
                            <label for="formGroupDurasi" class="form-label"?>Durasi (Bulan/Tahun)</label>
                            <input type="text" class="form-control" id="formGroupDurasi" placeholder="1 Bulan/Tahun">
                          </div><br>
                          <div class="mb-3">
                            <div class="col-md-6">
                            <label for="formGroupPendapatan" class="form-label">Pendapatan</label>
                            <input type="text" class="form-control" id="formGroupPendapatan" placeholder="2.000.000">
                          </div>
                     
@endsection