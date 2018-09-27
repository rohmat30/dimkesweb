<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?php echo isset($title) ? $title . ' | ': NULL ?>DinKes</title>

    <!-- Bootstrap -->
    <?php echo link_tag('dist/admin/vendors/bootstrap/dist/css/bootstrap.min.css')?>
    <!-- Font Awesome -->
    <?php echo link_tag('dist/admin/vendors/font-awesome/css/font-awesome.min.css')?>
    <!-- NProgress -->
    <?php echo link_tag('dist/admin/vendors/nprogress/nprogress.css')?>

    <!-- Custom Theme Style -->
    <?php echo link_tag('dist/admin/css/custom.min.css')?>
    <?php echo link_tag('dist/admin/css/newstyle.css')?>
  </head>

  <body class="nav-md">
  <div class="container body">
      <div class="main_container">
