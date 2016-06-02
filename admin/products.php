<?php
include_once('includes/product_api.php');
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
<script src="js/product.js"></script>
	<div id="page-inner">
		<div class="row">
			<div class="col-md-12">				
					<h1 class="page-header">
					Products <small>Maintenance</small>
					</h1>
					
						<table>
							<tr>
								<th width='10%'>Product Id</h>
								<th width='15%'>Product name</th>
								<th width='20%'>Actions</th>
							</tr>
								<?php
								$res = getProducts();
								if($res){								
									foreach($res as $rows){																	
								?>
									<tr id='<?php echo $rows->prodId?>'>								
										<td class='prodId'><?php echo $rows->prodId;?></td>
										<td class='prodName'><?php echo $rows->ProductName;?></td>
										<td>
										<input type='button' id='edit-product' value='Edit'/>
										<input type='button' id='delete-product' value='Delete'/>
										</td>
									</tr>
									<?php
									}
								}
								?>
						</table>
							<br>
					<div style='float:left'>
					<h3>Add Product</h3>
					<br>
					<table>
						<form method="POST">
							<input type='hidden' id='prod_id' name='prod_id'/>
							<tr>
								<td>Product name:</td>
								<td><input type='text' id='prodName' name='prodName' placeholder='Product name here..' required/></td>
							</tr>
							<tr>
								<td colspan='2'><input type="submit" name='saveProduct' value="Save changes" /></td>
								
							</tr>
						</form>
					</table>
					</div>
					<?php
					if(isset($_POST['saveProduct'])){
						$prodName = $_POST['prodName'];
						saveProduct($prodName);
					}
					?>

			</div>
		</div> 
		<footer><p>All right reserved. Pasithea 2016</p></footer>
	</div>
