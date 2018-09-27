
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>Gentelella Alela!</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="<?php echo base_url('dist/images/profile/admin.png')?>" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2><?php echo $admin_login->admin_nama?></h2>
              </div>
              <div class="clearfix"></div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>Mainmenu</h3>
                  <ul  class="nav side-menu">
                  <?php foreach ($menus as $menu) { ?>
                    <?php if (is_array($menu['url'])) { ?>
                    <li><a><i class="fa fa-fw fa-<?php echo $menu['icon']?>"></i> <?php echo $menu['text']?> <span class="fa fa-chevron-down"></span></a>
                      <ul class="nav child_menu">
                      <?php foreach ($menu['url'] as $submenu) { ?>
                        <li><?php echo anchor($submenu['url'],$submenu['text'])?></li>
                      <?php } ?>
                      </ul>
                    </li>
                    <?php } else { ?>
                    <li><?php echo anchor($menu['url'],'<i class="fa fa-fw fa-'.$menu['icon'].'"></i>'.' '.$menu['text'])?></li>
                    <?php } ?>
                    <?php } ?>
                  </ul>
              </div>
            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small" style="visibility: hidden">
              <a>
                <span  class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>