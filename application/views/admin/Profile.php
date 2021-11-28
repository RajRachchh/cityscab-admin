<?php   include "Header.php"; 
	//  $this->load->view('admin/header');

	$a_id =  [
    'type' => 'hidden',
    "name" => "a_id",
    'id' => "a_id",
    #'value' => $Profile->a_id,
	 'value' => $this->session->a_id,
	];
	
	
	$name = [
    'type' => 'text',
    "name" => "name1",
    'class' => 'form-control',
	'id' => "name1",
	'placeholder' => "Enter Name",
	'value' => $Profile->name1,
	'readonly'=>"readonly",
	];
	
	
	$password1 =  [
    'type' => 'text',
    "name" => "password1",
    'id' => "password1",
    'class' => 'form-control',
	'placeholder' => "Enter Password",
	'value' => $Profile->password1,
	
	];
	
	

?>


<div class="content-wrapper">
	
	<section class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1><?php echo $title;  ?></h1>
				</div>
			</div>
		</div>
	</section>
	
	
	<form  method="post" enctype="multipart/form-data" action="<?php echo base_url('Admin/Profile/Update'); ?>">  
	
	 
	<div class="col-md-12">
		<div class="card card-primary card-outline">
			
			<div class="card-header">
				<h3 class="card-title"></h3>
				<div class="card-tools">
					<button id="AddRec" type="submit" class="btn btn-primary" >Update</button>
				</div>
			</div>
			
			<div class="card-body">
				
			  
					<?php  echo form_input($a_id); ?>
					
					<div class="row">
					
						
						<div class="col-sm-3">
							<div class="form-group">
								<label>Name</label>
								<?php  echo form_input($name); ?>
							</div>
						</div>
						
						<div class="col-sm-3">
							<div class="form-group">
								<label>Password</label>
								<?php  echo form_input($password1); ?>
							</div>
						</div>
						</div>
							
					<div class="col-sm-3">
						<div class="form-group">
							<label>Profile</label>
							<input type="file" name="image" id="image" onchange="previewFile(this);" accept="image/x-png,image/gif,image/jpeg" />
							<input type="hidden" name="image" id="image"  value="<?php echo $Profile->image;?>" >
						</div>
					</div>
					
				<div class="col-sm-3">
					<div class="form-group">
					<?php 
						if(empty($Profile->image)){ ?>
						<img class="img-squre elevation-2" src="https://adminlte.io/themes/AdminLTE/dist/img/user2-160x160.jpg" alt="1" id="previewImg" style="height: 160px;width: 160px;">
						<?php } else { ?>
						<img class="img-squre elevation-2" src="<?php echo  base_url('upload/profile/'). $Profile->image;?>" alt="2" id="previewImg" style="height: 160px;width: 160px;">
					<?php } ?>
					</div>
				</div>
				
					
					
			</div>
		</div>
	</div>
	</form>  
	
</div> <!-- content-wrapper-->







<script>
	
	var url = url;
	var base_url="<?php echo base_url();?>";
	
	
	
</script>

<script src="<?php echo base_url(); ?>assets/admin/customjs/Myprofile.js"></script>




  <?php   include "Footer.php"; //$this->load->view('Footer');?>
  
  