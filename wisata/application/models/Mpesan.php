<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mpesan extends CI_Model {
	
	  public function insert_pesan(){
      $object = array('email'=>$this->input->post('email'),
        'telepon'=>$this->input->post('telp'),
        'pesan'=>$this->input->post('pesan'));
      $this->db->insert('pesan_customer',$object);
    }
    public	function getPesan(){
    	$data=$this->db->get('pesan_customer');
    	return $data->result();
    }

}