	<style>
		table {
			border: 1px solid gray;
			width: 100%;
		}

		th, td {
			text-align: left;
			padding: 8px;
		}
		td{
			background-color: #FCFCFC;
		}

		tr:nth-child(even){background-color: #f2f2f2}

		th {
			background-color: #4CAF50;
			color: white;
		}
	</style>
	<div class="container" style='font-family: ""Rokkitt",serif"'>
		<br>
		<h2 align='center'>Your Bookings</h2>
		<div class="single">
			<div class="col-md-9  single-top" style='width:100%'>
				<div class="text-in">					
						<div class="single-men">							
							<br>
								<table width='100%' style='font-family: ""Rokkitt",serif"; font-size:12pt;border-collapse: separate; border-spacing: 10px'>
									<tr>
										<th width='25%'>No. of bookings</th>
										<td width='25%'>1</td>
										<th width='25%'>Active Bookings</th>
										<td width='25%'>1</td>
									</tr>
									<tr>
										<th colspan='2'>Filter list</th>
										<td colspan='2'>
											<select>
												<option selected>Active</option>
												<option >Pending</option>
												<option >Cancelled</option>
												<option >Expired</option>
											</select>
										</td>
									</tr>
								</table>

						</div>						  
				</div>
				
			</div>
			<div class="clearfix"> </div>
			<div class="col-md-9  single-top" style='width:100%'>
				<div class="text-in">					
						<div class="single-men">							
							<br>
								<table width='100%' style='font-family: ""Rokkitt",serif"; font-size:12pt;border-collapse: separate; border-spacing: 10px'>
									<tr>
										<th>Service name</th>
										<th>Book date</th>
										<th>Start time</th>
										<th>End time</th>
										<th>Status</th>
										<th>Actions</th>
									</tr>
									<?php
									
									require_once('includes/book_api.php');
									$res = getBookingsFor($_SESSION['userid']);
									foreach($res as $rows){									
									?>
										<tr>
											<td><?php echo $rows->service_name;?></td>
											<td><?php echo $rows->book_date;?></td>
											<td><?php echo date('h:i A', strtotime(parseTime($rows->book_starttime)));?></td>
											<td><?php echo date('h:i A', strtotime(parseTime($rows->book_endtime)));?></td>
											<td><?php echo $rows->status;?></td>
											<td>
												<?php 
												if($rows->status == 'Cancelled' || $rows->status == 'Expired')
												echo 'No action required';
												else{?>
												<button id='cancel-booking'>Cancel</button>
												<button id='resched-booking'>Reschedule</button>
												<?php													
												}
												?>
											</td>
										</tr>
									<?php
									}
									?>
								</table>

						</div>						  
				</div>
				
			</div>		
			<div class="clearfix"> </div>			
		</div>
		
	</div>
	