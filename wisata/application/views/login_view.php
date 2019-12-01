<?php
if (isset($this->session->userdata['logged_in'])) {
    if ($this->session->userdata['logged_in']['status'] == 'customer') {
        redirect('welcome/index');
    } else if ($this->session->userdata['logged_in']['status'] == 'admin') {
        redirect('pegawai/index');
    }
}else{

?>
<div class="container" style="min-height: 624px;padding-top: 60px;"> 
  <from>
    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4"></div>
    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4"> 
         <?php echo form_open('login/cekLogin') ?> 
            <div class="form-group"> 
             <legend>Login ke sistem</legend> 
             <a href="<?php echo site_url('Login/daftar')?>"><span class="glyphicon glyphicon-user"></span> Register</a>
            </div> 

            <?php echo validation_errors(); ?> 
            <div class="form-group"> 
             <label for="">Username</label> 
             <input type="text" class="form-control" id="username" name="usernameP" placeholder="input field"> 
            </div> 
             
            <div class="form-group"> 
             <label for="">Password</label> 
             <input id="pass" type="password" class="form-control" id="password" name="passwordP" placeholder="input field"> 
            </div> 
   <button id="submit" type="submit" class="btn btn-primary">Submit</button> 
   
  </div> 
  <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4"></div>
  </form> 
 </div> 
 <?php } ?>

    <!-- Bootstrap -->
    <link href="<?php echo base_url() ?>/assets/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url() ?>/assets/css/style2.css">
