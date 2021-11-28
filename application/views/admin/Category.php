<?php include "Header.php"; ?>
<style>
	.red {
	color: red;
	}
</style>
<?php

$cid = [
    'type' => 'hidden',
    "name" => "cid",
    'id' => "cid",
    "value"=> isset($category) ? $category[0]->cid : "",
];



$cname = [
    'type' => 'text',
    "name" => "cname",
    'id' => "cname",
    'placeholder' => "Enter Package Name",
    'class' => 'form-control',
	"value"=> isset($category) ? $category[0]->cname : "",
];
$price = [
    'type' => 'number',
    "name" => "price",
    'id' => "price",
    'placeholder' => "Enter price",
    'class' => 'form-control',
	"value"=> isset($category) ? $category[0]->price : "",
];



$from_place = [
    'type' => 'text',
    "name" => "from_place",
    'id' => "from_place",
    'placeholder' => "Enter From Place",
    'class' => 'form-control',
	"value"=> isset($category) ? $category[0]->from_place : "",
];

$to_place = [
    'type' => 'text',
    "name" => "to_place",
    'id' => "to_place",
    'placeholder' => "Enter To Place",
    'class' => 'form-control',
	"value"=> isset($category) ? $category[0]->to_place : "",
];

$from_day = [
    'type' => 'number',
    "name" => "from_day",
    'id' => "from_day",
    'placeholder' => "Day",
    'class' => 'form-control',
	"value"=> isset($category) ? $category[0]->from_day : "",
];

$to_day = [
    'type' => 'number',
    "name" => "to_day",
    'id' => "to_day",
    'placeholder' => "Night",
    'class' => 'form-control',
	"value"=> isset($category) ? $category[0]->to_day : "",
];

$places = [
    'type' => 'text',
    "name" => "places",
    'id' => "places",
    'placeholder' => "Enter places",
    'class' => 'form-control',
	"value"=> isset($category) ? $category[0]->places : "",
];



