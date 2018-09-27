<div class="card">
    <div class="header">
        <h2 style="margin-top:0px">Kegiatan <?php echo $button ?></h2>
    </div>
    <div class="body">
        <div class="row">
            <div class="col-md-3">
                <img src="<?php echo base_url('dist/images/default.png') ?>" alt="" class="img-thumbnail" id="image">
            </div>
            <div class="col-md-9">
                <?php echo form_open_multipart($action) ?>
                    <div class="form-group">
                        <label for="kegiatan_judul">Judul Kegiatan <?php echo form_error('kegiatan_judul') ?></label>
                        <input type="text" class="form-control" name="kegiatan_judul" id="kegiatan_judul" placeholder="Judul Kegiatan" value="<?php echo $kegiatan_judul; ?>" />
                    </div>
                    <div class="form-group">
                        <label for="kegiatan_gambar">Gambar</label>
                        <input type="file" class="form-control upload-image" name="kegiatan_gambar" id="kegiatan_gambar" placeholder="Kegiatan Gambar" data-target="image" />
                    </div>
                    <div class="form-group">
                        <label for="date">Tanggal Kegiatan <?php echo form_error('kegiatan_waktu') ?></label>
                        <input type="text" class="datepicker form-control" name="kegiatan_waktu" id="kegiatan_waktu" placeholder="dd/mm/yyyy" data-maxdate="<?php echo date('d/m/Y') ?>" value="<?php echo $kegiatan_waktu; ?>" />
                    </div>
                    <div class="form-group">
                        <label for="kategori_kegiatan_id">Kategori Kegiatan <?php echo form_error('kategori_kegiatan_id') ?></label>
                        <?php echo form_dropdown('kategori_kegiatan_id', $kategori_kegiatan_list, $kategori_kegiatan_select,'id="kategori_kegiatan_id" class="form-control"') ?>
                    </div>
                    <div class="form-group">
                        <label for="kegiatan_deskripsi">Deskripsi Kegiatan<?php echo form_error('kegiatan_deskripsi') ?></label>
                        <textarea class="form-control" style="min-height: 100px" name="kegiatan_deskripsi" id="kegiatan_deskripsi" placeholder="Kegiatan Deskripsi"><?php echo $kegiatan_deskripsi; ?></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary waves-effect"><?php echo $button ?></button> 
                    <a href="<?php echo site_url('admin_kegiatan') ?>" class="btn btn-default waves-effect"><i class="zmdi zmdi-close"></i> Tutup</a>
                </form>
            </div>
        </div>
    </div>
</div>