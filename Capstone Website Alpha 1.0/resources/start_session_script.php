<?php 
session_start(); 
if(isset($_SESSION['messages'])) 
{
	$messages=$_SESSION['messages']; 
	$posting=$_SESSION['posting']; 
	unset($_SESSION['messages']); 
	unset($_SESSION['posting']); 
}	
?>	
<?php

 if(!empty($messages))
  {
      foreach ($messages as $message) 
      {
          echo "<p class=Errors>$message</p>" ; 

      }
  }
  ?>