<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog_model extends CI_Model {

	public $title;
	public $content;
	public $date;
	public function get_last_ten_entries()
	{
		# code...
		$query->this->db->get('entries',10);
		return $query->result();
	}
	public function insert_entry()
	{
		# code...
		$this->title->$_post('title');
		$this->content->$_post('content');
		$this->date->time();

		$this->db->insert('entries',$this);
	}
	public function update_entry()
	{
		# code...
		$this->title->$_post('title');
		$this->content->$_post('content');
		$this->date->time();

		$this->db->insert('entries',$this,array('id'->$post['id']));
	}

}

/* End of file blog_model.php */
/* Location: ./application/models/blog_model.php */