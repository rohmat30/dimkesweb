</div>
</section>
<div class="color-bg"></div>



<script src="<?php echo base_url('dist/backend/bundles/libscripts.bundle.js')?>"></script> <!-- Lib Scripts Plugin Js -->
<script src="<?php echo base_url('dist/backend/bundles/vendorscripts.bundle.js')?>"></script> <!-- Lib Scripts Plugin Js -->
<script src="<?php echo base_url('dist/backend/bundles/morphingsearchscripts.bundle.js')?>"></script> <!-- Main top morphing search --> 
<script src="<?php echo base_url('dist/backend/bundles/mainscripts.bundle.js')?>"></script><!-- Custom Js --> 
<script src="<?php echo base_url('dist/backend/plugins/bootstrap/js/bootstrap.min.js')?>"></script> <!-- Lib Scripts Plugin Js -->
<script src="<?php echo base_url('dist/backend/plugins/sweetalert/sweetalert.min.js')?>"></script> <!-- Lib Scripts Plugin Js -->
<?php foreach ($add_js as $key => $val) { ?>
<script src="<?php echo base_url($val)?>"></script>
<?php } ?>
<script src="<?php echo base_url('dist/backend/js/app.js')?>"></script><!-- Custom Js --> 
<?php if (isset($mess)) { ?>
<script>
    swal({text: '<?php echo $mess?>',type: 'success',title: 'Berhasil'});
</script>
<?php }?>
</body>
</html>