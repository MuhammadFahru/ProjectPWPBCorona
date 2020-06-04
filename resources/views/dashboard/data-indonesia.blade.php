@extends('components.dashboard')
@section('indonesia','active')
@section('content')
<div class="section__content section__content--p30">
    <div class="container-fluid">

        <div class="row" style="margin-top: -20px;">
            <div class="col-md-12">
                <div class="overview-wrap">
                    <h3>Data Global Corona Virus Case</h3>
                </div>
            </div>
        </div>
        
        <div class="row mt-2">
            
            <!-- Card Data Global -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-primary shadow py-1">
                    <div class="card-body">
                    <div class="row no-gutters align-items-center mt-3 mb-3">
                        <div class="col-lg-10">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Kasus Virus Corona</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">Data Indonesia</div>
                        </div>
                        <div class="col-lg-2">
                            <img src="/assets/img/icons/indonesia.png" width="100%">
                        </div>
                    </div>
                    </div>
                </div>
            </div>

            <!-- Card Data Positif -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-warning shadow py-1">
                    <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col-lg-10">
                        <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Positif</div>
                        @foreach ($indonesia as $data)
                            <div class="mb-0 font-weight-bold text-gray-800">{{ $data['positif'] }} Orang</div>
                        @endforeach                        
                        <a href="#" class="noblue mt-1">
                            <p class="card-text text-dark">
                                <small>Lihat Detail <i class="fas fa-angle-double-right ml-2"></i></small>
                            </p>
                        </a>
                    </div>
                    <div class="col-lg-2">
                        <img src="/assets/img/icons/sad.png" width="100%">
                    </div>
                    </div>
                    </div>
                </div>
            </div>                        

            <!-- Card Data Negatif -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-success shadow py-1">
                    <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col-lg-10">
                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Sembuh</div>
                        @foreach ($indonesia as $data)
                            <div class="mb-0 font-weight-bold text-gray-800">{{ $data['sembuh'] }} Orang</div>
                        @endforeach     
                        <a href="#" class="noblue mt-1">
                            <p class="card-text text-dark">
                                <small>Lihat Detail <i class="fas fa-angle-double-right ml-2"></i></small>
                            </p>
                        </a>
                    </div>
                    <div class="col-lg-2">
                        <img src="/assets/img/icons/happy.png" width="100%">
                    </div>
                    </div>
                    </div>
                </div>
            </div>                        

            <!-- Card Data Meninggal -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-danger shadow py-1">
                    <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col-lg-10">
                        <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">Meninggal</div>
                        @foreach ($indonesia as $data)
                            <div class="mb-0 font-weight-bold text-gray-800">{{ $data['meninggal'] }} Orang</div>
                        @endforeach     
                        <a href="#" class="noblue mt-1">
                            <p class="card-text text-dark">
                                <small>Lihat Detail <i class="fas fa-angle-double-right ml-2"></i></small>
                            </p>
                        </a>
                    </div>
                    <div class="col-lg-2">
                        <img src="/assets/img/icons/cry.png" width="100%">
                    </div>
                    </div>
                    </div>
                </div>
            </div>                        

        </div>                        

        <div class="row" style="margin-top: -25px;">
            <div class="col-md-12">
                <div class="overview-wrap">
                    <h3>Chart</h3>
                </div>
            </div>
        </div>

        <div class="row mt-2">
            <div class="col-lg-6">
                <div class="au-card m-b-30">
                    <div class="au-card-inner">
                        <h3 class="title-2 m-b-40">Line Chart</h3>
                        <canvas id="lineChart"></canvas>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="au-card m-b-30">
                    <div class="au-card-inner">
                        <h3 class="title-2 m-b-40">Single Bar Chart</h3>
                        <canvas id="singelBarChart"></canvas>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="overview-wrap">
                    <h3>Table Data Kasus di Indonesia</h3>
                </div>
            </div>
        </div>

        <!-- Data Global -->
        <div class="card shadow mb-4 mt-3">
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr align="center">
                      <th><h5>No</h5></th>
                      <th><h5>Provinsi</h5></th>
                      <th><h5>Positif</h5></th>
                      <th><h5>Sembuh</h5></th>
                      <th><h5>Meninggal</h5></th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($provinsi as $dataIndonesia)
                        <tr align="center">
                            <td><h6>{{ $loop->iteration }}</h6></td>
                            <td><h6>{{ $dataIndonesia['attributes']['Provinsi'] }}</h6></td>
                            <td><h6>{{ $dataIndonesia['attributes']['Kasus_Posi'] }}</h6></td>
                            <td><h6>{{ $dataIndonesia['attributes']['Kasus_Semb'] }}</h6></td>
                            <td><h6>{{ $dataIndonesia['attributes']['Kasus_Meni'] }}</h6></td>
                        </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>

    </div>
</div>
@endsection