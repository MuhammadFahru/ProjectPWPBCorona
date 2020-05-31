@extends('components.master')
@section('title', 'Detail Rumah SAKIT')
@section('index','active')
@section('bg','header-inner-pages')
@section('content')

@include('components.navbar')

  <main id="main">    
    <div class="container">
        <br><br><br><br><br><br>
        <div class="card shadow p-4" style="width:70%; margin:auto;">
            <div class="d-flex justify-content-between align-items-center ml-4">
                <h2>Detail Rumah Sakit</h2>
                <a class="btn btn-primary" style="background-color: #6221EA;" href="/"><i class="fas fa-angle-double-left fa-lg mr-2"></i>Back</a>
            </div>
            <hr class="ml-4" width="41%">
            <div class="row mt-3 mb-3 ml-4">
                <div class="col-lg-6 col-md-6">
                    <img src="assets/img/logoRumahSakit/Riau/arifinAchmad.png" width="100%" alt="">
                </div>
                <div class="col-lg-6 col-md-6 mt-2">
                    <h5>Nama Rumah Sakit</h5>
                    <h6 class="text-grey">RS Arifin Achmad</h6>
                    <br>
                    <h5>Provinsi</h5>
                    <h6 class="text-grey">Riau</h6>
                    <br>
                    <h5>Alamat</h5>
                    <h6 class="text-grey">Jl. Dr. Sutomo No.59, Kartoharjo</h6>
                    <br>
                    <h5>Telepon</h5>
                    <h6 class="text-grey">(0761) 21618</h6>
                </div>
            </div>
        </div>
    </div>    
  </main>
  <!-- End #main -->
  <br><br><br><br><br><br>
@include('components.footer')

@endsection