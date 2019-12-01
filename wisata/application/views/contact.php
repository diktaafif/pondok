z<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Main Page</title>
    <!-- Bootstrap -->
    <link href="<?php echo base_url() ?>/assets/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url() ?>/assets/css/style2.css">

	</head>
	<body>
	<section class="contact" id="contact">
		<?php echo form_open('welcome/create_pesan');?>
		<h1 class="text-center">Hubungi Kami</h1>
		<hr>
	
	<div class="container-fluid">
		<div class="col-sm-6">
			
			<?php echo validation_errors(); ?>
			<form >
				<div class="form-group">
					<label for="email">Email</label>
					<input type="email" name="email" class="form-control" placeholder="Masukkan email">
				</div>

				<div class="form-group">
					<label for="telp">Telepon</label>
					<input type="tel" id="telp" name="telp" class="form-control" placeholder="Masukkan no.telp">
				</div>

				<div class="form-group">
					<label for="pesan">Pesan</label>
					<textarea class="form-control" name="pesan" rows="7" placeholder="Masukkan Pesan"></textarea>
				</div>
				<button type="submit" class="btn btn-primary">Kirim Pesan</button>
				<?php echo form_close(); ?>
			</form>	
			<br><br>
			<div class="row">
			<div class="col-sm-4">
				<ul style="list-style-type: none">
					<li>Nomor Kami</li>
					<li>Email Kami</li>
					<li>Facebook</li>
				</ul>
			</div>
			<div class="col-sm-6">
				<ul style="list-style-type: none">
					<li>: 0855328499854</li>
					<li>: abdulsuud858@gmail.com</li>
					<li>: facebook.com/abazsu</li>
				</ul>			
			</div>
	</div>	
		</div>
		<div class="col-sm-6">
			<img src="<?php echo base_url() ?>/assets/img/contact.jpg">
		</div>
	</div>
	
	
	</section>	
		
	</body>
</html>