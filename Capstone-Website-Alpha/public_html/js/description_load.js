/*  
 
******** Adding this not 2 years down the road i realize now, after a couple more years of study and implementing my own projects. 
*This method site wide, is very time consuming and can be decreased in repetitiveness by creating a class.
* Now, most of JavaScript can be done without this, but this repetitiveness needs to disappear, because it is 250 lines of the same logic repeated with different paragraphs. 

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
	"New Players welcome on all pages, site moderation guidelines to be posted later. I want this to be a place where people can openly and constructively discuss all popular formats. giving players a place to come for advice on deck construction.";
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
	var appendString_V_3 = "Welcome to the discussion board for  Magic Tournament's home page,come here to discuss what's  going on, talk with friends in an open forum setting. This sites goal is connect magic players, and build a geniune community,"+
	"New Players welcome on all pages, site moderation guidelines to be posted later. I want this to be a place where people can openly and constructively discuss all popular formats. giving players a place to come for advice on deck construction.";
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
	"New Players welcome on all pages, site moderation guidelines to be posted later. I want this to be a place where people can openly and constructively discuss all popular formats. giving players a place to come for advice on deck construction.";
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

 var description_Button_V_4 = $('#description_V_4');
description_Button_V_4.on("click",description_V_4);


function description_V_5(event)
{
  var appendString_V_5 = "Welcome to the discussion board for Friday Night Magic,come here to discuss what's  going on, talk with friends in an open forum setting. This sites goal is connect magic players, and build a geniune community,"+
  "New Players welcome on all pages, site moderation guidelines to be posted later. I want this to be a place where people can openly and constructively discuss all popular formats. giving players a place to come for advice on deck construction.";
  if($("#FNM_description").is(":hidden"))  {
   $("#FNM_description").show();  
    $("#FNM_description").append("<p>"+appendString_V_5+"</p>"); 
}
  
  else {
  ($("#FNM_description").is(":visible")) 
     $("#FNM_description").hide();  
       $("#FNM_description").empty(); 
        
}

}
var description_Button_V_5 = $('#description_Button_V_5');
description_Button_V_5.on("click",description_V_5);


function description_V_6(event)
{
  var appendString_V_6 = "Welcome to the discussion board for The Commander Format,come here to discuss what's going on in the Commander world, talk with friends in an open forum setting. This sites goal is connect magic players, and build a geniune community,"+
  "New Players welcome on all pages, site moderation guidelines to be posted later. I want this to be a place where people can openly and constructively discuss all popular formats. giving players a place to come for advice on deck construction.";
  if($("#commander_description").is(":hidden"))  {
   $("#commander_description").show();  
    $("#commander_description").append("<p>"+appendString_V_6+"</p>"); 
}
  
  else {
  ($("#commander_description").is(":visible")) 
     $("#commander_description").hide();  
       $("#commander_description").empty(); 
        
}

}

 var description_Button_V_6 = $('#description_Button_V_6');
description_Button_V_6.on("click",description_V_6);
// clickable buttons calling all the description load functions on each page. 


function description_V_7(event)
{
  var appendString_V_7 = "Welcome to the discussion board for The Magic Pro-Tour,come here to discuss what's  going on, talk with friends in an open forum setting. This sites goal is connect magic players, and build a geniune community,"+
  "New Players welcome on all pages, site moderation guidelines to be posted later. I want this to be a place where people can openly and constructively discuss all popular formats. giving players a place to come for advice on deck construction.";
  if($("#PT_description").is(":hidden"))  {
   $("#PT_description").show();  
    $("#PT_description").append("<p>"+appendString_V_7+"</p>"); 
}
  
  else {
  ($("#PT_description").is(":visible")) 
     $("#PT_description").hide();  
       $("#PT_description").empty(); 
        
}

}
var description_Button_V_7 = $('#description_Button_V_7');
description_Button_V_7.on("click",description_V_7);

function description_V_8(event)
{
  var appendString_V_8 = "Welcome to the discussion board for the Standard format,come here to discuss what's  going on, talk with friends in an open forum setting. This sites goal is connect magic players, and build a geniune community,"+
  "New Players welcome on all pages, site moderation guidelines to be posted later. I want this to be a place where people can openly and constructively discuss all popular formats. giving players a place to come for advice on deck construction.";
  if($("#standard_description").is(":hidden"))  {
   $("#standard_description").show();  
    $("#standard_description").append("<p>"+appendString_V_8+"</p>"); 
}
  
  else {
  ($("#standard_description").is(":visible")) 
     $("#standard_description").hide();  
       $("#standard_description").empty(); 
        
}

}
var description_Button_V_8 = $('#description_Button_V_8');
description_Button_V_8.on("click",description_V_8);



function description_V_9(event)
{
  var appendString_V_9 = "Welcome to the discussion board for Modern magic players, to come here to discuss what's  going on, talk with friends in an open forum setting. This sites goal is connect magic players, and build a geniune community,"+
  "New Players welcome on all pages, site moderation guidlines to be posted later. I want this to be a place where people can openly and constructively discuss all popular formats. giving players a place to come for advice on deck construction.";
  if($("#modern_description").is(":hidden"))  {
   $("#modern_description").show();  
    $("#modern_description").append("<p>"+appendString_V_9+"</p>"); 
}
  
  else {
  ($("#modern_description").is(":visible")) 
     $("#modern_description").hide();  
       $("#modern_description").empty(); 
        
}

}

var description_Button_V_9 = $('#description_Button_V_9');
description_Button_V_9.on("click",description_V_9);

function description_V_10(event)
{
  var appendString_V_10 = "Welcome to the discussion board for Magic:The Gathering Online players, to come here to discuss what's going on, talk with friends in an open forum setting. This sites goal is connect magic players, and build a geniune community,"+
  "New Players welcome on all pages, site moderation guidlines to be posted later. I want this to be a place where people can openly and constructively discuss all popular formats. giving players a place to come for advice on deck construction.";
  if($("#MTGO_description").is(":hidden"))  {
   $("#MTGO_description").show();  
    $("#MTGO_description").append("<p>"+appendString_V_10+"</p>"); 
}
  
  else {
  ($("#MTGO_description").is(":visible")) 
     $("#MTGO_description").hide();  
       $("#MTGO_description").empty(); 
        
}

}

var description_Button_V_10 = $('#description_Button_V_10');
description_Button_V_10.on("click",description_V_10);

function description_V_11(event)
{
  var appendString_V_11 = "Welcome to the discussion board for Legacy format magic players to come here to discuss what's going on, talk with friends in an open forum setting. This sites goal is connect magic players, and build a geniune community,"+
  "New Players welcome on all pages, site moderation guidlines to be posted later. I want this to be a place where people can openly and constructively discuss all popular formats. giving players a place to come for advice on deck construction.";
  if($("#legacy_description").is(":hidden"))  {
   $("#legacy_description").show();  
    $("#legacy_description").append("<p>"+appendString_V_11+"</p>"); 
}
  
  else {
  ($("#legacy_description").is(":visible")) 
     $("#legacy_description").hide();  
       $("#legacy_description").empty(); 
        
}

}

var description_Button_V_11 = $('#description_Button_V_11');
description_Button_V_11.on("click",description_V_11);






 







