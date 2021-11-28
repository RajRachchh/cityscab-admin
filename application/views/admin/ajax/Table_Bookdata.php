<table id="example2" class="table table-bordered table-hover MyTable"> 
    <thead>
        <tr>
            
            
            <th>Name</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($Bookdata as $row) { ?>
            <tr> 
             
				<td><?php echo $row->name1; ?></td>
				 <td>
                    
                    <button class="btn btn-sm  btn-danger" onclick="Delete(<?php echo $row->id; ?>)"><i class="fa fa-trash"></i></button>
					
                  
					
                </td>
            </tr>
        <?php } ?>
    </tbody>
</table>

