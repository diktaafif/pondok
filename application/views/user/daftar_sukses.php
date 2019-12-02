<!DOCTYPE html> 
<html lang=""> 
 <head> 
  <meta charset="utf-8"> 
  <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
  <meta name="viewport" content="width=device-width, initial-scale=1"> 
  <title></title> 

  <!-- Bootstrap CSS --> 
  <link rel="stylesheet" href="<?php echo base_url()?>assets/css/bootstrap.min.css"> 

 </head> 
 <body> 
 <div class="alert alert-success"> 
 <strong>User baru berhasil ditambah</strong> 
 <?php 
  echo anchor('login', 'Login'); 
 ?> 
 </div> 

  <!-- jQuery --> 
  <script src="<?php echo base_url()?>assets/js/jquery.js"></script> 
  <!-- Bootstrap JavaScript --> 
  <script src="<?php echo base_url()?>assets/js/bootstrap.min.js" ></script>   
 </body> 
</html>