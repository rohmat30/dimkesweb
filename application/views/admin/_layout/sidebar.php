
<!--Side menu and right menu -->
<section> 
    <!-- Left Sidebar -->
    <aside id="leftsidebar" class="sidebar"> 
        <!-- User Info -->
        <div class="user-info">
            <div class="admin-image"> <img src="<?php echo base_url('dist/images/profile/random-avatar1.jpg')?>" alt=""> </div>
            <div class="admin-action-info">
                <span>Selamat Datang</span>
                <h3 style="font-weight: normal"><?php echo $admin_login->admin_nama?></h3>
                <ul>
                    <li><a data-placement="bottom" title="Go to Inbox" href="mail-inbox.html"><i class="zmdi zmdi-email"></i></a></li>
                    <li><a data-placement="bottom" title="Go to Profile" href="profile.html"><i class="zmdi zmdi-account"></i></a></li>                    
                    <li><a href="javascript:void(0);" class="js-right-sidebar" data-close="true"><i class="zmdi zmdi-settings"></i></a></li>
                    <li><a data-placement="bottom" title="Full Screen" href="sign-in.html" ><i class="zmdi zmdi-sign-in"></i></a></li>
                </ul>
            </div>
        </div>
        <!-- #User Info --> 
        <!-- Menu -->
        <div class="menu">
            <ul class="list">
                <li class="header">MAIN NAVIGATION</li>
                
                <?php foreach ($menus as $menu) { ?>
                    <?php if (is_array($menu['url'])) { ?>
                    <li<?php echo isset($menu['active']) ? ' class="open active"': NULL?>><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-<?php echo $menu['icon']?>"></i> <span><?php echo $menu['text']?></span></a>
                      <ul class="ml-menu">
                      <?php foreach ($menu['url'] as $submenu) { ?>
                        <li<?php echo isset($submenu['active']) ? ' class="active"': NULL?>><?php echo anchor($submenu['url'],$submenu['text'])?></li>
                      <?php } ?>
                      </ul>
                    </li>
                <?php } else { ?>
                <li<?php echo isset($menu['active']) ? ' class="open active"': NULL?>><?php echo anchor($menu['url'],'<i class="zmdi zmdi-'.$menu['icon'].'"></i>'.' <span>'.$menu['text'].'</span>')?></li>
                <?php } ?>
                <?php } ?>
            </ul>
        </div>
        <!-- #Menu -->
    </aside>
    <!-- #END# Left Sidebar --> 
</section>
<!--Side menu and right menu -->