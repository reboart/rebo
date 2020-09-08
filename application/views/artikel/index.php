
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
              <th>Categori</th>

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
                <a href="<?= base_url('home/post/') . $a['post_title'];?>">
                  <?= $a['post_title'];?>    
                </a>
                <a href="<?= base_url('artikel/edit/')?><?= $a['id'];?>" class="btn-sm btn-success">Edit</a>
              </td>
              <td><?= $a['post_author'];?></td>
              <td><?= $a['post_date'];?></td>
              <td><?= $a['categori'];?></td>

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
