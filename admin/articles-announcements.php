<?php

?>
	<div id="page-inner">
		<div class="row">
			<div class="col-md-12">
				<h1 class="page-header">
				Articles and Announcements <small>Maintenance.</small>
				</h1>
				<div class="article">
					<h3>Featured Article</h3><br>					
					<label>Article image</label><br>			
						<div style="background-image:url('assets/img/aromatherapy.jpg')" class="article-image"></div>
						<div style="position:relative;margin-top:20px;"><form enctype="multipart/form-data" action="upload.php" method="POST">
								<input type="hidden" name="MAX_FILE_SIZE" value="512000" />
								<input name="userfile" type="file" />
								<input type="submit" value="Upload" />
							</form>
						</div><br>					
					<label>Article text</label><br>					
					<textarea style="position:relative" rows="4" cols="100">some text here..</textarea>
				</div>
				
				<div class="announcements">
					<h3>Announcements</h3>
					<table>
						<t
					</table>
				</div>
			</div>
		</div> 
		<footer><p>All right reserved. Pasithea 2016</p></footer>
	</div>
