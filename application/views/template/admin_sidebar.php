<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

  <!-- Sidebar - Brand -->
  <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
    <div class="sidebar-brand-icon rotate-n-15">
      <img src="<?=base_url("assets/images/favicon.png")?>" width="50px">
    </div>
    <div class="sidebar-brand-text mx-3">ReboArt <sup>Blog</sup></div>
  </a>
<?php

    $querymenu = "SELECT *
                   FROM `rb_user_menu` JOIN `rb_user_access_menu` 
                   ON `rb_user_menu`. `menu_id` = `rb_user_access_menu`. `admin`
                    ";
    $menu = $this->db->query($querymenu)->result_array();
          
        ?>

<!-- Divider -->
<hr class="sidebar-divider my-0">
<?php foreach ($menu as $m): ?>
    <?php if ($title == $m['title']): ?>
      <li class="nav-item active">
      <?php else:?>
    <!-- Nav Item - Dashboard -->
    <li class="nav-item">
    <?php endif;?>
    <a class="nav-link" href="<?= base_url()?><?=$m['url']?>">
      <i class="<?=$m['icon']?>"></i>
      <span><?=$m['title']?></span></a>
  </li>
<!-- Divider -->
<hr class="sidebar-divider">
<?php endforeach; ?>

  <!-- Sidebar Toggler (Sidebar) -->
  <div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
  </div>

</ul>
<!-- End of Sidebar -->
  <!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">

  <!-- Main Content -->
  <div id="content">
