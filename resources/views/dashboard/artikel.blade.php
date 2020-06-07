@extends('components.dashboard')
@section('article','active')
@section('content')
<div class="section__content section__content--p30">
    <div class="container-fluid">
        
        <div class="card p-4">
            <div class="row mt-3">
                <div class="col-lg-10">
                    <h3 class="mb-4">Daftar Artikel Yang Berita Yang Telah Diupload</h3>
                </div>
                <div class="col-lg-2">
                    <a href="/form-article" class="btn btn-success ml-3"><i class="fas fa-plus mr-2"></i>Add Data</a>
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

            @foreach($articles as $article)
            <div class="card p-3 border-left-primary mb-3 mt-4">
                <div class="row mt-3">
                    <div class="col-lg-9">
                        <h4>{{ $article['title'] }}</h4>     
                        <p>{{ $article['created_at'] }}</p>               
                    </div>
                    <div class="col-lg-3">
                        <form method="post" action="{{ url('/article/'.$article->id) }}">
                            @method('DELETE')
                            @csrf
                            <a href="{{ url('/article/'.$article->id.'/edit') }}" class="btn btn-secondary ml-3 mt-3" style="width: 80px;">Edit</a>
                            <button class="btn btn-danger mt-3" style="width: 80px;">Delete</button>
                        </form> 
                    </div>
                </div>
            </div>
            @endforeach
        </div>       

    </div>
</div>
@endsection