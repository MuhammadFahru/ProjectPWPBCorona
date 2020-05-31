@extends('components.dashboard')
@section('rs','active')
@section('content')
<div class="section__content section__content--p30">
    <div class="container-fluid">          

        <div class="card shadow" style="padding:40px;">      
            <h2 class="text-center mb-5">Form Data Rumah Sakit Rujukan</h2>
            <form role="form">
                <div class="form-group row mb-4">
                    <label class="col-lg-3 col-form-label form-control-label">Nama Rumah Sakit</label>
                    <div class="col-lg-9">
                        <input class="form-control" type="text" value="" >
                    </div>
                </div>
                <div class="form-group row mb-4">
                    <label class="col-lg-3 col-form-label form-control-label">Provinsi</label>
                    <div class="col-lg-9">
                        <input class="form-control" type="text" value="" >
                    </div>
                </div>
                <div class="form-group row mb-4">
                    <label class="col-lg-3 col-form-label form-control-label">Alamat</label>
                    <div class="col-lg-9">
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                </div>
                <div class="form-group row mb-4">
                    <label class="col-lg-3 col-form-label form-control-label">No Telepon</label>
                    <div class="col-lg-9">
                        <input class="form-control" type="text" value="" >
                    </div>
                </div>
                <div class="form-group row mb-4">
                    <label class="col-lg-3 col-form-label form-control-label">Logo Rumah Sakit</label>
                    <div class="col-lg-9">
                        <input type="file" name="" id="">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-lg-3 col-form-label form-control-label"></label>
                    <div class="col-lg-9">
                        <input type="submit" class="btn btn-success" style="width: 12%;" value="Submit">
                        <a href="/rs-rujukan" class="btn btn-danger" style="width: 12%;">Back</a>
                    </div>
                </div>
            </form>
        </div>

    </div>
</div>
@endsection