<?php
if(isset($_GET['cid'])){
	
}else{ redirect('customer/index'); }

?>
<h3 style="text-align:center">New Sales</h3>
<script src="<?php echo base_url(); ?>asset/select2/jquery.js"></script>
<link href="<?php echo base_url(); ?>asset/select2/select2.min.css" rel="stylesheet" />
<script src="<?php echo base_url(); ?>asset/select2/select2.min.js"></script>
<form method="POST" action="<?php echo base_url(); ?>sales/savesales" >
<table class="table table-striped table-bordered">
    <tr>
		<td style="width:50%">
		<strong>Customer Details:</strong><br>
		<?php
		if(isset($_GET['cid'])){
			$customer_id=$_GET['cid'];
			$userarray=dbq("select * from customer where customer_id=$customer_id");
			echo '<br>';
			echo $userarray[0]->company_name."<br>";
			echo $userarray[0]->customer_name."<br>";
			echo $userarray[0]->customer_address."<br>";
			echo $userarray[0]->customer_phone."<br>";
		}
		?>
		</td>
		<td>
		<strong>Shiping Details</strong><br>
		<textarea style="width:100%;height:120px;"><?php
		if(isset($_GET['cid'])){
			$customer_id=$_GET['cid'];
			$userarray=dbq("select * from customer where customer_id=$customer_id");
			?><?php	echo $userarray[0]->company_name."\r\n"; ?><?php	echo $userarray[0]->customer_name."\r\n";?><?php	echo $userarray[0]->customer_address."\r\n"; ?><?php	echo $userarray[0]->customer_phone."\r\n"; 
		}
		?>
		</textarea>
		<input type="hidden" name="cid" value="<?php echo $customer_id ?>" />
		<input type="hidden" name="orderid" value="<?php if(isset($_GET['orderid'])){ echo $_GET['orderid']; }  ?>" />
		<input type="hidden" name="orderdate" value="<?php if(isset($_GET['orderdate'])){ echo $_GET['orderdate']; }  ?>" />
		</td>
	</tr>
</table>	


<table class="table table-striped table-bordered">
    <tr>
		<td style="text-align:center;" >
		<center><select class="itemName form-control" id="product_id"  name="itemName">
		<option >Select Item</option>
		</select></td><td style="text-align:center;" >
		<input type="input" class="form-control" id="quantity" value="1" /></td><td style="text-align:center;" >
		<a onclick="addtocart()" class="btn btn-success form-control" value="" >Add To Cart</a></td>
	</tr>
</table>	
<script type="text/javascript">
function addtocart(){
	var product_id=$("#product_id").val();
	var quantity=$("#quantity").val();
	
	  
		$.ajax({ 
		  type: "POST",
		  url: "<?php echo base_url(); ?>stock/addtocart",
		  data: {product_id: product_id,quantity:quantity}
		})
		.done(function (msg) {
		   $("#products > tbody:last-child").append(msg); 
		});



	
	
	//alert(product_id);
	//var vari2 = '<tr><th>ID</th><th>Category</th><th>Code</th><th>Product Name</th><th>Quantity</th><th>Price</th><th>Actions</th></tr>';
   // $("#products > tbody:last-child").append(vari2);
}
      $('.itemName').select2({

        placeholder: 'Select an item',

        ajax: {

          url: 'http://localhost/0select2/ajaxpro.php',

          dataType: 'json',

          delay: 250,

          processResults: function (data) {

            return {

              results: data

            };

          },

          cache: true

        }

      });

	  
	  
	  
</script>

<table id="products" class="table table-striped table-bordered">
    <tbody>
	<tr>
		<th>ID</th>
		<th>Category</th>
		<th>Code</th>
		<th>Product Name</th>		
		<th width="100">Quantity</th>
		<th width="100" >Price</th>
		<th width="100" >Actions</th>
    </tr>
<script>
            $(document).on('click', '.remove', function() {
                $(this).closest('tr').remove();
                return false;
            });
</script>	
	</tbody>
</table>


<div class="form-group">
        <div class="col-sm-12 text-center">
            <button type="submit" class="btn btn-success">Save Information</button>
        </div>
</div>

</form>