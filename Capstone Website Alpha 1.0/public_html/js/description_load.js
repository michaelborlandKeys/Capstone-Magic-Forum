/*  

Basically, I combined part of 2 assignments from my CIS-320 class to achieve the functionality i wanted for this function,
 with 3 minor modifications to get the function below.
 The function attaches to a button, so every time this code is run a button is clicked.
 This JavaScript/ JQuery function takes the descriptions below and puts it in paragraph tags and 
 shows it to the user when the button is clicked. the same function also hides the texts and empties the paragraph, 
 so when its clicked again, only one description shows up not two copies of the same one. 
 There will be several iterations of this function, in this document, 
 just with different descriptions being called attached to different buttons on different pages.


*/
function description(event)
{
var appendString = "Welcome to the Magic Format Home Page,"+
				"here is where you will find the latest updates on the discussions of whats going on in all formats."
				+"The Home page with have top commented comments across all pages in this section, and any major site section,"
				+ "or game updates posted promptly."; 

  if($("#magic_description").is(":hidden"))  {
 	 $("#magic_description").show();  
 	 	$("#magic_description").append("<p>"+appendString+"</p>");	
}
 	
  else {
  ($("#magic_description").is(":visible")) 
  	 $("#magic_description").hide();  
  	 	 $("#magic_description").empty(); 
  	 	  
}

}

function description_V_2(event)
{
	var appendString_V_2 = "HI";

	if($("#PPTQ_description").is(":hidden"))  {
 	 $("#PPTQ_description").show();  
 	 	$("#PPTQ_description").append("<p>"+appendString_V_2+"</p>");	
}
 	
  else {
  ($("#PPTQ_description").is(":visible")) 
  	 $("#PPTQ_description").hide();  
  	 	 $("#PPTQ_description").empty(); 
  	 	  
}

}

var description_Button_V_2 = $('#description_V_2');
description_Button_V_2.on("click",description_V_2)

var description_Button = $('#description');
description_Button.on("click", description);
