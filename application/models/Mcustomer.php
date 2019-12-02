<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mcustomer extends CI_Model {


    public function getLogin($username,$password){
    $user = $username;
    $pass = $password;
    $this->db->where("username",$user);
    $this->db->where("password",MD5($pass));
    $query=$this->db->get("log_admin");
    if($query->num_rows() > 0){
        foreach($query->result() as $row)
        {
          $level = array(
            
            "id" => $row->id,
            "username" => $row->username,
            "password" => $row->password
          );
          $this->session->set_userdata('logged_in',$level);
          $this->session->set_userdata($level);
          redirect('Pegawai/index');
        }

    } else {
     redirect('Login/index');
      }
    }

    public function insertUser(){ 
    $object = array('username'=>$this->input->post('username'), 
        'password'=>MD5($this->input->post('password')) 
       ); 
    $this->db->insert('user',$object); 
    }

}

/* End of file Mcustomer.php */
/* Location: ./application/models/Mcustomer.php */