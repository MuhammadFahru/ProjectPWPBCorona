
<?php $__env->startSection('title', 'Detail Rumah SAKIT'); ?>
<?php $__env->startSection('index','active'); ?>
<?php $__env->startSection('bg','header-inner-pages'); ?>
<?php $__env->startSection('content'); ?>

<?php echo $__env->make('components.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

  <main id="main">    
    <div class="container">
        <br><br><br><br><br><br>
        <div class="card shadow p-4" style="width:70%; margin:auto;">
            <div class="d-flex justify-content-between align-items-center ml-4">
                <h2>Detail Rumah Sakit</h2>
                <a class="btn btn-primary" style="background-color: #6221EA;" href="<?php echo e(url()->previous()); ?>"><i class="fas fa-angle-double-left fa-lg mr-2"></i>Back</a>
            </div>
            <hr class="ml-4" width="41%">
            <div class="row mt-3 mb-3 ml-4">
                <div class="col-lg-6 col-md-6">
                    <img src="<?php echo e(asset('assets/img/logoRumahSakit')); ?>/<?php echo e($rumah_sakit['province']); ?>/<?php echo e($rumah_sakit['logo']); ?>" width="100%" alt="">
                </div>
                <div class="col-lg-6 col-md-6 mt-2">
                    <h5>Nama Rumah Sakit</h5>
                    <h6 class="text-grey"><?php echo e($rumah_sakit['hospital_name']); ?></h6>
                    <br>
                    <h5>Provinsi</h5>
                    <h6 class="text-grey"><?php echo e($rumah_sakit['province']); ?></h6>
                    <br>
                    <h5>Alamat</h5>
                    <h6 class="text-grey"><?php echo e($rumah_sakit['address']); ?></h6>
                    <br>
                    <h5>Telepon</h5>
                    <h6 class="text-grey"><?php echo e($rumah_sakit['phone_number']); ?></h6>
                </div>
            </div>
        </div>
    </div>    
  </main>
  <!-- End #main -->
  <br><br><br><br><br><br>
<?php echo $__env->make('components.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('components.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Diazs\Tugas\CovidProject\ProjectPWPBCorona\resources\views/detail-rs.blade.php ENDPATH**/ ?>