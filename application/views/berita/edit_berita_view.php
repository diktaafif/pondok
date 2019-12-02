<?php $this->load->view('header_admin'); ?>
<!--<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">-->
<!--setelah load helper baru dapat menggunakan form_open dan form_close sedangkan(berita/create) adalah url yang akan di tuju sesuai dengan controller/functionnya-->

<html>
<body>
	
<div class="container">
	<div class="row">		
		<legend>Edit data berita</legend>
<!-- 		<?php //echo "<pre>";
		var_dump($berita); ?>
		 <?php  echo validation_errors(); ?>  -->


		<?php echo form_open_multipart('berita/updateBerita/'.$this->uri->segment(3)); ?>
		<div class="form-group">
			<label class="control-label col-sm-2" for="judul">Judul :</label>
			<div class="col-sm-10">
				<input type="text" name="judul" class="form-control" value="<?php echo $berita[0]->judul?>" placeholder="Nama">

				<br>				
			</div>
		</div>	

		<div class="form-group">
			<label for="isi" class="control-label col-sm-2">Isi :</label>
			<div class="col-sm-10">
				<input type="text" name="isi" class="form-control" value="<?php echo $berita[0]->isi?>" placeholder="NIP">
				<br>				
			</div>
		</div>

		<div class="form-group">
	    	<label class="control-label col-sm-2" for="">Foto :</label>
	    	<div class="col-sm-10">
	    		<input type="file" name="userfile" placeholder="Foto" value=<?php echo base_url("assets/uploads")."/".$berita[0]->gambar?>><br>
	    		<img src=<?=base_url("assets/uploads")."/".$berita[0]->gambar?> >
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