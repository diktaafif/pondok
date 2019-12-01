<?php
if (!isset($this->session->userdata['logged_in'])) {
    redirect(base_url());
}
else {
    if ($this->session->userdata['logged_in']['status'] == 'admin') {
       redirect('pegawaiC/index');
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Pondok Ngalam</title>
</head>
<body>

    <!-- Bootstrap -->
        <link href="<?=base_url()?>assets/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="<?=base_url()?>assets/css/style2.css">
    <!-- jQuery -->
        <!-- <script src="assets/js/jquery.js"></script> -->
        <script src="<?=base_url()?>assets/js/jquery.js"></script>
        <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
    <!-- DataTable -->
        <link href="<?=base_url()?>assets/DataTables/datatables.min.css" rel="stylesheet">

        

<!-- navbar -->

        <nav class="navbar navbar-inverse navbar-fixed-top">            
            <div class="container-fluid">   
                <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
               <a class="navbar-brand" href="<?php echo site_url() ?>/welcome/home">
                    <strong>
                        <font color="white"> <img src="<?=base_url()?>/assets/img/ico.png" style="width: 40px;">Pondok Ngalam</font>
                    </strong>
                </a>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">                 
                <ul class="nav navbar-nav navbar-right" style="padding-right: 20px">
                    <!-- <li><a href="<?php echo site_url() ?>/welcome/home" ><span class=" glyphicon glyphicon-home"></span> Beranda</a></li>                     -->
                    <!-- <li><a href="<?php echo site_url() ?>/galeri" ><span class=" glyphicon glyphicon-picture"></span> Galeri</a></li>                     -->
                    <li><a href="<?=site_url()?>/welcome/berita" ><span class=" glyphicon glyphicon-globe"></span> Daftar Pondok </a></li>
                    
                    <li><a  href="<?php echo site_url('Login/logout')?>" ><span class="glyphicon glyphicon-log-in" ></span> Logout</a></li>  
                </ul>
            </div>

            </div>
        </nav>
<!-- /navbar -->



        
        <!-- Bootstrap JavaScript -->
     <!--    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
        <script src="assets/js/bootstrap.js"></script> -->
</body>
</html>