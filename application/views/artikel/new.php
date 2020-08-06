
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
               <form action="<?= base_url('artikel/newpost');?>" method="post">
                    <!-- Row -->
                <div class="row ">
                    <!-- Column -->
                    <div class="col-lg-8 col-md-7">
		        
                    <div class="form-group-lg">
                       
                        <input type="text" class="form-control border-0" id="post_title" name="post_title" placeholder="Title">
                    </div>
                    <div class="form-group-lg mt-2">
                       
                        <input type="guide" class="form-control border-0" id="guide" name="guide" placeholder="<?= base_url();?>">
                    </div>

                    <div class="form-group-lg pt-4">
                        <textarea type="longtext" class="form-control border-0" id="post_content" name="post_content" rows="12"></textarea>
                    </div>
				  
				
		        </div>
                <div class="col-lg-4 col-md-5 p-2 bg-success">
                    <div class="custom-control custom-switch">
                      <input type="checkbox" class="custom-control-input" id="customSwitch1">
                      <label class="custom-control-label" for="customSwitch1">Comment</label>
                    </div>
                    <div class="custom-control custom-switch">
                      <input type="checkbox" class="custom-control-input" id="customSwitch1">
                      <label class="custom-control-label" for="customSwitch1">type</label>
                    </div>
                    
                <div class="form-group">
                    <input type="file" class="form-control-file border-0" id="exampleFormControlFile1">
                </div>
                <div class="form-group-lg pt-4">   
                    <input type="text" class="form-control border-0" id="post_title" name="post_title" placeholder="Title">
                </div>
                <div class="form-group-lg pt-4">
                    <textarea type="text" class="form-control border-0" id="post_excrept" name="post_excrept" rows="5"></textarea>
                </div>
                
              </div>
            </div>
            <button href="<?= base_url('artikel/post');?>" class="btn btn-primary mb-2">Post</button>

		    </form> 
            <form action="<?= base_url('artikel/post');?>" method="post" enctype="multipart/form-data">
                <input type="text" name="title" class="form-control border-0" placeholder="Judul berita" required/><br/>
                <textarea id="ckeditor" name="content" class="form-control border-0" required></textarea><br/>
                <input type="file" name="filefoto" required><br>
                <div class="form-group-lg pt-4">
                    <textarea type="text" class="form-control border-0" id="post_excrept" name="post_excrept" rows="5"></textarea>
                </div>
                <button class="btn btn-primary btn-lg" type="submit">Post Berita</button>
            </form>
                
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->

            <footer class="footer"> © <?= date('Y')?> Material Pro Admin by wrappixel.com </footer>
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

    <script src="<?php echo base_url().'assets/ckeditor/ckeditor.js'?>"></script>
    <script type="text/javascript">
      $(function () {
        CKEDITOR.replace('ckeditor');
      });
    </script>
    <!-- ============================================================== -->
    
    <!--c3 JavaScript -->
    <script src="<?= base_url();?>assets/plugins/d3/d3.min.js"></script>
    <script src="<?= base_url();?>assets/plugins/c3-master/c3.min.js"></script>
    
</body>

</html>
