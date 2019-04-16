<?php $this->view('header'); ?>

<?php echo form_open('user/add',array("class"=>"form-horizontal")); ?>
	<h3 style="text-align:center">Add New User</h3>
	


	<div class="form-group">
		<label for="name" class="col-md-2 control-label">Full Name</label>
		<div class="col-md-10">
			<input type="text" name="name" value="<?php echo $this->input->post('name'); ?>" class="form-control" id="name" />
		</div>
	</div>
	<div class="form-group">
		<label for="organization" class="col-md-2 control-label">Organization</label>
		<div class="col-md-10">
			<input type="text" name="organization" value="<?php echo $this->input->post('organization'); ?>" class="form-control" id="organization" />
		</div>
	</div>
	<div class="form-group">
		<label for="email" class="col-md-2 control-label">Email</label>
		<div class="col-md-10">
			<input type="text" name="email" value="<?php echo $this->input->post('email'); ?>" class="form-control" id="email" />
			<span class="text-danger"><?php echo form_error('email');?></span>
		</div>
	</div>
	<div class="form-group">
		<label for="mobile" class="col-md-2 control-label">Mobile</label>
		<div class="col-md-10">
			<input type="text" name="mobile" value="<?php echo $this->input->post('mobile'); ?>" class="form-control" id="mobile" />
		</div>
	</div>
	<div class="form-group">
		<label for="nid" class="col-md-2 control-label">NID</label>
		<div class="col-md-10">
			<input type="text" name="nid" value="<?php echo $this->input->post('nid'); ?>" class="form-control" id="nid" />
		</div>
	</div>
	<div class="form-group">
		<label for="address_current" class="col-md-2 control-label">Address Current</label>
		<div class="col-md-10">
			<textarea name="address_current" class="form-control" id="address_current"><?php echo $this->input->post('address_current'); ?></textarea>
		</div>
	</div>
	<div class="form-group">
		<label for="address_permanent" class="col-md-2 control-label">Address Permanent</label>
		<div class="col-md-10">
			<textarea name="address_permanent" class="form-control" id="address_permanent"><?php echo $this->input->post('address_permanent'); ?></textarea>
		</div>
	</div>	
	<div class="form-group">
		<label for="password" class="col-md-2 control-label">Password</label>
		<div class="col-md-10">
			<input type="password" name="password" value="<?php echo $this->input->post('password'); ?>" class="form-control" id="password" />
		</div>
	</div>
	<div class="form-group">
		<label for="user_type" class="col-md-2 control-label">User Type</label>
		<div class="col-md-10">
			<select name="user_type" class="form-control">
				
				<?php 
				$user_type_values = array(
					
					'ADMIN'=>'ADMIN',				
				);

				foreach($user_type_values as $value => $display_text)
				{
					$selected = ($value == "ADMIN") ? ' selected="selected"' : "";

					echo '<option value="'.$value.'" '.$selected.'>'.$display_text.'</option>';
				} 
				?>
			</select>
		</div>
	</div>	
	<div class="form-group" style="display:none">
		<label for="businss_location_id" class="col-md-2 control-label">Businss Location Id</label>
		<div class="col-md-10">
			<input type="text" name="businss_location_id" value="<?php echo $this->input->post('businss_location_id'); ?>" class="form-control" id="businss_location_id" />
		</div>
	</div>
	<div class="form-group"  style="display:none" >
		<label for="factory_lic" class="col-md-2 control-label">Factory Lic</label>
		<div class="col-md-10">
			<input type="text" name="factory_lic" value="<?php echo $this->input->post('factory_lic'); ?>" class="form-control" id="factory_lic" />
		</div>
	</div>
	<div class="form-group"  style="display:none" >
		<label for="irc" class="col-md-2 control-label">Irc</label>
		<div class="col-md-10">
			<input type="text" name="irc" value="<?php echo $this->input->post('irc'); ?>" class="form-control" id="irc" />
		</div>
	</div>
	<div class="form-group"  style="display:none" >
		<label for="trade" class="col-md-2 control-label">Trade</label>
		<div class="col-md-10">
			<input type="text" name="trade" value="<?php echo $this->input->post('trade'); ?>" class="form-control" id="trade" />
		</div>
	</div>
	<div class="form-group"  style="display:none" >
		<label for="bank_info" class="col-md-2 control-label">Bank Info</label>
		<div class="col-md-10">
			<input type="text" name="bank_info" value="<?php echo $this->input->post('bank_info'); ?>" class="form-control" id="bank_info" />
		</div>
	</div>
	<div class="form-group"  style="display:none" >
		<label for="employee_code" class="col-md-2 control-label">Employee Code</label>
		<div class="col-md-10">
			<input type="text" name="employee_code" value="<?php echo $this->input->post('employee_code'); ?>" class="form-control" id="employee_code" />
		</div>
	</div>
	<div class="form-group"  style="display:none" >
		<label for="open_by" class="col-md-2 control-label">Open By</label>
		<div class="col-md-10">
			<input type="text" name="open_by" value="<?php echo $this->input->post('open_by'); ?>" class="form-control" id="open_by" />
		</div>
	</div>

	<div class="form-group"  style="display:none" >
		<label for="address_business" class="col-md-2 control-label">Address Business</label>
		<div class="col-md-10">
			<textarea name="address_business" class="form-control" id="address_business"><?php echo $this->input->post('address_business'); ?></textarea>
		</div>
	</div>
	<div class="form-group"  style="display:none" >
		<label for="personal_photo" class="col-md-2 control-label">Personal Photo</label>
		<div class="col-md-10">
			<textarea name="personal_photo" class="form-control" id="personal_photo"><?php echo $this->input->post('personal_photo'); ?></textarea>
		</div>
	</div>
	<div class="form-group"  style="display:none" >
		<label for="other_doc" class="col-md-2 control-label">Other Doc</label>
		<div class="col-md-10">
			<textarea name="other_doc" class="form-control" id="other_doc"><?php echo $this->input->post('other_doc'); ?></textarea>
		</div>
	</div>
<div class="form-group"  style="display:none" >
		<label for="banking_mode" class="col-md-2 control-label">Banking Mode</label>
		<div class="col-md-10">
			<select name="banking_mode" class="form-control">
				<option value="">select</option>
				<?php 
				$banking_mode_values = array(
					'BANK'=>'BANK',
					'MOBILE_BANKING'=>'MOBILE_BANKING',
					'CASH'=>'CASH',
				);

				foreach($banking_mode_values as $value => $display_text)
				{
					$selected = ($value == $this->input->post('banking_mode')) ? ' selected="selected"' : "";

					echo '<option value="'.$value.'" '.$selected.'>'.$display_text.'</option>';
				} 
				?>
			</select>
		</div>
	</div>	
	<div class="form-group">
		<div class="col-sm-12 text-center">
			<button type="submit" class="btn btn-success">Save Information</button>
        </div>
	</div>

<?php echo form_close(); ?>

<?php $this->view('footer'); ?>