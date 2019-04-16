<div class="pull-left" style="padding-bottom:10px;">
	<a href="<?php echo site_url('product_cat/add'); ?>" class="btn btn-success">Add</a> 
</div>

<table class="table table-striped table-bordered">
    <tr>
		<th>ID</th>
		<th>Name</th>
		<th>Actions</th>
    </tr>
	<?php foreach($product_cat as $p){ ?>
    <tr>
		<td width="150px" ><?php echo $p['pcid']; ?></td>
		<td><?php echo $p['pcname']; ?></td>
		<td width="150px">
            <a href="<?php echo site_url('product_cat/edit/'.$p['pcid']); ?>" class="btn btn-info btn-xs">Edit</a> 
            <a href="<?php echo site_url('product_cat/remove/'.$p['pcid']); ?>" class="btn btn-danger btn-xs">Delete</a>
        </td>
    </tr>
	<?php } ?>
</table>
