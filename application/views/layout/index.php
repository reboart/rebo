

  <main id="main">

    <!-- ======= Featured Services Section ======= -->
    <section id="featured-services" class="featured-services">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <?php

                            $querynew = "SELECT * FROM `rb_post` ORDER BY `id` DESC LIMIT 4
                                            
                                            ";
                    $categ=$this->db->query($querynew)->result_array();
               ;?>
          <?php foreach($categ as $ct):?>
            <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
              <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                <img src="<?= base_url();?>assets/images/post/<?= $ct['thumbnail'];?>" style="border-radius: 10px 10px 0 0;" class="img-fluid card-img-top rounded-5 p-0" alt="...">
                <h4 class="title"><a href="<?=base_url('home/post/')?><?= $ct['id']?><?= $ct['post_title']?>"><?= $ct['post_title']?></a></h4>
                <p class="description"><?= $ct['post_excrept']?></p>
              </div>
            </div>
          <?php endforeach;?>

        </div>

      </div>
    </section><!-- End Featured Services Section -->

   
    <!-- ======= Team Section ======= -->
    <section id="team" class="team section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Art</h2>
        </div>
        <?php

                            $queryne = "SELECT * FROM `rb_post` ORDER BY `post_title` DESC LIMIT 4
                                            
                                            ";
                    $cate=$this->db->query($queryne)->result_array();
               ;?>
          

        <div class="row">
         <?php foreach($cate as $ca):?>
          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
            <div class="member">
              <div class="member-img">
                <img src="<?= base_url()?>assets/images/post/<?= $ca['thumbnail']?>" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="icofont-twitter"></i></a>
                  <a href=""><i class="icofont-facebook"></i></a>
                  <a href=""><i class="icofont-instagram"></i></a>
                  <a href=""><i class="icofont-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <a href="home/post/<?= $ca['id']?><?= $ca['post_title']?>"><h4><?= $ca['post_title']?></h4></a>
                <span><?= $ca['post_excrept']?></span>
              </div>
            </div>
          </div>
        <?php endforeach;?>

        </div>

      </div>
    </section><!-- End Team Section -->



  </main><!-- End #main -->
