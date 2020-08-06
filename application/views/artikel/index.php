
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <div class="row page-titles">
                    <div class="col-md-5 col-8 align-self-center">
                        <h3 class="text-themecolor">Dashboard</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                    </div>
                    
                </div>
                <!-- ============================================================== -->
                <!-- End Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
               <!-- Begin Page Content -->
		        <div class="container-fluid">
		        
		         <!-- DataTales Example -->
		          <div class="mb-4">
		          	
		            
		            <a href="<?= base_url('artikel/new');?>" class="btn btn-success mb-3">Add New</a>
		            <div class="card-body">
		              <div class="table-responsive">
		                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
		                  <thead>
		                    <tr>
		                      <th>No</th>
                              <th>Thumbnail</th>
                              <th>Title</th>
                              <th>Author</th>
		                      <th>Date</th>
                              <th>ID</th>
		                      
		                    </tr>
		                  </thead>
                          <?php

                        

                        $querymenu = "SELECT *
                                        FROM `rb_post`
                                        ";
                        $artikel = $this->db->query($querymenu)->result_array();
                        
                                    
                    ?>
		                  <tbody>
                            <?php $i = 1;?>
		                    <?php foreach ($artikel as $a ): ?>
		                    <tr>
                                <td><?=$i?></td>
                                <td><img src="<?= base_url('assets/images/post/') . $a['thumbnail'];?>" alt="thumbnail" style="width: 50px;" />
                                    </td>
		                      <td>
                                <a href="<?= base_url('home/post/') . $a['id'];?>">
                                    <?= $a['post_title'];?>    
                                </a>
                              </td>
		                      <td><?= $a['post_author'];?></td>
                              <td><?= $a['post_date'];?></td>
                              <td></td>
		                      
		                    </tr>
                            <?php $i++; ?>
		                   <?php endforeach; ?>
		                  </tbody>
		                </table>
		              </div>
		            </div>
		        </div>
		        </div>
		        <!-- /.container-fluid -->
                
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer"> © 2017 Material Pro Admin by wrappixel.com </footer>
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
      <!-- Page level custom scripts -->
	<script src="<?= base_url('assets/');?>js/datatables.js"></script>
    <!-- Page level plugins -->
	<script src="<?= base_url('assets/');?>plugins/datatables/jquery.dataTables.min.js"></script>
	<script src="<?= base_url('assets/');?>plugins/datatables/dataTables.bootstrap4.min.js"></script>
    <!-- ============================================================== -->
   
    <!--c3 JavaScript -->
    <script src="<?= base_url();?>assets/plugins/d3/d3.min.js"></script>
    <script src="<?= base_url();?>assets/plugins/c3-master/c3.min.js"></script>
   
</body>

</html>
