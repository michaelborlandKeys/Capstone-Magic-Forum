
 <h4 class="below_menu_container">Add Forum Post</h4>
 <button type="button" id="addPost" class=" btn SubmitPost" data-toggle="modal" data-target="#postingModal">Add Post to Forum</button>
 <div class="modal fade" id="postingModal" role="dialog"> 	
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
			 	 <h4 class="modal-title">Add Post To Forum</h4>
				 <button type="button" class="close" data-dismiss="modal" aria-label="Close">&times;</button>
				
			</div>
			<div class="form-group">
			 	<div class="modal-body">
					<form action="../insert_post_process.php" id="post" autocomplete="off" method="post" >

					<label class="label-control" for="username_field">Username</label>
					<input type="text" name="username_field" class="form-control" value="<?php if( isset($magic_form['username_field'])){echo htmlentities($magic_form['username_field']);
				}	?>" />	

					<label class="label-control " for="posting">Post</label><br />
				    <textarea  name="posting" class="form-control" rows="6" cols="40" placeholder="Gatherer, what do you want to talk about?"  ><?php if( isset($posting['posting'])){echo htmlentities($posting['posting']);
				}	?></textarea> 
					</form> 
				</div>
			</div>
				 <div class="modal-footer">
				<button type="button" class=" btn-group Errors" data-dismiss="modal">Close</button>
				<button type="button" class=" btn-group">Post</button>
				 </div>
				 	</div>
				 		</div>
				 			</div>
				 				<div>
				 					<h5 class="latest_posts" style="text-decoration: underline;">Latest Forum Posts</h5>
								</div>
								<?php include("insert_post_process.php") ?>


