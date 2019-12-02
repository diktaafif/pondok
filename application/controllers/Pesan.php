	<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pesan extends CI_Controller {
		public function __construct(){
		parent::__construct();
		$this->load->model('Mpesan');
		$this->load->helper('url','form');
		$this->load->library('form_validation');
	}

	public	function tampil(){
		$data['pesan']=$this->Mpesan->getPesan();
		$this->load->view('header_admin');
		$this->load->view('pesan/pesan_view',$data);
		$this->load->view('footer_loggedin');
	}
}
