<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mgaleri extends CI_Model {
		public function __construct()
	{
		
	}
	public function readGaleri($kode_galeri)
	{
		# code...
		// $query=$this->db->get('galeri');
		$tampil=$this->db->where('kode_galeri',$kode_galeri);
		$tampil=$this->db->get('galeri');
		return $tampil->result();

	}
	public function insertGaleri()
	{
		# code...
			$object = array('kode_galeri' =>$this->input->post('kode_galeri'),
			'gambar'=>$this->upload->data('file_name')
		);

		$this->db->insert('galeri',$object);
	}
	public function updateByIdGaleri($id)
	{
		$data=array
		(
			'kode_galeri'=>$this->input->post('kode_galeri'),
			'gambar'=>$this->upload->data('file_name')
		);
		$this->db->where('id',$id);
		$this->db->update('galeri',$data);
	}
	// public function getGaleri($id)
	// {
	// 	$this->db->where('id',$id);
	// 	$query=$this->db->get('galeri');
	// 	return $query->result();
	// }

	public function deleteGaleri($id)
	{
     	
     	$this->db->where('id',$id);
     	$query = $this->db->get('galeri');
     	$row = $query->row();
     	unlink("./assets/uploads/galeri/".$row->gambar);
	}
}
