<link href="<?php echo base_url() ?>/assets/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="<?php echo base_url() ?>/assets/css/style2.css">

<section class="ajax">
<div class="container">
	<div align="center">
		<h1>Data Pondok</h1>
	</div>
	<hr>
		<div align="left">
		<a  href="<?php echo site_url('berita/tambahBerita')?>" ><span class="glyphicon glyphicon-pencil" ></span> Tambah</a>
		</div>

	<div class="panel">
		<div class="panel panel-default">			
			<div class="panelheading">Tabel Pondok</div>
			<div class="panel-body">
				<table class="table table-striped " id="berita">
					<thead>
						<tr>
							<th>Judul</th>
							<th>Isi</th>
							<th>Gambar</th>
							<th>Edit</th>
							<th>Hapus</th>
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