<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Muser');
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
	public function home()
	{
		$this->load->view('header_customer');
		$this->load->view('Homepage');
		$this->load->view('footer');
	}
	public function galeri()
	{

		$this->load->view('header_customer');
		$this->load->view('galeri/galeri');
		$this->load->view('footer');
	}
	
	public function about()
	{
		$this->load->view('header_customer');
		$this->load->view('Tentang');
		$this->load->view('footer');
	}
	public function contact()
	{
		$this->load->view('header_customer');
		$this->load->view('Contact');
		$this->load->view('footer');
	}


	public function create_pesan(){
		$this->form_validation->set_rules('nip','nip','trim|required');
		$this->form_validation->set_rules('nama','nama','trim|required');		
		$this->form_validation->set_rules('jabatan','jabatan','trim|required');
		$this->form_validation->set_rules('alamat','alamat','trim|required');

		$this->load->helper('url','form'); 
  		$this->load->library('form_validation'); 

		  $this->load->model('Mpesan'); 
		  $this->Mpesan->insert_pesan(); 
		  $this->load->view('Pesan_sukses'); 
	}
	public function berita(){
		//$this->load->model('Mberita');
		$data['berita']=$this->Mberita->readBerita();
		$this->load->view('header_customer');
		$this->load->view('berita/beritawis_view',$data);
		$this->load->view('footer');
	}
		public function beritaTampilLengkap($id){
		//$this->load->model('Mberita');
		$data['berita']=$this->Mberita->getBerita($id);
		$this->load->view('header_customer');
		$this->load->view('berita/beritawis_view_lengkap',$data);
		$this->load->view('footer');
	}
}
