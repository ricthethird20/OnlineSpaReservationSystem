<?php
include_once('includes/book_api.php');
?>
<style>
table {
	border: 1px solid gray;
    width: 100%;
}

th, td {
    text-align: left;
    padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}

th {
    background-color: #4CAF50;
    color: white;
}
</style>
<script src="js/book.js"></script>
	<div id="page-inner">
		
		<div class="row">
			<div class="col-md-12">				
					<h1 class="page-header">
					Bookings <small>Maintenance</small>
					</h1>
						<div style='float:right'>
							<label>Filter by booking status</label>
							<select>
								<option selected>Confirmed</option>
								<option>Pending</option>
								<option>Cancelled</option>
								<option>Expired</option>
							</select>
						</div>
						<table>
							<tr>
								<th >Date</h>
								<th >Start time</th>
								<th >End time</h>
								<th >Service name</th>
								<th >Client name</th>
								<th >Status</th>
								<th >Actions</th>
							</tr>
							<?php
							$res = getBookings();
							if($res){
								foreach($res as $rows){

							?>
								<tr id = '<?php echo $rows->bookId;?>'>
									<td><?php echo $rows->book_date;?></td>
									<td><?php echo date('h:i A', strtotime(parseTime($rows->book_starttime)));?></td>
									<td><?php echo date('h:i A', strtotime(parseTime($rows->book_endtime)));?></td>
									<td><?php echo $rows->service_name;?></td>
									<td><?php echo $rows->FirstName." ".$rows->Lastname;?></td>
									<td><?php echo $rows->status;?></td>
									<td>
										<?php
											if($rows->status == 'Cancelled' || $rows->status == 'Expired'){
												echo 'No action needed.';
											}elseif($rows->status == 'Confirmed'){
												echo "<button class='btnCancel'>Cancel</button>";
											}
											else{												
												echo "<input type='button' id='btnConfirm' value='Confirm'/>";
												echo "<input type='button' id='btnCancel' value='Cancel'/>";
											}
										?>
									</td>
								</tr>
							<?php
								}
							}
							?>
							
						</table>
							<br>
					

			</div>
		</div> 
		<footer><p>All right reserved. Pasithea 2016</p></footer>
	</div>
