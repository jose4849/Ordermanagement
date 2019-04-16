<?php echo form_open('product/edit/'.$product['product_id'],array("class"=>"form-horizontal")); ?>
<h3 style="text-align:center">Edit Product</h3>
	<div class="form-group">
		<label for="product_cat" class="col-md-2 control-label">Category</label>
		<div class="col-md-10">
			<select name="product_cat" class="form-control">
				<option value="">select</option>
				<?php 
				$product_cat_values = array(
				);
$res=$this->db->query('select * from product_cat');
$resset=$res->result();
foreach($resset as $r){             
   $product_cat_values[$r->pcid]=$r->pcname;
}
				foreach($product_cat_values as $value => $display_text)
				{
					$selected = ($value == $product['product_cat']) ? ' selected="selected"' : "";

					echo '<option value="'.$value.'" '.$selected.'>'.$display_text.'</option>';
				} 
				?>
			</select>
		</div>
	</div>
	<div class="form-group">
		<label for="product_code" class="col-md-2 control-label"><span class="text-danger">*</span>Product Code</label>
		<div class="col-md-10">
			<input type="text" name="product_code" value="<?php echo ($this->input->post('product_code') ? $this->input->post('product_code') : $product['product_code']); ?>" class="form-control" id="product_code" />
			<span class="text-danger"><?php echo form_error('product_code');?></span>
		</div>
	</div>
	<div class="form-group">
		<label for="product_name" class="col-md-2 control-label"><span class="text-danger">*</span>Product Name</label>
		<div class="col-md-10">
			<input type="text" name="product_name" value="<?php echo ($this->input->post('product_name') ? $this->input->post('product_name') : $product['product_name']); ?>" class="form-control" id="product_name" />
			<span class="text-danger"><?php echo form_error('product_name');?></span>
		</div>
	</div>
	<div class="form-group">
		<label for="product_description" class="col-md-2 control-label">Product Description</label>
		<div class="col-md-10">
			<input type="text" name="product_description" value="<?php echo ($this->input->post('product_description') ? $this->input->post('product_description') : $product['product_description']); ?>" class="form-control" id="product_description" />
		</div>
	</div>

	

<div class="form-group">
        <div class="col-sm-12 text-center">
            <button type="submit" class="btn btn-success">Save Information</button>
        </div>
</div>
	
<?php echo form_close(); ?>