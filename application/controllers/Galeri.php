	<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Galeri extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Mgaleri');
		$this->load->model('MkategoriGaleri');
		$this->load->helper('url','form');
		$this->load->library('form_validation');
	}

	public function index()
	{
		//$this->load->helper('url');
		$data['kategori_galeri']=$this->MkategoriGaleri->readKategoriGaleri();
		$this->load->view('header_customer');
		$this->load->view('galeri/galeri',$data);
		$this->load->view('footer');
	}
	public function tampilView($kode_galeri){
		$data['kategori_galeri']=$this->MkategoriGaleri->readNamaWisata($kode_galeri);
		$data['galeri']=$this->Mgaleri->readGaleri($kode_galeri);
		$this->load->view('header_customer');
		$this->load->view('galeri/galeriview',$data);
		$this->load->view('footer');
	}
	public function tampilAdmin(){
		$data['kategori']=$this->MkategoriGaleri->readKategoriGaleri();		
		$this->load->view('header_admin');
		$this->load->view('galeri/galeri_admin',$data);
		$this->load->view('footer_loggedin');
	}

	public function tampilGaleriAdmin($kode_galeri){
		$data['kategori_galeri']=$this->MkategoriGaleri->readNamaWisata($kode_galeri);
		$data['galeri']=$this->Mgaleri->readGaleri($kode_galeri);
		$this->load->view('header_admin');
		$this->load->view('galeri/galeriview_admin',$data);
		$this->load->view('footer_loggedin');
	}

	public function updateGaleri($id)
	{
		$this->load->view('header_admin');
		$this->form_validation->set_rules('kode_galeri','Kode Galeri','trim|required');
		$this->form_validation->set_rules('nama_wisata','Nama Wisata','trim|required');		

		//sebelum update maka ambil data lama yang akan di update
		// $this->load->model('MkategoriGaleri');

		$data['kode_galeri']=$this->MkategoriGaleri->readNamaWisata($id);

		if($this->form_validation->run()==FALSE)
		{
			$this->load->view('galeri/edit_kgaleri_view',$data);	
		}else{
			$config['upload_path'] = './assets/uploads/galeri';
			$config['allowed_types'] = 'gif|jpg|png';
			$config['max_size'] =1000000000 ;
			$config['max_height'] = 10240;
			$config['max'] = 7680;
			

			$this->load->library('upload',$config);

			if (! $this->upload->do_upload('userfile')) {
				$error = array('error'=> $this->upload->display_errors());
				$this->load->view('galeri/edit_kgaleri_view',$error);
			}else{
					$this->MkategoriGaleri->updateByIdKategoriGaleri($id);
					$this->load->view('galeri/ubah_sukses');
				}
			}	
		
	}

	public function deleteGaleri($id)
	{
//		$this->load->view('header_customer');
		$this->MkategoriGaleri->deleteKategoriGaleri($id);
		$this->load->view('galeri/hapus_berita_sukses');
	}
	public function datatable(){
		$this->load->view('header_customer');
		$data['Berita']=$this->MkategoriGaleri->readGaleri();
		$this->load->view('galeri/Berita_datatable',$data);
		$this->load->view('footer');
	}

	public function datatable_ajax_Galeri(){
		$this->load->view('header_customer');
		$this->load->view('galeri/galeri');
		$this->load->view('footer');
	}

	public function data_serverGaleri(){
		$this->load->library('Datatables');
		$this->datatables
			->select('id,judul,isi,gambar')
			->from('berita');
			echo $this->datatables->generate();
	}

	public function tambahGaleri($kode_galeri){
		//$this->load->view('header_customer');
		$data['kategori_galeri']=$this->MkategoriGaleri->readNamaWisata($kode_galeri);
		
		$this->form_validation->set_rules('kode_galeri','kode_galeri','required');
		if($this->form_validation->run()==FALSE){
			$this->load->view('galeri/tambah_galeri', $data);
		} else {
			$config['upload_path'] = './assets/uploads/galeri';
			$config['allowed_types'] = 'gif|jpg|png';
			$config['max_size'] =1000000000 ;
			$config['max_height'] = 10240;
			$config['max'] = 7680;

			$this->load->library('upload',$config);
			if (!$this->upload->do_upload('userfile')) {
				$error = array('error'=> $this->upload->display_errors());
				$this->load->view('galeri/tambah_galeri',$error);
			} else {
				$this->Mgaleri->insertGaleri();
				$this->load->view('galeri/tambah_galeri_sukses', $data);
			}
		}

		//$this->load->view('footer');
	}

		public function tambahKGaleri(){
			$this->load->view('galeri/tambah_kgaleri_view');
		//$this->load->view('footer');
	}


	public function createKGaleri()
	{
		// # code...
		// $this->load->helper('url','form');
		// $this->load->library('form_validation');
		$this->form_validation->set_rules('kode_galeri','kode_galeri','trim|required');
		$this->form_validation->set_rules('nama_wisata', 'nama_wisata', 'trim|required');
		$this->load->model('MkategoriGaleri');
		
		if($this->form_validation->run()==FALSE){
			$this->load->view('galeri/tambah_kgaleri_view');
		}else{
			$config['upload_path'] = './assets/uploads/galeri';
			$config['allowed_types'] = 'gif|jpg|png';
			$config['max_size'] =1000000000 ;
			$config['max_height'] = 10240;
			$config['max'] = 7680;

			$this->load->library('upload',$config);

			if (!$this->upload->do_upload('userfile')) {
				$error = array('error'=> $this->upload->display_errors());
				$this->load->view('galeri/tambah_kgaleri_view',$error);
			} else {
			$this->MkategoriGaleri->insertKategoriGaleri();
			$this->load->view('galeri/ubah_sukses');
			}						

		}

	}
	public function deleteIsiGaleri($id){
		$this->Mgaleri->deleteGaleri($id);
		$this->load->view('galeri/hapus_galeri_sukses');
	}
}
