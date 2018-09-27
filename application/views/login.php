
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<title>:: Login - Dinas Kesehatan ::</title>
<!-- Favicon-->
<link rel="icon" href="favicon.ico" type="image/x-icon">
<?php echo link_tag('https://fonts.googleapis.com/icon?family=Material+Icons')?>
<?php echo link_tag('dist/backend/plugins/bootstrap/css/bootstrap.min.css')?>
<!-- Custom Css -->
<?php echo link_tag('dist/backend/css/main.css')?>
<?php echo link_tag('dist/backend/css/login.css')?>
<?php echo link_tag('dist/backend/css/themes/all-themes.css')?>
<?php echo link_tag('dist/backend/css/newstyle.css')?>
</head>
<body class="login-page authentication">

<div class="container">
    <div class="card-top"></div>
    <div class="card">
        <h1 class="title"><span>Dinas Kesehatan</span>Login</h1>
        <div class="col-sm-12">
            <?php if (isset($message)) { ?>
                <div class="alert alert-danger alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <small>
                <?php echo $message?>
                </small>
                </div>
            <?php } ?>
            <form id="sign_in" method="POST" autocomplete="off">
                <div class="input-group">
                <span class="input-group-addon"> <i class="zmdi zmdi-account"></i> </span>
                    <div class="form-line">
                        <input type="text" class="form-control" name="username" placeholder="Username" autofocus>
                    </div>
                </div>
                <div class="input-group"> <span class="input-group-addon"> <i class="zmdi zmdi-lock"></i> </span>
                    <div class="form-line">
                        <input type="password" class="form-control" name="password" placeholder="Password">
                    </div>
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-block btn-raised waves-effect btn-primary">SIGN IN</button>
                </div>
            </form>
        </div>
    </div>    
</div>
<div class="theme-bg"></div>
<!-- Jquery Core Js --> 
<script src="<?php echo base_url('dist/backend/bundles/libscripts.bundle.js')?>"></script> <!-- Lib Scripts Plugin Js -->
<script src="<?php echo base_url('dist/backend/bundles/vendorscripts.bundle.js')?>"></script> <!-- Lib Scripts Plugin Js -->
<script src="<?php echo base_url('dist/backend/bundles/mainscripts.bundle.js')?>"></script><!-- Custom Js --> 
</body>
</html>