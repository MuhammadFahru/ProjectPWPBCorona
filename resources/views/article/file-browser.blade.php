<!DOCTYPE html>
<html>
<head>
	<title>Browse File</title>
	<script src="{{ asset('assets/dashboard/vendor/jquery/jquery-3.2.1.min.js') }}"></script>
	<script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
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
		@foreach($fileNames as $fileName)
			<img src="{{ asset('assets/article/ckeditor_uploaded/'.$fileName) }}" alt="thumb" width="200" height="200" title="assets/article/ckeditor_uploaded/{{ $fileName }}">

		@endforeach
	</div>
</body>
</html>