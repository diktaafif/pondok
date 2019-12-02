	<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Berita extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Mberita');
		$this->load->helper('url','form');
		$this->load->library('form_validation');
	}

public function index()
	{
		//$this->load->helper('url');
		$this->load->view('header_admin');
		$this->load->view('berita/berita_datatable_ajax');
		$this->load->view('footer_loggedin');
	}

	public function updateBerita($id)
	{
		$this->load->view('header_admin');
		$this->form_validation->set_rules('judul','Judul','trim|required');
		$this->form_validation->set_rules('isi','Isi','trim|required');		

		//sebelum update maka ambil data lama yang akan di update
		// $this->load->model('Mberita');

		$data['berita']=$this->Mberita->getBerita($id);

		if($this->form_validation->run()==FALSE)
		{
			$this->load->view('berita/edit_berita_view',$data);	
		}else{
			$config['upload_path'] = './assets/uploads';
			$config['allowed_types'] = 'gif|jpg|png';
			$config['max_size'] =1000000000 ;
			$config['max_height'] = 10240;
			$config['max'] = 7680;
			

			$this->load->library('upload',$config);

			if (! $this->upload->do_upload('userfile')) {
				$error = array('error'=> $this->upload->display_errors());
				$this->load->view('berita/edit_berita_view',$error);
			}else{
					$this->Mberita->UpdateByIdBerita($id);
					$this->load->view('berita/hapus_berita_sukses');
				}
			}	
		
	}

	public function delete($id)
	{
//		$this->load->view('header_admin');
		$this->Mberita->deleteBerita($id);
		$this->load->view('berita/hapus_berita_sukses');
	}
	public function datatable(){
		$this->load->view('header_admin');
		$data['Berita']=$this->Mberita->readBerita();
		$this->load->view('berita/Berita_datatable',$data);
		$this->load->view('footer_loggedin');
	}

	public function datatable_ajax_berita(){
		$this->load->view('header_admin');
		$this->load->view('berita/berita_datatable_ajax');
		$this->load->view('footer_loggedin');
	}

	public function data_serverBerita(){
		$this->load->library('Datatables');
		$this->datatables
			->select('id,judul,isi,gambar')
			->from('berita');
			echo $this->datatables->generate();
	}

	public function tambahBerita(){
		//$this->load->view('header_admin');
		$this->load->view('berita/tambah_berita_view');
		//$this->load->view('footer_loggedin');
	}
	public function createBerita()
	{
		// # code...
		// $this->load->helper('url','form');
		// $this->load->library('form_validation');
		$this->form_validation->set_rules('judul','Judul','trim|required');
		$this->form_validation->set_rules('isi', 'Isi', 'trim|required');
		$this->load->model('Mberita');

		
		if($this->form_validation->run()==FALSE){
			$this->load->view('berita/tambah_berita_view');
		}else{
			$config['upload_path'] = './assets/uploads/berita';
			$config['allowed_types'] = 'gif|jpg|png';
			$config['max_size'] =1000000000 ;
			$config['max_height'] = 10240;
			$config['max'] = 7680;
			$new_name = "gamber".date("Y-m-d").$_FILES["userfile"]['name'];
			$config['file_name'] = $new_name;

			$this->load->library('upload',$config);

			if (!$this->upload->do_upload('userfile')) {
				$error = array('error'=> $this->upload->display_errors());
				$this->load->view('berita/tambah_berita_view',$error);
			} else {
			$this->Mberita->insertBerita();
			$this->load->view('berita/tambah_Berita_sukses');
			}						

		}

	}
}