<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<title>:: <?php echo isset($title) ? $title .'  - ': NULL?> Dinas Kesehatan Cianjur ::</title>
<link rel="icon" href="favicon.ico" type="image/x-icon">
<?php echo link_tag('https://fonts.googleapis.com/icon?family=Material+Icons')?>
<!-- Favicon-->
<?php echo link_tag('dist/backend/plugins/font-awesome/css/font-awesome.min.css')?>
<?php echo link_tag('dist/backend/plugins/bootstrap/css/bootstrap.min.css')?>
<?php echo link_tag('dist/backend/plugins/sweetalert/sweetalert.css')?>
<?php echo link_tag('dist/backend/css/main.css')?>
<!-- Custom Css -->
<?php echo link_tag('dist/backend/css/themes/all-themes.css')?>
<?php foreach ($add_css as $key => $val) { ?>
    <?php echo link_tag($val)?>
<?php } ?>
<?php echo link_tag('dist/backend/css/newstyle.css"')?>
</head>
<body class="theme-blue">
<!-- Page Loader -->
<div class="page-loader-wrapper">
    <div class="loader">
        <div class="preloader">
            <div class="spinner-layer pl-blush">
                <div class="circle-clipper left">
                    <div class="circle"></div>
                </div>
                <div class="circle-clipper right">
                    <div class="circle"></div>
                </div>
            </div>
        </div>
        <p>Memuat...</p>
    </div>
</div>
<!-- #END# Page Loader --> 

<!-- Overlay For Sidebars -->
<div class="overlay"></div>
<!-- #END# Overlay For Sidebars --> 
