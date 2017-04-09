<div class="post_comments">
		<form action="post_proceesing.php" class="below_menu_container" autocomplete="off" method="post" >

		<label for="username_field">Username</label>
		<input type="text" name="username_field" value="<?php if( isset($magic_form['username_field'])){echo htmlentities($magic_form['username_field']);
	}	?>" />	
	<br />
		<label for="posting">Post</label>
		<br />
	    <textarea  name="posting" id="posting" rows="6" cols="40" placeholder="Gatherer, what do you want to talk about?"  ><?php if( isset($magic_form['posting'])){echo htmlentities($magic_form['posting']);
	}	?></textarea>
	    <br />
	<input type="submit" name="post_dropdown" value="Post">
	</form>
</div>