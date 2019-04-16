<?php $this->view('header'); ?>
<?php echo form_open('user/profileupdate/'.$user['userid'],array("class"=>"form-horizontal")); ?>
<h3 style="text-align:center">Edit Profile</h3>
<hr></hr>


<div class="row" style="margin-bottom:20px;border-top:1px solid gray;border-buttom:1px solid gray;padding-top:20px;">
  <div class="col-md-12" style="text-align:center;font-weight:bolder;">
	<div class="form-group">
		<label for="name" class="col-md-2 control-label">Full Name</label>
		<div class="col-md-8">
			<input type="text" name="name" value="<?php echo ($this->input->post('name') ? $this->input->post('name') : $user['name']); ?>" class="form-control" id="name" />
		</div>
	</div>
	<div class="form-group">
		<label for="organization" class="col-md-2 control-label">Organization</label>
		<div class="col-md-8">
			<input type="text" name="organization" value="<?php echo ($this->input->post('organization') ? $this->input->post('organization') : $user['organization']); ?>" class="form-control" id="organization" />
		</div>
	</div>
	<div class="form-group">
		<label for="email" class="col-md-2 control-label">Email</label>
		<div class="col-md-8">
			<input type="text" readonly value="<?php echo ($this->input->post('email') ? $this->input->post('email') : $user['email']); ?>" class="form-control" id="email" />
			<span class="text-danger"><?php echo form_error('email');?></span>
		</div>
	</div>
	<div class="form-group">
		<label for="mobile" class="col-md-2 control-label">Mobile</label>
		<div class="col-md-8">
			<input type="text" name="mobile" value="<?php echo ($this->input->post('mobile') ? $this->input->post('mobile') : $user['mobile']); ?>" class="form-control" id="mobile" />
		</div>
	</div>
	<div class="form-group">
		<label for="nid" class="col-md-2 control-label">NID</label>
		<div class="col-md-8">
			<input type="text" readonly  value="<?php echo ($this->input->post('nid') ? $this->input->post('nid') : $user['nid']); ?>" class="form-control" id="nid" />
		</div>
	</div>
	<div class="form-group">
		<label for="address_current" class="col-md-2 control-label">Address Current</label>
		<div class="col-md-8">
			<textarea name="address_current" class="form-control" id="address_current"><?php echo ($this->input->post('address_current') ? $this->input->post('address_current') : $user['address_current']); ?></textarea>
		</div>
	</div>
	<div class="form-group">
		<label for="address_permanent" class="col-md-2 control-label">Address Permanent</label>
		<div class="col-md-8">
			<textarea name="address_permanent" class="form-control" id="address_permanent"><?php echo ($this->input->post('address_permanent') ? $this->input->post('address_permanent') : $user['address_permanent']); ?></textarea>
		</div>
	</div>	
	

	<div class="form-group" style="display:none;" >
		<label for="open_by" class="col-md-2 control-label">Open By</label>
		<div class="col-md-8">
			<input type="text" name="open_by" value="<?php echo ($this->input->post('open_by') ? $this->input->post('open_by') : $user['open_by']); ?>" class="form-control" id="open_by" />
		</div>
	</div>
	
	<div class="form-group">
		<label for="password" class="col-md-2 control-label">Password</label>
		<div class="col-md-8">
			<input type="password" name="password" value="<?php echo ($this->input->post('password') ? $this->input->post('password') : $user['password']); ?>" class="form-control" id="password" />
		</div>
	</div>  
  <div class="col-md-12" style="text-align:center;font-weight:bolder;"><button type="submit" class="btn btn-success">Update Information</button></div>
<?php echo form_close(); ?> 

 </div>
  
  
  
  </div>



	
<?php echo form_close(); ?>

<?php $this->view('footer'); ?>