        <!-- Page wrapper  -->
        <!-- ============================================================== -->
<div class="page wrapper">
            <!-- ============================================================== -->
            <!-- Column -->
    <div class="container pt-4">

		
        <div class="row py-5">
			<div class="col-lg-8 col-md-6 align-items-stretch mb-1">
				<div class="course-item card border-0 mr-3" style="border-radius: 10px;">
                    <img src="<?= base_url()?>assets/images/post/<?php echo $data['thumbnail'];?>" style="border-radius: 10px 10px 0 0;" class="img-fluid card-img-top rounded-5" alt="...">
                    <div class="course-content p-2" >
                        <h4>
                            <?= $data['post_title'];?>
                        </h4>
                        <div class="trainer d-flex justify-content-between align-items-center">
                            <div class="trainer-profile d-flex align-items-center">
                                <img src="assets/img/trainers/trainer-1.jpg" class="img-fluid" alt="">
                                <span><?= $data['post_content'];?></span>
                            </div>
                        </div>
                    </div>
                    <div class="trainer-rank card-footer d-flex align-items-center">
                        <i class="bx bx-user"></i>&nbsp;50
                        &nbsp;&nbsp;
                        <i class="bx bx-heart"></i>&nbsp;65
                    </div>
                </div>
			</div>
			<div class="col-lg-4 col-md-6 align-items-stretch mb-1">
				<div class="card-block ads">
                    <img src="<?= base_url()?>/assets/images/ads.jpg">
                    
                </div>
			</div>
        </div>
       
    </div>