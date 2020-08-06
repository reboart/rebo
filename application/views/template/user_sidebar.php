
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">

                    

                    <?php

                        

                        $querymenu = "SELECT *
								 		FROM `rb_user_menu` JOIN `rb_user_access_menu` 
								    	ON `rb_user_menu`. `menu_id` = `rb_user_access_menu`. `user`
								    	";
                        $menu = $this->db->query($querymenu)->result_array();
                        
                                    
                    ?>


                    <ul id="sidebarnav">
                        <?php foreach ($menu as $m): ?>
                        <li> 
                            <a class="waves-effect waves-dark" href="<?= base_url()?><?=$m['url']?>" aria-expanded="false">
                                <i class="<?=$m['icon']?>"></i>
                                <span class="hide-menu"><?=$m['title']?></span>
                            </a>
                        </li>
                        <?php endforeach; ?>
                        
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
            <!-- Bottom points-->
            <div class="sidebar-footer">
                <!-- item--><a href="" class="link" data-toggle="tooltip" title="Settings"><i class="ti-settings"></i></a>
                <!-- item--><a href="" class="link" data-toggle="tooltip" title="Email"><i class="mdi mdi-gmail"></i></a>
                <!-- item--><a href="<?= base_url('auth/logout');?>" class="link" data-toggle="tooltip" title="Logout"><i class="mdi mdi-power"></i></a> </div>
            <!-- End Bottom points-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->