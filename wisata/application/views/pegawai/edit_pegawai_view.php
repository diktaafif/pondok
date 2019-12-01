<html>
<body>
		<?php $this->load->view('Header_admin'); ?>
<!--<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">-->
<!--setelah load helper baru dapat menggunakan form_open dan form_close sedangkan(pegawai/create) adalah url yang akan di tuju sesuai dengan controller/functionnya-->


<div class="container">
	<div class="row">		
		<legend>Edit data pegawai</legend>
<!-- 		<?php //echo "<pre>";
		var_dump($pegawai); ?>
		 <?php  echo validation_errors(); ?>  -->


		<?php echo form_open_multipart('pegawaiC/updatePegawai/'.$this->uri->segment(3)); ?>
		<div class="form-group">
			<label class="control-label col-sm-2" for="nama">Nama :</label>
			<div class="col-sm-10">
				<input type="text" name="nama" class="form-control" value="<?php echo $pegawai[0]->nama?>" placeholder="Nama">
				<br>				
			</div>
		</div>

		<div class="form-group">
			<label for="nip" class="control-label col-sm-2">NIP :</label>
			<div class="col-sm-10">
				<input type="text" name="nip" class="form-control" value="<?php echo $pegawai[0]->nip?>" placeholder="NIP">
				<br>				
			</div>
		</div>

		<div class="form-group">
			<label class="control-label col-sm-2">Jabatan :</label>
			<div class="col-sm-10">
				<input type="text" name="jabatan" class="form-control tanggal1" value="<?php echo $pegawai[0]->jabatan?>" placeholder="jabatan">
				<br>				
			</div>
		</div>	

		<div class="form-group">
			<label for="alamat" class="control-label col-sm-2">Alamat :</label>
			<div class="col-sm-10">
				<input type="text" name="alamat" class="form-control" value="<?php echo $pegawai[0]->alamat?>" placeholder="NIP">
				<br>				
			</div>
		</div>

		<div class="form-group">
	    	<label class="control-label col-sm-2" for="">Foto :</label>
	    	<div class="col-sm-10">
	    		<input type="file" name="userfile" placeholder="Foto" value="<?php echo $pegawai[0]->gambar?>"><br>
	    		<img src=<?=base_url("assets/uploads/pegawai/").$pegawai[0]->gambar?> ?>
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
</body>
</html>