<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends Admin_Controller { //CI_Controller {

    public function index() {

        // die
        # Jo SESSION LOGIN HOY TO RE DIRECT Deshbord
        if ($this->session->userdata('logged_in')) {
            #redirect('admin', 'refresh');
            redirect('admin/Dashboard', 'refresh');
        }

        $data = array(
            'title' => 'Login',
        );
        $this->load->view('admin/Login', $data);
    }

}
