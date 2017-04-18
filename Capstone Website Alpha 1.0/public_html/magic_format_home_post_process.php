<!DOCTYPE html>
 
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <title>post Process File</title>
</head>
 
<body>


  <?php

    session_start(); 
    $error=FALSE;
     $post=$_REQUEST['post']; 


if(empty($_REQUEST['post']))
  {
    $error = TRUE;
    $messages['post']="Error, post can't be empty! ";  	  

  }  else  {

    
     $post=$_REQUEST['post']; 
   if  (!preg_match("/^[A-Za-z àèìòùÀÈÌÒÙáéíóúýÁÉÍÓÚÝâêîôûÂÊÎÔÛãñõÃÑÕäëïöüÿÄËÏÖÜŸçÇßØøÅåÆæœ]{2,500}$/", $post)) {
        
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
	
        $post_query="INSERT capstone_posts (user_post) VALUES ('$post_safe')"; 

              header("Location: magic_home.php");


} else{
  $error=TRUE; 
  $_SESSION['messages']=$messages; 
  $_SESSION['post']=$post;
    header("Location: magic_home.php");

 }
  
           mysqli_query($connection_to_database_2, $post_query) or die("Insert query didn't excute! $post_query");
        mysqli_close($connection_to_database_2);




    ?>

</body>
</html>