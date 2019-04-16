<h3 style="text-align:center">Current Stock Details</h3>



<table class="table table-striped table-bordered">
    <tr>
		<th>ID</th>
		<th>Category</th>
		<th>Code</th>
		<th>Product Name</th>		
		<th>Available Quantity</th>
		<th>Current Price</th>
		<th>Actions</th>
    </tr>
	<?php foreach($product as $p){ ?>
    <tr>
		<td><?php echo $p['product_id']; ?></td>
		<td><?php echo getcatname($p['product_cat']); ?></td>
		<td><?php echo $p['product_code']; ?></td>
		<td><?php echo $p['product_name']; ?></td>
		
		<td><?php echo $p['quantity']; ?></td>
		<td><?php echo $p['price']; ?></td>
		<td>
            <a href="<?php echo site_url('product/edit/'.$p['product_id']); ?>" class="btn btn-info btn-xs">Report</a> 
           
        </td>
    </tr>
	<?php } ?>
</table>
