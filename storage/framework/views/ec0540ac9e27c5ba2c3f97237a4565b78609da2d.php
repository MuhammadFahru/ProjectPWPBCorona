<!DOCTYPE html>
<html>
<head>
	<title>Browse File</title>
	<script src="<?php echo e(asset('assets/dashboard/vendor/jquery/jquery-3.2.1.min.js')); ?>"></script>
	<script src="<?php echo e(asset('ckeditor/ckeditor.js')); ?>"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			var funcNum = <?php echo $_GET['CKEditorFuncNum'] . ';'; ?>
			$('#fileExplorer').on('click','img',function(){
				var fileUrl = $(this).attr('title');
				window.opener.CKEDITOR.tools.callFunction(funcNum, fileUrl);
				window.close();
			}).hover(function(){
				$(this).css('cursor','pointer');
			});
		});
	</script>
</head>
<body>
	<div id="fileExplorer">
		<?php $__currentLoopData = $fileNames; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $fileName): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<img src="<?php echo e(asset('assets/article/ckeditor_uploaded/'.$fileName)); ?>" alt="thumb" width="200" height="200" title="assets/article/ckeditor_uploaded/<?php echo e($fileName); ?>">

		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	</div>
</body>
</html><?php /**PATH D:\Diazs\Tugas\CovidProject\ProjectPWPBCorona\resources\views/article/file-browser.blade.php ENDPATH**/ ?>