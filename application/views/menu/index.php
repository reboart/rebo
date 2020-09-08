
        <!-- Begin Page Content -->
        <div class="container-fluid">

          <div class="row page-titles">
                    <div class="col-md-5 col-8 align-self-center">
                        <h3 class="text-themecolor"><?= $title;?></h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                            <li class="breadcrumb-item active"><?= $title;?></li>
                        </ol>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <!-- Row -->
                <div class="row">
                    <div class="col-lg">
                
                <a href="" class="btn btn-success mb-3" data-toggle="modal" data-target="#newmenumodal">Add New Menu</a>
                    <?= form_error('usermenu','<div class="alert alert-danger" role="alert">','</div>'); ?>
                    <?= $this->session->flashdata('massage');?>
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="row">No</th>
                            <th scope="row">Menu</th>
                            <th scope="row">Url</th>
                            <th scope="row">Icon</th>
                            <th scope="row">Status</th>
                            <th scope="row">Action</th>
                        </tr>
                    </thead>
                    <?php

                        $querymenu = "SELECT * FROM `rb_user_menu`
                                        
                                        ";
                        $menu = $this->db->query($querymenu)->result_array();
                        
                                    
                    ?>
                    <tbody>
                        <?php $i = 1;?>
                        <?php foreach ($menu as $m):?>
                            
                        <tr>
                            <th scope="row"><?=$i?></th>
                            <td><?= $m['title'];?></td>
                            <td><?= $m['url'];?></td>
                            <td><i class="<?=$m['icon']?>"></i></td>
                            <td><?= $m['menu_id'];?></td>
                            <td><?= $m['is_active'];?></td>
                            <td>
                                <a href="<?= base_url(); ?>menu/edit/<?php echo $m['id']; ?>" class="btn btn-sm btn-success">Edit</a>
                                <a href="<?= base_url('menu');?>/delete/<?= $m['id'];?>" class="btn btn-sm btn-danger" onclick="return confirm('yakin');">Del</a>
                            </td>
                        </tr>
                        <?php $i++;?>
                    <?php endforeach;?>
                    </tbody>
                </table>
                
            </div>
                </div>
                <!-- Row -->

        </div>
        <!-- /.container-fluid -->

        <!-- Modal -->
        <div class="modal fade" id="newmenumodal" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="newmenumodalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="newmenumodalLabel">Add New Menu</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <form action="<?= base_url('menu');?>" method="post">

                  <div class="modal-body">
                    <div class="form-group">
                        <input type="text" class="form-control" id="menuid" name="menuid" placeholder="MenuID">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="usermenu" name="usermenu" placeholder="Menu Name">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="url" name="url" placeholder="Page Url">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="icon" name="icon" placeholder="Icon">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="condition" name="is_active" placeholder="condisi">
                    </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save</button>
                  </div>
              </form>
            </div>
          </div>
        </div>
