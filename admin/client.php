<?php
include_once('includes/account_api.php');
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
<script src="js/account.js"></script>
	<div id="page-inner">
		
		<div class="row">
			<div class="col-md-12">				
					<h1 class="page-header">
					Client <small>Maintenance</small>
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
								<th >Last name</h>
								<th >First name</th>
								<th >Contact</h>
								<th >Actions</th>
							</tr>
							<?php	
							$res = getAllAccountInfo();
							if($res){
								foreach($res as $rows){

							?>
								<tr id="<?php echo $rows->acct_id;?>">
									<td class='acct-lname'><?php echo $rows->Lastname;?></td>
									<td class='acct-fname'><?php echo $rows->FirstName;?></td>
									<td class='acct-contact'><?php echo $rows->Mobile;?></td>
									<td>
										<button id="btClientEdit" class='btClientEdit'>Edit</button>
										<button id="btClientDelete" class='btClientDelete'>Delete</button>
										<button id='btnClientBook' class='btnClientBook'>Book</button>
									</td>
								</tr>
							<?php
								}
							}
							?>
							
						</table>
							<br>
					<div style='float:left'>
					<h3>Add Client Info</h3>
					<br>
					<table>
						<form method="POST">
							<input type='hidden' id='acct-id' name='acct-id'/>
							<tr>
								<td>Lastname:</td>
								<td>
									<input type="text" name="cl-lname" id='cl-lname' required/>																		
								</td>
							</tr>
							<tr>
								<td>Firstname:</td>
								<td>
									<input type="text" name="cl-fname" id='cl-fname' required/>																		
								</td>
							</tr>
							<tr>
								<td>Contact:</td>
								<td>
									<input type="text" name="cl-contact" id='cl-contact' required/>																		
								</td>
							</tr>
							
							<tr>
								<td><input type="submit" name='add-client' value="Save Changes" /></td>
								<td><input type="button" name='clear-client' id='clear-client' value="Clear fields" /></td>
								
							</tr>
						</form>
					</table>
					<?php
						if(isset($_POST['add-client'])){
							
							if(!empty($_POST['acct-id'])){
								deleteAccount($_POST['acct-id']);
							}				
							$lname = $_POST['cl-lname'];
							$fname = $_POST['cl-fname'];
							$contact = $_POST['cl-contact'];							
							addClientAccount($lname,$fname,$contact);
						}
					?>
					</div>
					
					<div style='float:left;margin-left:50px'>
					<h3>Add Booking</h3>
					<br>
					<table>
						<form method="POST">
							<input type='hidden' id='book-id' name='book-id'/>
							<tr>
								<td>Lastname:</td>
								<td>
									<input type="text" id="book-lname" name="book-lname" required/>																		
								</td>
							</tr>
							<tr>
								<td>Firstname:</td>
								<td>
									<input type="text" id="book-fname" name="book-fname" required/>																		
								</td>
							</tr>
							<tr>
								<td>Date:</td>
								<td>
									<input type="date" id="dt-booking" name="dt-booking" required/>																		
								</td>
							</tr>
							<tr>
								<td>Start time:</td>
								<td>
									<input type="time" id="dt-starttime" name="dt-starttime" required/>																		
								</td>
							</tr>
							<tr>
								<td>End time:</td>
								<td>
									<input type="time" id="dt-endtime" name="dt-endtime" readonly="readonly" required />																		
								</td>
							</tr>
							<tr>
								<td>Service name:</td>
								<td>
									<select name='book-servicename'>
									<?php
										include_once('includes/services_api.php');
										$res = getAllServices();
										if($res){
											foreach($res as $rows){
									?>
										<option value=<?php echo $rows->id; ?>>
											<?php echo $rows->service_name;?>
										</option>
									<?php
											}
										}
									?>
									</select>
								</td>
							</tr>
							<tr>
								<td><input type="submit" name='submit-booking' value="Confirm booking" /></td>
								<td><input type="button" name='btnClear' id='btnClear' value="Clear fields" /></td>
							</tr>
						</form>
					</table>
					<?php
						if(isset($_POST['submit-booking'])){
							require_once('includes/book_api.php');
							$lname = $_POST['book-lname'];
							$fname = $_POST['book-fname'];
							$dt = $_POST['dt-booking'];
							$starttime = $_POST['dt-starttime'];
							$_POST['dt-endtime'];
							$_POST['book-servicename'];							
						}
					?>
					</div>

			</div>
		</div> 
		<footer><p>All right reserved. Pasithea 2016</p></footer>
	</div>
