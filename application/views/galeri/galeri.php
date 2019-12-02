<html>
  <head>
    <title></title>
  </head>
  <body>
        <!-- Bootstrap -->
    <link href="<?php echo base_url() ?>/assets/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url() ?>/assets/css/style2.css">

    <section class="galeri">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 text-center">
            <h1>Galeri</h1>
            <hr>
            <?php foreach ($kategori_galeri as $key) {?>
              <div class="col-sm-4">
              <!-- <a href="<?=site_url().'/galeri/tampilView/'.$key->kode_galeri?>" class="thumbnail"> -->
                <a href="<?=site_url()?>/galeri/tampilView/<?php echo $key->kode_galeri ?>" class="thumbnail">
                <img src="<?=base_url().'assets/uploads/galeri/'.$key->icon ?>">
              </a>
              <p><?php echo $key->nama_wisata; ?></p>
            </div>
            <?php } ?>
          </div>
        </div>
      </div>
    </section>
  </body>
</html>

