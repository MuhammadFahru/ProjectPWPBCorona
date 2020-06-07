@extends('components.master')
@section('title', 'Article Page')
@section('assets')
    <!-- Bootstrap -->
	<link type="text/css" rel="stylesheet" href="assets/article/css/bootstrap.min.css" />
	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="assets/article/css/style.css" />
@endsection
@section('article','active')
@section('content')

@include('components.navbar')

<!-- ======= Hero Section ======= -->
<section id="indonesia" >     
    
    <!-- SECTION -->
	<div class="section mt-min">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div id="hot-post" class="row hot-post">

					<!-- post -->
					<?php if (isset($article[0])): ?>
					<div class="col-md-8 hot-post-left">
						<div class="post post-thumb">
							<a class="post-img" href="/detail-article"><img width="100%" height="500" src="assets/article/img/{{ $article[0]['headline_picture'] }}" alt=""></a>
							<div class="post-body">
								<div class="post-category">
									<a href="/article/{{ $article[0]['id'] }}">Hot Article</a>
								</div>
								<h3 class="post-title title-lg"><a href="/detail-article">{{ $article[0]['title'] }}</a></h3>
								<ul class="post-meta">
									<li><a href="/article">{{ $article[0]['author'] }}</a></li>
									<li>{{ $article[0]['created_at'] }}</li>
								</ul>
							</div>
						</div>
						<!-- /post -->
					</div>
					<?php endif ?>


				<div class="col-md-4 hot-post-right">
					<?php if (isset($article[1])): ?>
					<!-- post -->
					<div class="post post-thumb">
						<a class="post-img" href="/detail-article"><img src="assets/article/img/{{ $article[1]['headline_picture'] }}" alt="" width="100%" height="247"></a>
						<div class="post-body">
							<div class="post-category">
								<a href="/article">Hot Article</a>
							</div>
							<h3 class="post-title"><a href="/detail-article">{{ $article[1]['title'] }}</a></h3>
							<ul class="post-meta">
								<li><a href="author.html">{{ $article[1]['author'] }}</a></li>
								<li>{{ $article[1]['created_at'] }}</li>
							</ul>
						</div>
					</div>
					<!-- /post -->
					<?php endif ?>

					<?php if (isset($article[2])) : ?>
					
					<!-- post -->
					<div class="post post-thumb">
						<a class="post-img" href="/detail-article"><img src="assets/article/img/{{ $article[2]['headline_picture'] }}" alt="" width="100%" height="247"></a>
						<div class="post-body">
							<div class="post-category">
								<a href="category.html">Fashion</a>
								<a href="category.html">Lifestyle</a>
							</div>
							<h3 class="post-title"><a href="/detail-article">{{ $article[2]['title'] }}</a></h3>
							<ul class="post-meta">
								<li><a href="author.html">{{ $article[2]['author'] }}</a></li>
								<li>{{ $article[2]['created_at'] }}</li>
							</ul>
						</div>
					</div>
					<!-- /post -->
					<?php endif ?>
				</div>
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /SECTION -->

</section>
<!-- End Hero -->

