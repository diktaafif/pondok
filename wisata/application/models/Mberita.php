<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mberita extends CI_Model {
		public function __construct()
	{
		
	}
	public function readBerita()
	{
		# code...
		// $query=$this->db->get('berita');
		$tampil=$this->db->get('berita');
		return $tampil->result();
	}
	public function insertBerita()
	{
		# code...
			$object = array('judul' =>$this->input->post('judul'),
			'isi' =>$this->input->post('isi'),
			'gambar'=>$this->upload->data('file_name')
		);

		$this->db->insert('berita',$object);
	}
	public function updateByIdBerita($id)
	{
		$data=array
		(
			'judul'=>$this->input->post('judul'),
			'isi'=>$this->input->post('isi'),
			'gambar'=>$this->upload->data('file_name')
		);
		$this->db->where('id',$id);
		$this->db->update('berita',$data);
	}
	public function getBerita($id)
	{
		$this->db->where('id',$id);
		$query=$this->db->get('berita');
		return $query->result();
	}

	public function deleteBerita($id)
	{
		$this->db->where('id',$id);
		$this->db->delete('berita');

	}
}
