<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <!-- Title Page-->
    <title>Dashboard Shutdown Corona</title>

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Fontfaces CSS-->
    <link href="assets/dashboard/css/font-face.css" rel="stylesheet" media="all">
    <link href="assets/dashboard/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="assets/dashboard/vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="assets/dashboard/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="assets/dashboard/vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="assets/dashboard/vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="assets/dashboard/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="assets/dashboard/vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="assets/dashboard/vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="assets/dashboard/vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="assets/dashboard/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="assets/dashboard/vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">
    <link href="assets/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

    <!-- Main CSS-->
    <link href="assets/dashboard/css/theme.css" rel="stylesheet" media="all">
    <link href="assets/dashboard/css/style.css" rel="stylesheet" media="all">
    
    <!-- Jquery JS-->
    <script src="assets/dashboard/vendor/jquery-3.2.1.min.js"></script>

    <!-- Chart JS CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"></script>

    <script src="<?php echo e(asset('ckeditor/ckeditor.js')); ?>"></script>

    <script>
         $.ajaxSetup({
          headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
        });
    </script>

</head>

<body class="animation">
    <div class="page-wrapper">        

        <?php echo $__env->make('components.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <!-- PAGE CONTAINER-->
        <div class="page-container">            

            <?php echo $__env->make('components.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <?php echo $__env->yieldContent('content'); ?>
            </div>
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
        </div>

    </div>

    <script>
        var loadFile = function(event) {
            var reader = new FileReader();
            reader.onload = function(){
                var output = document.getElementById('output');
                output.src = reader.result;
            };
            reader.readAsDataURL(event.target.files[0]);
        };
        var loadFile2 = function(event) {
            var reader = new FileReader();
            reader.onload = function(){
                var output = document.getElementById('output2');
                output.src = reader.result;
            };
            reader.readAsDataURL(event.target.files[0]);
        };
        var loadFile3 = function(event) {
            var reader = new FileReader();
            reader.onload = function(){
                var output = document.getElementById('output3');
                output.src = reader.result;
            };
            reader.readAsDataURL(event.target.files[0]);
        };
        var loadFile4 = function(event) {
            var reader = new FileReader();
            reader.onload = function(){
                var output = document.getElementById('output4');
                output.src = reader.result;
            };
            reader.readAsDataURL(event.target.files[0]);
        };
    </script> 
    
    <!-- Bootstrap JS-->
    <script src="assets/dashboard/vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="assets/dashboard/vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="assets/dashboard/vendor/slick/slick.min.js">
    </script>
    <script src="assets/dashboard/vendor/wow/wow.min.js"></script>
    <script src="assets/dashboard/vendor/animsition/animsition.min.js"></script>
    <script src="assets/dashboard/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="assets/dashboard/vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="assets/dashboard/vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="assets/dashboard/vendor/circle-progress/circle-progress.min.js"></script>
    <script src="assets/dashboard/vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="assets/dashboard/vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="assets/dashboard/vendor/select2/select2.min.js"></script>
    <script src="assets/vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="assets/vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Main JS-->
    <script src="assets/dashboard/js/main.js"></script>
    <script src="assets/js/datatables.js"></script>

</body>

</html>
<!-- end document-->
<?php /**PATH C:\xampp\htdocs\ProjectPWPBCorona\resources\views/components/dashboard.blade.php ENDPATH**/ ?>