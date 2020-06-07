@extends('components.dashboard')
@section('rs','active')
@section('content')
<div class="section__content section__content--p30">
    <div class="container-fluid">          

        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-lg-10">
                        <h3>Data Rumah Sakit Rujukan di Indonesia</h3>
                    </div>
                    <div class="col-lg-2">
                        <a href="/form-rs" class="btn btn-success ml-3"><i class="fas fa-plus mr-2"></i>Add Data</a>
                    </div>
                </div>                
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                      <thead>
                        <tr align="center">
                          <th style="width: 60px;"><h5>No</h5></th>
                          <th style="width: 50px;"><h5>Logo</h5></th>
                          <th><h5>Nama</h5></th>
                          <th><h5>Provinsi</h5></th>
                          <th><h5>Alamat</h5></th>
                          <th><h5>Telepon</h5></th>
                          <th style="width: 150px;"><h5>Action</h5></th>
                        </tr>
                      </thead>
                      <tbody>        
                        <?php for( $i = 1; $i <= 2; $i++ ) { ?>
                            <tr align="center">
                                <td><h6><br>{{ $i }}</h6></td>
                                <td><img src="assets/img/logoRumahSakit/JawaTimur/soedonoMadiun.png" alt=""></td>
                                <td><h6><br>RS Soedono Madiun</h6></td>
                                <td><h6><br>Riau</h6></td>
                                <td><h6><br>Jl. Dr. Sutomo No.59, Kartoharjo</h6></td>
                                <td><h6><br>(0761) 21618</h6></td>
                                <td>
                                    <a href="" class="btn btn-secondary mt-3" style="width: 80px;">Edit</a>
                                    <a href="" class="btn btn-danger mt-3" style="width: 80px;">Delete</a>
                                </td>
                            </tr>
                        <?php } ?>
                      </tbody>
                    </table>
                  </div>
            </div>
        </div>

    </div>
</div>
@endsection