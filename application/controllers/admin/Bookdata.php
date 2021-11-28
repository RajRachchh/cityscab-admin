<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Bookdata extends Admin_Controller {

    function __construct() {
        parent::__construct();
        $this->not_logged_in();

        if (!in_array('ViewAdmin', $this->permission)) {
            
            redirect('admin/dashboard', 'refresh');
        }
        $this->load->model('admin/Bookdata_model');
    }

    public function index() {

        $data = array("title" => "Inquery Data");
        $this->load->view('admin/Bookdata', $data);
    }

    public function Ajax_View_Table() {
        $data['Bookdata'] = $this->Bookdata_model->view();
        $this->load->view('admin/ajax/Table_Bookdata', $data);
    }

	public function delete($id) {

        $data = $this->Bookdata_model->delete($id);
    }


}
