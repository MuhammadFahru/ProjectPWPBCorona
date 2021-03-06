@extends('components.master')
@section('title', 'Article Page')
@section('assets')
    <!-- Bootstrap -->
	<link type="text/css" rel="stylesheet" href="{{ URL::asset('assets/article/css/bootstrap.min.css') }}" />
	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="{{ URL::asset('assets/article/css/style.css') }}" />
@endsection
@section('article','active')
@section('content')

    <!-- PAGE HEADER -->
		<div id="post-header" class="page-header">
			<div class="page-header-bg" style="background-image: url('{{ URL::asset('assets/article/img/'.$article['headline_picture']) }}'); background-size: cover;" data-stellar-background-ratio="0.5"></div>
			<div class="container">
				<div class="row">
					<div class="col-md-10">
						<div class="white">
							<a class="btn btn-primary mb-5" style="background-color: #6221EA;" href="/article-page"><i class="fas fa-angle-double-left fa-lg mr-2"></i>Back</a>
						</div>
						<h1 style="text-align: left;">{{ $article['title'] }}</h1>
						<ul class="post-meta">
							<li>{{ getRefinedDate($article['created_at']," ") }}</li>
							<li><i class="fa fa-comments"></i> 3</li>
							<li><i class="fa fa-eye"></i> 807</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
    <!-- /PAGE HEADER -->
    
    <!-- section -->
	<div class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<div class="col-md-8">

					<!-- post content -->
					<div class="section-row">
						<h3>{{ $article['title'] }}</h3>
						<p class="left-align">{!! nl2br($article['content']) !!}</p>
					</div>
					<!-- /post content -->

					<!-- post nav -->
					<div class="section-row">
						<div class="post-nav">
							
							<?php if (!empty($prev['id'])): ?>
							<div class="prev-post">
								<a class="post-img" href="{{ url('/article',$prev['id']) }}"><img src="{{ url('assets/article/img',$prev['headline_picture']) }}" alt=""></a>
								<h3 class="post-title"><a href="{{ url('/article',$prev['id']) }}">{{ $prev['title'] }}</a></h3>
								<span>Previous post</span>
							</div>
							<?php endif ?>

							<?php if (!empty($next['id'])): ?>
							<div class="next-post">
								<a class="post-img" href="{{ url('/article',$next['id']) }}"><img src="{{ url('assets/article/img',$next['headline_picture']) }}" alt=""></a>
								<h3 class="post-title"><a href="{{ url('/article',$next['id']) }}">{{ $next['title'] }}</a></h3>
								<span>Next post</span>
							</div>
							<?php endif ?>

						</div>
					</div>
					<!-- /post nav  -->										

					<!-- post comments -->
					<div class="section-row">
						<div class="section-title">
							<h3 class="title">3 Comments</h3>
						</div>
						<div class="post-comments">
							<!-- comment -->
							<div class="media">
								<div class="media-left">
									<img class="media-object" src="{{ url('assets/img/icons/ava1.png') }} " alt="">
								</div>
								<div class="media-body">
									<div class="media-heading">
										<h4>Diazs Martiansyah</h4>
										<span class="time">5 min ago</span>
									</div>
									<p style="text-align: left;">Artikel yang bagus, sangat informatif dan datanya akurat.</p>
									<a href="#" class="reply">Reply</a>
									<!-- comment -->
									<div class="media media-author">
										<div class="media-left">
											<img class="media-object" src="{{ url('assets/img/icons/ava5.png') }}" alt="">
										</div>
										<div class="media-body">
											<div class="media-heading">
												<h4>Muhammad Fahru</h4>
												<span class="time">5 min ago</span>
											</div>
											<p style="text-align: left;">Terima kasih atas feedbacknya, jangan lupa share ya semoga bermanfaat.</p>
											<a href="#" class="reply">Reply</a>
										</div>
									</div>
									<!-- /comment -->
								</div>
							</div>
							<!-- /comment -->

							<!-- comment -->
							<div class="media">
								<div class="media-left">
									<img class="media-object" src="{{ url('assets/img/icons/ava3.png') }}" alt="">
								</div>
								<div class="media-body">
									<div class="media-heading">
										<h4>Dean Beniqno</h4>
										<span class="time">5 min ago</span>
									</div>
									<p style="text-align: left;">Sangat membantu dalam mencari informasi tentang Virus Corona</p>
									<a href="#" class="reply">Reply</a>
								</div>
							</div>
							<!-- /comment -->
						</div>
					</div>
					<!-- /post comments -->

					<!-- post reply -->
					<div class="section-row">
						<div class="section-title">
							<h3 class="title">Leave a reply</h3>
						</div>
						<form class="post-reply">
							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
										<textarea class="input" name="message" placeholder="Message"></textarea>
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<input class="input" type="text" name="name" placeholder="Name">
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<input class="input" type="email" name="email" placeholder="Email">
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<input class="input" type="text" name="website" placeholder="Website">
									</div>
								</div>
								<div class="col-md-12">
									<button class="primary-button">Submit</button>
								</div>

							</div>
						</form>
					</div>
					<!-- /post reply -->
				</div>
				<div class="col-md-4">										

					<!-- post widget -->
					<div class="aside-widget">
						<div class="section-title">
							<h2 class="title">Popular Posts</h2>
						</div>

						
						@foreach($articles as $article)
						
						<!-- post -->
						<div class="post post-widget">
							<a class="post-img" href="{{ url('/article',$article['id']) }}"><img src="{{ url('assets/article/img',$article['headline_picture']) }}" alt=""></a>
							<div class="post-body">								
								<h3 class="post-title"><a href="{{ url('/article',$article['id']) }}">{{ $article['title'] }}</a></h3>
							</div>
						</div>
						<!-- /post -->
						@endforeach
						
					</div>
					<!-- /post widget -->
					
				</div>
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
    <!-- /SECTION -->

@include('components.footer')	

@endsection

@section('js')
    <!-- jQuery Plugins -->
	<script src="{{ URL::asset('assets/article/js/jquery.min.js') }}"></script>
	<script src="{{ URL::asset('assets/article/js/bootstrap.min.js') }}"></script>
	<script src="{{ URL::asset('assets/article/js/jquery.stellar.min.js') }}"></script>
	<script src="{{ URL::asset('assets/article/js/main.js') }}"></script>