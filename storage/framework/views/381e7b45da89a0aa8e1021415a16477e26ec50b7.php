<!-- HEADER MOBILE-->
<header class="header-mobile d-block d-lg-none">
    <div class="header-mobile__bar">
        <div class="container-fluid">
            <div class="header-mobile-inner">
                <a class="logo" href="index.html">
                    <img src="<?php echo e(url('assets/dashboard/images/icon/logo.png')); ?>" alt="CoolAdmin" />
                </a>
                <button class="hamburger hamburger--slider" type="button">
                    <span class="hamburger-box">
                        <span class="hamburger-inner"></span>
                    </span>
                </button>
            </div>
        </div>
    </div>
    <nav class="navbar-mobile">
        <div class="container-fluid">
            <ul class="navbar-mobile__list list-unstyled">
                <li class="<?php echo $__env->yieldContent('index'); ?> has-sub">
                    <a href="/dashboard">
                        <img src="<?php echo e(url('assets/img/icons/dashboard.png')); ?>" width="8%" alt="" class="mr-3">Dashboard
                    </a>
                </li>
                <li class="<?php echo $__env->yieldContent('global'); ?>">
                    <a href="/data-global">
                        <img src="<?php echo e(url('assets/img/icons/global.png')); ?>" width="8%" alt="" class="mr-3">Data Global
                    </a>
                </li>
                <li class="<?php echo $__env->yieldContent('indonesia'); ?>">
                    <a href="data-indonesia">
                        <img src="<?php echo e(url('assets/img/icons/indonesia.png')); ?>" width="8%" alt="" class="mr-3">Data Indonesia    
                    </a>
                </li>
                <li class="<?php echo $__env->yieldContent('rs'); ?>">
                    <a href="/rs-rujukan">
                        <img src="<?php echo e(url('assets/img/icons/hospital.png')); ?>" width="8%" alt="" class="mr-3">RS Rujukan
                    </a>
                </li>
                <li class="<?php echo $__env->yieldContent('article'); ?>">
                    <a href="/article">
                        <img src="<?php echo e(url('assets/img/icons/news.png')); ?>" width="8%" alt="" class="mr-3">Artikel
                    </a>
                </li>
            </ul>
        </div>
    </nav>
</header>
<!-- END HEADER MOBILE-->

<!-- MENU SIDEBAR-->
<aside class="menu-sidebar d-none d-lg-block">            
    <div class="menu-sidebar__content js-scrollbar1">
        <nav class="navbar-sidebar">
            <ul class="list-unstyled navbar__list">
                <li>
                    <a href="#" class="text-center" style="margin-top: -40px;">
                        <img src="<?php echo e(url('assets/img/logo-web3.png')); ?>" width="80%" />
                    </a>
                </li>
                <hr style="margin-top: -2px;">
                <br>
                <h6>Data</h6>
                <li class="<?php echo $__env->yieldContent('index'); ?> has-sub ml-2">
                    <a href="/dashboard">
                        <img src="<?php echo e(url('assets/img/icons/dashboard.png')); ?>" width="8%" alt="" class="mr-3">Dashboard
                    </a>
                </li>
                <li class="ml-2 <?php echo $__env->yieldContent('global'); ?>">
                    <a href="/data-global">
                        <img src="<?php echo e(url('assets/img/icons/global.png')); ?>" width="8%" alt="" class="mr-3">Data Global
                    </a>
                </li>
                <li class="ml-2 <?php echo $__env->yieldContent('indonesia'); ?>">
                    <a href="/data-indonesia">
                        <img src="<?php echo e(url('assets/img/icons/indonesia.png')); ?>" width="8%" alt="" class="mr-3">Data Indonesia    
                    </a>
                </li>
                <li class="ml-2 <?php echo $__env->yieldContent('rs'); ?>">
                    <a href="/rs-rujukan">
                        <img src="<?php echo e(url('assets/img/icons/hospital.png')); ?>" width="8%" alt="" class="mr-3">RS Rujukan
                    </a>
                </li>
                <li class="ml-2 <?php echo $__env->yieldContent('article'); ?>">
                    <a href="/article">
                        <img src="<?php echo e(url('assets/img/icons/news.png')); ?>" width="8%" alt="" class="mr-3">Artikel
                    </a>
                </li>
                <br>
                <h6>Acoount</h6>
                <li class="ml-2 <?php echo $__env->yieldContent('profile'); ?>">
                    <a href="#">
                        <img src="<?php echo e(url('assets/img/icons/user.png')); ?>" width="8%" alt="" class="mr-3">Profile
                    </a>
                </li>
                <li class="ml-2 <?php echo $__env->yieldContent('setting'); ?>">
                    <a href="#">
                        <img src="<?php echo e(url('assets/img/icons/settings.png')); ?>" width="8%" alt="" class="mr-3">Setting
                    </a>
                </li>
                <li class="ml-2 <?php echo $__env->yieldContent('logout'); ?>">
                    <a href="#" data-toggle="modal" data-target="#logoutModal">
                        <img src="<?php echo e(url('assets/img/icons/logout.png')); ?>" width="8%" alt="" class="mr-3">Logout    
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</aside>
<!-- END MENU SIDEBAR-->

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Yakin Untuk Meninggalkan Halaman ?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="<?php echo e(route('logout')); ?>">Logout</a>
        </div>
      </div>
    </div>
  </div><?php /**PATH C:\xampp\htdocs\Diazs\ProjectPWPBCorona\resources\views/components/sidebar.blade.php ENDPATH**/ ?>