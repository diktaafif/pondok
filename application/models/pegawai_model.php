<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pegawai_model extends CI_Model {
	public function __construct()
	{
		# code...
		parent::__construct();
	}
	public function readPegawai()
	{
		# code...
		$query=$this->db->get('pegawai');
		return $query->result();
	}
	public function insertPegawai()
	{
		# code...
		$object = array('nama' =>$this->input->post('nama'),
			'nip' =>$this->input->post('nip'),
			'tanggal' =>$this->input->post('tanggal'),
			'alamat' =>$this->input->post('alamat'));

		$this->db->insert('pegawai',$object);
	}
	public function getPegawai($id)
	{
		# code...
		$this->db->where('No',$id);
		$query = $this->db->get('pegawai');
		return $query->result();
	}
	
	public function UpdateById($id)
	{
		# code...
		$data = array(
			'nama' =>$this->input->post('nama'),
			'nip' =>$this->input->post('nip'),
			'tanggal' =>$this->input->post('tanggal'),
			'alamat' =>$this->input->post('alamat')
		);
		$this->db->where('No',$id);
		$this->db->update('pegawai',$data);
		// var_dump($data);
		// die();
	}
	public function delete($id)
	{
		# code...

		$this->db->where('No',$id);
		$this->db->delete('pegawai');
	}
}

/* End of file pegawai_model.php */
/* Location: ./application/models/pegawai_model.php */