<!DOCTYPE html>
<html lang="eng">
<head>
	<meta charset="UTF-8">
	<title>Magic Forum Home</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php include ("../resources/common_scripts_head.php");?>
</head>
<body>


  <?php

    session_start(); 
    $error=FALSE;

/*
  This is the hidden field check for when the log in management system gets 
  implemented, so each person can delete only their individual  posts and edit their posts only. 
  It is a big security flaw to allow users to edit others posts or delete them. 
  This will need so modification to not be as broad of a delete, or edit.
   Because this can edit any post, or delete any user parameter that has an $id set.

  $id=$_REQUEST['id'];
  


  if(empty($_REQUEST['id'])) {
    $id['id']="";
} else {
    
     $id = $_REQUEST['id'];
   
    if (!preg_match("/^[0-9]{1,25}$/", $id)) {
        
        $error=TRUE;
     
        $messages['id']="Error, can't Alter that record.</p>";
    }


} */  

     $post=$_REQUEST['post']; 
if(empty($_REQUEST['post']))
  {
    $error = TRUE;
    $messages['post']="Error, post can't be empty! ";  	  



  }  else  {

    
     $post=$_REQUEST['post']; 
   if  (!preg_match("/^[a-zA-ZàèìòùÀÈÌÒÙáéíóúýÁÉÍÓÚÝâêîôûÂÊÎÔÛãñõÃÑÕäëïöüÿÄËÏÖÜŸçÇßØøÅåÆæœ 0-9,!?$.]{2,2500}$/", $post)) {
        
        $error=TRUE;
       
        $messages['post']="Error,You exceeded character amount, or typed invalid character"; 

    } else{
        $_SESSION['post']=$post; 
 
    }
	}
	 

     if($error==FALSE) 
     {
        
        include ("../resources/db_setup.php");
     
     $connection_to_database_2 = mysqli_connect($server, $username, $password, $database) or die("Cannot Connect to the User database!");
     
    
        $post_safe = mysqli_escape_string($connection_to_database_2,$post);
	
        $post_query="INSERT INTO capstone_commander_posts (user_commander_post) VALUES ('$post_safe')"; 

              header("Location: commander_forum.php");


} else{
  $error=TRUE; 
  $_SESSION['messages']=$messages; 
  $_SESSION['post']=$post;
    header("Location: commander_forum.php");

 }
  
           mysqli_query($connection_to_database_2, $post_query) or die("Insert query didn't excute! $post_query");
        mysqli_close($connection_to_database_2);




    ?>


<?php include("../resources/magic_footer.php");?>
<?php include("../resources/load_scripts.php");?>
</body>
</html>