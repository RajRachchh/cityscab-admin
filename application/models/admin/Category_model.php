<?php

#print_r($this->db->last_query());
defined('BASEPATH') OR exit('No direct script access allowed');

class Category_model extends CI_Model {

    public function Add($data) {
        $result = $this->db->insert('category', $data);
        return $result;
    }
	
	 public function Update($data, $id) {
        $this->db->where('cid', $id);
        $result = $this->db->update('category', $data);
        //print_r($this->db->last_query());
        return $result;
    }
	
	 public function Select_Category() {
        $query = $this->db->get('category');
        return $query->result();
    }


				
    public function Edit($id) {
        $this->db->where('cid', $id);
        $query = $this->db->get('category');
        //print_r($this->db->last_query());
        return $query->result();
    }
	
	
   

    public function Delete($id) {
        $this->db->where('cid', $id);
        $result = $this->db->delete('category');
        
        return $result;
    }

    public function delete_bulk($id) {
        if (is_array($id)) {
            $this->db->where_in('cid', $id);
        } else {
            $this->db->where('cid', $id);
        }
        $result = $this->db->delete('category');
        return $result;
    }

}
