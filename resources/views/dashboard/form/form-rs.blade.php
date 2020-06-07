@extends('components.dashboard')
@section('rs','active')
@section('content')
<div class="section__content section__content--p30">
    <div class="container-fluid">          

        <div class="card shadow" style="padding:40px;">      
            <h2 class="text-center mb-5">Form Data Rumah Sakit Rujukan</h2>

            <div>
                 @if ($errors->any())
                  <div class="alert alert-danger">
                     <ul>
                        @foreach ($errors->all() as $error)
                         <li>{{ $error }}</li>
                        @endforeach
                     </ul>
             </div><br />
            @endif

            <form action="{{ url('/rs',@$rumah_sakit->id) }}" method="POST" role="form" enctype='multipart/form-data'>
            @csrf
            
                <div class="form-group row mb-4">
                    <label class="col-lg-3 col-form-label form-control-label">Nama Rumah Sakit</label>
                    <div class="col-lg-9">
                        <input class="form-control" type="text" name="hospital_name" value="{{ old('hospital_name', @$rumah_sakit->hospital_name) }}">
                    </div>
                </div>
                <div class="form-group row mb-4">
                    <label class="col-lg-3 col-form-label form-control-label">Provinsi</label>
                    <div class="col-lg-9">
                       <select name="province" class="form-control" id="exampleFormControlSelect1">
                            @foreach($province as $prov)
                                <option value="{{ $prov['id'] }}">{{ $prov['province_name'] }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group row mb-4">
                    <label class="col-lg-3 col-form-label form-control-label">Alamat</label>
                    <div class="col-lg-9">
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="address">{{ old('address', @$rumah_sakit->address) }}</textarea>
                    </div>
                </div>
                <div class="form-group row mb-4">
                    <label class="col-lg-3 col-form-label form-control-label">No Telepon</label>
                    <div class="col-lg-9">
                        <input class="form-control" type="text" name="phone_number" value="{{ old('phone_number', @$rumah_sakit->phone_number) }}">
                    </div>
                </div>
                <div class="form-group row mb-4">
                    <label class="col-lg-3 col-form-label form-control-label">Logo Rumah Sakit</label>
                    <div class="col-lg-9">
                        <input type="file" id="" name="logo" value="{{ old('logo', @$rumah_sakit->logo) }}">
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