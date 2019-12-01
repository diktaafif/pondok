<?php $this->load->view('header'); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Hello ^^</title>
	<script src="<?php echo base_url();?>assets/css/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
 	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap-theme.css">
</head>
	<div class="table-responsive">
		<div class="row">
		<div class="col-md-6">
			<h1>Biodata saya dari array</h1>
			<table class="table table-hover">
				<tbody>
				<?php foreach ($biodata_array as $key) { ?>
			<tr>
				<td><?php echo $key['nama'] ?></td>
			</tr>
			<tr>
				<td><?php echo $key['nim'] ?></td>
			</tr>
			<tr>
				<td><?php echo $key['ttl'] ?></td>
			</tr>
			<tr>
				<td><?php echo $key['jurusan'] ?></td>
			</tr>
			<tr>
				<td><?php echo $key['alamat'] ?></td>
			</tr>	

			</tbody>
			<?php } ?>
			</table>
		</div>
	<div class="table-responsive">
		<h1>Biodata saya dari object</h1>
		<table class="table table-hover">
			<tbody>
				<?php foreach ($biodata_object as $key) {
				?>
			<tr>
				<td><?php echo $key->nama ?></td>
			</tr>
			<tr>
				<td><?php echo $key->nim ?></td>
			</tr>
			<tr>
				<td><?php echo $key->ttl ?></td>
			</tr>
			<tr>
				<td><?php echo $key->jurusan ?></td>
			</tr>
			<tr>
				<td><?php echo $key->alamat ?></td>
			</tr>
			</tbody>
			<?php } ?>
		</table>
	</div>
	</div>
	<div class="table-responsive">
		<div class="col-md-6">
		<h1>Biodata saya dari builder array</h1>
		<table class="table table-hover">
			<tbody>
			<?php foreach ($biodata_builder_array as $key) {
			?>
			<tr>
				<td><?php echo $key['nama'] ?></td>
			</tr>
			<tr>
				<td><?php echo $key['nim'] ?></td>
			</tr>
			<tr>
				<td><?php echo $key['ttl'] ?></td>
			</tr>
			<tr>
				<td><?php echo $key['jurusan'] ?></td>
			</tr>
			<tr>
				<td><?php echo $key['alamat'] ?></td>
			</tr>	
			</tbody>
			<?php } ?>
		</table>
	</div>
	<div class="table-responsive">
		<h1>Biodata saya dari builder object</h1>
		<table class="table table-hover">
			<tbody>
				<?php foreach ($biodata_builder_object as $key) {
				?>
			<tr>
				<td><?php echo $key->nama ?></td>
			</tr>
			<tr>
				<td><?php echo $key->nim ?></td>
			</tr>
			<tr>
				<td><?php echo $key->ttl ?></td>
			</tr>
			<tr>
				<td><?php echo $key->jurusan ?></td>
			</tr>
			<tr>
				<td><?php echo $key->alamat ?></td>
			</tr>
			</tbody>
			<?php } ?>
		</table>
	</div>
	</div>
</div>
</body>
</html>

<?php $this->load->view('footer'); ?>