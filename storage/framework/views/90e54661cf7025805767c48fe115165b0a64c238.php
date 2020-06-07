<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo $__env->yieldContent('title'); ?></title>
    <meta content="" name="descriptison">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="<?php echo e(URL::asset('assets/img/favicon.png')); ?>" rel="icon">
    <link href="<?php echo e(URL::asset('assets/img/apple-touch-icon.png')); ?>" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="<?php echo e(URL::asset('assets/vendor/bootstrap/css/bootstrap.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(URL::asset('assets/vendor/icofont/icofont.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(URL::asset('assets/vendor/boxicons/css/boxicons.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(URL::asset('assets/vendor/owl.carousel/assets/owl.carousel.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(URL::asset('assets/vendor/venobox/venobox.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(URL::asset('assets/vendor/aos/aos.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(URL::asset('assets/vendor/datatables/dataTables.bootstrap4.min.css')); ?>" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="<?php echo e(URL::asset('assets/css/style.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(URL::asset('assets/css/navbar.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(URL::asset('assets/fontawesome/css/all.css')); ?>" rel="stylesheet">
    <?php echo $__env->yieldContent('assets'); ?>

    <!-- Vendor JS Files -->
    <script src="<?php echo e(URL::asset('assets/vendor/jquery/jquery.min.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('assets/vendor/jquery.easing/jquery.easing.min.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('assets/vendor/php-email-form/validate.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('assets/vendor/waypoints/jquery.waypoints.min.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('assets/vendor/counterup/counterup.min.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('assets/vendor/owl.carousel/owl.carousel.min.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('assets/vendor/isotope-layout/isotope.pkgd.min.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('assets/vendor/venobox/venobox.min.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('assets/vendor/aos/aos.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('assets/vendor/datatables/jquery.dataTables.min.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('assets/vendor/datatables/dataTables.bootstrap4.min.js')); ?>"></script>

    <!-- Chart JS CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"></script>
  
</head>

<body>

    <?php echo $__env->yieldContent('content'); ?>

    <!-- Template Main JS File -->
    <script src="<?php echo e(URL::asset('assets/js/main.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('assets/js/datatables.js')); ?>"></script>
    <?php echo $__env->yieldContent('js'); ?>

</body>

</html><?php /**PATH D:\Diazs\Tugas\CovidProject\ProjectPWPBCorona\resources\views/components/master.blade.php ENDPATH**/ ?>