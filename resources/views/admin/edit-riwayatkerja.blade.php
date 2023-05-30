@extends('sb-admin/app')
@section('title', 'Riwayat Kerja')
    
@section('content')
<main id="main" class="main" >
     <div class= "pagetitle">
          <h1>Data Perusahaan</h1>
     </div>
     <section class="section">
          <div class="row">
               <div class="col-lg-12">
                    <div class="card">
                         <div class="card-body">
                              <div class="row">
                                   <div class="col-6">
                                        <h5 class="card-title">Data Perusahaan</h5>


                                   </div>
                                   <div class="col-6">
                                        <div class="right float-end">
                                             <button type="button" class="btn btn-primary" style="margin-top: 12px;" data-bs-toggle="modal" data-bs-target="#basicModal">
                                                  Tambah data
                                             </button>
                                             <a href="" class="btn btn-primary" style="margin-top: 12px;">Export EXCEL</a>
                                        </div>
                                   </div>
                              </div>

                              <table class="table table-hover" id="datatable">
                                   <thead>
                                        <tr>
                                             <th>No</th>
                                             <th>Nama</th>
                                             <th>ID</th>
                                             <th>Email</th>
                                        </tr>
                                        <tr>
                                             <th>1.</th>
                                             <th>Sealsea</th>
                                             <th>ID</th>
                                             <th>sealsea@gmail.com</th>
                                        </tr>
                                   </thead>
                                   <tbody>
                                        <a href="" class="btn btn-warning">Edit</a>
                                        <a href="" class="btn btn-danger delete">Delete</a>
                                   </tbody>
                              </table>
                         </div>
                    </div>
               </div>
          </div>
     </section>
</main>

<div class="modal fade" id="basicModal" tabiindex="-1">
     <div class="modal-dialog">
          <div class="modal-content">
               <div class="modal-header">
                    <h5 class="modal-title">Tambah Data perusahaan</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
               </div>
               <div class="modal-body">
                    <div class="card-body">

                         <label for="inputText" class="col sm-2 col-form-label"> Nama perusahaan</label>
@endsection