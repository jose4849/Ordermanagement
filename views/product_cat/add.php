<?php echo form_open('product_cat/add',array("class"=>"form-horizontal")); ?>

<h3 style="text-align:center">New Category</h3>
	<div class="form-group">
		<label for="pcname" class="col-md-2 control-label">Category Name:</label>
		<div class="col-md-10">
			<input type="text" name="pcname" value="<?php echo $this->input->post('pcname'); ?>" class="form-control" id="pcname" />
		</div>
	</div>
	
<div class="form-group">
        <div class="col-sm-12 text-center">
            <button type="submit" class="btn btn-success">Save Information</button>
        </div>
</div>

<?php echo form_close(); ?>