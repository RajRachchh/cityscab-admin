<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard_Model extends CI_Model {
	
	public function view()
	{
		$query = $this->db->get('count_tbl_record');
        return $query->result_array();
	}
}
