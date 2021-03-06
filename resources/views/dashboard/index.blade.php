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
                        <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $jumlah_rumah_sakit }}</div>
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
                        <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $jumlah_artikel }}</div>
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
                        <h3 class="title-2 m-b-40">Jumlah Rumah Sakit Per Provinsi</h3>
                        <canvas id="hospitalChart"></canvas>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="au-card m-b-30">
                    <div class="au-card-inner">
                        <h3 class="title-2 m-b-40">Jumlah Artikel Dibuat Perbulan</h3>
                        <canvas id="articleChart"></canvas>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<script type="text/javascript">
    var data = new Array();

    $.ajax({
        url: "/get-grafik-article",
        type: 'POST',
        dataType: 'json',
        success: function(result) {
            data = result;
            var ctx = document.getElementById('articleChart').getContext('2d');
            var myBarChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: data['new_date'],
                    datasets: [{
                            label : 'Jumlah Artikel Dibuat',
                            barPercentage: 1,
                            barThickness: 6,
                            maxBarThickness: 8,
                            minBarLength: 2,
                            data: data['data'],
                            backgroundColor: 'rgba(54, 162, 235, 0.2)',
                            borderColor: 'rgba(54, 162, 235, 1)',
                            borderWidth: 1
                    }]
                },
                options: {
                        scales: {
                            yAxes: [{
                                ticks: {
                                    beginAtZero: true
                                }
                            }]
                        }
                    }
            });
        }

    });
 
     $.ajax({
        url: "/get-grafik-hospital",
        type: 'POST',
        dataType: 'json',
        success: function(result) {
            data = result;
            var ctx = document.getElementById('hospitalChart').getContext('2d');
            var myBarChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: data['province'],
                    datasets: [{
                            label : 'Jumlah Rumah Sakit',
                            barPercentage: 1,
                            barThickness: 6,
                            maxBarThickness: 8,
                            minBarLength: 2,
                            data: data['total'],
                            backgroundColor: 'rgba(54, 162, 235, 0.2)',
                            borderColor: 'rgba(54, 162, 235, 1)',
                            borderWidth: 1
                    }]
                },
                options: {
                        scales: {
                            yAxes: [{
                                ticks: {
                                    beginAtZero: true
                                }
                            }]
                        }
                    }
            });
        }

    });
 
</script>
@endsection

