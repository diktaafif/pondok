	<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PegawaiC extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Mpegawai');
		$this->load->helper('url','form');
		$this->load->library('form_validation');
	}


	public function index()
	{
		$this->load->helper('url');
		$this->load->view('header_admin');
		$this->load->view('berita/berita_datatable_ajax');
		$this->load->view('footer_loggedin');
	}

	public function updatePegawai($id)
	{
		
		$this->form_validation->set_rules('nip','nip','trim|required');
		$this->form_validation->set_rules('nama','nama','trim|required');		
		$this->form_validation->set_rules('jabatan','jabatan','trim|required');
		$this->form_validation->set_rules('alamat','alamat','trim|required');
		
		$data['pegawai']=$this->Mpegawai->getPegawai($id);

		if($this->form_validation->run()==FALSE)
		{
			$this->load->view('pegawai/edit_pegawai_view',$data);	
		}else{
			$config['upload_path'] = './assets/uploads/pegawai';
			$config['allowed_types'] = 'gif|jpg|png';
			$config['max_size'] =1000000000 ;
			$config['max_height'] = 10240;
			$config['max'] = 7680;
			

			$this->load->library('upload',$config);

			if (! $this->upload->do_upload('userfile')) {
				$error = array('error'=> $this->upload->display_errors());
				$this->load->view('pegawai/edit_pegawai_view',$error);
			}else{
					$this->Mpegawai->UpdateById($id);
					$this->load->view('pegawai/hapus_pegawai_sukses');
				}
			}	
		
	}

	public function deletePegawai($id)
	{
//		$this->load->view('header_admin');
		$this->Mpegawai->delete($id);
		$this->load->view('pegawai/hapus_pegawai_sukses');
	}
	public function datatable(){
		$this->load->view('header_admin');
		$data['pegawai']=$this->Mpegawai->readPegawai();
		$this->load->view('pegawai/pegawai_datatable',$data);
		$this->load->view('footer_loggedin');
	}

	public function datatable_ajax_pegawai(){
		$this->load->view('header_admin');
		$this->load->view('pegawai/pegawai_datatable_ajax');
		$this->load->view('footer_loggedin');
	}

	public function data_serverPegawai(){
		$this->load->library('Datatables');
		$this->datatables
			->select('id,nip,nama,jabatan,alamat,gambar')
			->from('pegawai');
			echo $this->datatables->generate();
	}

	public function tambahPegawai(){
		//$this->load->view('header_admin');
		$this->load->view('pegawai/tambah_pegawai_view');
		//$this->load->view('footer_loggedin');
	}
	public function createPegawai()
	{
		$this->form_validation->set_rules('nama','Nama','trim|required');
		$this->form_validation->set_rules('nip', 'Nip', 'trim|required');
		$this->form_validation->set_rules('jabatan', 'Jabatan', 'trim|required');
		$this->form_validation->set_rules('alamat', 'Alamat', 'trim|required');
		$this->load->model('Mpegawai');

		
		if($this->form_validation->run()==FALSE){
			$this->load->view('pegawai/tambah_pegawai_view');
		}else{
			$config['upload_path'] = './assets/uploads/pegawai';
			$config['allowed_types'] = 'gif|jpg|png';
			$config['max_size'] =1000000000 ;
			$config['max_height'] = 10240;
			$config['max'] = 7680;

			$this->load->library('upload',$config);

			if (!$this->upload->do_upload('userfile')) {
				$error = array('error'=> $this->upload->display_errors());
				$this->load->view('pegawai/tambah_pegawai_view',$error);
			} else {
			$this->Mpegawai->insertpegawai();
			$this->load->view('pegawai/tambah_pegawai_sukses');
			}						

		}

	}
}