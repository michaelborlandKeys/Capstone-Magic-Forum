<?php
  session_start();
  ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>You have Registered</title>
	<link rel="stylesheet" href="style/general_styling.css">
	<link rel="stylesheet" type="text/css" href="style/navigation_bar.css">
	<link rel="stylesheet" type="text/css" href="style/footer.css">
	<link rel="shortcut icon" type="image/x-icon" href="images/package_games.png">

</head>
<body>
<?php include("../resources/navigation_menu.php");	?>

<h1>You Have Finished The Registration Process Valid Output Below</h1>

<?php 

if(isset($_SESSION['messages'])) {
$messages=$_SESSION['messages']; 
$magic_form=$_SESSION['magic_form']; 
unset($_SESSION['messages']); 
unset($_SESSION['magic_form']); 
}	




echo "Your Name is:"; 
echo $magic_form['firstname'];
echo " ";
echo $magic_form['lastname'];
echo "<br />";
echo "You were Born on:";
echo $magic_form['birthday'];
echo"<br />";
echo "Your email confirmed is:";
echo $magic_form['confirmemail']; 
echo"<br />"; 
echo "Your confirmed Password is:";
echo $magic_form['confirmpassword'];
echo "<br />";
echo"Your Username is:";
echo $magic_form['username'];
echo "<br />";
echo $magic_form['city']; 
echo ", ";
echo $magic_form['zipcode'];
echo "<br />";
echo $magic_form['countries']; 
echo "<br />";
echo "Your Phone Number is:";
echo $magic_form['phonenumber'];







?>

<p>You have finished the registration process, to start posting and reading user content <a href="user_list.php">click here</a>.</p>

	<?php include("../resources/footer_section.php");	?>
</body>
</html>