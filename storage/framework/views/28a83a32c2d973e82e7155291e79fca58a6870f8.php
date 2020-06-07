
<?php $__env->startSection('article','active'); ?>
<?php $__env->startSection('content'); ?>
<div class="section__content section__content--p30">
    <div class="container-fluid">
        
        <div class="card p-5">
            <h2 class="text-center mb-4">Form Data Artikel</h2>
                <?php if($errors->any()): ?>
                  <div class="alert alert-danger">
                     <ul>
                        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                         <li><?php echo e($error); ?></li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                     </ul>
                 </div><br />
                <?php endif; ?>

                <?php if(session('error')): ?>
                <div class="alert alert-danger col-md-5 mx-5 text-wrap">
                   <center> <i class="ml-1 fas fa-times"></i> <?php echo e(session('error')); ?>  </center> 
                </div>
                 <?php endif; ?>

                <form role="form" action=" <?php echo e(url('/article',@$article->id)); ?> " method="POST" enctype="multipart/form-data">
                <?php if(isset($article)): ?>
                    <?php echo method_field('PATCH'); ?>
                <?php endif; ?>
                <?php echo csrf_field(); ?> 
                <div class="form-group mb-4">
                      <label class="mb-4" for="title">Cover Post</label><br>
                        <img src="<?php echo e(asset('/assets/article/img/')); ?><?= !empty($article->headline_picture)? "/".$article->headline_picture :'/logo-web3.png' ?>" width="20%" id="output"><br>
                        <label class="mt-4" for="title">* recomended ( 1920 x 1080 pixel )</label><br>
                        <div class="custom-file mt-2" style="width:40%">
                            <input type="file" class="custom-file-input" id="image" name="headline_picture" onchange="loadFile(event)" accept=".jpg,.png,.jpeg">
                            <label class="custom-file-label" for="image">Choose file</label>
                        </div>
                </div>
                <div class="form-group mb-4">
                    <label for="title">Judul</label>
                    <input type="text" name="title" id="title" class="form-control" value="<?php echo e(old('title',@$article->title)); ?>">
                </div>
                <div class="form-group mb-4">
                    <label for="summary-ckeditor">Konten</label>
                    <textarea name="content" id="summary-ckeditor" class="form-control ckeditor"> <?php echo e(old('title',@$article->content)); ?></textarea>
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-success" style="width: 10%;" value="Submit">
                    <a href="<?php echo e(url()->previous()); ?>" class="btn btn-danger" style="width: 10%;">Back</a>
                </div>
            </form>
        </div>       

    </div>
</div>

<script>
  var konten = document.getElementById("summary-ckeditor");
    CKEDITOR.replace(konten,{
    language:'en-gb',
    customConfig : 'config.js',
    toolbar : 'simple',
    filebrowserUploadUrl: "/article/upload_ckeditor",
    filebrowserBrowseUrl: "/article/browse_ckeditor"
  });
  CKEDITOR.config.allowedContent = true;
</script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('components.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Diazs\ProjectPWPBCorona\resources\views/dashboard/form/form-artikel.blade.php ENDPATH**/ ?>