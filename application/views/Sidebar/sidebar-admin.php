<!--sidebar-menu-->
<div id="sidebar"><a href="<?php echo site_url(); ?>" class="visible-phone"><i class="icon icon-home"></i> Dashboard</a>
  <ul>
    <li <?php if($menu==1){?> class="active" <?php }?>><a href="<?php echo site_url(); ?>"><i class="icon icon-home"></i> <span>Dashboard</span></a> </li>
    <li class="submenu <?php if($menu==2){echo "active";}?>"> <a href="#"><i class="icon icon-th-list"></i> <span>Aplikasi Haki</span></a>
      <ul <?php if($menu==3 or $menu ==4 or $menu ==5 or $menu==6){echo 'style="display:block;"';}?>>
        <li <?php if($menu==3){?> class="active" <?php }?>><a href="<?php echo site_url("aplikasi_haki/merek"); ?>">Merek</a></li>
        <li <?php if($menu==4){?> class="active" <?php }?>><a href="<?php echo site_url("aplikasi_haki/hak_cipta"); ?>">Hak Cipta</a></li>
        <li <?php if($menu==5){?> class="active" <?php }?>><a href="<?php echo site_url("aplikasi_haki/paten"); ?>">Paten</a></li>
        <li <?php if($menu==6){?> class="active" <?php }?>><a href="<?php echo site_url("aplikasi_haki/design_industri"); ?>">Design Industri</a></li>
      </ul>
    </li>
    <li <?php if($menu==7){?> class="active" <?php }?>> <a href="<?php echo site_url("monitoring"); ?>"><i class="icon icon-signal"></i> <span>Monitoring</span></a> </li>
    <li <?php if($menu==8){?> class="active" <?php }?>> <a href="<?php echo site_url("semua_data"); ?>"><i class="icon icon-inbox"></i> <span>Daftar Klien</span></a> </li>
  
  </ul>
</div>
<!--sidebar-menu-->