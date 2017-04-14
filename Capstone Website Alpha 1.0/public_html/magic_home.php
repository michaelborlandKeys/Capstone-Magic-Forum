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

<?php include("../resources/magic_navigation.php");?>

<h1 class="changing_heading" id="default_heading">Welcome to Magic-Forum Home</h1>
<div id="magic_description">



 
</div>
<div class="post_section">
<?php include("display_posts.php"); ?>

</div>
<div class="description_section"> 
<button  class="btn" type="button"  id="description">View Site Description</button>
</div>
<?php include("posting_area.php");?>


<?php include("../resources/magic_footer.php");?>
<?php include("../resources/load_scripts.php");?>
</body>
</html>