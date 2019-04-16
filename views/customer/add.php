<h3 style="text-align:center">Add New Customer</h3>
<?php echo form_open('customer/add',array("class"=>"form-horizontal")); ?>

	<div class="form-group">
		<label for="customer_name" class="col-md-2 control-label"><span class="text-danger">*</span>Customer Name</label>
		<div class="col-md-10">
			<input type="text" name="customer_name" value="<?php echo $this->input->post('customer_name'); ?>" class="form-control" id="customer_name" />
			<span class="text-danger"><?php echo form_error('customer_name');?></span>
		</div>
	</div>
	<div class="form-group">
		<label for="company_name" class="col-md-2 control-label">Company Name</label>
		<div class="col-md-10">
			<input type="text" name="company_name" value="<?php echo $this->input->post('company_name'); ?>" class="form-control" id="company_name" />
		</div>
	</div>
	<div class="form-group">
		<label for="customer_phone" class="col-md-2 control-label"><span class="text-danger">*</span>Customer Phone</label>
		<div class="col-md-10">
			<input type="text" name="customer_phone" value="<?php echo $this->input->post('customer_phone'); ?>" class="form-control" id="customer_phone" />
			<span class="text-danger"><?php echo form_error('customer_phone');?></span>
		</div>
	</div>
	<div class="form-group">
		<label for="customer_address" class="col-md-2 control-label"><span class="text-danger">*</span>Customer Address</label>
		<div class="col-md-10">
			<input type="text" name="customer_address" value="<?php echo $this->input->post('customer_address'); ?>" class="form-control" id="customer_address" />
			<span class="text-danger"><?php echo form_error('customer_address');?></span>
		</div>
	</div>
	<div class="form-group">
		<label for="customer_email" class="col-md-2 control-label">Customer Email</label>
		<div class="col-md-10">
			<input type="text" name="customer_email" value="<?php echo $this->input->post('customer_email'); ?>" class="form-control" id="customer_email" />
		</div>
	</div>
	<div class="form-group">
		<label for="sales_person_id" class="col-md-2 control-label">Sales Person</label>
		<div class="col-md-10">
			<select name="sales_person_id" class="form-control">
				<option value="">select</option>
				<?php 
				$product_cat_values = array(
				);
$res=$this->db->query('select * from user');
$resset=$res->result();
foreach($resset as $r){             
   $product_cat_values[$r->userid]=$r->name;
}
				foreach($product_cat_values as $value => $display_text)
				{
					$selected = ($value == $_POST['sales_person_id']) ? ' selected="selected"' : "";
 
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