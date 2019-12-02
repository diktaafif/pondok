<div class="jp" style="min-height: 700px;padding-top: 40px">
	<div class="container">	
		<div class="row">
			<div class="col-sm-12 text-center">
				<br><br>
				<h1><?php echo $kategori_galeri[0]->nama_wisata; ?></h1>
				<hr>

				<?php foreach ($galeri as $key) {?>
				<div class="col-sm-4">
					<a href="#" class="thumbnail">
						<img src="<?=base_url().'assets/uploads/galeri/'.$key->gambar ?>">
					</a>
				</div>
				<?php } ?>
			</div>
		</div>
	</div>
</div>