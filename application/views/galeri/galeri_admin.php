		
 <!-- Bootstrap -->
    <link href="<?php echo base_url() ?>/assets/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url() ?>/assets/css/style2.css">

<section class="pesan">	
		<div class="container">	
			<div align="center">	
				<h1>	Data Gambar</h1>
			</div>
			<hr>	
			<div align="left">
				<a  href="<?php echo site_url('galeri/tambahKGaleri')?>" ><span class="glyphicon glyphicon-pencil" ></span> Tambah</a>
			</div> 
			<div class="panel">	
				<div class="panelheading">
				</div>	
				<div class="panelbody">	
					<table class="table table-striped">
					<thead>	
						<tr>
							<th class="col-sm-2">kode galeri</th>
							<th class="col-sm-2">nama wisata</th>
							<th class="col-sm-4">icon</th>
							<th class="col-sm-2">edit</th>
							<th class="col-sm-2">delete</th>
							<th class="col-sm-2">galeri</th>
						</tr>
					</thead>
					<tbody>	
					<?php 	foreach ($kategori as $key) { ?>
					<tr>	
						<td><?php 	echo $key->kode_galeri ?></td>
						<td><?php 	echo $key->nama_wisata ?></td>
						<td><img src=<?=base_url("assets/uploads/galeri")."/".$key->icon?> style="width: 300px;height: 300px"></td>
						     <td><a href="<?=site_url()?>/galeri/updateGaleri/<?php echo $key->kode_galeri ?>"><p data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit"><span class="glyphicon glyphicon-pencil"></span></button></p></td> 
						     <td><a href="<?=site_url()?>/galeri/deleteGaleri/<?php echo $key->kode_galeri ?>"><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span></button></p>
						</td>
						<td><a href="<?=site_url()?>/galeri/tampilGaleriAdmin/<?php echo $key->kode_galeri ?>">Gallery</a></td>
					</tr>					
					</tbody>
					<?php 	} ?>
					</tbody>
					</table>
				</div>
			</div>	
		</div>
</section>	
