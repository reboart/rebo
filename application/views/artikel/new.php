
        <!-- Begin Page Content -->
        <div class="container-fluid">
            <form action="<?= base_url('artikel/post');?>" method="post" enctype="multipart/form-data">
                <input type="text" name="title" class="form-control border-0" placeholder="Judul berita" required/><br/>
                <input type="text" name="categori" class="form-control border-0" placeholder="Kategori berita" required/><br/>
                <textarea id="ckeditor" name="content" class="form-control border-0" required></textarea><br/>
                <input type="file" name="filefoto" required><br>
                <div class="form-group-lg pt-4">
                    <textarea type="text" class="form-control border-0" id="post_excrept" name="post_excrept" rows="5"></textarea>
                </div>
                <button class="btn btn-primary btn-lg" type="submit">Post Berita</button>
            </form>

        </div>
        <!-- /.container-fluid -->
