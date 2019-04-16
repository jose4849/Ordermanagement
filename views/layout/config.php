<?php $this->view('header'); ?>

<?php echo form_open('setting/add',array("class"=>"form-horizontal")); ?>
	<h3 style="text-align:center">System Configaration</h3>
	<center>Separate multiple email addresses using the comma  character.</center><br>
	<?php
	
	$rest=dbq('select * from setting_meta');
	//print_r($rest);
	if(!empty($rest)){
	$restarray=array();
	foreach($rest as $r){
	$restarray[$r->metaname]=$r->metavalue;	
	}
	}
	$featured=array(
	'system_name'=>'',
	'company_email'=>'',
	'system_email'=>'',
	'system_mobile'=>'',
	'from_mail'=>'',
	'reply_mail'=>'',
	'email_title'=>'',
	'delivery_charge'=>'',
	'call_center_number'=>'',
	);
	if(!empty($featured)){
foreach($featured as $key => $value){ ?>
	<div class="form-group">
		<label for="name" class="col-md-2 control-label"><?php echo ucfirst(str_replace('_', ' ', $key)); ?></label>
		<div class="col-md-10">
			<input type="text" name="<?php echo $key ?>" value="<?php if(isset($restarray[$key])){ echo $restarray[$key]; }else{ echo $value; } ?>" class="form-control" id="<?php echo $key ?>" />
		</div>
	</div>
	<?php } } ?>
	<div class="form-group">
		<div class="col-sm-12 text-center">
			<button type="submit" class="btn btn-success">Save</button>
        </div>
	</div>	
</form>

<?php $this->view('footer'); ?>	