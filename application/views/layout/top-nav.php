
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar">
            <nav class="navbar top-navbar navbar-toggleable-sm navbar-light">
                <!-- ============================================================== -->
                <!-- Logo -->
                <!-- ============================================================== -->
                <div class="navbar-header hidden-md-up">
                    <a class="navbar-brand">
                        <!-- Logo icon --><b>
                            <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                            
                            <!-- Light Logo icon -->
                            <img src="<?= base_url()?>assets/images/favicon.png" alt="homepage" class="light-logo hidden-md-up" style="width: 40px;" />
                        </b>
                        <!--End Logo icon -->
                        <!-- Logo text --> </a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->

                <div class="navbar-collapse">
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav mt-md-0">
                        <!-- This is  -->
                        <li class="nav-item"> <a class="nav-link nav-toggler hidden-md-up text-muted waves-effect waves-dark" href="javascript:void(0)"><i class="mdi mdi-menu"></i></a> </li>
                        <!-- ============================================================== -->
                        <!-- Search -->
                        <!-- ============================================================== -->
                        
                    </ul>
                    <!-- ============================================================== -->
                    <!-- User profile and search -->
                    <a class="navbar-brand" href="index.html">
                    	<span>
                         
                         <!-- Light Logo text -->    
                         </span>
                    </a>
                    		
                    	
                    
                    <!-- ============================================================== -->
                    <ul class="navbar-nav m-auto my-auto">
                        <!-- ============================================================== -->
                        <!-- Profile -->

                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="<?= base_url()?>assets/images/nav.png" class="light-logo" style="width: 100px;" alt="homepage" /></a>
                        </li>
                        
                        <li class="nav-item pl-5">
                            <?php foreach($menu as $me):?>
                                <a class="nav-link dropdown-toggle text-muted waves-effect hidden-sm-down waves-dark" href="<?= base_url()?><?= $me['url']?>" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?= $me['title']?></a>
                            <?php endforeach;?>
                        </li>
                    
                        
                        <li class="nav-item hidden-sm-down search-box"> <a class="nav-link hidden-sm-down text-muted waves-effect waves-dark" href="javascript:void(0)"><i class="ti-search"></i></a>
                            <form class="app-search">
                                <input type="text" class="form-control" placeholder="Search & enter"> <a class="srh-btn"><i class="ti-close"></i></a> </form>
                        </li>
                    </ul>

                    
                </div>
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->