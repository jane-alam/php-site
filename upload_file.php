<?php include('header.php'); ?>
<?php include('connect.php'); ?>
		<div id="contactWrap">
		<div class="overlay">
			<div class="container">
				<div class="row">
						<div class="col-xs-12">
						<h2 class="sectionTitle">Upload Download File</h2>
					</div>
				</div>
				
				<form name="upload_content" action="/upload_file_action/" method="post" enctype="multipart/form-data">
				
					<div class="row">
						<div class="col-12 col-lg-8 col-lg-offset-2">

						<div class="panel">
						<div class="panel-body">

							<div class="form-group">
							<label>Enter Title</label>
							<input type="text" name="title" id="title" class="form-control" autocomplete="off" />
							
							 </div>
							 <div class="form-group">
							<label>Enter Description</label>
							<textarea name="desc" id="desc" class="form-control"> </textarea>
							
							 </div>
							
							  <div class="form-group">
							<label>Enter Image</label>
								<input type="file" name="image_file" class="form-control" autocomplete="off"/>
							
							  </div>
							  
							  
							  <input type="submit" name="Submit" class="btn btn-success" value="Submit">
						
						</div>
						</div>
				</div>
					</div>
				</form>
			</div>
		</div>
	</div> <!-- /contactWrap -->

<?php include('footer.php'); ?>