<h3 style="text-align:center">Invoice List</h3>
<?php
$result=dbq("select * from sales");
?>
<table id="products" class="table table-striped table-bordered">
    <tbody>
	<tr>
		<th>Date</th>
		<th>Invoice ID</th>
		<th>Customer</th>
		<th>Amount</th>
		<th>Order By</th>		
		<th>Invoice By</th>
		<th width="250" >Actions</th>
    </tr>
	
	<?php if(isset($result[0])){ 
	
	foreach($result as $res){ ?>
	<tr>
		<td><?php echo $res->invoicedate; ?></td>
		<td><?php echo $res->invoiceid; ?></td>
		<td><?php echo getcustomername($res->cid); ?></td>
		<td><?php echo $res->totalamount; ?></td>
		<td><?php echo usernameid($res->salespersonid); ?></td>		
		<td><?php echo usernameid($res->createdby); ?></td>
		<td width="100" >
		<a class="btn btn-info btn-xs">View</a>
		<a class="btn btn-info btn-xs">Print</a>
		<a class="btn btn-info btn-xs">Payment</a>
		<a class="btn btn-info btn-xs">Return</a>
		</td>
		</tr>
	<?php } } ?>	
	</tbody>
</table>



</form>