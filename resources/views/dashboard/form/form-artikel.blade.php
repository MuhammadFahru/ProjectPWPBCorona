@extends('components.dashboard')
@section('article','active')
@section('content')
<div class="section__content section__content--p30">
    <div class="container-fluid">
        
        <div class="card p-5">
            <h2 class="text-center mb-4">Form Data Rumah Sakit Rujukan</h2>
            <form role="form">
                <div class="form-group mb-4">
                    <label for="title">Cover</label><br>
                    <img src="/assets/img/logo-web3.png" width="20%" id="output"><br>
                    <div class="custom-file mt-4" style="width:40%">
                        <input type="file" class="custom-file-input" id="image" name="image" onchange="loadFile(event)" accept=".jpg,.png,.jpeg">
                        <label class="custom-file-label" for="image">Choose file</label>
                    </div>
                </div>
                <div class="form-group mb-4">
                    <label for="title">Judul</label>
                    <input type="text" name="title" id="title" class="form-control">
                </div>
                <div class="form-group mb-4">
                    <label for="summary-ckeditor">Konten</label>
                    <textarea name="content" id="summary-ckeditor" class="form-control" ></textarea>
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-success" style="width: 10%;" value="Submit">
                    <a href="/article" class="btn btn-danger" style="width: 10%;">Back</a>
                </div>
            </form>
        </div>       

    </div>
</div>
@endsection