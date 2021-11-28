<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Bookdata_model extends CI_Model {
   

    public function view() {
		
		$this->db->order_by("id", "DESC");
        $query = $this->db->get('inquery_data');
        return $query->result();
    }

   
    public function delete($id) {
        $this->db->where('id', $id);
        $result = $this->db->delete('inquery_data');

        return $result;
    }

   

    

    

}
