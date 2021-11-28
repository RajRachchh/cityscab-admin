<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends Admin_Controller { // CI_Controller {

	/*
    public function index() {
        $this->load->view('admin/Login');
    }    
	*/
	
	 public function index() {

        
        
        if ($this->session->userdata('logged_in')) {
            redirect('admin/Dashboard', 'refresh');
        }
		$data = array(
            'title' => 'Login',
        );
        $this->load->view('admin/Login', $data);
    }
}
