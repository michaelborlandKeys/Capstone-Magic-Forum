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