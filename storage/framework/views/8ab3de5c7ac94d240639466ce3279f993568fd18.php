<!-- ======= Header ======= -->
<header id="header" class="fixed-top <?php echo $__env->yieldContent('bg'); ?>">
<div class="container-fluid">

    <div class="row justify-content-center">
    <div class="col-xl-9 d-flex align-items-center">
        
        <a href="<?php echo e(route('index')); ?>?#hero" class="logo mr-auto"><img src="assets/img/logo-web2.png" alt="" class="img-fluid"></a>

        <nav class="nav-menu d-none d-lg-block">
        <ul>
            <li class="<?php echo $__env->yieldContent('index'); ?>"><a href="<?php echo e(route('index')); ?>?#hero">Home</a></li>
            <li class="<?php echo $__env->yieldContent('global'); ?>"><a href="<?php echo e(route('global')); ?>">Data Global</a></li>              
            <li class="<?php echo $__env->yieldContent('indonesia'); ?>"><a href="<?php echo e(route('indonesia')); ?>">Data Indonesia</a></li>              
            <li class="<?php echo $__env->yieldContent('article'); ?>"><a href="/article-page">Artikel</a></li>              
            <li><a href="<?php echo e(route('index')); ?>?#contact">Contact</a></li>
        </ul>
        </nav><!-- .nav-menu -->

        <a href="/dashboard" class="get-started-btn scrollto">Login</a>
    </div>
    </div>

</div>
</header><!-- End Header --><?php /**PATH C:\xampp\htdocs\ProjectPWPBCorona\resources\views/components/navbar.blade.php ENDPATH**/ ?>