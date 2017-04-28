<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
	<title> JavaScript Documentation</title>	
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php include ("../resources/common_scripts_head.php");?>
</head>
<body>
	<?php include("../resources/magic_navigation.php");?>
	<h1> JavaScript Documentation</h1>
<caption>Resgistration_form.js</caption>


<img  class="below_menu_container" src="images/registration_js.png" alt="">

<caption>post_validation.js Non-Implemented</caption>
<pre class="below_menu_container">
	<code>
		function submitPosts()
{
	    var valid_post = $('#post').val(); 
		var regexpression_post = /^[A-Za-z àèìòùÀÈÌÒÙáéíóúýÁÉÍÓÚÝâêîôûÂÊÎÔÛãñõÃÑÕäëïöüÿÄËÏÖÜŸçÇßØøÅåÆæœ]{2,500}$/;
		var valid_form = false; 

		   if(regexpression_post.test(valid_post))
        {
    
  			valid_form=true; 
            console.log("Valid Post");

        }
        else
        {
              
        	valid_form=false; 
            console.log("Invalid Post");
        }

         if(valid_form == true){
     
            // make sure it is true, and send it to the back end 
           
        console.log("form is valid")
       console.log("is form vaild")
                var url = "insert_post_process.php";
                var dataToServer = {post:valid_post};
            $.post(url, dataToServer, function (dataFromServer) {
                console.log("Finished validating front end.");
            });
         
        }

        else
        {
            // Declare form false and when style for errors is implemented make sure it shows up here.And is cleared before they re-attempt form. 
            valid_form == false;
            
       }

}
 var post_magic = $('#post_to_site');
post_magic.on("click",submitPosts);



	</code>
</pre>




	<?php include("../resources/magic_footer.php");?>
	<?php include("../resources/load_scripts.php");?>
</body>
</html>
