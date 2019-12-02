<?php
if (isset($this->session->userdata['logged_in'])) {
    if ($this->session->userdata['logged_in']['status'] == 'customer') {
        redirect('welcome/index');
    } else if ($this->session->userdata['logged_in']['status'] == 'admin') {
        redirect('pegawai/index');
    }
}
?>
<body> 
  <div class="container" style="min-height: 620px;padding-top: 60px"> 
    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4"> </div>
    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4"> 
        <div class="form-group"> 
          <legend>Daftar</legend> 
        </div> 
         
        <?php echo form_open_multipart('login/create');?> 
          <?php echo validation_errors(); ?> 
         
        <div class="form-group"> 
          <label for="">Username</label> 
          <input type="text" class="form-control" id="username" name="username" placeholder="Input field"> 
        </div> 
         
        <div class="form-group"> 
          <label for="">Password</label> 
          <input type="password" class="form-control" id="pass" name="password" placeholder="Input field"> 
        </div> 
        
        <div class="form-group">
          <label for="">Ulangi Password</label> 
          <input id="passCek" type="password" class="form-control" name="passwordCek" placeholder="input field" oninput="cekPass()">
        </div>
        <p id="notif"></p>
        
        <div class="form-group"> 
          <button id="submit" type="submit" class="btn btn-primary" disabled="">Daftar</button> 
        </div> 
        <?php echo form_close(); ?> 
    </div> 
    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4"> </div>
  </div> 
   

<script>
  function cekPass() {
    var pass = document.getElementById('pass').value;
    var passCek = document.getElementById('passCek').value;
    var submit = document.getElementById('submit');
    var notif;
    if (pass != passCek) {
      notif = "Password tidak cocok !";
      submit.disabled = true;
    } else {
      notif = "Password cocok !";
      submit.disabled = false;
    }
    document.getElementById('notif').innerHTML = notif;
  }
</script>