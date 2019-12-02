
	
		<link href="<?=base_url()?>/assets/css/bootstrap.min.css" rel="stylesheet">
		<link rel="stylesheet" href="<?=base_url()?>/assets/css/style2.css">
	
	
		<footer>
				<div class="navbar navbar-inverse navbar-fixed-bottom">
					<!-- <p> Copyright <i class="glyphicon glyphicon-copyright-mark" style="color: blue;"></i> Abd. Aziz Su'ud | 2018</p> -->
				</div>	
		
		</footer>		
		<script src="<?=base_url()?>assets/js/jquery.js"></script>
		<script src="<?=base_url()?>assets/js/bootstrap.js"></script>
		<script src="<?=base_url()?>assets/DataTables/datatables.min.js"></script>	
<!-- 	<script type="text/javascript">
			$(document).ready(function(){
			$('#example').DataTable();
		});
	</script> -->
	
	<script type="text/javascript">
		$(document).ready(function(){
			$('#example').DataTable({				        
		        "select": true,
		        "buttons": [
		            {
		                text: 'Select all',
		                action: function () {
		                    table.rows().select();
		                }
		            },
		            {
		                text: 'Select none',
		                action: function () {
		                    table.rows().deselect();
		                }
		            }
		        ],
				"processing":true,
				"serverSide":true,
				"destroy": true,
				"lengthMenu":[[1,3,6,-1],[1,3,6,"All"]],
				"ajax":{
					url : "<?php echo site_url('pegawaiC/data_serverPegawai') ?>",
					type : "POST"
				},
				"columnDefs":
				[
					{
						"targets":0,
						"data":"nip",
					},
					{
						"targets":1,
						"data":"nama",
					},
					{
						"targets":2,
						"data":"jabatan",
					},
					{
						"targets":3,
						"data":"alamat",
					},
					{
						"targets":4,
						"data":"gambar",
						"render":function(data,type,full,meta){
							return '<img src="<?=base_url()?>assets/uploads/pegawai/'+data+'" style="width:200px;height:200px;">';
						}
					},
					{
						"targets":5,
						"data":null,
						"searchable":false,
						"render":function(data,type,full,meta){
							return '<a href="<?=site_url()?>/pegawaiC/updatePegawai/'+data["id"]+'">Edit</a>'
						}
					},
					{
						"targets":6,
						"data":null,
						"searchable":false,
						"render":function(data,type,full,meta){
							return '<a href="<?=site_url()?>/pegawai/deletePegawai/'+data["id"]+'">Delete</a>'
						}
					},
				]
			});
		});
	</script>

<script type="text/javascript">
		$(document).ready(function(){
			$('#berita').DataTable({
				"processing":true,
				"serverSide":true,
				"destroy": true,
				"lengthMenu":[[1,3,6,-1],[1,3,6,"All"]],
				"ajax":{
					url : "<?php echo site_url('berita/data_serverBerita') ?>",
					type : "POST"
				},
				"columnDefs":
				[
					{
						"targets":0,
						"data":"judul",
					},
					{
						"targets":1,
						"data":"isi",
						"render":function(data,type,row){
							return data.length > 10 ?
							data.substr(0,50)+'....':
							data;
						}
					},
					{
						"targets":2,
						"data":"gambar",
						"render":function(data,type,full,meta){
							return '<img src="<?=base_url()?>assets/uploads/berita/'+data+'" style="width:200px;height:200px;">';
						}
					},
					{
						"targets":3,
						"data":null,
						"searchable":false,
						"render":function(data,type,full,meta){
							return '<a href="<?=site_url()?>/berita/updateBerita/'+data["id"]+'">Edit</a>'
						}
					},
					{
						"targets":4,
						"data":null,
						"searchable":false,
						"render":function(data,type,full,meta){
							return '<a href="<?=site_url()?>/berita/delete/'+data["id"]+'">Delete</a>'
						}
					},
				]
			});
		});
	</script>
<!-- <script>
$(document).ready(function() {
    var table = $('#example').DataTable( {

    } );
} );
</script> -->