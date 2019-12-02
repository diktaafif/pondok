<link href="<?php echo base_url() ?>/assets/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url() ?>/assets/css/style2.css">

<section class="tabelpegawai">
<div class="container">	
	<div class="panel panel-default">
		<div class="panel-heading">Daftar Pegawai</div>
		<div class="panel-body">				

<table class="table table-striped" id="example2">
						<thead>
							<tr>
								<th>Nama</th>
								<th>Nip</th>
								<th>Jabatan</th>
								<th>Alamat</th>
								<th>Foto</th>
								<th>Edit</th>
								<th>Delete</th>
							</tr>
						</thead>
						<tbody>
							<?php foreach ($pegawai as $key) { ?>
							<tr>
								<td><?php echo $key->nama ?></td>
								<td><?php echo $key->nip ?></td>
								<td><?php echo $key->jabatan ?></td>
								<td><?php echo $key->alamat ?></td>
								<td><img src=<?=base_url("assets/uploads")."/".$key->gambar?> width='120' height='120'></td>
								<td><a href="<?=site_url()?>/welcome/update/<?php echo $key->id ?>"><p data-placement="top" data-toogle="tooltip" title="Edit"><button class="btn btn-primary btn-xs" data-title="edit" data-toggle="modal" data-target="#edit"><span class="glyphicon glyphicon-pencil"></span></button></p></a></td>

								<td><a href="<?=site_url()?>/welcome/delete/<?php echo $key->id ?>"><p data-placement="top" data-toogle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="edit" data-toggle="modal" data-target="#delete"><span class="glyphicon glyphicon-trash"></span></button></p></a></td>
							</tr>	
														
							<?php } ?>
						</tbody>
					</table>														
		</div>
	</div>
	<a href="<?=site_url()?>/welcome/create/"><button  class="btn btn-primary">Tambah</button></a>
</div>
</section>
