<!DOCTYPE html>
<html lang="eng">
<head>
	<meta charset="UTF-8">
	<title>Tournament Home </title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php include ("../resources/common_scripts_head.php");?>

</head>
<body>
<?php  include("../resources/start_session_script.php"); ?>
<?php include("../resources/magic_navigation.php");?>
<h1 class="changing_heading" id="default_heading">Welcome to Magic-Forum Tournament Home </h1>
<div id="TH_description">
</div>

	
	<div class="description_section"> 

		<button  class="btn btn-lg" type="button"  id="description_Button_V_3">View Site Description</button> 

	</div>
		<h4 class="below_menu_container addPosthead">Add Forum Post</h4>
		<button type="button" id="addPost" class="btn btn-lg SubmitPost" data-toggle="modal" data-target="#postingModal">Add Post to Forum</button>
		<div class="modal fade" id="postingModal" role="dialog"> 	
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header">
				 	 <h4 class="modal-title">Add Post To Forum</h4>
					 <button type="button" class="close" data-dismiss="modal" aria-label="Close">&times;</button>
				</div>
				<div class="form-group">
				 	<div class="modal-body">
					<form action="tournament_post_process.php"  autocomplete="off" method="post" >
						<label class="label-control " for="post">Post</label><br />
					    <textarea  name="post" class="form-control" id="post" rows="6" cols="40" placeholder="Gatherer, what do you want to talk about?"><?php if( isset($post['post'])){echo htmlentities($post['post']);}?></textarea> 
						<button type="button" class="btn btn-group closeButtonColor" data-dismiss="modal">Close</button>
						<button type="submit" class="btn btn-group postButtonColor" id="post_to_site">Post</button>
					</form> 
					</div>
						</div>
							</div>
								</div>
									</div>
										<div class="post_section">
											<div class="latest_posts">
												<h5  style="text-decoration: underline;">Latest Forum Posts</h5>
												<?php include("../resources/display_posts_tournament.php"); ?>

												</div>
													</div>

<?php include("../resources/magic_footer.php");?>
<?php include("../resources/load_scripts.php");?>
</body>
</html>