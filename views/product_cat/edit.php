<?php echo form_open('product_cat/edit/'.$product_cat['pcid'],array("class"=>"form-horizontal")); ?>
<h3 style="text-align:center">Edit Category</h3>
	<div class="form-group">
		<label for="pcname" class="col-md-2 control-label">Category Name:</label>
		<div class="col-md-10">
			<input type="text" name="pcname" value="<?php echo ($this->input->post('pcname') ? $this->input->post('pcname') : $product_cat['pcname']); ?>" class="form-control" id="pcname" />
		</div>
	</div>
	
<div class="form-group">
        <div class="col-sm-12 text-center">
            <button type="submit" class="btn btn-success">Save Information</button>
        </div>
</div>
	
<?php echo form_close(); ?>