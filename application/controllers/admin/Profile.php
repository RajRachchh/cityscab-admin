<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends Admin_Controller {  	
	
	function __construct() 
	{
		parent::__construct();
		$this->not_logged_in();
		$this->load->model('admin/Profile_model'); 
		
	}
	
	public function index()
	{
		
		$data["title"] = "Myprofile";
		$data['Profile'] = $this->Profile_model->view_where();
		$this->load->view('admin/Profile' , $data);
	}
	
	
	public function Update()
	{
		
		################################# Image UPLOAD #################################
		// $config['upload_path'] = base_url('assets/admin/upload/profile'); 
		$config['upload_path'] = './upload/profile'; 
		$config['allowed_types'] = 'gif|jpg|jpeg|png';
		// $config['max_size'] = 2000;
		// $config['max_width'] = 1500;
		// $config['max_height'] = 1500;
		 
		$this->load->library('upload',$config);
		$this->upload->do_upload('image');
		$data = $this->upload->data();
		################################# END Image Upload #################################
		
		
		
		
		$id = $this->input->post("a_id");
		
		
		if($this->upload->do_upload('image')) { 
			$data = array(
				"password1"=> $this->input->post("password1"),
				"image"=> $this->upload->data()["file_name"],
			);
		}
		else
		{
			$data = array(
				"password1"=> $this->input->post("password1"),
			);
			
		}	
		
		$this->Profile_model->Update($data ,$id);
		
		redirect(base_url('Admin/Profile')); 
		
		
		
	}
} 