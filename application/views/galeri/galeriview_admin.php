

<div class="jp" style="min-height: 700px;padding-top: 40px">
	<div class="container">	
		<div class="row">
			<div class="col-sm-12 text-center">
				<h1><?php echo $kategori_galeri[0]->nama_wisata; ?></h1>
				<hr>
	<?php
			foreach ($galeri as $key) { ?>
				<div class="col-sm-4">
					<a href="#" class="thumbnail">
						<img src=<?=base_url("assets/uploads/galeri")."/".$key->gambar?> alt="" style="width: 200px; height: 200px;">
					</a>
					<a href="<?=site_url()?>/galeri/deleteIsiGaleri/<?php echo $key->id ?>"><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span></button></p>
				</div>
	<?php	}
	?>
				<div class="col-sm-4">
					<a href="<?php echo site_url().'/galeri/tambahGaleri/'.$kategori_galeri[0]->kode_galeri?>" class="thumbnail">
						<p data-placement="top" data-toggle="tooltip" title="Add"><button class="btn btn-danger btn-xs" data-title="Add" data-toggle="modal" data-target="#add" ><span class="glyphicon glyphicon-plus" style="width: 154px; height: 185px; font-size: 170px; text-align: center;"></span></button></p>
					</a>
				</div>
<!-- 				<div class="col-sm-4">
					<a href="#" class="thumbnail">
						<img src="<?=base_url() ?>/assets/img/wisata/JP/jp1.jpg" alt="">
					</a>
				</div>
				<div class="col-sm-4">
					<a href="#" class="thumbnail">
						<img src="<?=base_url() ?>/assets/img/wisata/JP/jp2.jpg" alt="">
					</a>
				</div>
				<div class="col-sm-4">
					<a href="#" class="thumbnail">
						<img src="<?=base_url() ?>/assets/img/wisata/JP/jp1.jpg" alt="">
					</a>
				</div>
			</div>
			<div class="col-sm-12">
				<div class="col-sm-4">
					<a href="#" class="thumbnail">
						<img src="<?=base_url() ?>/assets/img/wisata/JP/jp1.jpg" alt="">
					</a>
				</div>
				<div class="col-sm-4">
					<a href="#" class="thumbnail">
						<img src="<?=base_url() ?>/assets/img/wisata/JP/jp1.jpg" alt="">
					</a>
				</div>
				<div class="col-sm-4">
					<a href="#" class="thumbnail">
						<img src="<?=base_url() ?>/assets/img/wisata/JP/jp1.jpg" alt="">
					</a>
				</div>
			</div> -->
		</div>
	</div>
</div>