<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Muser extends CI_Model {    

    public function getLogin($username,$password){
    $user = $username;
    $pass = $password;
    $string = "customer";
    $this->db->where("username",$user);
    $this->db->where("password",MD5($pass));
    $this->db->where("status",$string);
    $query=$this->db->get("user");
    if($query->num_rows() > 0){
        foreach($query->result() as $row)
            {
              $level = array(                
                "id" => $row->id,
                "username" => $row->username,
                "status" => $row->status
              );
              $this->session->set_userdata('logged_in',$level);
              $this->session->set_userdata($level);
              redirect('welcome/index');        
            }
    } else {
     //$this->form_validation->set_message('cekLogin',"Login gagal");
     //redirect('login/index');
     //return false;
        $string="admin";
        $this->db->where("username",$user);
        $this->db->where("password",MD5($pass));
        $this->db->where("status",$string);
        $query=$this->db->get("user");
        if($query->num_rows() > 0){
            foreach($query->result() as $row)
            {
              $level = array(                
                "id" => $row->id,
                "username" => $row->username,
                "status" => $row->status
              );
              $this->session->set_userdata('logged_in',$level);
              $this->session->set_userdata($level);
              redirect('pegawaiC/index');
            }
        } else {          
            redirect('login/index');

        }
      }
    }

    public function insertUser(){ 
    $string="customer";
    $object = array('username'=>$this->input->post('username'), 
        'password'=>MD5($this->input->post('password')),
        'status'=>$string
       ); 
    $this->db->insert('user',$object); 
    }

}

/* End of file user.php */
/* Location: ./application/models/user.php */