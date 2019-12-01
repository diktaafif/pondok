<?php $this->load->view('header_admin'); ?>
<!--<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">-->
<!--setelah load helper baru dapat menggunakan form_open dan form_close sedangkan(berita/create) adalah url yang akan di tuju sesuai dengan controller/functionnya-->

	
<div class="container">
	<div class="row">		
		<br><br><br>
		<?php echo validation_errors(); ?>
		<?php echo form_open_multipart('galeri/tambahGaleri/'.$this->uri->segment(3)); ?>
		<div class="form-group">
	    	<label class="control-label col-sm-2" for="">Gambar :</label>
	    	<div class="col-sm-10">
	    		<input type="file" name="userfile" placeholder="Foto" value=""><br>
	    		<input type="hidden" name="kode_galeri" value=<?php echo $kategori_galeri[0]->kode_galeri; ?>>
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