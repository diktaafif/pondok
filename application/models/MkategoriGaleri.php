<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MkategoriGaleri extends CI_Model {
		public function __construct()
	{
		
	}
	public function readKategoriGaleri()
	{
		# code...
		// $query=$this->db->get('kategori_galeri');
		$tampil=$this->db->get('kategori_galeri');		
		return $tampil->result();
	}
	public function readNamaWisata($kode_galeri)
	{
		# code...
		// $query=$this->db->get('kategori_galeri');
		$tampil=$this->db->where('kode_galeri',$kode_galeri);	
		$tampil=$this->db->get('kategori_galeri');	
		return $tampil->result();
	}
	public function insertKategoriGaleri()
	{
		# code...
			$object = array('kode_galeri' =>$this->input->post('kode_galeri'),
			'nama_wisata' =>$this->input->post('nama_wisata'),		
			'icon'=>$this->upload->data('file_name')
		);

		$this->db->insert('kategori_galeri',$object);
	}
	public function updateByIdKategoriGaleri($id)
	{
		$data=array
		(
			'kode_galeri'=>$this->input->post('kode_galeri'),
			'nama_wisata'=>$this->input->post('nama_wisata'),
			'icon'=>$this->upload->data('file_name')
		);
		$this->db->where('kode_galeri',$id);
		$this->db->update('kategori_galeri',$data);
	}
	public function getKategoriGaleri($id)
	{
		$this->db->where('id',$id);
		$query=$this->db->get('kategori_galeri');
		return $query->result();
	}

	public function deleteKategoriGaleri($id)
	{
		$this->db->where('kategori_galeri',$id);
		$this->db->delete('kategori_galeri');
     	unlink("./assets/uploads/galeri/$row->icon");
     	$this->db->delete('pegawai', array('id' => $id));

	}
}
