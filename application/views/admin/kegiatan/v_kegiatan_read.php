<!doctype html>
<html>
    <head>
        <title>harviacode.com - codeigniter crud generator</title>
        <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>"/>
        <style>
            body{
                padding: 15px;
            }
        </style>
    </head>
    <body>
        <h2 style="margin-top:0px">Kegiatan Read</h2>
        <table class="table">
	    <tr><td>Kegiatan Gambar</td><td><?php echo $kegiatan_gambar; ?></td></tr>
	    <tr><td>Kegiatan Deskripsi</td><td><?php echo $kegiatan_deskripsi; ?></td></tr>
	    <tr><td>Kegiatan Waktu</td><td><?php echo $kegiatan_waktu; ?></td></tr>
	    <tr><td>Admin Username</td><td><?php echo $admin_username; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('admin_kegiatan') ?>" class="btn btn-default">Cancel</a></td></tr>
	</table>
        </body>
</html>