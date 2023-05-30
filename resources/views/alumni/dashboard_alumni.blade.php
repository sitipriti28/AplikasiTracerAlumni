@extends('sb-alumni/app')
@section('title', 'Dashboard - Alumni')
    
@section('content')
     <!-- Page Heading -->
     <h1 class="h2 mb-4 text-gray-900 text-center">Hi, Alumni! Selamat Datang di Tracer Study Alumni Polibatam</h1><br>
     <div class="card text-gray-900 mx-auto" style="max-width: 40rem;">
          <div class="card-header text-center">Data Pribadi Alumni</div>
          <div class="card-body">
               <div class="mb-1 text-center">
                    <label for="formGroupExampleInput" class="form-label">NIM</label>
                    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="11111">
                  </div>
                  <div class="mb-1 text-center">
                    <label for="formGroupExampleInput2" class="form-label">Nama</label>
                    <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Fulan">
                  </div>
                  <div class="mb-1 text-center">
                    <label for="formGroupExampleInput2" class="form-label">Prodi</label>
                    <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Teknik Informatika">
                  </div>
                  <div class="mb-1 text-center">
                    <label for="formGroupExampleInput2" class="form-label">Email</label>
                    <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="fulan@gmail.com">
                  </div>
                  <div class="mb-1 text-center">
                    <label for="formGroupExampleInput2" class="form-label">Telp</label>
                    <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="08122212354">
                  </div>
                  <div class="mb-1 text-center">
                    <label for="formGroupExampleInput2" class="form-label">Jenis Kelamin</label>
                    <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Perempuan">
                  </div>
                  <div class="mb-1 text-center">
                    <label for="formGroupExampleInput2" class="form-label">IPK</label>
                    <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="3.95">
                  </div>
          </div>
        </div>
@endsection