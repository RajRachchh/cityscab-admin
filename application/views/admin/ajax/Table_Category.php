<table id="example2" class="table table-bordered table-hover MyTable"> 
    <thead>
        <tr>
            <th><input type="checkbox" id="select_all" value=""/></th> 
            
            <th>Name</th>
            <th>Image</th>
            <th>Rs</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($Category as $row) { ?>
            <tr> 
                <td><input type="checkbox"  name="checked_id[]" class="checkbox" value="<?php echo $row->cid; ?>"/></td>
				
                <td><?php echo $row->cname; ?></td>
                <td><img class="rounded-circle" src="<?php echo base_url('upload/category/'. $row->image);?>" width="100" height="70"/></td>
                <td><?php echo $row->price; ?></td>

                <td>
                    <a href="<?php echo base_url('admin/Category/Edit/'.$row->cid); ?>"><button class="btn btn-sm  btn-primary"><i class="fa fa-edit"></i></button></a>
					
					<?php /* ?>
                    <button class="btn btn-sm  btn-danger" data-toggle="tooltip"  data-placement="left" title="Delete" data-original-title="Delete"  onclick="Delete(<?php echo $row->cid; ?>)"><i class="fa fa-trash"></i></button>
					<?php */ ?>
					
                </td>
            </tr>
        <?php } ?>
    </tbody>
</table>
<script src="<?php echo base_url(); ?>assets/admin/customjs/Multi_chkbox.js"></script>
