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
var description_Button = $('#description');
description_Button.on("click", description);

function description_V_2(event)
{
	var appendString_V_2 = "Welcome to the discussion board for Pre-Pro Tour Qualifiers,come here to discuss what's  going on, talk with friends in an open forum setting. This sites goal is connect magic players, and build a geniune community,"+
	"New Players welcome on all pages, site moderation guidlines to be posted later. I want this to be a place where people can openly and constructively discuss all popular formats. giving players a place to come for advice on deck construction.";
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

var description_Button_V_2 = $('#description_Button_V_2');
description_Button_V_2.on("click",description_V_2);

function description_V_3(event)
{
	var appendString_V_3 = "Welcome to the discussion board for Tournament's home page,come here to discuss what's  going on, talk with friends in an open forum setting. This sites goal is connect magic players, and build a geniune community,"+
	"New Players welcome on all pages, site moderation guidlines to be posted later. I want this to be a place where people can openly and constructively discuss all popular formats. giving players a place to come for advice on deck construction.";
	if($("#TH_description").is(":hidden"))  {
 	 $("#TH_description").show();  
 	 	$("#TH_description").append("<p>"+appendString_V_3+"</p>");	
}
 	
  else {
  ($("#TH_description").is(":visible")) 
  	 $("#TH_description").hide();  
  	 	 $("#TH_description").empty(); 
  	 	  
}

}

var description_Button_V_3 = $('#description_Button_V_3');
description_Button_V_3.on("click",description_V_3);
function description_V_4(event)
{
	var appendString_V_4 = "Welcome to the discussion board for Regional Pro-Tour Qualifier page,come here to discuss what's  going on, talk with friends in an open forum setting. This sites goal is connect magic players, and build a geniune community,"+
	"New Players welcome on all pages, site moderation guidlines to be posted later. I want this to be a place where people can openly and constructively discuss all popular formats. giving players a place to come for advice on deck construction.";
	if($("#RPTQ_description").is(":hidden"))  {
 	 $("#RPTQ_description").show();  
 	 	$("#RPTQ_description").append("<p>"+appendString_V_4+"</p>");	
}
 	
  else {
  ($("#RPTQ_description").is(":visible")) 
  	 $("#RPTQ_description").hide();  
  	 	 $("#RPTQ_description").empty(); 
  	 	  
}

}

 var description_Button_V_4 = $('#description_Button_V_4');
description_Button_V_4.on("click",description_V_4);


// clickable buttons calling all the description load functions on each page. 


var description_Button_V_9 = $('#description_Button_V_9');
description_Button_V_9.on("click",description_Button_V_9);

var description_Button_V_8 = $('#description_Button_V_8');
description_Button_V_8.on("click",description_Button_V_8);

var description_Button_V_7 = $('#description_Button_V_7');
description_Button_V_7.on("click",description_Button_V_7);

 var description_Button_V_6 = $('#description_Button_V_6');
description_Button_V_6.on("click",description_Button_V_6);

 var description_Button_V_5 = $('#description_Button_V_5');
description_Button_V_4.on("click",description_Button_V_5);








