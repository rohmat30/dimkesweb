<form method="post" autocomplete="off">
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="header" style="padding-bottom: 0">
                    <h2>
                       <?php echo $subtitle?>
                    </h2>
                </div>
                <div class="body">
                    <div class="form-group">
                        <input type="text" name="berita_judul" class="form-control" placeholder="Masukan Judul" value="<?php echo set_value('berita_judul',isset($default_value['berita_judul']) ? $default_value['berita_judul'] : NULL)?>" />
                        <?php echo form_error('berita_judul','<small style="color: red;margin-top: -10px;display: block;margin-bottom: 5px">','</small>')?>
                    </div>
                    <div class="form-group">
                        <textarea id="summernote" class="summernote form-control" name="berita_deskripsi"  rows="10"><?php echo set_value('berita_deskripsi', $default_value['berita_deskripsi'])?></textarea>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="header">
                    <h2>
                        Kategori
                    </h2>
                </div>
                <div class="body">
                    <div id="kategori-list" class="row">
                        <?php foreach ($kategori as $val) { ?>
                        <div class="col-sm-6">
                            <input type="checkbox" id="kategori_check_<?php echo $val->kategori_id?>" value="<?php echo $val->kategori_id?>" class="filled-in chk-col-light-blue" name="kategori[<?php echo $val->kategori_id?>]" <?php echo isset($kategori_select[$val->kategori_id]) ? 'checked' : NULL ?>/>
                            <label for="kategori_check_<?php echo $val->kategori_id?>"><?php echo $val->kategori_nama?></label>
                        </div>
                        <?php }?>
                    </div>
                    <div id="tambah-kategori">
                        <a href="" id="link-tambah" data-append="kategori-list" data-url="<?php echo site_url('admin_kategori/ajax_tambah')?>" data-target="tambah-kategori">+ Tambah Kategori</a>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="body">
                    <button type="submit" class="btn btn-raised btn-primary waves-effect simpan" data-type="alert"><i class="zmdi zmdi-save"></i> Simpan</button>
                    <?php echo anchor('admin_berita','<i class="zmdi zmdi-arrow-back"></i> Kembali',' class="btn btn-raised btn-default waves-effect"')?>
                </div>
            </div>
        </div>
    </div>
</form>