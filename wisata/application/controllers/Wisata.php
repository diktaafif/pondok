<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Wisata extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Mberita');
		$this->load->helper('url','form');
		$this->load->library('form_validation');
	}

	public function index()
	{
		$this->load->view('header_customer');
		$this->load->view('Homepage');
		$this->load->view('footer');
	}
	public function jpark(){
		$this->load->view('header_customer');
		$this->load->view('wisata/jpark_view');
		$this->load->view('footer');
	}
	public function museum(){
		$this->load->view('header_customer');
		$this->load->view('wisata/museum_view');
		$this->load->view('footer');
	}
	public function egp(){
		$this->load->view('header_customer');
		$this->load->view('wisata/egp_view');
		$this->load->view('footer');
	}


}