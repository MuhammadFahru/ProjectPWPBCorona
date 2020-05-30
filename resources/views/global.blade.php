@extends('components.master')
@section('title', 'Data Global')
@section('global','active')
@section('content')

@include('components.navbar')

<!-- ======= Hero Section ======= -->
<section id="indonesia" >        
    <div class="container">
        <div class="row text-center mb-4">
            <div class="col-lg-12 col-md-12 white">
                <h3 class="title mt-min">Live Data Penyebaran Virus Corona di Dunia</h3>
            </div>
        </div>
        <div class="row text-center">
            <div class="col-lg-12 col-md-12 white">
                <div class="card mb-5">
                    <div class="card-header">
                        <h5 class="black">Peta Penyebaran Virus Corona di Seluruh Dunia</h5>
                    </div>
                    <div class="card-body">
                        <iframe src="https://www.google.com/maps/d/embed?mid=1S0vCi3BA-7DOCS13MomK7KebkPsvYl8C" width="100%" height="370"></iframe>
                    </div>                    
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Hero -->


<section id="services" class="services section-bg">
    <div class="container" data-aos="fade-up">

        <div class="row text-center mb-5">
            <div class="col-lg-4 col-md-12">
                <div class="card-positif">
                    <div class="row">
                        <div class="col-lg-8 col-md-6 white"><br>
                            <h6>Total Positif</h6>
                            <h3>{{ $positif['value'] }}</h3>
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
                            <h3>{{ $sembuh['value'] }}</h3>
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
                            <h3>{{ $meninggal['value'] }}</h3>
                            <h6>Orang</h6>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <br><img src="assets/img/icons/cry.png" width="75%" alt="" class="mt-1 mr-5">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <br><br>
        
        <!-- DataTables-->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Kasus Virus Corona di Dunia</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr align="center">
                      <th>No</th>
                      <th>Negara</th>
                      <th>Positif</th>
                      <th>Sembuh</th>
                      <th>Meninggal</th>
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
          <!-- End of Datatables -->

          <div class="row">

            <div class="col-lg-8">
                <!-- Project Card Example -->
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Projects</h6>
                    </div>
                    <div class="card-body">
                    <h4 class="small font-weight-bold">Server Migration <span class="float-right">20%</span></h4>
                    <div class="progress mb-4">
                        <div class="progress-bar bg-danger" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <h4 class="small font-weight-bold">Sales Tracking <span class="float-right">40%</span></h4>
                    <div class="progress mb-4">
                        <div class="progress-bar bg-warning" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <h4 class="small font-weight-bold">Customer Database <span class="float-right">60%</span></h4>
                    <div class="progress mb-4">
                        <div class="progress-bar" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <h4 class="small font-weight-bold">Payout Details <span class="float-right">80%</span></h4>
                    <div class="progress mb-4">
                        <div class="progress-bar bg-info" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <h4 class="small font-weight-bold">Account Setup <span class="float-right">Complete!</span></h4>
                    <div class="progress">
                        <div class="progress-bar bg-success" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                
            </div>

          </div>

    </div>
</section>

@include('components.footer')

@endsection