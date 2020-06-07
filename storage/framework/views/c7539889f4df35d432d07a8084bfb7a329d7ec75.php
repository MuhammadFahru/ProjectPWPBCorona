
<?php $__env->startSection('rs','active'); ?>
<?php $__env->startSection('content'); ?>
<div class="section__content section__content--p30">
    <div class="container-fluid">          

        <div class="card shadow" style="padding:40px;">      
            <h2 class="text-center mb-5">Form Data Rumah Sakit Rujukan</h2>

            <div>
                 <?php if($errors->any()): ?>
                  <div class="alert alert-danger">
                     <ul>
                        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                         <li><?php echo e($error); ?></li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                     </ul>
             </div><br />
            <?php endif; ?>

            <form action="<?php echo e(url('/rs',@$rumah_sakit->id)); ?>" method="POST" role="form" enctype='multipart/form-data'>
            <?php echo csrf_field(); ?>
            
                <div class="form-group row mb-4">
                    <label class="col-lg-3 col-form-label form-control-label">Nama Rumah Sakit</label>
                    <div class="col-lg-9">
                        <input class="form-control" type="text" name="hospital_name" value="<?php echo e(old('hospital_name', @$rumah_sakit->hospital_name)); ?>">
                    </div>
                </div>
                <div class="form-group row mb-4">
                    <label class="col-lg-3 col-form-label form-control-label">Provinsi</label>
                    <div class="col-lg-9">
                       <select name="province" class="form-control" id="exampleFormControlSelect1">
                            <?php $__currentLoopData = $province; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $prov): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($prov['id']); ?>"><?php echo e($prov['province_name']); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>
                </div>
                <div class="form-group row mb-4">
                    <label class="col-lg-3 col-form-label form-control-label">Alamat</label>
                    <div class="col-lg-9">
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="address"><?php echo e(old('address', @$rumah_sakit->address)); ?></textarea>
                    </div>
                </div>
                <div class="form-group row mb-4">
                    <label class="col-lg-3 col-form-label form-control-label">No Telepon</label>
                    <div class="col-lg-9">
                        <input class="form-control" type="text" name="phone_number" value="<?php echo e(old('phone_number', @$rumah_sakit->phone_number)); ?>">
                    </div>
                </div>
                <div class="form-group row mb-4">
                    <label class="col-lg-3 col-form-label form-control-label">Logo Rumah Sakit</label>
                    <div class="col-lg-9">
                        <input type="file" id="" name="logo" value="<?php echo e(old('logo', @$rumah_sakit->logo)); ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-lg-3 col-form-label form-control-label"></label>
                    <div class="col-lg-9">
                        <input type="submit" class="btn btn-success" style="width: 12%;" value="Submit">
                        <a href="/rs-rujukan" class="btn btn-danger" style="width: 12%;">Back</a>
                    </div>
                </div>
            </form>
        </div>

    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('components.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Diazs\Tugas\CovidProject\ProjectPWPBCorona\resources\views/dashboard/form/form-rs.blade.php ENDPATH**/ ?>