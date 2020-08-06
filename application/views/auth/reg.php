
    <div class="page-holder d-flex align-items-center">
      <div class="container">
        <div class="row align-items-center py-5">
          <div class="col-5 col-lg-7 mx-auto mb-4 mb-lg-0">
            <div class="pr-lg-5"><img src="<?= base_url('assets/');?>images/favicon.png" alt="" class="img-fluid"></div>
          </div>
          <div class="col-lg-5 px-lg-4">
            <h1 class="text-base text-primary text-uppercase mb-4">Registrasi</h1>
            <p class="text-muted"><?= $this->session->flashdata('massage');?></p>
            <form class="user" method="post" action="<?= base_url('auth/reg');  ?>">
                <div class="form-group">
                  <input type="text" class="form-control form-control-user" id="fullname" name="name" placeholder="Full Name" value="<?= set_value('name');?>">
                  <?= form_error('name','<small class="text-danger pl-3">','</small>');?>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control form-control-user" id="email" name="email"placeholder="Email Address" value="<?= set_value('email');?>">
                  <?= form_error('email','<small class="text-danger pl-3">','</small>');?>
                </div>
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="password" class="form-control form-control-user" id="password1" name="password1" placeholder="Password">
                    <?= form_error('password1','<small class="text-danger pl-3">','</small>');?>
                  </div>
                  <div class="col-sm-6">
                    <input type="password" class="form-control form-control-user" id="password2"name="password2" placeholder="Repeat Password">
                  </div>
                </div>
                <button type="submit" class="btn btn-success btn-user btn-block">Register Account
                </button>
              </form>
          </div>
        </div>
        <p class="mt-0 mb-0 text-gray-400 text-center"><a href="https://bootstrapious.com/admin-templates" class="external text-gray-400">ReboArt</a> | Copyright &copy; <?= date('Y');?></p>
        
      </div>
    </div>
    <!-- ============================================================== -->

