<div class="modal-dialog modal-lg"   style="overflow:initial">
	<div class="modal-content">
		<div class="btn-primary modal-header pt-2" style="display: block;">
		<h4 class="modal-title pb-1">
      <i class="fa fa-image"></i>&nbsp;&nbsp;Image manager
      
      <button type="button" class="m-0 close close-white" data-dismiss="modal" aria-hidden="true">&times;</button>
		</h4>
		</div>
		<div class="modal-body">
        <ul class="nav nav-tabs">
            <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#image-upload"><i class="fa fa-upload"></i> UPLOAD</a></li>
            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#image-galeri"><i class="zmdi zmdi-image"></i> GALERI</a></li>
            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#image-link"><i class="zmdi zmdi-link"></i> URL</a></li>
        </ul>
        
        <div class="tab-content">
          <div role="tabpanel" class="tab-pane in active" id="image-upload">
            <div>
            <button type="button" data-toggle="tooltip" title="" id="button-upload" class="btn btn-primary btn-raised waves-effect"><i class="fa fa-upload"></i> UPLOAD IMAGE</button>
            </div>
            <small>
            Klik tombol Upload untuk memasukan gambar. Gunakan file yang di izinkan JPG, PNG, atau GIF
            </small>
          </div>
          <div role="tabpanel" class="tab-pane fade" id="image-galeri">
            <small>
              klik icon <i class="zmdi zmdi-sign-in"></i> untuk memasukan gambar ke editor.
            </small>
            <hr>
            <div class="image-list">
                <?php
                $i=0;		
                foreach ($images as $image) {
                    $thumb       = pathinfo($image);
                    $image_thumb = base_url(ltrim($thumb['dirname'],'./').'/'.rtrim($thumb['filename'],'_thumb').'.'.$thumb['extension']);
                    $image       = base_url(ltrim($image,'./'));
                ?>
                <div id="image_<?php echo $i ?>" class="image-col">
                  <div class="image-context">
                    <div class="thumb" data-image="<?php echo $image; ?>"><span><img class="pop" style="" src="<?php echo $image; ?>" /></span></div>
                    <div class="thumb-action">
                      <a data-toggle="tooltip" href="javascript:;" title="Insert image" class=" insert-image " data-image="<?php echo $image_thumb ?>"><i class="zmdi zmdi-sign-in"></i></a>
                      <a data-toggle="tooltip" class="delete-image" data-image_id="<?php echo $i ?>" data-urlimage="<?php echo $image ?>" data-image="<?php echo basename($image) ?>" href="javascript:;" title="Delete image"><i class="zmdi zmdi-delete"></i></a>
                    </div>
                  </div>
              </div>
            <?php $i++; } ?>
            </div>
          </div>
          <div role="tabpanel" class="tab-pane fade" id="image-link">
              <div class="form-group form-float">
                  <div class="form-line">
                  <input type="text" class="form-control" id="insert-link-text" placeholder="Masukan URL / Link Gambar">
                  </div>
                  <button type="button" class="btn btn-primary waves-effect btn-raised" id="insert-link-button">insert</button>
              </div>
          </div>
        </div>
      </div>
	</div>
</div>