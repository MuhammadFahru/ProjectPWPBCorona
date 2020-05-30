@extends('components.dashboard')
@section('index','active')
@section('content')
<div class="section__content section__content--p30">
    <div class="container-fluid">

        <div class="row" style="margin-top: -20px;">
            <div class="col-md-12">
                <div class="overview-wrap">
                    <h3>Data Website</h3>
                </div>
            </div>
        </div>
        
        <div class="row mt-2">

            <!-- Card Data Global -->
            <div class="col-xl-3 col-md-6 mb-1">
                <div class="card border-left-primary shadow py-1">
                    <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col-lg-10 col-md-12">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Data Global</div>
                        <div class="mb-0 font-weight-bold text-gray-800">{{ $positif['value'] }} Orang</div>
                        <div class="text-xs font-weight-bold text-secondary text-uppercase mt-1">Positif</div>
                        <a href="/data-global" class="noblue mt-1">
                            <p class="card-text text-dark">
                                <small>Lihat Detail <i class="fas fa-angle-double-right ml-2"></i></small>
                            </p>
                        </a>
                        </div>
                        <div class="col-lg-2 col-md-12">
                            <img src="/assets/img/icons/global.png" width="100%">
                        </div>
                    </div>
                    </div>
                </div>
            </div>

            <!-- Card Data Indonesia -->
            <div class="col-xl-3 col-md-6 mb-1">
                <div class="card border-left-success shadow py-1">
                    <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col-lg-10">
                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Data Indonesia</div>
                        @foreach ($indonesia as $data)
                            <div class="mb-0 font-weight-bold text-gray-800">{{ $data['positif'] }} Orang</div>
                        @endforeach                        
                        <div class="text-xs font-weight-bold text-secondary text-uppercase mt-1">Positif</div>
                        <a href="/data-indonesia" class="noblue mt-1">
                            <p class="card-text text-dark">
                                <small>Lihat Detail <i class="fas fa-angle-double-right ml-2"></i></small>
                            </p>
                        </a>
                    </div>
                    <div class="col-lg-2">
                        <img src="/assets/img/icons/indonesia.png" width="100%">
                    </div>
                    </div>
                    </div>
                </div>
            </div>     

            <!-- Card Data RS -->
            <div class="col-xl-3 col-md-6 mb-1">
                <div class="card border-left-info shadow py-1">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Data RS Rujukan</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">20</div>
                        <div class="text-xs mt-1">Total Rumah Sakit</div>
                        <a href="/rs-rujukan" class="noblue mt-1">
                            <p class="card-text text-dark">
                                <small>Lihat Detail <i class="fas fa-angle-double-right ml-2"></i></small>
                            </p>
                        </a>
                    </div>
                    <div class="col-auto">
                        <i class="far fa-hospital fa-2x text-gray-300"></i>
                    </div>
                    </div>
                </div>
                </div>
            </div>

            <!-- Card Data Konten -->
            <div class="col-xl-3 col-md-6 mb-1">
                <div class="card border-left-warning shadow py-1">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Data Artikel</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">10</div>
                        <div class="text-xs mt-1">Total Artikel</div>
                        <a href="/article" class="noblue mt-1">
                            <p class="card-text text-dark">
                                <small>Lihat Detail <i class="fas fa-angle-double-right ml-2"></i></small>
                            </p>
                        </a>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                    </div>
                    </div>
                </div>
                </div>
            </div>                            

        </div>                        

        <div class="row" style="margin-top: -20px">
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

    </div>
</div>
@endsection