		<div class="container" style='font-family: ""Rokkitt",serif"'>
		<h2 align='center'>Booking form</h2>
		<?php
			require_once('admin/includes/services_api.php');
			$res = getServices($svc_id);
			if($res != false){
			foreach($res as $rows){
		?>
		<div class="single">
			<div class="col-md-9  single-top">
				<div class="text-in">					
						<div class="single-men">							
							<br>
							<form method='post'>
								<table width='100%' style='font-family: ""Rokkitt",serif"; font-size:16pt;border-collapse: separate; border-spacing: 10px'>
									<tr>
										<td colspan='8'><h3>Selected service</h3></td>	
									</tr>
									<tr>
										<td colspan='8' style='text-decoration: underline'><?php echo $rows->service_name;?></td>	
									</tr>
									<tr>
										<td colspan='6'><h3>Schedule booking</h3></td>	
										<td id='td-available' style='display:none;color:green'>Available</td>
										<td id='td-unavailable' style='display:none;color:red'>Unavailable</td>							
									</tr>
									<tr>
										<td>Date:</td>
										<td><input type='date' id='book-date' name='book-date' required></td>
										<td>Time:</td>
										<td><input type='time' id='book-time' name='book-time' required></td>
										<td colspan='2'>End time:</td>
										<td><input type='time' id='book-end' name='book-end' readonly></td>
										<td><input type='button' id='check-book' name='check-book' value='Check availabilty'></td>										
									</tr>
									<tr>
										
									</tr>
								</table>
								
								<table id='tbl-book' align='center' width='100%' style='display:none;font-family: ""Rokkitt",serif"; font-size:16pt;border-collapse: separate; border-spacing: 10px'>
									<tr>
										<td><img id="captcha" src="securimage/securimage_show.php" alt="CAPTCHA Image" /></td>
									</tr>
									<tr>
										<td>
											<input type="text" id='captcha_code2' name="captcha_code" size="10" maxlength="6" />
											<a href="#" onclick="document.getElementById('captcha').src = 'securimage/securimage_show.php?' + Math.random(); return false">[ Different Image ]</a>
										<td>
									</tr>
									<tr>
										<td>
											<input type="submit" id='submit-book' name="submit-book" value='Book now!'/>
										<td>
									</tr>
								</table>
							</form>
						</div>						  
				</div>
				<?php
				
					
					include_once ('securimage/securimage.php');
					include_once('includes/misc_api.php');
					$securimage = new Securimage();
					
					if(isset($_POST['submit-book'])){					
						if ($securimage->check($_POST['captcha_code']) == false) {
							  echo "<span style='color:red;margin-left:10px;'>The security code entered was incorrect.</span><br />";
							  echo "<span style='color:red;margin-left:10px;'>Please try again.</span>";
						}else{
							$userid = $_SESSION['userid'];
							$book_date = $_POST['book-date'];
							$book_start = $_POST['book-time'];
							$book_end = $_POST['book-end'];
							$book_start = intval(str_replace(':','',$book_start));
							$book_end = intval(str_replace(':','',$book_end));
							$status = 'Pending';
							require_once('admin/includes/book_api.php');
							saveBookings($svc_id,$userid,
								$book_date,$book_start,$book_end,$status);
							alert('You have successfully book a service for '.$rows->service_name.'.');
						}
					}
				?>
				
			</div>
				<div class="col-md-3 single-bottom">
						<div class="store-right">
							<img width='268' height='179' src='<?php echo 'admin/'.$rows->image_url;?>'></img>
						</div>		
						
				</div>
				<div class="clearfix"> </div>
			</div>
		<?php
			}
			}
		?>
	</div>
	