@extends('sb-perusahaan/app')
@section('title', 'Dashboard - Alumni')
    
@section('content')
     <!-- Page Heading -->
     <h1 class="h2 mb-4 text-gray-900 text-center">Hi, Perusahaan! Selamat Datang di Tracer Study Alumni Polibatam</h1><br>
     <div class="card text-gray-900 mx-auto" style="max-width: 40rem;">
          <div class="card-header text-center">Data Pribadi Perusahaan</div>
          <div class="card-body">
               <div class="mb-1 text-center">
                    <label for="formGroupExampleInput" class="form-label">ID Perusahaan</label>
                    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="10001">
                  </div>
                  <div class="mb-1 text-center">
                    <label for="formGroupExampleInput2" class="form-label">Nama Perusahaan</label>
                    <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="PT.Sumber Sari">
                  </div>
                  <div class="mb-1 text-center">
                    <label for="formGroupExampleInput2" class="form-label">Email Perusahaan</label>
                    <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="SumberSari@gmail.com">
                  </div>
                  <div class="mb-1 text-center">
                    <label for="formGroupExampleInput2" class="form-label">Telp Perusahaan</label>
                    <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="08122212354">
                  </div>
                  <div class="mb-1 text-center">
                    <label for="formGroupExampleInput2" class="form-label">Alamat Perusahaan</label>
                    <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Jl.ahmad yani">
                  </div>
          </div>
        </div>
@endsection