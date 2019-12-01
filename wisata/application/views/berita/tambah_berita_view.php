<html>
	<body>
		
		<?php $this->load->view('Header_admin'); ?> 
		<!--<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">-->
		<!-- setelah load helper baru dapat menggunakan form_open dan form_close sedangkan(create) adalah url yang akan di tuju sesuai dengan controller/functionnya -->
		<link href="<?php echo base_url() ?>/assets/css/bootstrap.min.css" rel="stylesheet">
		<link rel="stylesheet" href="<?php echo base_url() ?>/assets/css/style2.css">
		
		<div class="tambah">
			<!-- <?php echo form_open('Berita/createBerita');?> -->
			<?php echo form_open_multipart('Berita/createBerita'.$this->uri->segment(3)) ?>
			<legend>Tambah Data Berita</legend>
			<?php echo validation_errors(); ?>
			<div class="form-group">
				

				<div class="col-sm-10">
					<label class="control-label col-sm-2" for="">Judul</label>
					<input type="text" name="judul" class="form-control"  placeholder="Isi Judul">
				</div>

				<div class="col-sm-10">
					<label class="control-label col-sm-2" for="">Isi Berita</label>
				</div>
				<div class="col-sm-10">
					<input type="text" name="isi" class="form-control"  placeholder="isi">
			    </div>
			    
			    <div class="col-sm-10">
			    	<label class="control-label col-sm-2" for="">Gambar :</label>
			    	<input type="file" name="userfile" placeholder="Gambar"><br>
			    </div>	
				 <div class="col-sm-10">
					<button type="submit" class="btn btn-primary">Submit</button>
					<?php echo form_close(); ?>
				</div>
			</div>
		</div>

<!--</div>-->
<?php $this->load->view('footer_loggedin'); ?>

	</body>
</html>
