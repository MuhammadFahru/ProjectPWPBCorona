@extends('components.master')
@section('title', 'Article Page')
@section('article','active')
@section('content')

@include('components.navbar')

<!-- ======= Hero Section ======= -->
<section id="indonesia" >     
    <div class="container mt-min">
        <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
              <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <center>
                    <img src="/assets/img/portfolio/a.png" width="90%" class="d-block" alt="...">
                </center>                
                <div class="carousel-caption d-none d-md-block">
                  <h5>First Konten</h5>
                  <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                  <a href="" class="btn btn-primary mt-3">Visit</a>
                </div>
              </div>
              <div class="carousel-item">
                <center>
                    <img src="/assets/img/portfolio/b.png" width="90%" class="d-block" alt="...">
                </center>                
                <div class="carousel-caption d-none d-md-block">
                  <h5>Second Konten</h5>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                  <a href="" class="btn btn-primary mt-3">Visit</a>
                </div>
              </div>
              <div class="carousel-item">
                <center>
                    <img src="/assets/img/portfolio/c.png" width="90%" class="d-block" alt="...">
                </center>                
                <div class="carousel-caption d-none d-md-block">
                  <h5>Third Konten</h5>
                  <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                  <a href="" class="btn btn-primary mt-3">Visit</a>
                </div>
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
        </div>
    </div>       
</section>
<!-- End Hero -->

@endsection