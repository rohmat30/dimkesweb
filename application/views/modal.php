<?php
$images = glob('./dist/images/upload/*.{jpg,jpeg,png,gif,JPG,JPEG,PNG,GIF}', GLOB_BRACE);
$prop = array('class' => 'img-prop');
?>
<div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header bg-light-blue pt-1" style="display: block;">
                <h4>
                    <span class="mt-1" style="display: inline-block">
                        Image Manager
                    </span>
                </h4>
            </div>
            <div class="modal-body">
                <ul class="nav nav-tabs">
                    <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#image-upload"><i class="fa fa-upload"></i> UPLOAD</a></li>
                    <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#image-link"><i class="zmdi zmdi-link"></i> URL</a></li>
                    <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#image-galeri"><i class="zmdi zmdi-image"></i> GALERI</a></li>
                </ul>
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane in active" id="image-upload">
                    <button type="button" data-toggle="tooltip" title="" id="button-upload" class="btn waves-effect btn-primary btn-raised"><i class="fa fa-upload fa-fw"></i><span> UPLOAD IMAGE</span></button>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="image-link">
					a
                    </div>
                    <div role="tabpanel" class="tab-pane" id="image-galeri">
                        <?php foreach ($images as $key => $image) { $prop['src'] = $image; ?>
                            <?php echo img($prop)?>
                        <?php } ?>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">CLOSE</button>
            </div>
        </div>
    </div>
<script>
    $('#button-upload').on('click', function() {
	$('#form-upload').remove();

	$('body').prepend('<form enctype="multipart/form-data" id="form-upload" style="display: none;"><input type="file" name="file" value="" /></form>');

	$('#form-upload input[name="file"]').trigger('click');

	if (typeof timer != 'undefined') {
    	clearInterval(timer);
	}

	timer = setInterval(function() {
		if ($('#form-upload input[name="file"]').val() != '') {
			clearInterval(timer);

			$.ajax({
				url: './save.html',
				type: 'post',
				data: new FormData($('#form-upload')[0]),
				dataType: 'json',
				cache: false,
				contentType: false,
				processData: false,
				beforeSend: function() {
					$('#button-upload').html('<i class="fa fa-circle-o-notch fa-spin"></i>&nbsp;&nbsp;UPLOADING');
					$('#button-upload').prop('disabled', true);
				},
				complete: function() {
					$('#button-upload').html('<i class="fa fa-upload"></i>&nbsp;&nbsp;UPLOAD IMAGE');
					$('#button-upload').prop('disabled', false);
				},
				success: function(json) {
					$('#summernote').summernote('editor.insertImage', 'http://localhost/dist/images/upload/blog-dummy-1.png');
					$('#modal-image').modal('hide');
				},

				error: function(xhr, ajaxOptions, thrownError) {
					alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
				}
			});
		}
	}, 500);
});
</script>