

  <main id="main" data-aos="fade-up">

    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2><?= $postnya['post_title']?></h2>
          <ol>
            <li><a href="index.html">Home</a></li>
            <li><?= $postnya['categori']?></li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Team Section ======= -->
    <section id="team" class="team section-bg">
      <div class="container" data-aos="fade-up">
        <div class="row">
        
          <div class="col-lg-8 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
            <div class="member">
              <div class="member-img">
                <img src="<?= base_url();?>assets/images/post/<?= $postnya['thumbnail']?>" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="icofont-twitter"></i></a>
                  <a href=""><i class="icofont-facebook"></i></a>
                  <a href=""><i class="icofont-instagram"></i></a>
                  <a href=""><i class="icofont-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4><?= $postnya['post_title']?></h4>
                <span><?= $postnya['categori']?></span>
                <span><?= $postnya['post_content']?></span>
              </div>
              <div class="card-footer flex">
                <a href=""><i class="icofont-facebook"></i></a>
                <a href=""><i class="icofont-instagram"></i></a>
              </div>
            </div>
           
          </div>


          <div class="col-lg-4 col-md-6 flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
            <div class="card-body" >
                <img src="<?= base_url('assets/images/ads.jpg')?>" >
            </div>
            <div class="card border-0 shadow">
            <?php foreach($ctg as $ctg): ?>
            
                <div class="img d-flex mb-3">
                  <img src="<?= base_url();?>assets/images/post/<?= $ctg['thumbnail']?>" width="100px" class="img-thumbnail border-0">
                  <a  href="<?= $ctg['id']?><?= $ctg['post_title']?>"><h5><?= $ctg['post_title']?></h5></a>
                </div>
            <?php endforeach; ?>    
            </div>
          
       
       

          </div>


        </div>

      </div>

         <!-- ======= Contact Section ======= -->
            <section id="contact" class="contact">
              <div class="container" data-aos="fade-up">

                <div class="row" data-aos="fade-up" data-aos-delay="100">

                  <div class="col-lg-8">
                    <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                      <div class="form-row">
                        <div class="col form-group">
                          <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                          <div class="validate"></div>
                        </div>
                        <div class="col form-group">
                          <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                          <div class="validate"></div>
                        </div>
                      </div>
                      <div class="form-group">
                        <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                        <div class="validate"></div>
                      </div>
                      <div class="form-group">
                        <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                        <div class="validate"></div>
                      </div>
                      <div class="mb-3">
                        <div class="loading">Loading</div>
                        <div class="error-message"></div>
                        <div class="sent-message">Your message has been sent. Thank you!</div>
                      </div>
                      <div class="text-center"><button type="submit">Send Message</button></div>
                    </form>
                  </div>

                </div>

              </div>
            </section><!-- End Contact Section -->
    </section><!-- End Team Section -->

   

  </main><!-- End #main -->
