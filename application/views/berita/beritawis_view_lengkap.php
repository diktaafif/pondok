
    <!-- Bootstrap -->
    <link href="<?php echo base_url() ?>/assets/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url() ?>/assets/css/style2.css">

<section class="lengkapBerita" >
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <h1 class="text-center"><?php echo $berita[0]->judul; ?></h1>
            <hr>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-12 text-center">
			     <img class="img-thumbnail" style="width: 400px;height: 400px;" src="<?php echo base_url().'assets/uploads/berita/'.$berita[0]->gambar; ?>">			
          </div>
        </div>
        <div class="row">
        	<div class="col-sm-12">
        		<?php echo $berita[0]->isi; ?>	
            <br>
            <a href="<?=site_url()?>/welcome/beritalocation/">Tampilkan Map</a>
        	</div>
        </div>	
      </div>
    </section>
    <br><br>

