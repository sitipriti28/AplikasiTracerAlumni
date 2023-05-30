@extends('sb-admin/app')
@section('title', 'Dashboard - Perusahaan')
    
@section('content')
     <!-- Page Heading -->
     <div class="jumbotron text-center text-primary">
  <h1>Hi,Perusahaan</h1>
  <h2>Selamat Datang di Tracer Study Perusahaan Polibatam!</h2>
</div>
     <div class="card-header py-2 d-flex flex-row align-items-center justify-content-between">
     <div class="h4 text-center text-gray-900 ">Data Pribadi Perusahaan</div>
</div>
     <form>
        <h5 class="h4 mb-1 text-gray-900">
        <label for="username">ID Perusahaan   : </label>
        <input type="text" id="username">
        <div>
        <label for="username">Nama Perusahaan   : </label>
        <input type="text" id="username"/>
        <div>
        <label for="username">Alamat Perusahaan : </label>
        <input type="text" id="username"/>
        <div>
        <label for="username">Email Perusahaan  : </label>
        <input type="text" id="username"/>
        <div>
        <label for="username">No.Telp Perusahaan : </label>
        <input type="text" id="username"/></h5>
</form>

@endsection