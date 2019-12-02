
<div class="container"> 
  <div class="row">
      <div class="col-sm-8 mx-auto">
          <div class="card card-sign my-5">
          <div class="row">
            <div class="col-md-4">
              <img src="<?=base_url()?>/assets/img/ico.png" class="card-img">
            </div>
            <div class="col-md-8">
              <div class="card-body">
                <h3 class="card-title text-center">Login Admin</h3>
                 <form action="<?php echo site_url('login/cekLogin'); ?>" method="POST" class="form-sign"> 
                    <div class="form-group">
                        <?php echo validation_errors(); ?> 
                   
                     <label for=""><h4>Username</h4></label> 
                     <input type="text" class="form-control form-control-lg" id="username" name="usernameP" placeholder="input field">
                     <br>
                     <label for=""><h4>Password</h4></label> 
                     <input id="pass" type="password" class="form-control form-control-lg" id="password" name="passwordP" placeholder="input field">  
                     <br>
                   <button id="submit" type="submit" class="btn btn-success btn-lg">Submit</button> 
                   <a href="<?php echo site_url('welcome/index')?>" class="btn btn-success btn-lg">Guest</a> 
                   
                    </div>
                  </form>
              </div>
            </div>
          </div>
        </div> 
      </div>
  </div>
 </div> 

    <!-- Bootstrap -->
    <link href="<?php echo base_url() ?>/assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>/assets/css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url() ?>/assets/css/style2.css">
