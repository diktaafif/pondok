<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pegawai extends CI_Controller {

	public function __construct($value='')
	{
		# code...
		parent::__construct();
		$this->load->model('pegawai_model');
		$this->load->helper('url','form');
		$this->load->library('form_validation');
	}
	public function index(){
		
	}

	public function read()
	{
		# code...
		$this->load->helper('url');
		$this->load->model('pegawai_model');
		$data['pegawai']=$this->pegawai_model->readPegawai();
		$this->load->view('pegawai/home',$data);
	}
	
	public function Create()
	{
		# code...
		$this->load->helper('url','form');
		$this->load->library('form_validation');
		$this->form_validation->set_rules('nama','Nama','trim|required');
		$this->load->model('pegawai_model');

		if($this->form_validation->run()==FALSE){
			$this->load->view('pegawai/tambah_pegawai_view');
		}else{
			$this->pegawai_model->insertPegawai();
			$this->load->view('pegawai/tambah_pegawai_sukses');
		}
	}

	public function Update($id)
	{
		# code...
		$this->form_validation->set_rules('nama','nama','trim|required');
		$this->form_validation->set_rules('nip','nip','trim|required');
		$this->form_validation->set_rules('tanggal','tanggal','trim|required');
		$this->form_validation->set_rules('alamat','alamat','trim|required');

		$data['pegawai'] = $this->pegawai_model->getPegawai($id);
		//var_dump($data);
		// die();

		//load data di kirim ke view
		if($this->form_validation->run() == FALSE ){
			# code...
			$this->load->view('pegawai/edit_pegawai_view', $data);
		} else {
			# code...
			$this->pegawai_model->UpdateById($id);
			$this->load->view('pegawai/edit_pegawai_sukses');
		}
	}

	public function delete($id)
	{
		# code...
		$this->pegawai_model->delete($id);
		$this->load->view('pegawai/hapus_pegawai_sukses');
	}
}

/* End of file Pegawai.php */
/* Location: ./application/controllers/Pegawai.php */