<!DOCTYPE html>
<html lang="eng">
<head>
	<meta charset="utf-8">
	<title> Magic-Forum Log In </title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php include ("../resources/common_scripts_head.php");?>

</head>
<body>
<?php  include("../resources/start_session_script.php"); ?>
<a class="postButtonColor" href="magic_home.php">Back Home</a>


<div  style="position: relative;top:10px;left:550px;float: center;" class="below_menu_container" id="logIn">
<h1 style="color: white;text-decoration: underline;"> MagicFormOnline.com Log In</h1>

	<form   autocomplete="off"  method="post">
<table class="loginUserPass">
		<tr>
		<td><label for="loginusername"> Username: </label></td>
		<td><input type="text" id="magic_the_user" name="magic_the_user" placeholder="Username" value="<?php if( isset($magic_the_user['magic_the_user'])){echo htmlentities($form['magic_the_user']);

}?>"/></td></tr> 
		

		<tr>
		<td><label for="loginpassword"> Password: </label></td>
		<td><input type="password" id="magic_pass" name="magic_pass" placeholder="Password" value="<?php if( isset($loginform['magic_pass'])){echo htmlentities($form['magic_pass']);

}?>"/>   </td></tr>
			


<tr>
<td><input name="enterButton" id="enterButton"  type="submit" onclick="window.alert('This Log In Page has yet to be developed for submissions')"  value="Log In"  /></td>

</tr>	
</table>
</form>
</div>



<?php include("../resources/magic_footer.php");?>
<?php include("../resources/load_scripts.php");?>
</body>
</html>