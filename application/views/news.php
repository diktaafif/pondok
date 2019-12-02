<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Hello ^^</title>
	<script src="<?php echo base_url();?>assets/css/js/jquery.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
 	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap-theme.css">
</head>
<body>

	<div class="container">
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			<nav class="navbar navbar-default" role="navigation">
			<div class="container-fluid">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="#">Hai!</a>
				</div>
		
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse navbar-ex1-collapse">
					<ul class="nav navbar-nav">
						<li><a href="<?php echo site_url();?>/Home"> <span class="glyphicon glyphicon-home"></span> Home</a></li>
						<li class="active"><a href="<?php echo site_url();?>/News"><span class="glyphicon glyphicon-file"></span> News</a></li>
						<li><a href="<?php echo site_url();?>/About"><span class="glyphicon glyphicon-question-sign"></span> About</a></li>
						<li><a href="<?php echo site_url();?>/Contact"><span class="glyphicon glyphicon-user"></span> Contact</a></li>
					</ul>
				</div><!-- /.navbar-collapse -->
			</div>
		</nav>

		<div class="panel panel-primary">
			<div class="panel-heading">
				<h3 class="panel-title"> <span class="glyphicon glyphicon-info-sign"></span> How to Download Code Igniter</h3>
			</div>
			<div class="panel-body">
				<p>Just Download it <a href="http://codeigniter.com/" target=blank>Here</a> </p>
			</div>
		</div>

</body>
</html>