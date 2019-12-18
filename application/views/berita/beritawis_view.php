

<div class="berita" id="berita" style="margin-top: 60px">
				<h1 style="text-align: center">Daftar Pondok</h1>
				<hr>
	<div class="container">			
<?php foreach ($berita as $key): ?>
		<div class="media">
			<div class="media-left media-middle">			
						<img class="media-object" style="width: 200px;height: 200px;padding-right: 10px;padding-bottom: 10px;" src="<?php echo base_url().'assets/uploads/berita/'.$key->gambar; ?>">					
				</div>
				<div class="media-body" style="padding-left: 20px;">
					
					<!-- <?php echo substr($key->isi, 5,200); ?>					 -->
					<a href="<?=site_url()?>/welcome/beritaTampilLengkap/<?php echo $key->id ?>"><p data-placement="top" data-toggle="tooltip" title="Edit"><h3 class="media-heading"><?php echo $key->judul; ?></h3>					</a>
				</div>
		</div>
<?php endforeach; ?>		
	</div>	
</div>