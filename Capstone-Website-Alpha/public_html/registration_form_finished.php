
<?php session_start(); 
if(isset($_SESSION['messages']))
 {
	$messages=$_SESSION['messages']; 
	$magic_form=$_SESSION['magic_form'];  
	unset($_SESSION['messages']); 
	unset($_SESSION['magic_form']); 
 }	

?>	

<?php

 if(!empty($messages)) 
 {
      foreach ($messages as $message) 
      {
          echo "<p class=Errors Success>$message</p>" ; 

      }
  }
  
  ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>You have Registered</title>
	<?php include ("../resources/common_scripts_head.php");?>
</head>
<body>
<!--page you are redirected to if you have successfully completed the for, and will be a member dependant page, what level of member you are. -->
<h1>You have finished the registration process, start exploring now that you're registered</h1>
<a href="magic_home.php">Go To the Home Page</a>

	<?php 
	$magic_form=$_SESSION['magic_form'];  
	$messages=$_SESSION['messages']; 
	




		?>


	<?php include("../resources/magic_footer.php");	?>
</body>
</html>