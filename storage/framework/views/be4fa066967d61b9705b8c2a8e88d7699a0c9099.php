
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
            <?php for($i = 1; $i <= 10; $i++) { ?>
                <div class="card p-3 border-left-primary mb-3 mt-4">
                    <div class="row mt-3">
                        <div class="col-lg-9">
                            <h4>Judul Artikel</h4>     
                            <p>23 Mei 2020</p>               
                        </div>                
                        <div class="col-lg-3">
                            <a href="" class="btn btn-secondary ml-3 mt-3" style="width: 80px;">Edit</a>
                            <a href="" class="btn btn-danger mt-3" style="width: 80px;">Delte</a>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>       

    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('components.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Diazs\Tugas\CovidProject\ProjectPWPBCorona\resources\views/dashboard/artikel.blade.php ENDPATH**/ ?>