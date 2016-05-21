<?php
include_once('includes/services_api.php');
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
					Services <small>Maintenance</small>
					</h1>
					
						<table>
							<tr>
								<th width='10%'>Image</h>
								<th width='15%'>Service name</th>
								<th width='30%'>Details</h>
								<th width='10%'>Service cost</th>
								<th width='3%'>Featured</th>
								<th width='15%'>Discount price</th>
								<th width='20%'>Actions</th>
							</tr>
							<?php
								$res = getAllServices();
								foreach($res as $rows){																	
							?>
							<tr id='<?php echo $rows->id?>'>
								<td><img src='<?php echo $rows->image_url;?>' width='100' height='50'></img></td>
								<td class='svcName'><?php echo $rows->service_name;?></td>
								<td class='svcDetail'><?php echo $rows->service_details;?></td>
								<td class='svcCost'><?php echo $rows->service_cost;?></td>
								<td class='svcFeat'><?php echo ($rows->featured == 1? 'Yes':'No');?></td>
								<td class='svcDisc'><?php echo $rows->discounted_price;?></td>
								<td><input type='button' id='edit-service' value='Edit'/><input type='button' id='delete-service' value='Delete'/></td>
							</tr>
							<?php
								}
							?>
						</table>
							<br>
					<div style='float:left'>
					<h3>Add Services</h3>
					<br>
					<table>
						<form enctype="multipart/form-data" action="upload.php" method="POST">
							<input type='hidden' id='hidden_id' name='hidden_id'/>
							<tr>
								<td>Image:</td>
								<td>
									<input name="fileToUpload" type="file"/>																		
								</td>
							</tr>
							<tr>
								<td>Service name:</td>
								<td><input type='text' id='serviceName' name='serviceName' placeholder='Service name here..' required/></td>
							</tr>
							<tr>
								<td>Details:</td>
								<td><textarea style="position:relative" id='serviceDetails' name='serviceDetails' rows="4" cols="100" placeholder='Details here..' required></textarea></td>
							</tr>
							<tr>
								<td>Service cost:</td>
								<td><input type='number' id='serviceCost' name='serviceCost' required></td>
							</tr>
							<tr>
								<td>Featured:</td>
								<td><input type='radio' id='radYes' name='radButton' value='1' checked>Yes</input>
								<input type='radio' id='radNo' name='radButton' value='0'>No</input></td>
							</tr>
							<tr>
								<td>Discounted price:</td>
								<td><input type='number' id='serviceDisc' name='serviceDisc' required></td>
							</tr>
							<tr>
								<td><input type="submit" name='submit' value="Save changes" /></td>
								<td><input type="button" name='btnClear' id='btnClear' value="Clear fields" /></td>
							</tr>
						</form>
					</table>
					</div>

			</div>
		</div> 
		<footer><p>All right reserved. Pasithea 2016</p></footer>
	</div>
