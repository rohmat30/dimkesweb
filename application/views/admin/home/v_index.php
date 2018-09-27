<div class="row">
    <div class="col-sm-6">
    <?php
    foreach ($menus as $key => $value) {
        print_r($value);
        echo '<br><br>';
    }
    ?>
    </div>
    <div class="col-sm-6">
<?php
    $rm = array();
    $new = 'admin_kategori';
    
    foreach ($rm as $key => $menu) {
        if (isset($menu['active'])) {
            echo '<div style="color: red">';
            print_r($menu);
            echo '<br><br></div>';
        } else {
            echo '<div>';
            print_r($menu);
            echo '<br><br></div>';
        }
    }
?>
    </div>
</div>