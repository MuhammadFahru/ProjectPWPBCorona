@extends('components.master')
@section('title', 'Data Indonesia')
@section('indonesia','active')
@section('content')

@include('components.navbar')
<?php
$persentaseData = parseToPercent($indonesia[0]['meninggal'],$indonesia[0]['sembuh']);
$persentaseMeninggal = $persentaseData['death'];
$persentaseSembuh = $persentaseData['recov'];
?>

<!-- ======= Hero Section ======= -->
<section id="indonesia" >        
    <div class="container">
        <div class="row text-center mb-1">
            <div class="col-lg-12 col-md-12 white">
                <h3 class="title mt-min">Live Data Penyebaran Virus Corona di Dunia</h3>
            </div>
        </div>
        <div class="row text-center">
            <div class="col-lg-12 col-md-12">
                <div class="card mb-5">
                    <div class="card-header">
                        <h5 class="black">Statistik Penyebaran Virus Corona di Indonesia</h5>
                    </div>
                    <div class="card-body">
                        <canvas id="myChart" class="mb-4" width="300" height="70"></canvas>                        
                        <div class="row black">
                            <div class="col-lg-4 col-md-12">
                                <div class="card-positif">
                                    <div class="row">
                                        <div class="col-lg-8 col-md-6 white"><br>
                                            <h6>Total Positif</h6>
                                            @foreach ($indonesia as $data)
                                                <h3>{{ $data['positif'] }}</h3>
                                            @endforeach                                               
                                            <h6>Orang</h6>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <br><img src="assets/img/icons/sad.png" width="75%" alt="" class="mt-1 mr-5">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-12">
                                <div class="card-sembuh">
                                    <div class="row">
                                        <div class="col-lg-8 col-md-6 white"><br>
                                            <h6>Total Sembuh</h6>
                                            @foreach ($indonesia as $data)
                                                <h3>{{ $data['sembuh'] }}</h3>
                                            @endforeach 
                                            <h6>Orang</h6>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <br><img src="assets/img/icons/happy.png" width="75%" alt="" class="mt-1 mr-5">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-12">
                                <div class="card-meninggal">
                                    <div class="row">
                                        <div class="col-lg-8 col-md-6 white"><br>
                                            <h6>Total Meninggal</h6>
                                            @foreach ($indonesia as $data)
                                                <h3>{{ $data['meninggal'] }}</h3>
                                            @endforeach 
                                            <h6>Orang</h6>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <br><img src="assets/img/icons/cry.png" width="75%" alt="" class="mt-1 mr-5">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>                    
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Hero -->

<section id="services" class="services section-bg">
    <div class="container" data-aos="fade-up">

        <!-- DataTables-->
        <div class="card shadow mb-5">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Kasus Virus Corona di Indonesia</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr align="center">
                      <th>No</th>
                      <th>Provinsi</th>
                      <th>Positif</th>
                      <th>Sembuh</th>
                      <th>Meninggal</th>
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
          <!-- End of Datatables -->

          <br><br>

          <div class="row">
            <div class="col-lg-6">
                <!-- Project Card Example -->
                <div class="card shadow mb-4" style="height: 340px;">
                    <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Progress Bar</h6>
                    </div>
                    <div class="card-body">                    
                        <h4 class="small font-weight-bold">Sembuh<span class="float-right"><?= round($persentaseSembuh) ?>%</span></h4>
                        <div class="progress mb-4">
                            <div class="progress-bar" role="progressbar" style="width: <?= round($persentaseSembuh) ?>%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <h4 class="small font-weight-bold">Meninggal<span class="float-right"><?= round($persentaseMeninggal) ?>%</span></h4>
                        <div class="progress mb-4">
                            <div class="progress-bar" role="progressbar" style="width: <?= round($persentaseMeninggal) ?>%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Diagram</h6>
                    </div>
                    <div class="card-body">          
                        <canvas id="myChart2"></canvas>                        
                    </div>
                </div>                
            </div>
          </div>

    </div>
</section>

@include('components.footer')


<!-- Line Chart JS -->
<script>
    var data = new Array();

    $.ajaxSetup({
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
    });
    
    $.ajax({
        url: "/get-data-indo",
        type: 'POST',
        dataType: 'json',
        success: function(result) {
            data = result;
            var ctx = document.getElementById('myChart').getContext('2d');
            var myChart = new Chart(ctx, {
                type: 'line',
                data: {
                    labels: data['dateConfirmed'],
                    datasets: [{
                        label: 'Kenaikan',
                        data: data['newConfirmed'],
                        backgroundColor: [
                            'rgba(0, 0, 0, 0.1)'
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

     $.ajax({
        url: "/get-kasus-indo",
        type: 'POST',
        dataType: 'json',
        success: function(result) {
            data = result;
            var ctx = document.getElementById('myChart2').getContext('2d');
            var myChart = new Chart(ctx, {
                type: 'pie',
                data: {
                    labels: ['Positif', 'Sembuh', 'Meninggal'],
                    datasets: [{
                        label: '# of Votes',
                        data: [ 
                            data['positif'],
                            data['sembuh'],
                            data['meninggal']
                        ],
                        backgroundColor: [
                            'rgba(255, 238, 7, 1)',
                            'rgb(49, 202, 54, 1)',                    
                            'rgba(255, 0, 0, 1)'
                            
                        ],
                        // borderColor: [
                        //     'rgb(246, 194, 62, 1)',
                        //     'rgb(231, 74, 60, 1)',
                        //     'rgb(29, 201, 138, 1)'
                        // ],
                        borderWidth: 2
                    }]
                }
            });
        },
        });


</script>

<script type="text/javascript">

    

</script>

@endsection