<?php include "header.php"; ?>

<div class="content-wrapper">

<section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
				<?php echo $this->session->flashdata('statusMsg'); ?>
                    <div class="card card-primary card-outline">
                        <div class="card-header">
						
                            <h3 class="card-title">View <?php echo $title; ?></h3>
                            <div class="card-tools">
                                 <button id="bulk_delete_submit" class="btn btn-primary btn-sm">Bulk Delete</button> 
                            </div>
                        </div>
                        <div class="card-body">
								
								
							<table id="example2" class="table table-bordered table-hover MyTable"> 
							<thead>
							<tr>
							<th><input type="checkbox" id="select_all" value=""/></th> 

							<th>Name</th>
							<th>Price</th>
							<th>From Place </th>
							<th>To Place </th>
							<th>From Day</th>
							<th>To Day</th>
							<th>Image 1</th>
							<th>Status</th>
							<th>Action</th>
							</tr>
							</thead>
							<tbody>
							<?php foreach ($Category as $row) { ?>
							<tr> 
							<td><input type="checkbox"  name="checked_id[]" class="checkbox" value="<?php echo $row->cid; ?>"/></td>

							<td><?php echo $row->cname; ?></td>
							<td><?php echo $row->price; ?></td>
							
							
							<td><?php echo $row->from_place; ?></td>
							<td><?php echo $row->to_place; ?></td>
							<td><?php echo $row->from_day; ?></td>
							<td><?php echo $row->to_day; ?></td>
							
							<td><img class="rounded-circle" src="<?php echo base_url('upload/category/'. $row->image1);?>" width="100" height="70"/></td>
							
							<td>
							  <?php 
								if($row->status=="0")
								{
								?>	
									<button class="btn btn-sm  btn-danger"  onclick="Status_Active(<?php echo $row->cid; ?>)">Deactive</button>
									<?php
								}
								else 
								{
								?>	
								<button class="btn btn-sm  btn-success"  onclick="Status_Deactive(<?php echo $row->cid; ?>)">Active</button>
								<?php 
								}
								?>
									
							</td>

							<td>
							
							<a href="<?php echo base_url('admin/category/Edit/'.$row->cid); ?>"><button class="btn btn-sm  btn-primary"><i class="fa fa-edit"></i></button></a>

							
							<button class="btn btn-sm  btn-danger" onclick="Delete(<?php echo $row->cid; ?>)"><i class="fa fa-trash"></i></button> 
							
						
							

							</td>
							</tr>
							<?php } ?>
							</tbody>
							</table>


								
								
						</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
	
</div>	

<script>
    var url = url;
    var base_url = "<?php echo base_url(); ?>";
</script>
<script src="<?php echo base_url(); ?>assets/admin/customjs/Category.js"></script>
<script src="<?php echo base_url(); ?>assets/admin/customjs/Multi_chkbox.js"></script>

<?php include "footer.php"; ?>
<script>
		
</script>
