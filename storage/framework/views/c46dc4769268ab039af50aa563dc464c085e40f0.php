
<?php $__env->startSection('title', 'Article Page'); ?>
<?php $__env->startSection('assets'); ?>
    <!-- Bootstrap -->
	<link type="text/css" rel="stylesheet" href="assets/article/css/bootstrap.min.css" />
	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="assets/article/css/style.css" />
<?php $__env->stopSection(); ?>
<?php $__env->startSection('article','active'); ?>
<?php $__env->startSection('content'); ?>

<?php echo $__env->make('components.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

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
							<a class="post-img" href="<?php echo e(url('/article',$article[0]['id'])); ?>"><img width="100%" height="500" src="assets/article/img/<?php echo e($article[0]['headline_picture']); ?>" alt=""></a>
							<div class="post-body">
								<div class="post-category">
									<a href="<?php echo e(url('/article',$article[0]['id'])); ?>">Hot Article</a>
								</div>
								<h3 class="post-title title-lg"><a href="<?php echo e(url('/article',$article[0]['id'])); ?>"><?php echo e($article[0]['title']); ?></a></h3>
								<ul class="post-meta">
									<li><a href="<?php echo e(url('/article',$article[0]['id'])); ?>"><?php echo e($article[0]['author']); ?></a></li>
									<li><?php echo e($article[0]['created_at']); ?></li>
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
						<a class="post-img" href="<?php echo e(url('/article',$article[1]['id'])); ?>"><img src="assets/article/img/<?php echo e($article[1]['headline_picture']); ?>" alt="" width="100%" height="247"></a>
						<div class="post-body">
							<div class="post-category">
								<a href="<?php echo e(url('/article',$article[1]['id'])); ?>">Hot Article</a>
							</div>
							<h3 class="post-title"><a href="/detail-article"><?php echo e($article[1]['title']); ?></a></h3>
							<ul class="post-meta">
								<li><a href="<?php echo e(url('/article',$article[1]['id'])); ?>"><?php echo e($article[1]['author']); ?></a></li>
								<li><?php echo e($article[1]['created_at']); ?></li>
							</ul>
						</div>
					</div>
					<!-- /post -->
					<?php endif ?>

					<?php if (isset($article[2])) : ?>
					
					<!-- post -->
					<div class="post post-thumb">
						<a class="post-img" href="<?php echo e(url('/article',$article[2]['id'])); ?>"><img src="assets/article/img/<?php echo e($article[2]['headline_picture']); ?>" alt="" width="100%" height="247"></a>
						<div class="post-body">
							<div class="post-category">
								<a href="<?php echo e(url('/article',$article[2]['id'])); ?>">Fashion</a>
								<a href="<?php echo e(url('/article',$article[2]['id'])); ?>">Lifestyle</a>
							</div>
							<h3 class="post-title"><a href="<?php echo e(url('/article',$article[2]['id'])); ?>"><?php echo e($article[2]['title']); ?></a></h3>
							<ul class="post-meta">
								<li><a href="author.html"><?php echo e($article[2]['author']); ?></a></li>
								<li><?php echo e($article[2]['created_at']); ?></li>
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

						
						
						<?php $__currentLoopData = $article; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $art): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<!-- post -->
						<div class="col-md-4">
							<div class="post post-sm">
								<a class="post-img" href="<?php echo e(url('/article',$art['id'])); ?>"><img src="<?php echo e(url('assets/article/img/',$art['headline_picture'])); ?>" alt=""></a>
								<div class="post-body">
									<div class="post-category">
										<a href="<?php echo e(url('/article',$art['id'])); ?>">Lifestyle</a>
									</div>
									<h3 class="post-title title-sm"><a href="<?php echo e(url('/article',$art['id'])); ?>"><?php echo e($art['title']); ?></a></h3>
									<ul class="post-meta">
										<li><a href="<?php echo e(url('/article',$art['id'])); ?>"><?php echo e($art['author']); ?></a></li>
										<li><?php echo e($art['created_at']); ?></li>
									</ul>
								</div>
							</div>
						</div>
						<!-- /post -->
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>`

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

<?php echo $__env->make('components.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
    <!-- jQuery Plugins -->
	<script src="assets/article/js/jquery.min.js"></script>
	<script src="assets/article/js/bootstrap.min.js"></script>
	<script src="assets/article/js/jquery.stellar.min.js"></script>
	<script src="assets/article/js/main.js"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('components.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Diazs\Tugas\CovidProject\ProjectPWPBCorona\resources\views/article/index.blade.php ENDPATH**/ ?>