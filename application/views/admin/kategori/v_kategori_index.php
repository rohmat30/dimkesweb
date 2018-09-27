<div class="row">
    <div class="col-md-4 push-sm-8">
        <div class="card">
            <div class="header">
                <h2>Form Kategori</h2>
            </div>
            <div class="body">
                <form action="" method="post" autocomplete="off">
                <div class="form-group">
                    <div class="form-line">
                        <input type="text" name="kategori_nama" class="form-control" id="form" value="<?php echo $default_value?>" placeholder="Nama Kategori">
                    </div>
                    <?php echo form_error('kategori_nama','<small style="color: red; margin-top: -10px;display: block">','</small>')?>
                </div>
                <div class="form-group">
                    <button class="btn btn-primary btn-raised waves-effect"><i class="zmdi zmdi-<?php echo $this->uri->segment(2) == 'edit' ? 'edit' : 'plus'?>"></i> <?php echo $this->uri->segment(2) == 'edit' ? ' Ubah' : ' Tambah'?></button>
                    <?php if($this->uri->segment(2) == 'edit') { ?>
                    <?php echo anchor('admin_kategori','<i class="zmdi zmdi-close"></i> Tutup','class="btn btn-danger btn-raised effect-waves"')?>
                    <?php } ?>
                </div>
                </form>
            </div>
        </div>
    </div>
    <div class="col-md-8 pull-sm-4">
        <div class="card">
            <div class="header">
                <h2>Daftar Kategori</h2>
            </div>
            <div class="body">
                <table class="table table-bordered">
                    <tr>
                        <th>Nama Kategori</th>
                        <th width="100">Aksi</th>
                    </tr>
                    <?php foreach ($kategori as $list) { ?>
                    <tr>
                        <td><?php echo $list->kategori_nama?></td>
                        <td>
                            <?php echo anchor('admin_kategori/edit/'.$list->kategori_id,'<i class="fa fa-edit"></i>','class="btn btn-primary btn-sm btn-raised"')?>
                            <?php if ($list->kategori_id != 1) { ?>
                            <?php echo anchor('admin_kategori/hapus/'.$list->kategori_id,'<i class="fa fa-trash"></i>','class="btn btn-danger btn-sm btn-raised delete-category"')?>
                            <?php } ?>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
            </div>
        </div>
    </div>
</div>