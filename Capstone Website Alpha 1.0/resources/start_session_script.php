<?php 
session_start(); 
if(isset($_SESSION['messages'])) 
{
  $messages=$_SESSION['messages']; 
  $post=$_SESSION['post']; 
  unset($_SESSION['messages']); 
  unset($_SESSION['post']); 
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