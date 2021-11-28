<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Category extends Admin_Controller {

    function __construct() {
        parent::__construct();
        $this->not_logged_in();
        if (!in_array('ViewAdmin', $this->permission)) {
            redirect('admin/dashboard', 'refresh');
        }
        $this->load->model('admin/Category_model');
    }

    public function index() {
        $data['title'] = "Add Package";
        $this->load->view('admin/category', $data);
    }

   
	
	 public function View_Data() {
        $data['title'] = "View Data";
		$data['Category'] = $this->Category_model->Select_Category();
        $this->load->view('admin/view_data', $data);
    }

	
    public function Update() {
	
		//$data = $this->input->post();
		
		/*
		echo "<pre>";
		print_r($data);
		echo "</pre>";
		exit;
		*/
        ################################# Image UPLOAD #################################

        $config['upload_path'] = './upload/category';
        $config['allowed_types'] = 'gif|jpg|jpeg|png';


        $this->load->library('upload', $config);
      //  $data = $this->upload->data();


        ################################# END Image Upload #################################

        $cid = $this->input->post("cid");
		
		
		// $img1="";
		// $img2="";
		// $img3="";
		// $img4="";
		// $img5="";
    
		if ($this->upload->do_upload('image1')){
			$img1=$this->upload->data()["file_name"];
		}
		
		if ($this->upload->do_upload('image2')){
			$img2=$this->upload->data()["file_name"];
		}
		
		if ($this->upload->do_upload('image3')){
			$img3=$this->upload->data()["file_name"];
		}
		
		if ($this->upload->do_upload('image4')){
			$img4=$this->upload->data()["file_name"];
		}
		
		if ($this->upload->do_upload('image5')){
			$img5=$this->upload->data()["file_name"];
		}
// || $this->upload->do_upload('image2') || $this->upload->do_upload('image3') || $this->upload->do_upload('image4') || $this->upload->do_upload('image5')

                // "image3" => $img3,
                // "image4" => $img4,
                // "image5" => $img5,
				
			if ($this->upload->do_upload('image1')) {
				$data = array(
					"cname" => $this->input->post("cname"),
					"price" => $this->input->post("price"),
					"from_place" => $this->input->post("from_place"),
					"to_place" => $this->input->post("to_place"),
					"from_day" => $this->input->post("from_day"),
					"to_day" => $this->input->post("to_day"),
					"places" => $this->input->post("places"),
					"ck_desc" => $this->input->post("ck_desc"),
					"image1" => $img1,
				  );
			}
			elseif ($this->upload->do_upload('image2')) {
					$data = array(
					"cname" => $this->input->post("cname"),
					"price" => $this->input->post("price"),
					"from_place" => $this->input->post("from_place"),
					"to_place" => $this->input->post("to_place"),
					"from_day" => $this->input->post("from_day"),
					"to_day" => $this->input->post("to_day"),
					"places" => $this->input->post("places"),
					"ck_desc" => $this->input->post("ck_desc"),
					"image2" => $img2,
				  );
			}
			elseif ($this->upload->do_upload('image3')) {
					$data = array(
					"cname" => $this->input->post("cname"),
					"price" => $this->input->post("price"),
					"from_place" => $this->input->post("from_place"),
					"to_place" => $this->input->post("to_place"),
					"from_day" => $this->input->post("from_day"),
					"to_day" => $this->input->post("to_day"),
					"places" => $this->input->post("places"),
					"ck_desc" => $this->input->post("ck_desc"),
					"image3" => $img3,
				  );
			}
			elseif ($this->upload->do_upload('image4')) {
				$data = array(
					"cname" => $this->input->post("cname"),
					"price" => $this->input->post("price"),
					"from_place" => $this->input->post("from_place"),
					"to_place" => $this->input->post("to_place"),
					"from_day" => $this->input->post("from_day"),
					"to_day" => $this->input->post("to_day"),
					"places" => $this->input->post("places"),
					"ck_desc" => $this->input->post("ck_desc"),
					"image4" => $img4,
				  );
			}
			elseif ($this->upload->do_upload('image5')) {
				$data = array(
					"cname" => $this->input->post("cname"),
					"price" => $this->input->post("price"),
					"from_place" => $this->input->post("from_place"),
					"to_place" => $this->input->post("to_place"),
					"from_day" => $this->input->post("from_day"),
					"to_day" => $this->input->post("to_day"),
					"places" => $this->input->post("places"),
					"ck_desc" => $this->input->post("ck_desc"),
					"image5" => $img5,
				  );
			}
			

			else 
			{
            $data = array(
                "cname" => $this->input->post("cname"),
                "price" => $this->input->post("price"),
                "from_place" => $this->input->post("from_place"),
                "to_place" => $this->input->post("to_place"),
                "from_day" => $this->input->post("from_day"),
                "to_day" => $this->input->post("to_day"),
                "places" => $this->input->post("places"),
                "ck_desc" => $this->input->post("ck_desc"),
                "image1" => $this->input->post("hidden_img1"), // hidden_img
                "image2" => $this->input->post("hidden_img2"), // hidden_img
                "image3" => $this->input->post("hidden_img3"), // hidden_img
                "image4" => $this->input->post("hidden_img4"), // hidden_img
                "image5" => $this->input->post("hidden_img5"), // hidden_img
            );
        }
		// echo "<pre>";
		// print_r($data);
		// echo "</pre>";
		// exit;
        $this->Category_model->Update($data, $cid);
        $statusMsg = ' <div class="alert alert-success"  style="background-color: #00b1f4a1; border-color:#56c7f2;" alert-dismissible fade show" role="alert"> Record Update <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>';
        $this->session->set_flashdata('statusMsg', $statusMsg);
        redirect(base_url('admin/category'));
    }
	
	
	
    public function Add() {
	
		
        ################################# Image UPLOAD #################################

        $config['upload_path'] = './upload/category';
        $config['allowed_types'] = 'gif|jpg|jpeg|png';


        $this->load->library('upload', $config);
        //$this->upload->do_upload('image');
      //  $data = $this->upload->data();


        ################################# END Image Upload #################################

		$img1="";
		$img2="";
		$img3="";
		$img4="";
		$img5="";
    
		if ($this->upload->do_upload('image1')){
			$img1=$this->upload->data()["file_name"];
		}
		
		if ($this->upload->do_upload('image2')){
			$img2=$this->upload->data()["file_name"];
		}
		
		if ($this->upload->do_upload('image3')){
			$img3=$this->upload->data()["file_name"];
		}
		
		if ($this->upload->do_upload('image4')){
			$img4=$this->upload->data()["file_name"];
		}
		
		if ($this->upload->do_upload('image5')){
			$img5=$this->upload->data()["file_name"];
		}

        if ($this->upload->do_upload('image1') || $this->upload->do_upload('image2') || $this->upload->do_upload('image3') || $this->upload->do_upload('image4') || $this->upload->do_upload('image5') ) {
            $data = array(
                "cname" => $this->input->post("cname"),
                "price" => $this->input->post("price"),
                "from_place" => $this->input->post("from_place"),
                "to_place" => $this->input->post("to_place"),
                "from_day" => $this->input->post("from_day"),
                "to_day" => $this->input->post("to_day"),
                "places" => $this->input->post("places"),
                "ck_desc" => $this->input->post("ck_desc"),
                "image1" => $img1,
                "image2" => $img2,
                "image3" => $img3,
                "image4" => $img4,
                "image5" => $img5,
            );
        } else {
            $data = array(
                "cname" => $this->input->post("cname"),
                "price" => $this->input->post("price"),
                "from_place" => $this->input->post("from_place"),
                "to_place" => $this->input->post("to_place"),
                "from_day" => $this->input->post("from_day"),
                "to_day" => $this->input->post("to_day"),
                "places" => $this->input->post("places"),
                "ck_desc" => $this->input->post("ck_desc"),
            );
        }

       
        $this->Category_model->Add($data);
        $statusMsg = ' <div class="alert alert-success"  alert-dismissible fade show" role="alert"> Record Add<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>';
        $this->session->set_flashdata('statusMsg', $statusMsg);
        redirect(base_url('admin/category'));
    }
	
    public function Edit($id) {
        $data['title'] = "Package Edit";
        $data["category"] = $this->Category_model->Edit($id);
        // print_r($data);
        // exit;
        $this->load->view("admin/category", $data);
    }
	
    public function delete($id) {
        $data = $this->Category_model->delete($id);
    }

    public function Delete_Bulk() {
        $id = $this->input->post('id');
        $this->Category_model->delete_bulk($id);
    }
	
	    public function Status_Active($id) {

        $id = $this->input->post("id");

        $data = array(
            "status" => "1"
        );

        $data = $this->Category_model->Update($data, $id);
		
		$statusMsg = ' <div class="alert alert-info"  alert-dismissible fade show" role="alert">Status Update<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>';
        $this->session->set_flashdata('statusMsg', $statusMsg);
        
		
        if ($result = true) {
            redirect(base_url() . "admin/category/view_data", "refresh");
        }
    }

    public function Status_Deactive($id) {

        $id = $this->input->post("id");

        $data = array(
            "status" => "0"
        );

        $data = $this->Category_model->Update($data, $id);
		
		$statusMsg = ' <div class="alert alert-info"  alert-dismissible fade show" role="alert">Status Update<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>';
        $this->session->set_flashdata('statusMsg', $statusMsg);
		
        if ($result = true) {
            redirect(base_url() . "admin/category/view_data", "refresh");
        }
    }

}
