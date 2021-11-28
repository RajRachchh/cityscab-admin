<?php
# print_r($this->db->last_query());
# return $query->row_array();
# return $query->result();
# return $query->result_array();
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile_model extends CI_Model {
	
	public function view_where()
	{
		$a_id =  $this->session->a_id;
		$this->db->where('a_id ', $a_id);
		$query = $this->db->get('admin_user');
		return $query->row();
	}
	public function Update($data , $id)
	{
		$this->db->where('a_id', $id);
		$result = $this->db->update('admin_user', $data);
		#return ($update == true) ? true : false;
	}	
}
