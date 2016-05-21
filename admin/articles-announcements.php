<?php

?>
<style>
table {
    border: 1px solid black;
    width: 100%;
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
					Articles and Announcements <small>Maintenance</small>
					</h1>
					<div class="article">
						<h3>Featured Article</h3><br>					
						<label>Article image</label><br>			
							<div style="background-image:url('assets/img/aromatherapy.jpg')" class="article-image"></div>
							<div style="position:relative;margin-top:20px;">
								<form enctype="multipart/form-data" action="upload.php" method="POST">
									<input type="hidden" name="MAX_FILE_SIZE" value="512000" />
									<input name="userfile" type="file" />
									<input type="submit" value="Upload" />
								</form>
							</div><br>					
						<label>Article text</label><br>					
						<textarea style="position:relative" rows="4" cols="100">some text here..</textarea>
					</div>
					
					<div class="announcements">
						<h3>Announcements</h3><br>
						<table>
							<tr>
								<th width='20%'>Date posted</th>
								<th width='60%'>Details</th>
								<th width='20%'>Actions</th>
							<tr>
							<tr>
								<td>asd</td>
								<td>sdf</td>
								<td><input type='button' id='btnEdit' value='Edit'/><input type='button' id='btnDelete' value='Delete'/></td>
							</tr>
						</table>
					</div><br>
					<input type='submit' name='save' value='Save changes'/>
				</form>
			</div>
		</div> 
		<footer><p>All right reserved. Pasithea 2016</p></footer>
	</div>
