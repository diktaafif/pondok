<?php $this->load->view('header_admin'); ?>
<!--<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">-->
<!--setelah load helper baru dapat menggunakan form_open dan form_close sedangkan(berita/create) adalah url yang akan di tuju sesuai dengan controller/functionnya-->

<html>
<body>
	
<div class="container">
	<div class="row">		
		<legend>Edit data berita</legend>
<!-- 		<?php //echo "<pre>";
		var_dump($kode_galeri); ?>
		 <?php  echo validation_errors(); ?>  -->


		<?php echo form_open_multipart('galeri/updateGaleri/'.$this->uri->segment(3)); ?>
		<div class="form-group">
			<label class="control-label col-sm-2" for="kode_galeri">Kode Galeri :</label>
			<div class="col-sm-10">
				<input type="text" name="kode_galeri" class="form-control" value="<?php echo $kode_galeri[0]->kode_galeri?>" placeholder="kode galeri">

				<br>				
			</div>
		</div>	

		<div class="form-group">
			<label for="nama_wisata" class="control-label col-sm-2">Nama Wisata :</label>
			<div class="col-sm-10">
				<input type="text" name="nama_wisata" class="form-control" value="<?php echo $kode_galeri[0]->nama_wisata?>" placeholder="nama wisata">
				<br>				
			</div>
		</div>

		<div class="form-group">
	    	<label class="control-label col-sm-2" for="">Icon :</label>
	    	<div class="col-sm-10">
	    		<input type="file" name="userfile" placeholder="Foto" value=<?php echo base_url("assets/uploads/galeri")."/".$kode_galeri[0]->icon?>><br>
	    		<img src=<?=base_url("assets/uploads/galeri")."/".$kode_galeri[0]->icon?> >
	    	</div>
	    </div>
	    
			<div class="form-group">
				<div class="col-sm-offset-2 col-sm-10">
					<button type="submit" class="btn btn-primary">Submit</button>
					<?php echo form_close(); ?>
				</div>
			</div>
	</div>
</div>
<!-- <?php $this->load->view('footer_loggedin'); ?> -->
	</body>
</html>