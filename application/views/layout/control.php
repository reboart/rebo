
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
           
                <!-- ============================================================== -->
                <div class="col pt-3">
                        <div class="card border-0">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs profile-tab" role="tablist">
                                <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#home" role="tab">Home</a> </li>
                                <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#menu" role="tab">Menu</a> </li>
                                <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#profile" role="tab">Profile</a> </li>
                                <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#settings" role="tab">Settings</a> </li>

                            </ul>
                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div class="tab-pane active" id="home" role="tabpanel">
                                    <div class="card-block">
                                        <div class="profiletimeline">
                                            <?php

                                                    $querymenu = "SELECT * FROM `rb_options`
                                                                    
                                                                    ";
                                                    $view = $this->db->query($querymenu)->result_array();
                                                    
                                                                
                                                ?>
                                            <div class="sl-item">
                                             
                                            	<table class="table table-hover">
                                                <?php foreach ($view as $v): ?>
								          			<thead>
									          			<tr>	          				
									          				<th scope="row"><?= $v['name']?></th>
									          				<th scope="row">
                                                                <?= $v['value']?>
									          					<a href="">
									          						<i class="mdi mdi-rename-box"></i>
									          					</a>
									          				</th>
									          			</tr>
									          		</thead>
                                                <?php endforeach; ?>
									          	</table>
                                              
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="menu" role="tabpanel">
                                    <div class="card-block">
                                        <div class="profiletimeline">
                                            <div class="sl-item">
                                            	<table class="table table-hover">
								          			<thead>
									          			<tr>	          				
									          				<th scope="row">Icon</th>
									          				<th scope="row">Menu</th>
									          				<th scope="row">Condition</th>
									          				<th scope="row">
										      					<a href="" class="btn btn-sm btn-success">Edit</a>
										      					<a href="" class="btn btn-sm btn-danger" onclick="return confirm('yakin');">Del</a>
										      				</th>
									          			</tr>
									          		</thead>
									          	</table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--second tab-->
                                <div class="tab-pane" id="profile" role="tabpanel">
                                    <div class="card-block">
                                        <div class="row">
                                            <div class="col-md-3 col-xs-6 b-r"> <strong>Full Name</strong>
                                                <br>
                                                <p class="text-muted">Johnathan Deo</p>
                                            </div>
                                            <div class="col-md-3 col-xs-6 b-r"> <strong>Mobile</strong>
                                                <br>
                                                <p class="text-muted">(123) 456 7890</p>
                                            </div>
                                            <div class="col-md-3 col-xs-6 b-r"> <strong>Email</strong>
                                                <br>
                                                <p class="text-muted">johnathan@admin.com</p>
                                            </div>
                                            <div class="col-md-3 col-xs-6"> <strong>Location</strong>
                                                <br>
                                                <p class="text-muted">London</p>
                                            </div>
                                        </div>
                                        <hr>
                                        <p class="m-t-30">Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt.Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim.</p>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries </p>
                                        <p>It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                        <h4 class="font-medium m-t-30">Skill Set</h4>
                                        <hr>
                                        <h5 class="m-t-30">Wordpress <span class="pull-right">80%</span></h5>
                                        <div class="progress">
                                            <div class="progress-bar bg-success" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width:80%; height:6px;"> <span class="sr-only">50% Complete</span> </div>
                                        </div>
                                        <h5 class="m-t-30">HTML 5 <span class="pull-right">90%</span></h5>
                                        <div class="progress">
                                            <div class="progress-bar bg-info" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width:90%; height:6px;"> <span class="sr-only">50% Complete</span> </div>
                                        </div>
                                        <h5 class="m-t-30">jQuery <span class="pull-right">50%</span></h5>
                                        <div class="progress">
                                            <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:50%; height:6px;"> <span class="sr-only">50% Complete</span> </div>
                                        </div>
                                        <h5 class="m-t-30">Photoshop <span class="pull-right">70%</span></h5>
                                        <div class="progress">
                                            <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:70%; height:6px;"> <span class="sr-only">50% Complete</span> </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="settings" role="tabpanel">
                                    <div class="card-block">
                                        <form class="form-horizontal form-material">
                                            <div class="form-group">
                                                <label class="col-md-12">Full Name</label>
                                                <div class="col-md-12">
                                                    <input type="text" placeholder="Johnathan Doe" class="form-control form-control-line">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="example-email" class="col-md-12">Email</label>
                                                <div class="col-md-12">
                                                    <input type="email" placeholder="johnathan@admin.com" class="form-control form-control-line" name="example-email" id="example-email">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-12">Password</label>
                                                <div class="col-md-12">
                                                    <input type="password" value="password" class="form-control form-control-line">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-12">Phone No</label>
                                                <div class="col-md-12">
                                                    <input type="text" placeholder="123 456 7890" class="form-control form-control-line">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-12">Message</label>
                                                <div class="col-md-12">
                                                    <textarea rows="5" class="form-control form-control-line"></textarea>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-12">Select Country</label>
                                                <div class="col-sm-12">
                                                    <select class="form-control form-control-line">
                                                        <option>London</option>
                                                        <option>India</option>
                                                        <option>Usa</option>
                                                        <option>Canada</option>
                                                        <option>Thailand</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-sm-12">
                                                    <button class="btn btn-success">Update Profile</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                
                
              
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer"> © <?= date('Y');?> Material Pro Admin by wrappixel.com </footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="<?= base_url();?>assets/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="<?= base_url();?>assets/plugins/bootstrap/js/tether.min.js"></script>
    <script src="<?= base_url();?>assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="<?= base_url('assets/');?>js/jquery.slimscroll.js"></script>
    <!--Wave Effects -->
    <script src="<?= base_url('assets/');?>js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="<?= base_url('assets/');?>js/sidebarmenu.js"></script>
    <!--stickey kit -->
    <script src="<?= base_url();?>assets/plugins/sticky-kit-master/dist/sticky-kit.min.js"></script>
    <!--Custom JavaScript -->
    <script src="<?= base_url('assets/');?>js/custom.min.js"></script>
    <!-- ============================================================== -->
    <!-- This page plugins -->
    <!-- ============================================================== -->
    
    <!--c3 JavaScript -->
    <script src="<?= base_url();?>assets/plugins/d3/d3.min.js"></script>
    <script src="<?= base_url();?>assets/plugins/c3-master/c3.min.js"></script>
    
</body>

</html>
