
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
				<form action="magic_home_post_process.php"  autocomplete="off" method="post" >
					<label class="label-control " for="post">Post</label><br />
				    <textarea  name="post" class="form-control" id="post" rows="6" cols="40" placeholder="Gatherer, what do you want to talk about?"><?php if( isset($post['post'])){echo htmlentities($post['post']);}?></textarea> 
					<button type="button" class="btn-group" data-dismiss="modal">Close</button>
					<button type="submit" class="btn-group" id="post_to_site">Post</button>
				</form> 
				</div>
					</div>
						</div>
							</div>
								</div>
									

