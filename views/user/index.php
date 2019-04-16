<?php $this->view('header'); ?>

<div class="pull-left" style="padding-bottom:20px;">
	<a href="<?php echo site_url('user/add'); ?>" class="btn btn-success">Add</a><br> 
</div>

<table class="table table-striped table-bordered">
    <tr>
		<th>ID</th>
		<th>User Type</th>
		<th>Name</th>
		<th>Organization</th>
		<th>Email</th>
		<th>Mobile</th>
		<th>Open By</th>
		<th>Actions</th>
    </tr>
	<?php foreach($user as $u){ ?>
    <tr>
		<td><?php echo $u['userid']; ?></td>
		<td><?php echo $u['user_type']; ?></td>
		<td><?php echo $u['name']; ?></td>
		<td><?php echo $u['organization']; ?><br><?php echo $u['address_current']; ?></td>
		<td><?php echo $u['email']; ?></td>
		<td><?php echo $u['mobile']; ?></td>
		<td>
		<?php  
		$oid=$u['open_by']; 
		$rq=dbq("select * from user where userid=$oid");
		if(isset($rq[0])){
			echo $rq[0]->name;
		}
		?>
		</td>
		<td>
            <a href="<?php echo site_url('user/edit/'.$u['userid']); ?>" class="btn btn-info btn-xs">Edit</a> 
            <!--<a href="<?php echo site_url('user/remove/'.$u['userid']); ?>" class="btn btn-danger btn-xs">Delete</a>-->
        </td>
    </tr>
	<?php } ?>
</table>

<?php $this->view('footer'); ?>