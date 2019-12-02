<html>
	<body>
		<?php $this->load->view('Header_admin'); ?>
<!--<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">-->
<!-- setelah load helper baru dapat menggunakan form_open dan form_close sedangkan(create) adalah url yang akan di tuju sesuai dengan controller/functionnya -->
<link href="<?php echo base_url() ?>/assets/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="<?php echo base_url() ?>/assets/css/style2.css">

<div class="tambah">
	<!-- <?php echo form_open('Pegawai/create');?> -->
	<?php echo form_open_multipart('pegawaiC/createPegawai'.$this->uri->segment(3)) ?>
	<legend>Tambah Data Pegawai</legend>
	<?php echo validation_errors(); ?>
	<div class="form-group">
		
		<div class="col-sm-10">
			<label class="control-label col-sm-2" for="">Nama</label>
			<input type="text" name="nama" class="form-control"  placeholder="Isi nama pegawai">
		</div>
		<div class="col-sm-10">
			<label class="control-label col-sm-2" for="">Nip</label>
		</div>
		<div class="col-sm-10">
			<input type="text" name="nip" class="form-control"  placeholder="Isi nip pegawai">
		</div>
		<div class="col-sm-10">
			<label class="control-label col-sm-2" for="">Jabatan</label>
		</div>
		<div class="col-sm-10">
			<input type="text" name="jabatan" class="form-control" placeholder="Isi jabatan pegawai">
		</div>
		<div class="col-sm-10">
			<label class="control-label col-sm-2" for="">Alamat</label>
		</div>
		<div class="col-sm-10">
			<input type="text" name="alamat" class="form-control"  placeholder="alamat">
	    </div>
	    
	    <div class="col-sm-10">
	    	<label class="control-label col-sm-2" for="">Foto :</label>
	    	<input type="file" name="userfile" placeholder="Foto"><br>
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