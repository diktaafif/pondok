<link href="<?php echo base_url() ?>/assets/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="<?php echo base_url() ?>/assets/css/style2.css">

<section class="ajax">
<div class="container">
	<div align="center">
		<h1>Data Pegawai</h1>
	</div>
	<hr>
		<div align="left">
		<a  href="<?php echo site_url('pegawaiC/tambahPegawai')?>" ><span class="glyphicon glyphicon-pencil" ></span> Tambah</a>
		</div>

	<div class="panel">
		<div class="panel panel-default">						
			<div class="panel-body">
				<table class="table table-striped " id="example">
					<thead>
						<tr>
							<th>NIP</th>
							<th>Nama</th>
							<th>Jabatan</th>
							<th>Alamat</th>
							<th>Foto</th>
							<th>Edit</th>
							<th>Delete</th>
						</tr>
					</thead>
					<tbody>						
					</tbody>
				</table>
			</div>
		</div>
	</div>

</div>
</section>