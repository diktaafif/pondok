<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mpegawai extends CI_Model {
	public function __construct()
	{
		# code...
		// parent::__construct();

		// $this->load->helper('url','form');
		// $this->load->library('form_validation');
		// $this->db=$this->load->database('justweb',TRUE);
	}
	public function readPegawai()
	{
		# code...
		// $query=$this->db->get('pegawai');
		$tampil=$this->db->get('pegawai');
		return $tampil->result();
	}
	public function insertPegawai()
	{
		# code...
			$object = array('nama' =>$this->input->post('nama'),
			'nip' =>$this->input->post('nip'),
			'jabatan' =>$this->input->post('jabatan'),
			'alamat' =>$this->input->post('alamat'),
			'gambar'=>$this->upload->data('file_name')
		);

		$this->db->insert('pegawai',$object);
	}
	public function updateById($id)
	{
		$data=array
		(
			'nama'=>$this->input->post('nama'),
			'nip'=>$this->input->post('nip'),
			'jabatan'=>$this->input->post('jabatan'),
			'alamat'=>$this->input->post('alamat'),
			'gambar'=>$this->upload->data('file_name')
		);
		$this->db->where('id',$id);
		$this->db->update('pegawai',$data);
	}
	public function getPegawai($id)
	{
		$this->db->where('id',$id);
		$query=$this->db->get('pegawai');
		return $query->result();
	}

	// public function delete($id)
	// {
	// 	$this->db->where('id',$id);
	// 	$this->db->delete('pegawai');


	// }

	function delete($id){

     $this->db->where('id',$id);
     $query = $this->db->get('pegawai');
     $row = $query->row();
     unlink("./assets/uploads/$row->gambar");
     $this->db->delete('pegawai', array('id' => $id));


	}
}

/* End of file pegawai_model.php */
/* Location: ./application/models/pegawai_model.php */