
        <!-- Begin Page Content -->
        <div class="container-fluid">
            <form action="<?= base_url('artikel/update');?>" method="post" enctype="multipart/form-data">
            	<input type="hidden" value="<?php echo $edit->id ?>" name="id">
            	<label><span><em>Title</em></span></label>
                <input type="text" name="title" class="form-control border-0" value="<?php echo $edit->post_title ?>" required/><br/>

                <label><span><em>Content</em></span></label>
                <input type="textarea" class="form-control border-0" value="<?php echo $edit->post_content ?>"><br/>

                <label><span><em>Categori</em></span></label>
                <input type="text" name="categori" class="form-control border-0" value="<?php echo $edit->categori ?>" required/><br/>

                <label><span><em>Excrept</em></span></label>
                <input type="textarea" class="form-control border-0" value="<?php echo $edit->post_excrept ?>"><br/>

                <textarea id="ckeditor" name="content" class="form-control border-0" placeholder="text content" required></textarea><br/>

                <input type="file" name="filefoto" required><br>

                <div class="form-group-lg pt-4">
                    <textarea type="text" class="form-control border-0" id="post_excrept" name="post_excrept" rows="5" value="<?php echo $edit->post_excrept ?>"></textarea>
                </div>

                <button class="btn btn-primary btn-lg" type="submit">Post</button>
            </form>

        </div>
        <!-- /.container-fluid -->
