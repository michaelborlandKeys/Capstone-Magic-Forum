	<form>
	<label for="posts">Comments: &lpar;optional&rpar;</label>
	<br />
    <textarea  name="posts" class="modal" id="posts" rows="6" cols="40" placeholder="Comments"  ><?php if( isset($magic_form['posts'])){echo htmlentities($magic_form['posts']);
}	?></textarea>
<input type="submit" name="post_dropdown" value="Post">
</form>