?>
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1><?php echo $title; ?></h1>
                </div>
            </div>
        </div>
		<?php echo $this->session->flashdata('statusMsg'); ?>
    </section>
	
	
	<?php if ($this->router->method == "Edit") { ?>
		<form  id="Form1" method="post" action="<?php echo base_url() ?>admin/category/Update" enctype="multipart/form-data">
	<?php } else {  ?>
		<form  id="Form1" method="post" action="<?php echo base_url() ?>admin/category/add" enctype="multipart/form-data">
	<?php }  ?>
	
        <div class="col-md-12">
            <div class="card card-primary card-outline">
                <div class="card-header">
                    <h3 class="card-title"><?php echo $title ?></h3>
                    <div class="card-tools">
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        
                        <div class="col-sm-10">
                            <div class="form-group">
                                <label>Package Name</label>
                                <?php echo form_input($cid); ?>
                                <?php echo form_input($cname); ?>
								<span id="TitleErrorMsg"></span>
                            </div>
                        </div>
						
                         <div class="col-sm-2">
                            <div class="form-group">
                                <label>Price</label>
                                <?php echo form_input($price); ?>
								<span id="PriceErrorMsg"></span>
                            </div>
                        </div>
						
						
						
						
						
						
						<div class="col-sm-3">
                            <div class="form-group">
                                <label>From Place</label>
                                <?php echo form_input($from_place); ?>
								<span id="FromPlaceErrorMsg"></span>
							</div>
                        </div>
						
						
						<div class="col-sm-3">
                            <div class="form-group">
                                <label>To Place</label>
                                <?php echo form_input($to_place); ?>
								<span id="ToPlaceErrorMsg"></span>
                            </div>
                        </div>
						
						<div class="col-sm-3">
                            <div class="form-group">
                                <label>Day</label>
                                <?php echo form_input($from_day); ?>
								<span id="FromDayErrorMsg"></span>
                            </div>
                        </div>
						
						
						<div class="col-sm-3">
                            <div class="form-group">
                                <label>Night</label>
                                <?php echo form_input($to_day); ?>
								<span id="ToDayErrorMsg"></span>
                            </div>
                        </div>
						
						<div class="col-sm-12">
                            <div class="form-group">
                                <label>Places</label>
                                <?php echo form_input($places); ?>
								<span id="PlaceErrorMsg"></span>
                            </div>
                        </div>
						
                        
                        <div class="col-sm-3">
                            <div class="form-group">
                                <label>Image 1</label>
                                <input  onchange="previewFile1(this);" id="image1" type="file" name="image1" accept=".png,.gif,.jpeg,.jpg"/>
								
									<?php if ($this->router->method == "Edit") { ?>
									
									
									
									<input type="hidden" name="hidden_img1" id="hidden_img1" value="<?php echo $category[0]->image1; ?>">
									
									<img src="<?php echo base_url("upload/category/").$category[0]->image1; ?>" style="height: 160px;width: 160px;" id="previewImg1" style="height: 160px;width: 160px;">
									
									
									<?php } else {  ?>
									
										<img class="img-squre elevation-2" id="previewImg1" style="height: 160px;width: 160px;">
										
									<?php }  ?>
								
								<span id="ImageErrorMsg1"></span>
								
                            </div>
                        </div>
						
						 <div class="col-sm-3">
                            <div class="form-group">
                                <label>Image 2</label>
                                <input onchange="previewFile2(this);" id="image2" type="file" name="image2" accept=".png,.gif,.jpeg,.jpg"/>
								
									<?php if ($this->router->method == "Edit") { ?>
									
									<input type="hidden" name="hidden_img2"  value="<?php echo $category[0]->image2; ?>">
									
									<img src="<?php echo base_url("upload/category/").$category[0]->image2; ?>" style="height: 160px;width: 160px;" id="previewImg2" style="height: 160px;width: 160px;">
									<?php } else {  ?>
										<img class="img-squre elevation-2" id="previewImg2" style="height: 160px;width: 160px;">
									<?php }  ?>
								
								</div>
                        </div>
						
						<div class="col-sm-3">
                            <div class="form-group">
                                <label>Image 3</label>
                                <input onchange="previewFile3(this);" id="image3" type="file" name="image3" accept=".png,.gif,.jpeg,.jpg"/>
								
									<?php if ($this->router->method == "Edit") { ?>
									
									<input type="hidden" name="hidden_img3"  value="<?php echo $category[0]->image3; ?>">
									
									<img src="<?php echo base_url("upload/category/").$category[0]->image3; ?>" style="height: 160px;width: 160px;" id="previewImg3" style="height: 160px;width: 160px;">
									<?php } else {  ?>
										<img class="img-squre elevation-2" id="previewImg3" style="height: 160px;width: 160px;">
									<?php }  ?>
									
                            </div>
                        </div>
						
						 <div class="col-sm-3">
                            <div class="form-group">
                                <label>Image 4</label>
                                <input onchange="previewFile4(this);" id="image4" type="file" name="image4" accept=".png,.gif,.jpeg,.jpg"/>
								
									<?php if ($this->router->method == "Edit") { ?>
									
									<input type="hidden" name="hidden_img4"  value="<?php echo $category[0]->image4; ?>">
									
									
									<img src="<?php echo base_url("upload/category/").$category[0]->image4; ?>" style="height: 160px;width: 160px;" id="previewImg4" style="height: 160px;width: 160px;">
									<?php } else {  ?>
										<img class="img-squre elevation-2" id="previewImg4" style="height: 160px;width: 160px;">
									<?php }  ?>
									
                            </div>
                        </div>
						
						
						
						<div class="col-sm-3">
                            <div class="form-group">
                                <label>Image 5</label>
                                <input onchange="previewFile5(this);" id="image5" type="file" name="image5" accept=".png,.gif,.jpeg,.jpg"/>
								
									<?php if ($this->router->method == "Edit") { ?>
									
									<input type="hidden" name="hidden_img5"  value="<?php echo $category[0]->image5; ?>">
									
									
									<img src="<?php echo base_url("upload/category/").$category[0]->image5; ?>" style="height: 160px;width: 160px;" id="previewImg5" style="height: 160px;width: 160px;">
									<?php } else {  ?>
										<img class="img-squre elevation-2" id="previewImg5" style="height: 160px;width: 160px;">
									<?php }  ?>
                            </div>
                        </div>
						
						 
						
						
						 <div class="col-sm-12">
						
						  <div class="box-body pad">
							<textarea id="ck_desc" name="ck_desc" rows="10" cols="80"><?php echo isset($category) ? $category[0]->ck_desc : ""; ?></textarea>
						  </div>
          		
						 </div>
						 
						 
						
                        <div class="col-sm-2">
                            <div class="form-group">
                                <label>&nbsp;</label>
                                <input type="submit" name="fileSubmit" id="fileSubmit" class="btn btn-primary form-control" value="Save">
                            </div>
                        </div>
						
                    </div>
                </div>
            </div>
        </div>
    </form>

     
    <!-- Main content -->
</div> <!-- content-wrapper-->


<script>
    var url = url;
    var base_url = "<?php echo base_url(); ?>";
</script>



<?php include "Footer.php"; ?>
<script src="<?php echo base_url(); ?>assets/admin/customjs/Category.js"></script>
<script src="https://cdn.ckeditor.com/4.15.1/standard/ckeditor.js"></script>


