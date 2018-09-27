<div class="my-gallery">
<div class="">
<div class="row">
        <?php foreach($images as $image) { ?>
        <?php
            $thumb       = pathinfo($image);
            $image_large = base_url(ltrim($thumb['dirname'],'./').'/'.rtrim($thumb['filename'],'_thumb').'.'.$thumb['extension']);
            $image       = base_url(ltrim($image,'./'));
            ?>
        <div class="col-sm-2">
            <a href="<?php echo $image_large?>">
                <img src="<?php echo $image?>" />
                <div>aaaaaa</div>
            </a>
        </div>
        <?php } ?>
    </div>
</div>
</div>