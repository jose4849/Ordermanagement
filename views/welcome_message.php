<?php $this->load->view('website/header'); ?>
	<style>
		
		table {
		    font-family: arial, sans-serif;
		    border-collapse: collapse;
		    width: 100%;
		    font-size: 14px;
		    margin: 0 auto;
		}

		td, th {
		    border: 1px solid green;
		    hidden-align: left;
		    padding: 5px;
		}
		.cont{
			width: 35%;
			margin: 4% auto;
			box-shadow: 1px 2px 4px rgba(0, 0, 0, .5);
			padding: 20px;
			background-color: white;
		}
		.btn{
			height: 45px;
			width: 130px;
			font-size: 18px;
			background: #000099;
			border:0px;
			color: white;
			border-radius: 3px;
		}
		.tbox{
			height: 23px;
			width: 260px;
			border-radius: 3px;
			border:0px;
			font-size: 14px;
		}
		.img {
		    display: block;
		    margin: 0 auto;
		    height:70px; 
		    width:250px;
		}
	</style>

	<div class="cont">
		
		<h4 align="center">Pay With SSLCommerz - Nexus / Debit / Credit / Mobile / Internet Banking</h4>
		<form method="post" action="<?php echo base_url(); ?>main/requestssl">
			<table>
				<tr>
					<td>Name</td>
					<td><input type="hidden" name="fname" required class="tbox" autofocus placeholder="Name" value="<?php $value=''; if(isset($_SESSION['insured_name'])){ echo $value= $_SESSION['insured_name'];  } ?>" ><?php echo strtoupper($value); ?></td>
				</tr>
				<tr>
					<td>Email</td>
					<td><input type="hidden" name="email" required class="tbox" placeholder="Email" value="<?php $value=''; if(isset($_SESSION['email'])){ echo  $value= $_SESSION['email'];  } ?>" ><?php echo $value; ?></td>
				</tr>
				<tr>
					<td>Phone</td>
					<td><input type="hidden" name="phone" required class="tbox" placeholder="Phone" value="<?php $value=''; if(isset($_SESSION['mobile_no'])){ echo  $value= $_SESSION['mobile_no'];  } ?>" ><?php echo $value; ?></td>
				</tr>
				<tr>
					<td>Premium Amount</td>
					<td><input type="hidden" name="amount" required  class="tbox" value="<?php $value=''; if(isset($_SESSION['amount'])){ echo  $value= $_SESSION['amount'];  } ?>" placeholder="Amount"><?php echo $value; ?> BDT</td>
				</tr>
				<tr>
					<td>Street Address</td>
					<td><input type="hidden" name="street" required class="tbox" placeholder="Street Address" value="<?php $value=''; if(isset($_SESSION['mailing_address'])){ echo $value= $_SESSION['mailing_address'];  } ?>" ><?php echo $value; ?></td>
				</tr>		
				<tr>
					<td>District</td>
					<td><input type="hidden" name="address" required class="tbox" placeholder="Address" value="<?php $value=''; if(isset($_SESSION['mailing_city'])){ echo  $value= $_SESSION['mailing_city'];  } ?>" ><?php echo $value; ?></td>
				</tr>
				<tr style="display:none;"  >
					<td>Country</td>
					<td><input type="hidden" name="country" required class="tbox" placeholder="Country" value="Bangladesh"></td>
				</tr>
		

				<tr style="display:none;">
					<td>State</td>
					<td><input type="hidden" name="state" required class="tbox" placeholder="State" value="<?php $value=''; if(isset($_SESSION['mailing_city'])){ echo  $value= $_SESSION['mailing_city'];  } ?>" ><?php echo $value; ?></td>
				</tr>
				<tr style="display:none;" >
					<td>City</td>
					<td><input type="hidden" name="city" required class="tbox" placeholder="City" value="<?php $value=''; if(isset($_SESSION['mailing_city'])){ echo  $value= $_SESSION['mailing_city'];  } ?>" ><?php echo $value; ?></td>
				</tr>
				<tr style="display:none;" >
					<td>Post Code</td>
					<td><input type="hidden" name="postcode" required class="tbox" placeholder="Post Code" value="1000"></td>
				</tr>
				
				<tr>
					<td colspan="2" style="text-align:center;">
				    <p>Please Note: Documents will be delivered within 1-2 working days from the date of order received. Order placed on weekend or public holiday will be processed on the next working day.</p>	    
					    <input style="background-color: #5c479e;" type="submit" name="submit" value="Place Order" class="btn">
					    
				   </td>
				</tr>
			</table>
		</form>
		
	</div>
	<img src="<?php echo base_url(); ?>img/ssl2.png" style="display: block; margin: 0 auto; height:120px; width:600px;">
<?php $this->load->view('website/footer'); ?>