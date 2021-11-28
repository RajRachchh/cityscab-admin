<?php

class Auth_Model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function Login_Chk($name1, $password) {
        $this->db->select('*');
        $this->db->from('admin_user');
        $this->db->where('name1', $name1);
        $this->db->where('password1', $password);
		//$this->db->where('uroll_id', 1); // Static
		$this->db->where('status', 1); // Active
		
        $query = $this->db->get();

        if ($query->num_rows() == 1) {
            # echo "TRUE";
            $result = $query->row_array();
            return $result;
            # return true;	
            #  echo $result['a_id'];
        } else {
            #  echo "false";
            return false;
        }
        # print_r($this->db->last_query()); 
    }

    public function getUserGroupByUserId($a_id) {
        // user_group = admin_user
        // groups = user_role
        # $sql = "SELECT * FROM user_group 
        # INNER JOIN groups ON groups.id = user_group.group_id 
        # WHERE user_group.user_id = ?";
        # $query = $this->db->query($sql, array($user_id));
        # $result = $query->row_array();
        // uroll_id
        $sql = "SELECT * FROM admin_user INNER JOIN role ON role.uroll_id =admin_user.uroll_id WHERE admin_user.a_id = ?";
        $query = $this->db->query($sql, array($a_id));
        $result = $query->row_array();

        // print_r($this->db->last_query()); 

        return $result;
    }

}
