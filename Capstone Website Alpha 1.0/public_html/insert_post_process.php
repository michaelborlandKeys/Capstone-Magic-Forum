<!DOCTYPE html>
 
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <title>Posting Process File</title>
</head>
 
<body>

  <?php
  session_start(); 
    $error=FALSE; 
	$posts=$_REQUEST['posts'];
	


	if(empty($_REQUEST['id'])) {
    $posting['id']="";
} else {
    
     $posting['id'] = $_REQUEST['id'];
   
    if (!preg_match("/^[0-9]{1,25}$/", $posting['id'])) {
        
        $error=TRUE;
     
        $messages['id']="Error, can't Alter that record.</p>";
    }
}   




    $posts = $_REQUEST['posts'];
        $posting['posts']=$posts; 
    if (!preg_match("/^[A-Za-z àèìòùÀÈÌÒÙáéíóúýÁÉÍÓÚÝâêîôûÂÊÎÔÛãñõÃÑÕäëïöüÿÄËÏÖÜŸçÇßØøÅåÆæœ \s]*[,!?.]{2,255}$/", $posts)) {
        
        $error=TRUE;
       
        $messages['posts']="Error,You exceeded character amount, or it is too short."; 

    } else{
        $_SESSION['posts']=$posts; 

    }

	 
	 
     if($error==FALSE) {
        /* Set up the database connection */
        include ("../resources/db_setup.php");
     
     $connection_to_database_2 = mysqli_connect($server, $username, $password, $database) or die("Cannot Connect to the User database!");
     
        /* Escape the string to prevent SQL injection */

         $id_safe_2 = mysqli_escape_string($connection_to_database_2,$posting['id']); 
        $post_safe = mysqli_escape_string($connection_to_database_2,$posting['posts']);
	 
	  
	  
        if($id_safe_2==""){


     
        /* Construct the SQL statement */
        $posting_query="insert index_posts (Comments) values ('$post_safe')"; 

    }else {

    $posting_query="update index_posts set Comments='$post_safe'";

}

mysqli_query($connection_to_database_2, $posting_query) or die("Insert query didn't excute!");
        mysqli_close($connection_to_database_2);


    
    
 
    header("Location: index.php"); 

 }else{      
$_SESSION['messages']=$messages; 
$_SESSION['posting']=$posts;

header("Location: index.php");
 }

    ?>


  ?> 

  <br/>

</body>
</html>