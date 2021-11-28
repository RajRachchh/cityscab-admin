  <?php   include "Header.php"; //$this->load->view('Footer');
	  
	
	  ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
  
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Dashboard</h1>
          </div>
		  
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div>
        </div>
      </div>
    </div>
  
	
	<?php 
	//echo "<pre>";
	// print_r($this->session->all_userdata());
	//echo "</pre>";
	?>

    <!-- Main content -->
	

		<section class="content">
		<div class="container-fluid">
		<div class="row">
		
		
		
		
		
		
		
		<div class="col-12 col-sm-6 col-md-3">
		<div class="info-box">
		<span class="info-box-icon bg-info elevation-1"><i class="fas fa-user"></i></span>
		<div class="info-box-content">
		<span class="info-box-text">My Profile</span>
		<span class="info-box-number"><a href="<?php echo base_url("admin/profile") ?>">View</a></span>
		</div>
		</div>
		</div>
		
		<div class="col-12 col-sm-6 col-md-3">
		<div class="info-box">
		<span class="info-box-icon bg-info elevation-1"><i class="fa fa-plus"></i></span>
		<div class="info-box-content">
		<span class="info-box-text">Add Package</span>
		<span class="info-box-number"><a href="<?php echo base_url("admin/category") ?>">View</a></span>
		</div>
		</div>
		</div>
		
		<div class="col-12 col-sm-6 col-md-3">
		<div class="info-box">
		<span class="info-box-icon bg-info elevation-1"><i class="fa fa-eye"></i></span>
		<div class="info-box-content">
		<span class="info-box-text">View Package</span>
		<span class="info-box-number"><a href="<?php echo base_url("admin/category/view_data") ?>">View</a></span>
		</div>
		</div>
		</div>
		
		<div class="col-12 col-sm-6 col-md-3">
		<div class="info-box">
		<span class="info-box-icon bg-info elevation-1"><i class="fa fa-book"></i></span>
		<div class="info-box-content">
		<span class="info-box-text"> Inquery Data</span>
		<span class="info-box-number"><a href="<?php echo base_url("admin/bookdata") ?>">View </a></span>
		</div>
		</div>
		</div>
		
		
		
		
		
		
		
		</div>
		</div>
		</section>

	
	
	
	
    
  </div>
  
  <?php   include "Footer.php"; //$this->load->view('Footer');?>
