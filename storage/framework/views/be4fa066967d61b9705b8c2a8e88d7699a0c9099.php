
<?php $__env->startSection('article','active'); ?>
<?php $__env->startSection('content'); ?>
<div class="section__content section__content--p30">
    <div class="container-fluid">
        
        <div class="card p-4">
            <div class="row mt-3">
                <div class="col-lg-10">
                    <h3 class="mb-4">Daftar Artikel Yang Berita Yang Telah Diupload</h3>
                </div>
                <div class="col-lg-2">
                    <a href="/form-article" class="btn btn-success ml-3"><i class="fas fa-plus mr-2"></i>Add Data</a>
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

            <?php $__currentLoopData = $articles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $article): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="card p-3 border-left-primary mb-3 mt-4">
                <div class="row mt-3">
                    <div class="col-lg-9">
                        <h4><?php echo e($article['title']); ?></h4>     
                        <p><?php echo e($article['created_at']); ?></p>               
                    </div>
                    <div class="col-lg-3">
                        <form method="post" action="<?php echo e(url('/article/'.$article->id)); ?>">
                            <?php echo method_field('DELETE'); ?>
                            <?php echo csrf_field(); ?>
                            <a href="<?php echo e(url('/article/'.$article->id.'/edit')); ?>" class="btn btn-secondary ml-3 mt-3" style="width: 80px;">Edit</a>
                            <button class="btn btn-danger mt-3" style="width: 80px;">Delete</button>
                        </form> 
                    </div>
                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>       

    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('components.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Diazs\Tugas\CovidProject\ProjectPWPBCorona\resources\views/dashboard/artikel.blade.php ENDPATH**/ ?>