
<h3 style="text-align:center">Customer List</h3>

<div class="pull-left" style="padding-bottom:10px;">
	<a href="<?php echo site_url('customer/add'); ?>" class="btn btn-success">Add</a> 
</div>

<table class="table table-striped table-bordered">
    <tr>
		<th>ID</th>
		<th>Name</th>
		<th>Company</th>
		
		<th>Contact</th>		
		<th>Sales Person</th>
		<th>Created By</th>
		<th>Created Date</th>
		<th>balance</th>
		<th>Actions</th>
    </tr>
	<?php foreach($customer as $c){ ?>
    <tr>
		<td><?php echo $c['customer_id']; ?></td>
		<td><?php echo $c['customer_name']; ?></td>
		<td><?php echo $c['company_name']; ?></td>
		
		<td><?php echo $c['customer_address']; ?><br><?php echo $c['customer_phone']; ?><br><?php echo $c['customer_email']; ?></td>
		
		<td><?php echo usernameid($c['sales_person_id']); ?></td>
		<td><?php echo usernameid($c['created_by']); ?></td>
		<td><?php echo $c['created_date']; ?></td>
		<td><?php echo $c['currentbalance']; ?></td>
		<td>
            <a href="<?php echo site_url('customer/edit/'.$c['customer_id']); ?>" class="btn btn-info btn-xs">Edit</a> 
            <a href="<?php echo site_url('sales/newsales/?cid='.$c['customer_id']); ?>" class="btn btn-info btn-xs">Sales</a> 
            <a href="<?php echo site_url('customer/remove/'.$c['customer_id']); ?>" class="btn btn-danger btn-xs">Delete</a>
        </td>
    </tr>
	<?php } ?>
</table>
