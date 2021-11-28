<?php include "Header.php"; ?>
<?php
$cid = [
    'type' => 'hidden',
    "name" => "cid",
    "value"=> isset($category) ? $category[0]->cid : "",
];

$cname = [
    'type' => 'text',
    "name" => "cname",
    'id' => "cname",
    'placeholder' => "Enter Name",
    'class' => 'form-control',
    "value"=> isset($category) ? $category[0]->cname : "",
];
$price = [
    'type' => 'text',
    "name" => "price",
    'id' => "price",
    'placeholder' => "Enter price",
    'class' => 'form-control',
    "value"=> isset($category) ? $category[0]->price : "",
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
    </section>
    <form  id="File_Share_Form" method="post" action="<?php echo base_url() ?>admin/Category/Update" enctype="multipart/form-data">
        <div class="col-md-12">
            <div class="card card-primary card-outline">
                <!--
                <div class="card-header">
                    <h3 class="card-title"><?php //echo $title ?></h3>
                    <div class="card-tools">
                    </div>
                </div>
                -->
                <div class="card-body">
                    <div class="row">
                        
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label>Name</label>
                                <?php echo form_input($cid); ?>
                                <?php echo form_input($cname); ?>
                            </div>
                        </div>
                         <div class="col-sm-12">
                            <div class="form-group">
                                <label>Price</label>
                                <?php echo form_input($price); ?>
                            </div>
                        </div>
                        
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label>Upload File</label><br/>
                                <input id="image" type="file" name="image" accept=".png,.gif,.jpeg,.jpg"/>
                                <input type="hidden" name="hidden_img" value="<?php echo $category[0]->image; ?>">
                                <img src="<?php echo base_url("upload/category/").$category[0]->image; ?>" width="150px" class="imgclass" />
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <div class="form-group">
                                <label>&nbsp;</label>
                                <input type="submit" name="fileSubmit" id="submit" class="btn btn-primary form-control" value="Save">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
      
    <!-- Main content -->
</div> <!-- content-wrapper-->

<?php include "Footer.php"; ?>