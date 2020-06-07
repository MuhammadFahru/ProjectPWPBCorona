@extends('components.dashboard')
@section('rs','active')
@section('content')
<div class="section_content section_content--p30">
    <div class="container-fluid">          

        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-lg-10">
                        <h3>Data Rumah Sakit Rujukan di Indonesia</h3>
                    </div>
                    <div class="col-lg-2">
                    <a href="{{ route('rs') }}"  class="btn btn-success ml-3"><i class="fas fa-plus mr-2"></i>Add Data</a>
                    </div>
                </div>                
            </div>
            @if(session('success'))
                <div class="alert alert-success mx-3">
                    <center> {{ session('success') }} <i class="ml-1 fas fa-check"></i></center>
                </div>
            @endif

            @if(session('error'))
                <div class="alert alert-error col-md-3 mx-5 text-wrap">
                   <center> {{ session('error') }} </center> <i class="ml-1 fas fa-times"></i>
                </div>
            @endif
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
                       @foreach($hospitals as $hospital)
                            <tr align="center">
                                <td><h6><br>{{ $loop->iteration }}</h6></td>
                                <td><img src="{{ asset('assets/img/logoRumahSakit/'.$hospital['province'].'/'.$hospital['logo']) }}" alt=""></td>
                                <td><h6><br>{{ $hospital['hospital_name'] }}</h6></td>
                                <td><h6><br>{{ $hospital['province'] }}</h6></td>
                                <td><h6><br>{{ $hospital['address'] }}</h6></td>
                                <td><h6><br>{{ $hospital['phone_number'] }}</h6></td>

                                <td>
                                    <form action="{{ url('/rs',@$hospital->id)}}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <a href="{{ url('/rs/'.@$hospital->id.'/edit')}}" class="btn btn-secondary mt-3" style="width: 80px;">Edit</a>
                                        <button href="" class="btn btn-danger mt-3" style="width: 80px;">Delete</button>
                                    </form>
                                </td>
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