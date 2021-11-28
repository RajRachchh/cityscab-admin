<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends Admin_Controller { //CI_Controller  {

    function __construct() {
        parent::__construct();

        # Load Auth_Model
        $this->load->model('admin/Auth_Model');
    }

    public function LoginChk() {

        // $login =  $this->Auth_Model->Login_Chk($this->input->post('email1'), ($this->input->post('password1'))) ;
        $login = $this->Auth_Model->Login_Chk($this->input->post('name1'), ($this->input->post('password1')));

        if ($login) {
            # print_r($login);
            # echo "login";
            # echo $login['a_id'];
            # echo $login['uroll_id'];
            # echo $login['name'];
            # echo $login['email'];
            # echo $login['password'];
            # echo $login['image'];
            # echo $login['is_active'];

            $Login_Sess_Array = array(
                "a_id" => $login['a_id'],
                "uroll_id" => $login['uroll_id'],
                "name1" => $login['name1'],
                //"email1" => $login['email1'],
                "image" => $login['image'],
                'logged_in' => TRUE
            );

            # print_r($Login_Sess_Array);

            $this->session->set_userdata($Login_Sess_Array);
            if (in_array('ViewUser', $this->permission) && in_array('ViewAdmin', $this->permission)) {
                redirect('admin/dashboard', 'refresh');
            } else {
                redirect('admin/dashboard', 'refresh');
            }
        } else {
            redirect('admin/Login', 'refresh');
        }




        //$this->load->view('admin/AdminUser_List' );
    }

    public function Logout() {
        $this->session->sess_destroy();
        // echo "out";
        redirect(base_url(), 'refresh');
        //redirect('Adminuser/Login', 'refresh');
    }

}
