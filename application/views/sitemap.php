<? xml version = "1.0" encoding = "UTF-8"?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
  <url>
     <loc><?php echo base_url();?></loc>
     <priority>1.0</priority>
  </url>

  <?php foreach($post as $data) { ?>
  <url>
     <loc><?php echo base_url('sitemap').'/'.$data->id;?></loc>
     <priority>0.5</priority>
     <lastmod><?php echo $data->post_title ;?></lastmod>
  </url>
  <?php } ?>
</urlset>