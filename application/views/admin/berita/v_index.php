<div class="card">
    <div class="body">
    <div class="action">
        <?php echo anchor('admin_berita/tambah','<i class="zmdi zmdi-plus"></i> Tambah Berita','class="btn btn-primary btn-raised"')?>
    </div>
    <table class="table news-list" id="table" data-url="<?php echo site_url('admin_berita/json')?>">
        <thead>
            <tr>
                <th width="auto">Berita Judul</th>
                <th width="120">Nama</th>
                <th width="80">Tanggal</th>
            </tr>
        </thead>
    </table>
    </div>
</div>
