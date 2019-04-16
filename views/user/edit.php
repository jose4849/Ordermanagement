<?php $this->view('header'); ?>
<?php echo form_open('user/edit/'.$user['userid'],array("class"=>"form-horizontal")); ?>
<h3 style="text-align:center">Edit Profile</h3>
<hr></hr>


<div class="row" style="margin-bottom:20px;border-top:1px solid gray;border-buttom:1px solid gray;padding-top:20px;">
  <div class="col-md-6" style="text-align:center;font-weight:bolder;">
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
			<input type="text" name="email" value="<?php echo ($this->input->post('email') ? $this->input->post('email') : $user['email']); ?>" class="form-control" id="email" />
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
			<input type="text" name="nid" value="<?php echo ($this->input->post('nid') ? $this->input->post('nid') : $user['nid']); ?>" class="form-control" id="nid" />
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
	<div class="form-group">
		<label for="user_type" class="col-md-2 control-label">User Type <?php echo $user['user_type']; ?></label>
		<div class="col-md-8">
			<select name="user_type" class="form-control">
				<option value="">select</option>
				<?php 
				$user_type_values = array(
					'SUPERADMIN'=>'SUPERADMIN',
					'ADMIN'=>'ADMIN',
					
				);

				foreach($user_type_values as $value => $display_text)
				{
					$selected = ($value == "SUPERADMIN") ? ' selected="selected"' : "";

					echo '<option value="'.$value.'" '.$selected.'>'.$display_text.'</option>';
				} 
				?>
			</select>
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

	<div class="form-group">
	 <div class="col-md-12" style="text-align:center;font-weight:bolder;"><button type="submit" class="btn btn-success">Update Information</button></div>
	</div>
	
  
  </div>
  <?php echo form_close(); ?>
 <div class="col-md-6" style="text-align:center;font-weight:bolder;">
  <?php
  $userid=$user['userid'];
        $query1 = $this->db->query("SELECT * FROM `user` WHERE `userid`='$userid'");
        $menus = $query1->result();
        if(isset($menus[0])){
            $json=$menus[0]->access;
            $value=  json_decode($json,true);
             
        }
  
  
  $access=array(
	
    'order',
    'order_status',
	'order_print',
	'order_download',
    'vehicle_type',
    'price_table',
    'setting',
    'user',
  
);
$userid=$user['userid'];

?>
            <style>
                th{ text-align: center; }
            </style>
            <form action="<?php echo base_url("user/savesetting/$userid"); ?>" method="post" >
            <table border="1" width="400">
                <tr>
                    <th>Name</th>
                    <th> All</th>
                    <th>Add</th>
                    <th>Edit</th>
                    <th>Del</th>
                </tr>
                <tr>
                    <th>All</th>
                    <th><input name="all" <?php $key="all"; if(isset($value[$key])){ echo 'checked'; }  ?> onclick="check_all()" id="all_check" type="checkbox" /></th>
                    <th><input name="add" <?php $key="add"; if(isset($value[$key])){ echo 'checked'; }  ?> onclick="check_alladd()" id="all_check1" type="checkbox" /></th>
                    <th><input name="edit" <?php $key="edit"; if(isset($value[$key])){ echo 'checked'; }  ?> onclick="check_alledit()" id="all_check2" type="checkbox" /></th>
                    <th><input name="del" <?php $key="del"; if(isset($value[$key])){ echo 'checked'; }  ?> onclick="check_alldel()" id="all_check3" type="checkbox" /></th>
                </tr>                
                <?php foreach($access as $acc){ ?>
                <tr>
                    <th><?php $acc; echo ucfirst(str_replace("_"," ","$acc")); ?></th>
                    <th><input class="chk" <?php $key=$acc.""; if(isset($value[$key])){ echo 'checked'; }  ?> name="<?php echo $acc ?>" type="checkbox" /></th>
                    <th><input class="add" <?php $key=$acc."_add"; if(isset($value[$key])){ echo 'checked'; }  ?> name="<?php echo $acc ?>_add"  type="checkbox" /></th>
                    <th><input class="edit" <?php $key=$acc."_edit"; if(isset($value[$key])){ echo 'checked'; }  ?> name="<?php echo $acc ?>_edit" type="checkbox" /></th>
                    <th><input class="del" <?php $key=$acc."_del"; if(isset($value[$key])){ echo 'checked'; }  ?> name="<?php echo $acc ?>_del" type="checkbox" /></th>
                </tr>                
                <?php } ?>
                <tr>
                    <th colspan="5" style="border:0px;">
                        <input style="margin-bottom:10px;margin-top:10px;" type="submit" class="btn btn-success" class="form-control" value="Update Access" />
                    </th>
                </tr>
            </table>
        </form>
  
  </div>  
  
  
 
  
  
  </div>


<script >
function check_all() {
    if ($('#all_check').prop("checked")) {
        $('.chk').prop("checked", true);

    } else {
        $('.chk').prop("checked", false);

    }
}

function check_alladd() {
	
    if ($('#all_check1').prop("checked")) {
        $('.add').prop("checked", true);

    } else {
        $('.add').prop("checked", false);

    }
}
function check_alledit() {
    if ($('#all_check2').prop("checked")) {
        $('.edit').prop("checked", true);

    } else {
        $('.edit').prop("checked", false);

    }
}
function check_alldel() {
    if ($('#all_check3').prop("checked")) {
        $('.del').prop("checked", true);

    } else {
        $('.del').prop("checked", false);

    }
}
</script>

	


<?php $this->view('footer'); ?>