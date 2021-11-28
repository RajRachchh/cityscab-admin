<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends Admin_Controller { // CI_Controller {

    function __construct() {

        parent::__construct();
        $this->not_logged_in();
        $this->load->model("admin/Dashboard_Model");
    }

    public function index() {
        
		
		 
        $data["title"] = 'Dashboard';
        $this->load->view('admin/Dashboard', $data);
    }

    // select count(`accouting`.`admin_user`.`a_id`) AS `total_admin` from `accouting`.`admin_user` union select count(`accouting`.`clients_user`.`c_id`) AS `total_client` from `accouting`.`clients_user`
}
