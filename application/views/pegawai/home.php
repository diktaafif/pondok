<?php $this->load->view('pegawai/header'); ?>


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
								<th>Nama</th>
								<th>Nip</th>
								<th>Tanggal</th>
								<th>Alamat</th>
								<th>Edit</th>
								<th>Delete</th>
							</tr>
						</thead>
						<tbody>
							<?php foreach ($pegawai as $key) { ?>
							<tr>
								<td><?php echo $key->Nama ?></td>
								<td><?php echo $key->Nip ?></td>
								<td><?php echo date('d F Y', strtotime($key->Tanggal)) ?></td>
								<td><?php echo $key->Alamat ?></td>
								<td><a href="<?=site_url()?>/Pegawai/Update/<?php echo $key->No ?>"><p data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target=#edit><span class="glyphicon glyphicon-pencil"></span></button></p></td>

								<td><a href="<?=site_url()?>/Pegawai/delete/<?php echo $key->No ?>"><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target=#delete><span class="glyphicon glyphicon-trash"></span></button></p></td>	
							</tr>
							<?php } ?>
						</tbody>
					</table>
				</div>
			</div>		
</div>
<?php $this->load->view('pegawai/footer'); ?>