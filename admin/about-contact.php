<?php

?>
<style>
table {
    border: 1px solid black;
    width: 80%;
}

th, td {
    text-align: left;
    padding: 8px;
	border: 1px solid gray;
}

tr:nth-child(even){background-color: #f2f2f2}

th {
    background-color: #4CAF50;
    color: white;
}
</style>
	<div id="page-inner">
		<div class="row">
			<div class="col-md-12">
				<form method='post' action='article_save.php'>
					<h1 class="page-header">
					About and Contacts <small>Maintenance</small>
					</h1>
					<div class="about">
						<h3>About Us</h3><br>																	
						<textarea style="position:relative" rows="6" cols="100">some text here..</textarea>
					</div>
					
					<div class="contact"><br>
					<h3>Contact details</h3><br>
						<table>
							<tr>
								<td width='30%'><label>Complete address:</label></td>
								<td width='70%'><input type='text' name='address' placeholder='Company address' style='width:100%'/></td>
							</tr>
							<tr>
								<td><label>Mobile number:</label></td>
								<td><input type='text' name='mobile' placeholder='Contact' style='width:100%'/></td>
							</tr>
							<tr>
								<td><label>Landline/Tel No.:</label></td>
								<td><input type='text' name='telNo' placeholder='Tel' style='width:100%'/></td>
							</tr>
							<tr>
								<td><label>Email address:</label></td>
								<td><input type='email' name='email' placeholder='Email address' style='width:100%'/></td>
							</tr>
						</table>
				
					</div><br>
					<input type='submit' name='save' value='Save changes'/>
				</form>
			</div>
		</div> 
		<footer><p>All right reserved. Pasithea 2016</p></footer>
	</div>
