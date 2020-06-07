@extends('components.dashboard')
@section('article','active')
@section('content')
<div class="section__content section__content--p30">
    <div class="container-fluid">
        
        <div class="card p-5">
            <h2 class="text-center mb-4">Form Data Artikel</h2>
                @if($errors->any())
                  <div class="alert alert-danger">
                     <ul>
                        @foreach ($errors->all() as $error)
                         <li>{{ $error }}</li>
                        @endforeach
                     </ul>
                 </div><br />
                @endif

                @if(session('error'))
                <div class="alert alert-danger col-md-5 mx-5 text-wrap">
                   <center> <i class="ml-1 fas fa-times"></i> {{ session('error') }}  </center> 
                </div>
                 @endif

                <form role="form" action=" {{ url('/article',@$article->id) }} " method="POST" enctype="multipart/form-data">
                @if(isset($article))
                    @method('PATCH')
                @endif
                @csrf 
                <div class="form-group mb-4">
                      <label class="mb-4" for="title">Cover Post</label><br>
                        <img src="{{ asset('/assets/article/img/')}}<?= !empty($article->headline_picture)? "/".$article->headline_picture :'/logo-web3.png' ?>" width="20%" id="output"><br>
                        <label class="mt-4" for="title">* recomended ( 1920 x 1080 pixel )</label><br>
                        <div class="custom-file mt-2" style="width:40%">
                            <input type="file" class="custom-file-input" id="image" name="headline_picture" onchange="loadFile(event)" accept=".jpg,.png,.jpeg">
                            <label class="custom-file-label" for="image">Choose file</label>
                        </div>
                </div>
                <div class="form-group mb-4">
                    <label for="title">Judul</label>
                    <input type="text" name="title" id="title" class="form-control" value="{{ old('title',@$article->title) }}">
                </div>
                <div class="form-group mb-4">
                    <label for="summary-ckeditor">Konten</label>
                    <textarea name="content" id="summary-ckeditor" class="form-control ckeditor"> {{ old('title',@$article->content) }}</textarea>
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-success" style="width: 10%;" value="Submit">
                    <a href="{{ url()->previous() }}" class="btn btn-danger" style="width: 10%;">Back</a>
                </div>
            </form>
        </div>       

    </div>
</div>

<script>
  var konten = document.getElementById("summary-ckeditor");
    CKEDITOR.replace(konten,{
    language:'en-gb',
    customConfig : 'config.js',
    toolbar : 'simple',
    filebrowserUploadUrl: "/article/upload_ckeditor",
    filebrowserBrowseUrl: "/article/browse_ckeditor"
  });
  CKEDITOR.config.allowedContent = true;
</script>

@endsection