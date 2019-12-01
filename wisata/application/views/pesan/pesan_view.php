 
 <!-- Bootstrap -->
    <link href="<?php echo base_url() ?>/assets/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url() ?>/assets/css/style2.css">

<section class="pesan">	
		<div class="container">	
			<div align="center">	
				<h1>	Data Laporan Pesan</h1>
			</div>
			<hr>	
			<div class="panel">	
				<div class="panelheading">	Tabel Pesan
				</div>	
				<div class="panelbody">	
					<table class="table table-striped">
					<thead>	
						<tr>
							<th class="col-sm-3">Email</th>
							<th class="col-sm-2">Telepon</th>
							<th class="col-sm-5">Pesan</th>
						</tr>
					</thead>
					<tbody>	
					<?php 	foreach ($pesan as $key) { ?>
					<tr>	
						<td><?php 	echo $key->email ?></td>
						<td><?php 	echo $key->telepon ?></td>
						<td>"<?php 	echo $key->pesan ?>"</td>
					</tr>					
					</tbody>
					<?php 	} ?>
					</tbody>
					</table>
				</div>
			</div>	
		</div>
</section>	
