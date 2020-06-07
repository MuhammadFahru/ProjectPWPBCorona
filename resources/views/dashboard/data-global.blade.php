@extends('components.dashboard')
@section('global','active')
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
                            <div class="h5 mb-0 font-weight-bold text-gray-800">Data Global</div>
                        </div>
                        <div class="col-lg-2">
                            <img src="/assets/img/icons/global.png" width="100%">
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
                        <div class="col-lg-10 col-md-12">
                        <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Positif</div>
                        <div class="mb-0 font-weight-bold text-gray-800">{{ $positif['value'] }} Orang</div>
                        <a href="#" class="noblue mt-1">
                            <p class="card-text text-dark">
                                <small>Lihat Detail <i class="fas fa-angle-double-right ml-2"></i></small>
                            </p>
                        </a>
                        </div>
                        <div class="col-lg-2 col-md-12">
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
                        <div class="mb-0 font-weight-bold text-gray-800">{{ $sembuh['value'] }} Orang</div>
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
                        <div class="mb-0 font-weight-bold text-gray-800">{{ $meninggal['value'] }} Orang</div>
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
                            <select class="custom-select" id="line">
                            @foreach ($negara as $dataNegara)
                                <option value="{{ $dataNegara['Country'] }}">{{ $dataNegara['Country'] }}</option>
                            @endforeach
                            </select>
                        <canvas id="myChart"></canvas>
                    </div>
                </div>
            </div> 
            <div class="col-lg-6">
                <div class="au-card m-b-30">
                    <div class="au-card-inner">
                        <h3 class="title-2 m-b-40">Single Bar Chart</h3>
                        <canvas id="myChart2"></canvas>
                    </div>
                </div>/
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="overview-wrap">
                    <h3>Table Data Kasus di Dunia</h3>
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
                      <th><h5>Negara</h5></th>
                      <th><h5>Positif</h5></th>
                      <th><h5>Sembuh</h5></th>
                      <th><h5>Meninggal</h5></th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($global as $dataGlobal)
                        <tr align="center">
                            <td><h6>{{$loop->iteration}}</h6></td>
                            <td><h6>{{ $dataGlobal['attributes']['Country_Region'] }}</h6></td>
                            <td><h6>{{ $dataGlobal['attributes']['Confirmed'] }}</h6></td>
                            <td><h6>{{ $dataGlobal['attributes']['Recovered'] }}</h6></td>
                            <td><h6>{{ $dataGlobal['attributes']['Deaths'] }}</h6></td>
                        </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>

    </div>
</div>

<script>
    var data = new Array();
    var e = document.getElementById("line");
    var negara = e.options[e.selectedIndex].value;

    $(function(){
        $("#line").on('change',function(){
            negara = $(this).children("option:selected").val().toLowerCase();
            console.log(negara);
            $.ajax({
                url: "{{ url('get-recov-global') }}"+"?country="+negara,
                type: 'POST',
                dataType: 'json',
                success: function(result) {
                    data = result;
                    var day = data['day'].slice(data['day'].length-30,data['day'].length-1);
                    var recov = data['recovered'].slice(data['recovered'].length-30,data['recovered'].length-1)

                    console.log(data);
                    
                    var ctx = document.getElementById('myChart').getContext('2d');
                    var myChart = new Chart(ctx, {
                        type: 'line',
                        data: {
                            labels: day,
                            datasets: [{
                                label: 'Sembuh',
                                data:  recov,
                                backgroundColor: [
                                    'rgba(124,252,0,0.1)'
                                ],
                                borderCsolor: [
                                    'rgba(124,252,0, 1)',
                                ],
                                
                                borderWidth: 2
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

                },
                error: function(XMLHttpRequest, textStatus, errorThrown) { 
                    alert("Status: " + textStatus); alert("Error: " + errorThrown);
                    console.warn(XMLHttpRequest.responseText);
                },
            });
        });
    });
    

    $.ajax({
        url: "{{ url('get-data-global') }}",
        type: 'POST',
        dataType: 'json',
        success: function(result) {
            data = result;
            dataCountry = data['Country'].slice(0,10);
            dataTotal = data['TotalConfirmed'].slice(0,10);
            var ctx = document.getElementById('myChart2').getContext('2d');
            var myChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: dataCountry,
                    datasets: [{
                        label: 'Terinfeksi',
                        data:  dataTotal,
                        backgroundColor: [
                            'rgba(255, 0, 0, 0.1)'
                        ],
                        borderColor: [
                            'rgba(255, 0, 0, 1)',
                        ],
                        
                        borderWidth: 2
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

        },
    });

</script>
@endsection