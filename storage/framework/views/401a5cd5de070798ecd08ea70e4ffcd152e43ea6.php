
<?php $__env->startSection('rs','active'); ?>
<?php $__env->startSection('content'); ?>
<div class="section_content section_content--p30">
    <div class="container-fluid">          

        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-lg-10">
                        <h3>Data Rumah Sakit Rujukan di Indonesia</h3>
                    </div>
                    <div class="col-lg-2">
                    <a href="<?php echo e(route('rs')); ?>"  class="btn btn-success ml-3"><i class="fas fa-plus mr-2"></i>Add Data</a>
                    </div>
                </div>                
            </div>
            <?php if(session('success')): ?>
                <div class="alert alert-success mx-3">
                    <center> <?php echo e(session('success')); ?> <i class="ml-1 fas fa-check"></i></center>
                </div>
            <?php endif; ?>

            <?php if(session('error')): ?>
                <div class="alert alert-error col-md-3 mx-5 text-wrap">
                   <center> <?php echo e(session('error')); ?> </center> <i class="ml-1 fas fa-times"></i>
                </div>
            <?php endif; ?>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                      <thead>
                        <tr align="center">
                          <th style="width: 60px;"><h5>No</h5></th>
                          <th style="width: 50px;"><h5>Logo</h5></th>
                          <th><h5>Nama</h5></th>
                          <th><h5>Provinsi</h5></th>
                          <th><h5>Alamat</h5></th>
                          <th><h5>Telepon</h5></th>
                          <th style="width: 150px;"><h5>Action</h5></th>
                        </tr>
                      </thead>
                      <tbody>        
                       <?php $__currentLoopData = $hospitals; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $hospital): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr align="center">
                                <td><h6><br><?php echo e($loop->iteration); ?></h6></td>
                                <td><img src="<?php echo e(asset('assets/img/logoRumahSakit/'.$hospital['province'].'/'.$hospital['logo'])); ?>" alt=""></td>
                                <td><h6><br><?php echo e($hospital['hospital_name']); ?></h6></td>
                                <td><h6><br><?php echo e($hospital['province']); ?></h6></td>
                                <td><h6><br><?php echo e($hospital['address']); ?></h6></td>
                                <td><h6><br><?php echo e($hospital['phone_number']); ?></h6></td>

                                <td>
                                    <form action="<?php echo e(url('/rs',@$hospital->id)); ?>" method="post">
                                        <?php echo csrf_field(); ?>
                                        <?php echo method_field('DELETE'); ?>
                                        <a href="<?php echo e(url('/rs/'.@$hospital->id.'/edit')); ?>" class="btn btn-secondary mt-3" style="width: 80px;">Edit</a>
                                        <button href="" class="btn btn-danger mt-3" style="width: 80px;">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                      </tbody>
                    </table>
                  </div>
            </div>
        </div>

    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('components.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Diazs\Tugas\CovidProject\ProjectPWPBCorona\resources\views/dashboard/rumah-sakit.blade.php ENDPATH**/ ?>