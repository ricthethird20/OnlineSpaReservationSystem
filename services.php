<script src="js/jquery.min.js"></script>
<?php
if(!isset($_SESSION['userid']))
	$user_id = '';
else
	$user_id = $_SESSION['userid'];
?>
<div class="container">
			<div class="specials">
			<input type='hidden' value='<?php echo $user_id?>'/>
			<h2>Our Services</h2>
				<?php
					require_once('admin/includes/services_api.php');
					$res = getAllServices();
					$i = 0;
					foreach($res as $rows){	
						$i++;					
				?>		
						
						<div class="col-md-3 special-in">
							<a href="#" ><img src="<?php echo 'admin/'.$rows->image_url;?>" class="img-responsive" alt="">							
								</a>
							<h5><a href="#"><?php echo $rows->service_name;?></a></h5>
							<p onclick='check_credentials()'>Book now</p>
						</div>
						
						
				<?php
						if($i == 4){
							echo "<div class='clearfix'> </div>";
							$i = 0;
						}						
					}
				?>
					<div class="clearfix"> </div>

				<div class="special-bottom">
					<div class="col-md-6 bottom-special">						
						<h5><a href="#" style="color:#aa381e;">HAIR REMOVAL</a></h5>
						<a href="#" class="details">Book now</a>
					</div>
					<div class="col-md-6 bottom-special-1">
						<h5><a href="#" style="color:#aa381e;padding-bottom:10px;">KING AND QUEEN MASSAGE</a></h5>
						<a href="#" class="details" style="padding-top:10px;">Book now</a>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
		</div>
<script>
	$(document).ready(function(){
		function check_credentials(){
			alert('oa');
		}
	});
</script>