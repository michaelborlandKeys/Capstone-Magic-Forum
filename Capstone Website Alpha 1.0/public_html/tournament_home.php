<!DOCTYPE html>
<html lang="eng">
<head>
	<meta charset="UTF-8">
	<title>Tournament Home </title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php include ("../resources/common_scripts_head.php");?>

</head>
<body>
<?php  include("../resources/start_session_script.php"); ?>
<?php include("../resources/magic_navigation.php");?>
<h1 class="changing_heading" id="default_heading">Welcome to Magic-Forum Tournament Home </h1>
<div id="TH_description">
</div>


	<div class="description_section"> 

		<button  class="btn" type="button"  id="description_Button_V_3">View Site Description</button> 

	</div>
					<?php include("posting_area.php");?>
<?php include("../resources/magic_footer.php");?>
<?php include("../resources/load_scripts.php");?>
</body>
</html>