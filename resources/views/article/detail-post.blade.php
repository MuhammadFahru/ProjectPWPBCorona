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

    <!-- PAGE HEADER -->
		<div id="post-header" class="page-header">
			<div class="page-header-bg" style="background-image: url('assets/article/img/header-1.jpg');" data-stellar-background-ratio="0.5"></div>
			<div class="container">
				<div class="row">
					<div class="col-md-10">
						<div class="white">
							<a class="btn btn-primary mb-5" style="background-color: #6221EA;" href="/article-page"><i class="fas fa-angle-double-left fa-lg mr-2"></i>Back</a>
						</div>
						<h1 style="text-align: left;">Virus Corona ( Judul )</h1>
						<ul class="post-meta">
							<li>20 April 2018</li>
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
						<h3>Virus Corona ( Judul )</h3>
						<p class="left-align">Lorem ipsum dolor sit amet, mea ad idque detraxit, cu soleat graecis invenire eam. Vidisse suscipit liberavisse has ex, vocibus patrioque vim et, sed ex tation reprehendunt. Mollis volumus no vix, ut qui clita habemus, ipsum senserit est et. Ut has soluta epicurei mediocrem, nibh nostrum his cu, sea clita electram reformidans an.</p>
						<p class="left-align">Est in saepe accusam luptatum. Purto deleniti philosophia eum ea, impetus copiosae id mel. Vis at ignota delenit democritum, te summo tamquam delicata pro. Utinam concludaturque et vim, mei ullum intellegam ei. Eam te illum nostrud, suas sonet corrumpit ea per. Ut sea regione posidonium. Pertinax gubergren ne qui, eos an harum mundi quaestio.</p>
						<p class="left-align">Nihil persius id est, iisque tincidunt abhorreant no duo. Eripuit placerat mnesarchum ius at, ei pro laoreet invenire persecuti, per magna tibique scriptorem an. Aeque oportere incorrupte ius ea, utroque erroribus mel in, posse dolore nam in. Per veniam vulputate intellegam et, id usu case reprimique, ne aperiam scaevola sed. Veritus omnesque qui ad. In mei admodum maiorum iracundia, no omnis melius eum, ei erat vivendo his. In pri nonumes suscipit.</p>
						<p class="left-align">Sit nulla quidam et, eam ea legimus deserunt neglegentur. Et veri nostrud vix, meis minimum atomorum ex sea, stet case habemus mea no. Ut dignissim dissentiet his, mei ea delectus delicatissimi, debet dissentiunt te duo. Sonet partiendo et qui, pro et veri solet singulis. Vidit viderer eleifend ad nam. Minimum eligendi suscipit ius et, vis ex laoreet detracto scripserit, at sumo sale solum pro.</p>						
						<p class="left-align">Mei cu diam sonet audiam, his ad impetus fuisset indoctum. Te sit altera qualisque, stet suavitate ne vel. Euismod suavitate duo eu, habemus rationibus neglegentur ei qui. Debet omittam ad usu, ex vero feugait oporteat eos, id usu sint numquam sententiae.</p>
						<p class="left-align">No possim singulis sea, dolores salutatus interpretaris eam ad. An singulis postulant his, an inermis urbanitas mel. Wisi veri noster eu est, diam ridens eum in. Omnium imperdiet patrioque quo in, est sumo persecuti abhorreant ei. Sed feugiat iracundia id, inermis percipit eu has.</p>
						<p class="left-align">In vidit homero ullamcorper his, ea mea senserit constituto, et alia idque congue sit. Postea percipit his ne. Probo movet noluisse in nam, sed ex utroque inermis corrumpit, oratio tation vix at. Usu aperiri assentior at, eam et melius iudicabit pertinacia.</p>
					</div>
					<!-- /post content -->

					<!-- post nav -->
					<div class="section-row">
						<div class="post-nav">
							<div class="prev-post">
								<a class="post-img" href="blog-post.html"><img src="assets/article/img/widget-8.jpg" alt=""></a>
								<h3 class="post-title"><a href="#">Artikel Sebelumnya ( Judul )</a></h3>
								<span>Previous post</span>
							</div>

							<div class="next-post">
								<a class="post-img" href="blog-post.html"><img src="assets/article/img/widget-10.jpg" alt=""></a>
								<h3 class="post-title"><a href="#">Article Selanjutnya ( Judul )</a></h3>
								<span>Next post</span>
							</div>
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
									<img class="media-object" src="assets/img/icons/ava1.png" alt="">
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
											<img class="media-object" src="assets/img/icons/ava5.png" alt="">
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
									<img class="media-object" src="assets/img/icons/ava3.png" alt="">
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

						{{-- FOREACH DISINI UNTUK MEMUNCULKAN ARTICLE TERBARU SEBANNYAK 6 ARTICLE --}}

						<!-- post -->
						<div class="post post-widget">
							<a class="post-img" href="blog-post.html"><img src="assets/article/img/widget-3.jpg" alt=""></a>
							<div class="post-body">								
								<h3 class="post-title"><a href="blog-post.html">Ne bonorum praesent cum, labitur persequeris definitionem quo cu?</a></h3>
							</div>
						</div>
						<!-- /post -->

						<!-- post -->
						<div class="post post-widget">
							<a class="post-img" href="blog-post.html"><img src="assets/article/img/widget-2.jpg" alt=""></a>
							<div class="post-body">																
								<h3 class="post-title"><a href="blog-post.html">Mel ut impetus suscipit tincidunt. Cum id ullum laboramus persequeris.</a></h3>
							</div>
						</div>
						<!-- /post -->

						<!-- post -->
						<div class="post post-widget">
							<a class="post-img" href="blog-post.html"><img src="assets/article/img/widget-4.jpg" alt=""></a>
							<div class="post-body">								
								<h3 class="post-title"><a href="blog-post.html">Postea senserit id eos, vivendo periculis ei qui</a></h3>
							</div>
						</div>
						<!-- /post -->

						<!-- post -->
						<div class="post post-widget">
							<a class="post-img" href="blog-post.html"><img src="assets/article/img/widget-5.jpg" alt=""></a>
							<div class="post-body">																
								<h3 class="post-title"><a href="blog-post.html">Sed ut perspiciatis, unde omnis iste natus error sit</a></h3>
							</div>
						</div>
						<!-- /post -->

						<!-- post -->
						<div class="post post-widget">
							<a class="post-img" href="blog-post.html"><img src="assets/article/img/widget-3.jpg" alt=""></a>
							<div class="post-body">								
								<h3 class="post-title"><a href="blog-post.html">Ne bonorum praesent cum, labitur persequeris definitionem quo cu?</a></h3>
							</div>
						</div>
						<!-- /post -->

						<!-- post -->
						<div class="post post-widget">
							<a class="post-img" href="blog-post.html"><img src="assets/article/img/widget-3.jpg" alt=""></a>
							<div class="post-body">								
								<h3 class="post-title"><a href="blog-post.html">Ne bonorum praesent cum, labitur persequeris definitionem quo cu?</a></h3>
							</div>
						</div>
						<!-- /post -->
						
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
	<script src="assets/article/js/jquery.min.js"></script>
	<script src="assets/article/js/bootstrap.min.js"></script>
	<script src="assets/article/js/jquery.stellar.min.js"></script>
	<script src="assets/article/js/main.js"></script>
@endsection