<!-- ======= Services Section ======= -->
<section id="services" class="services section-bg">

    <!-- SECTION -->
	<div class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<div class="col-md-12">					
                    
					<!-- row -->
					<div class="row">
						<div class="col-md-12">
							<div class="section-title">
								<h2 class="title">All Articles</h2>
							</div>
						</div>

						
						{{-- FOREACH DISINI UNTUK MEMUNCULKAN SELURUH ARTICLE --}}

						<!-- post -->
						<div class="col-md-4">
							<div class="post post-sm">
								<a class="post-img" href="/detail-article"><img src="assets/article/img/post-9.jpg" alt=""></a>
								<div class="post-body">
									<div class="post-category">
										<a href="category.html">Lifestyle</a>
									</div>
									<h3 class="post-title title-sm"><a href="/detail-article">Mel ut impetus suscipit tincidunt. Cum id ullum laboramus persequeris.</a></h3>
									<ul class="post-meta">
										<li><a href="author.html">John Doe</a></li>
										<li>20 April 2018</li>
									</ul>
								</div>
							</div>
						</div>
						<!-- /post -->

						<!-- post -->
						<div class="col-md-4">
							<div class="post post-sm">
								<a class="post-img" href="/detail-article"><img src="assets/article/img/post-8.jpg" alt=""></a>
								<div class="post-body">
									<div class="post-category">
										<a href="category.html">Fashion</a>
										<a href="category.html">Lifestyle</a>
									</div>
									<h3 class="post-title title-sm"><a href="/detail-article">Postea senserit id eos, vivendo periculis ei qui</a></h3>
									<ul class="post-meta">
										<li><a href="author.html">John Doe</a></li>
										<li>20 April 2018</li>
									</ul>
								</div>
							</div>
						</div>
						<!-- /post -->

						<!-- post -->
						<div class="col-md-4">
							<div class="post post-sm">
								<a class="post-img" href="/detail-article"><img src="assets/article/img/post-11.jpg" alt=""></a>
								<div class="post-body">
									<div class="post-category">
										<a href="category.html">Technology</a>
									</div>
									<h3 class="post-title title-sm"><a href="/detail-article">Sed ut perspiciatis, unde omnis iste natus error sit</a></h3>
									<ul class="post-meta">
										<li><a href="author.html">John Doe</a></li>
										<li>20 April 2018</li>
									</ul>
								</div>
							</div>
						</div>
						<!-- /post -->

						<!-- post -->
						<div class="col-md-4">
							<div class="post post-sm">
								<a class="post-img" href="/detail-article"><img src="assets/article/img/post-11.jpg" alt=""></a>
								<div class="post-body">
									<div class="post-category">
										<a href="category.html">Technology</a>
									</div>
									<h3 class="post-title title-sm"><a href="/detail-article">Sed ut perspiciatis, unde omnis iste natus error sit</a></h3>
									<ul class="post-meta">
										<li><a href="author.html">John Doe</a></li>
										<li>20 April 2018</li>
									</ul>
								</div>
							</div>
						</div>
						<!-- /post -->

						<!-- post -->
						<div class="col-md-4">
							<div class="post post-sm">
								<a class="post-img" href="/detail-article"><img src="assets/article/img/post-11.jpg" alt=""></a>
								<div class="post-body">
									<div class="post-category">
										<a href="category.html">Technology</a>
									</div>
									<h3 class="post-title title-sm"><a href="/detail-article">Sed ut perspiciatis, unde omnis iste natus error sit</a></h3>
									<ul class="post-meta">
										<li><a href="author.html">John Doe</a></li>
										<li>20 April 2018</li>
									</ul>
								</div>
							</div>
						</div>
						<!-- /post -->

						<!-- post -->
						<div class="col-md-4">
							<div class="post post-sm">
								<a class="post-img" href="/detail-article"><img src="assets/article/img/post-11.jpg" alt=""></a>
								<div class="post-body">
									<div class="post-category">
										<a href="category.html">Technology</a>
									</div>
									<h3 class="post-title title-sm"><a href="/detail-article">Sed ut perspiciatis, unde omnis iste natus error sit</a></h3>
									<ul class="post-meta">
										<li><a href="author.html">John Doe</a></li>
										<li>20 April 2018</li>
									</ul>
								</div>
							</div>
						</div>
						<!-- /post -->

					</div>
					<!-- /row -->	

				</div>				
				<!-- /col -->	
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /SECTION -->

</section>

@include('components.footer')

@endsection

@section('js')
    <!-- jQuery Plugins -->
	<script src="assets/article/js/jquery.min.js"></script>
	<script src="assets/article/js/bootstrap.min.js"></script>
	<script src="assets/article/js/jquery.stellar.min.js"></script>
	<script src="assets/article/js/main.js"></script>
@endsection