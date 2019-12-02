<!DOCTYPE html>
<html>
<head>
    <title>Pondok Ngalam</title>
    <!-- <link rel="icon" href="images/favicon.ico" type="image/ico"> -->
</head>
<body>

    <!-- Bootstrap -->
        <link href="<?=base_url()?>assets/css/bootstrap.min.css" rel="stylesheet">
        <link href="<?=base_url()?>assets/css/bootstrap.css" rel="stylesheet">
        <!--  -->
        <link rel="stylesheet" href="<?=base_url()?>assets/css/style2.css">
    <!-- jQuery -->
        <!-- <script src="assets/js/jquery.js"></script> -->
        <script src="<?=base_url()?>assets/js/jquery.js"></script>
        <script src="<?=base_url()?>assets/js/bootstrap.js"></script>
        <script src="<?=base_url()?>assets/js/bootstrap.min.js"></script>
        <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
    <!-- DataTable -->
        <link href="<?=base_url()?>assets/DataTables/datatables.min.css" rel="stylesheet">

        

<!-- navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
    <a class="navbar-brand" href="<?php echo site_url() ?>/welcome/home">
        <strong>
             <img src="<?=base_url()?>/assets/img/ico.png" style="width: 40px;">Pondok Ngalam</font>
        </strong>
    </a>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item active">
        <a class="nav-link" href="<?=site_url()?>/welcome/berita">Daftar Pondok</a>
      </li>
    </ul>
  </div>
</nav>
<!-- /navbar -->



        
        <!-- Bootstrap JavaScript -->
     <!--    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
        <script src="assets/js/bootstrap.js"></script> -->
</body>
</html>