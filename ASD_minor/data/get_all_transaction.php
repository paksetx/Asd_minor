<?php 
require_once('../class/Transaction.php');
$transactions = $transaction->getAllTransaction();

// echo '<pre>';
// 	print_r($transactions);
// echo '</pre>';
?>


<table id="myTable-trans" class="table table-bordered table-hover" cellspacing="0" width="100%">
	<thead>
	    <tr>
	        <th>Name</th>
	        <th><center>Age</center></th>
	        <th><center>Gender</center></th>
			<th><center>Destination</center></th>
	        <th><center>Accomodation</center></th>
	        <th><center>Ticket Price</center></th>
			<th><center>Time of Transaction</center></th>
	      
	    </tr>
	</thead>
    <tbody>
    	<?php foreach($transactions as $t): ?>
    		<tr>
    			<td><?= ucwords($t['trans_passenger']); ?></td>
    			<td align="center"><?= $t['trans_age']; ?></td>
    			<td align="center"><?= $t['trans_gender']; ?></td>	
				<td align="center"><?= $t['dest_destination']; ?></td>
    			<td align="center"><?= $t['acc_type']; ?></td>
    			<td align="center"><?= $t['trans_payment']; ?></td>
				<td align="center"><?php echo date('M d, Y h:i A',strtotime($t['trans_time'])); ?></td>
    			
    		</tr>
    	<?php endforeach; ?>
    </tbody>
</table>

<?php 
$transaction->Disconnect();
 ?>
<!-- for the datatable of employee -->
<script type="text/javascript">
	$(document).ready(function() {
		$('#myTable-trans').DataTable();
	});
</script>
