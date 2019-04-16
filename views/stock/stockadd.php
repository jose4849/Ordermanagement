<h3 style="text-align:center">Add Quantity To Stock</h3>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
<table class="table table-striped table-bordered">
    <tr>
		<td style="text-align:center;" >
		<center><select class="itemName form-control" id="product_id"  name="itemName">
		<option >Select Item</option>
		</select></td><td style="text-align:center;" >
		<input type="input" class="form-control" id="quantity" value="1" /></td><td style="text-align:center;" >
		<input type="submit" onclick="addtocart()" class="btn btn-success form-control" value="Add To Cart" /></td>
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
<form method="POST" action="<?php echo base_url(); ?>stock/stockupdate" >
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