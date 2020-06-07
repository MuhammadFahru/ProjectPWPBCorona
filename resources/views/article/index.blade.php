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
				<div class="col-md-8 hot-post-left">

					{{-- FOREACH DISINI UNTUK MEMUNCULKAN 1 ARTICLE PALING BARU --}}					

					<!-- post -->
					<div class="post post-thumb">
						<a class="post-img" href="/detail-article"><img src="assets/article/img/hot-post-1.jpg" width="100%" height="500" alt=""></a>
						<div class="post-body">
							<div class="post-category">
								<a href="category.html">Lifestyle</a>
							</div>
							<h3 class="post-title title-lg"><a href="/detail-article">Postea senserit id eos, vivendo periculis ei qui</a></h3>
							<ul class="post-meta">
								<li><a href="author.html">John Doe</a></li>
								<li>20 April 2018</li>
							</ul>
						</div>
					</div>
					<!-- /post -->

				</div>

				<div class="col-md-4 hot-post-right">

					{{-- FOREACH DISINI UNTUK MEMUNCULKAN 2 ARTICLE TERBARU SETLAH ARTICLE PERTAMA  --}}

					<!-- post -->
					<div class="post post-thumb">
						<a class="post-img" href="/detail-article"><img src="assets/article/img/hot-post-2.jpg" width="100%" height="247" alt=""></a>
						<div class="post-body">
							<div class="post-category">
								<a href="category.html">Lifestyle</a>
							</div>
							<h3 class="post-title"><a href="/detail-article">Sed ut perspiciatis, unde omnis iste natus error sit</a></h3>
							<ul class="post-meta">
								<li><a href="author.html">John Doe</a></li>
								<li>20 April 2018</li>
							</ul>
						</div>
					</div>
					<!-- /post -->

					<!-- post -->
					<div class="post post-thumb">
						<a class="post-img" href="/detail-article"><img src="assets/article/img/hot-post-3.jpg" width="100%" height="247" alt=""></a>
						<div class="post-body">
							<div class="post-category">
								<a href="category.html">Fashion</a>
								<a href="category.html">Lifestyle</a>
							</div>
							<h3 class="post-title"><a href="/detail-article">Mel ut impetus suscipit tincidunt. Cum id ullum laboramus persequeris.</a></h3>
							<ul class="post-meta">
								<li><a href="author.html">John Doe</a></li>
								<li>20 April 2018</li>
							</ul>
						</div>
					</div>
					<!-- /post -->

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