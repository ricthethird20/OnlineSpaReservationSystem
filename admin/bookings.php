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
<script src="js/service.js"></script>
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
								<tr>
									<td><?php echo $rows->book_date;?></td>
									<td><?php echo date('h:i A', strtotime(parseTime($rows->book_starttime)));?></td>
									<td><?php echo date('h:i A', strtotime(parseTime($rows->book_endtime)));?></td>
									<td><?php echo $rows->service_name;?></td>
									<td><?php echo $rows->Lastname;?></td>
									<td><?php echo $rows->status;?></td>
									<td>
										<?php
											if($rows->status == 'Cancelled' || $rows->status == 'Expired'){
												echo 'No action needed.';
											}elseif($rows->status == 'Confirmed'){
												echo "<button class='btnCancel'>Cancel</button>";
											}
											else{												
												echo "<button class='btnConfirm'>Confirm</button>";
												echo "<button class='btnCancel'>Cancel</button>";
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
					<div style='float:left'>
					<h3>Add Booking</h3>
					<br>
					<table>
						<form enctype="multipart/form-data" action="upload.php" method="POST">
							<input type='hidden' id='hidden_id' name='hidden_id'/>
							<tr>
								<td>Date:</td>
								<td>
									<input type="date" name="dt-booking" />																		
								</td>
							</tr>
							<tr>
								<td>Start time:</td>
								<td>
									<input type="time" name="dt-starttime" />																		
								</td>
							</tr>
							<tr>
								<td>End time:</td>
								<td>
									<input type="time" name="dt-endtime" />																		
								</td>
							</tr>
							<tr>
								<td>Service name:</td>
								<td>
								
								</td>
							</tr>
							<tr>
								<td><input type="submit" name='submit' value="Confirm booking" /></td>
								<td><input type="button" name='btnClear' id='btnClear' value="Clear fields" /></td>
							</tr>
						</form>
					</table>
					</div>

			</div>
		</div> 
		<footer><p>All right reserved. Pasithea 2016</p></footer>
	</div>
