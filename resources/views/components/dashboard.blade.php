<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Title Page-->
    <title>Dashboard Shutdown Corona</title>

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Fontfaces CSS-->
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/dashboard/css/font-face.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/dashboard/vendor/font-awesome-4.7/css/font-awesome.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/dashboard/vendor/font-awesome-5/css/fontawesome-all.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/dashboard/vendor/mdi-font/css/material-design-iconic-font.min.css') }}">

    <!-- Bootstrap CSS-->
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/dashboard/vendor/bootstrap-4.1/bootstrap.min.css') }}">

    <!-- Vendor CSS-->
    <link href="{{ URL::asset('assets/dashboard/vendor/animsition/animsition.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ URL::asset('assets/dashboard/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ URL::asset('assets/dashboard/vendor/wow/animate.css') }}" rel="stylesheet" media="all">
    <link href="{{ URL::asset('assets/dashboard/vendor/css-hamburgers/hamburgers.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ URL::asset('assets/dashboard/vendor/slick/slick.css') }}" rel="stylesheet" media="all">
    <link href="{{ URL::asset('assets/dashboard/vendor/select2/select2.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ URL::asset('assets/dashboard/vendor/perfect-scrollbar/perfect-scrollbar.css') }}" rel="stylesheet" media="all">
    <link href="{{ URL::asset('assets/vendor/datatables/dataTables.bootst') }}rap4.min.css" rel="stylesheet">

    <!-- Main CSS-->
    <link href="{{ URL::asset('assets/dashboard/css/theme.css') }}" rel="stylesheet" media="all">
    <link href="{{ URL::asset('assets/dashboard/css/style.css') }}" rel="stylesheet" media="all">

    <!-- Jquery JS-->
    <script src="assets/dashboard/vendor/jquery-3.2.1.min.js"></script>

    <!-- Chart JS CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"></script>

    <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>

    <script>
         $.ajaxSetup({
          headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
        });
    </script>
</head>

<body class="">
    <div class="page-wrapper">        

        @include('components.sidebar')

        <!-- PAGE CONTAINER-->
        <div class="page-container">            

            @include('components.header')

            <!-- MAIN CONTENT-->
            <div class="main-content">
                @yield('content')
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
    <script src=" {{ URL::asset('assets/dashboard/vendor/bootstrap-4.1/popper.min.js') }}"></script>
    <script src=" {{ URL::asset('assets/dashboard/vendor/bootstrap-4.1/bootstrap.min.js') }}"></script>

    <!-- Vendor JS       -->
    <script src=" {{ URL::asset('assets/dashboard/vendor/slick/slick.min.js') }}"></script>
    <script src=" {{ URL::asset('assets/dashboard/vendor/wow/wow.min.js') }}"></script>
    <script src=" {{ URL::asset('assets/dashboard/vendor/animsition/animsition.min.js') }}"></script>
    <script src=" {{ URL::asset('assets/dashboard/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js') }}"></script>
    <script src=" {{ URL::asset('assets/dashboard/vendor/counter-up/jquery.waypoints.min.js') }}"></script>
    <script src=" {{ URL::asset('assets/dashboard/vendor/counter-up/jquery.counterup.min.js') }}"></script>
    <script src=" {{ URL::asset('assets/dashboard/vendor/circle-progress/circle-progress.min.js') }}"></script>
    <script src=" {{ URL::asset('assets/dashboard/vendor/perfect-scrollbar/perfect-scrollbar.js') }}"></script>
    <script src=" {{ URL::asset('assets/dashboard/vendor/chartjs/Chart.bundle.min.js') }}"></script>
    <script src=" {{ URL::asset('assets/dashboard/vendor/select2/select2.min.js') }}"></script>
    <script src=" {{ URL::asset('assets/vendor/datatables/jquery.dataTables.min.js') }}"></script>
    <script src=" {{ URL::asset('assets/vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>

    <!-- Main JS-->
    <script src=" {{ URL::asset('assets/dashboard/js/main.js') }}"></script>
    <script src=" {{ URL::asset('assets/js/datatables.js') }}"></script>

    <script src="{{ URL::asset('ckeditor/ckeditor.js') }}"></script>
    <script>
        CKEDITOR.replace( 'summary-ckeditor' );
    </script>

</body>

</html>
<!-- end document-->