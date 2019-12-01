

<link href="<?php echo base_url() ?>/assets/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url() ?>/assets/css/style2.css">

<div class="pegawai">
	<div class="row">
	<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
				
			</div>
	<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
				<div class="table-responsive">
					<table class="table table-hover">
						<thead>
							<tr>
								<td colspan="3">Daftar Pegawai</td>
							</tr>
							<tr>
								<th>NIP</th>
								<th>Nama</th>
								<th>Jabatan</th>
								<th>Alamat</th>
								<th>Foto</th>
							</tr>
						</thead>
						<tbody>
							<?php foreach ($pegawai as $key) { ?>
							<tr>
								<td><?php echo $key->nip ?></td>
								<td><?php echo $key->nama ?></td>
								<td><?php echo $key->jabatan ?></td>
								<td><?php echo $key->alamat ?></td>
								<td><img src=<?=base_url("assets/uploads")."/".$key->gambar?>></td>

								<td><a href="<?=site_url()?>/welcome/update/<?php echo $key->id ?>"><p data-placement="top" data-toogle="tooltip" title="Edit"><button class="btn btn-primary btn-xs" data-title="edit" data-toggle="modal" data-target="#edit"><span class="glyphicon glyphicon-pencil"></span></button></p></a></td>

								<td><a href="<?=site_url()?>/welcome/delete/<?php echo $key->id ?>"><p data-placement="top" data-toogle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="edit" data-toggle="modal" data-target="#delete"><span class="glyphicon glyphicon-trash"></span></button></p></a></td>
							</tr>							
							<?php } ?>
						</tbody>
					</table>						
					<a href="<?=site_url()?>/welcome/create/"><button  class="btn btn-primary">Tambah</button></a>
				</div>
			</div>		
</div>
</div>
