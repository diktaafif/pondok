<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Biodata extends CI_Model {

	public function __construct()
	{
		# code...
		parent::__construct();
	}
	//semua method digunakan untuk proses yang berhubungan dengan db

	//return array
	public function getBiodataQueryArray()
	{
		# code...
		$query = $this->db->query("select * from biodata");
		return $query->result_array();
	}
	//return object
	public function getBiodataQueryObject()
	{
		# code...
		$query = $this->db->query("select * from biodata");
		return $query->result();
	}
	//tambabhan builder array
	public function getBiodataBuilderArray()
	{
		# code...
		$query=$this->db->get('biodata');
		return $query->result_array();
	}
	public function getBiodataBuilderObject()
	{
		# code...
		$query=$this->db->get('biodata');
		return $query->result();
	}
}

/* End of file biodata.php */
/* Location: ./application/models/biodata.php */