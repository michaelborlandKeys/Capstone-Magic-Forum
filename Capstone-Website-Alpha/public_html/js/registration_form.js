
/* This function is checking the user input on the user side for validity.
It will also, if i get it fully functioning with back-end, this will display messages,
 and style  information to the user depending on success or failure of the submitted form.*/  
 //currently the back end is displaying messages to the user, and i have not written the script to change style based on form state. 
 // once it has been fixed it will be more secure against a battery of possible intrusions. 
 // the fully functioning for will have both back-end and front end validation for security reasons, to better prevent injection attacks,
 // and potential cross site scripting. 
function submitRegistration() {
// Variables declared for getting the user information out of the form fields to validate and send over to the server-side, 
//and into the database. 
    var valid_ID = $('#id').val(); 
    var valid_First_name = $('#firstname').val();
    var valid_Last_name = $('#lastname').val();
    var valid_email = $('#email').val();
    var valid_Username = $('#username').val(); 
    var confirm_email= $('#confirmemail').val(); 
    var confirm_password = $('#confirmpassword').val(); 
    var valid_zipcode = $('#zipcode').val(); 
    var valid_phone = $('#phonenumber').val();
    var valid_state= $('#state').val(); 
    var valid_gender= $('input[name="sex"]:checked').val(); 
    var valid_goodForm= $('input[name="yes"]:checked').val(); 
    var valid_terms= $('input[name="termsofservice"]:checked').val(); 
    var valid_comment = $('#commentsorcomplaints').val(); 
    var valid_birthday= $('#birthday').val();
    var valid_country = $('#countries').val(); 
    var valid_city=$('#city').val(); 
    var valid_password=$('#newpassword').val();

    

// Boolean variables to set the form state depending on whether the user has entered valid, or invalid data. 
    var error = false;
    var valid_form = false;

    // Regular Expressions are used to test the validity of the form fields. 
    var regExpression_First_Name = /^[A-Za-z  àèìòùÀÈÌÒÙáéíóúýÁÉÍÓÚÝâêîôûÂÊÎÔÛãñõÃÑÕäëïöüÿÄËÏÖÜŸçÇßØøÅåÆæœ]{2,15}$/;
    var regExpression_Last_Name = /^[A-Za-z  àèìòùÀÈÌÒÙáéíóúýÁÉÍÓÚÝâêîôûÂÊÎÔÛãñõÃÑÕäëïöüÿÄËÏÖÜŸçÇßØøÅåÆæœ]{2,15}$/;
    var regExpression_Email = /^([0-9a-zA-Z]+[-._+&amp;])+[0-9a-zA-Z]+@([-0-9a-zA-Z]+[.])+[a-zA-Z]{2,6}$/;
    var regExpression_Birthday = /^\d{4}\-\d{2}\-\d{2}$/;
    var regexpression_Pass = /^([a-zA-Z0-9_\.-]{8,16})$/; 
    var regexpression_User = /^([a-zA-Z0-9_]{4,12})$/; 
    var regexpression_City = /^[A-Za-z\s-']{2,35}$/; 
    var regexpression_Zip = /^\d{5}$/; 
    var regExpression_Phone = /^\d{3}[-]*\d{3}[-]*\d{4}$/ ;
    var regexpression_Countries = /^[A-Za-z\s&-']{2,35}$/; 
    var regexpression_States = /^[A-Za-z\s.]{2,35}$/
    var regexpression_comment = /^[a-zA-ZàèìòùÀÈÌÒÙáéíóúýÁÉÍÓÚÝâêîôûÂÊÎÔÛãñõÃÑÕäëïöüÿÄËÏÖÜŸçÇßØøÅåÆæœ 0-9,!?$.]{0,2500}$/; 




    /* Logic on the front-end user side checks, if the user has entered
    valid, or invalid data in each input field.  */
    //The if is using the test method on the data the user has enter, and using the regular expression to test with.
    // This is the same across the majority of the program see comments below for changes in the logic structure.
         valid_form=true;
        if(regExpression_First_Name.test(valid_First_name))
        {
        

  
            console.log("Valid First Name");

        }
        else
        {
              

            console.log("Invalid First Name");


        }
        if(regExpression_Last_Name.test(valid_Last_name))
        {
            
            console.log("Valid Last Name");
            
        }
        else
        {
            
     
            console.log("Invalid Last Name");

        }

              if(regExpression_Birthday.test(valid_birthday))
        {
           

            console.log("Valid Birthday");
        }
        else
        {
         
            
            console.log("Invalid Birthday");

        }
/* The two input fields that are not the same, even though they look the same,
 how i have chosen to strictly, only take matching sets on both, and if it is empty it will fail as well. 
 If you forget to type in the confirm, i have strictly filtered and said its 
 invalid, even if it is truly valid based on regular expression. 
 My reason for this is on the registration for i want to make sure the match before i consider them valid. 
*/

        if(regExpression_Email.test(valid_email) && valid_email==confirm_email)
        {
            
            console.log("Valid Email");
        }

        else
        {
           // valid_form = false;
            console.log("Invalid Email");
        }
        if (confirm_email =="" || confirm_email != valid_email ) 
        {
            
            console.log("Email fields don't match please re-type."); 
        }
        else
        {
            console.log("Email fields Match"); 

        }

        if(regexpression_Pass.test(valid_password) && valid_password == confirm_password)
        {

            console.log("Valid Password");


        }
        else
        {
            
            console.log(" Invalid Password");

        }
        if( confirm_password=="" || confirm_password != valid_password)
        {
            console.log("Password Doesn't Match");
        }
        else
        {
            console.log("Password Matches");
        }
        if(regexpression_User.test(valid_Username))
        {
            console.log("Valid Username");
        }
        else
        {
            console.log("Invalid Username");
        }
        if(regexpression_City.test(valid_city))
        {
            console.log("Valid City");
        }
        else 
        {
            console.log("Invalid City");
        }
        if(regexpression_Zip.test(valid_zipcode))
        {
            console.log("Valid Zip Code");

        }
        else
        {
            console.log("Invalid Zip Code");

        }
            if(regExpression_Phone.test(valid_phone))
        {
           
            console.log("Valid Phone"); 
        }
        else
        {
          
            //valid_form = false;

            console.log("Invalid Phone");

        }
// I could validate state and country the same way, as the check box, but it would be really inefficient, and take a long time. 
// Regular Expression is the better way to validate in this case. 

        if(regexpression_Countries.test(valid_country))
        {
            console.log("Valid Country");

        }
        else
        {

            console.log("Invalid Country");

        }
        if(regexpression_States.test(valid_state))
        {
            console.log("Valid State");
        }
        else
        {
            console.log("Invalid State");
           
        }

// This validation check is different because it is checking for gender in a radio button form field, 
// and they are handled differently, when testing for valid, or invalid data.  
  
  // The check box field is validated in a similar manner as the radio button, i have to check for the value the button will send me. 

        if(valid_gender =="Male" || valid_gender=="Female" 
            || valid_gender =="Undecided" || valid_gender =="Other")  
        {
            console.log("Valid Gender");
        }
        else
        {
            console.log("Invalid Gender");

        }       
         if (valid_terms=="I Agree")
         {
            console.log("Agreed");

         }
         else
         {
            console.log("Disagreed");
            valid_form=false; 
         }
         // I have made some fields optional, so i have made a simple or to express the optional nature. 

        if(valid_goodForm =="Yes"|| valid_goodForm =="No")
        {
            console.log("Valid Opinion");
        }
        else
        {
            console.log("this is optional");
        }


        if(regexpression_comment.test(valid_comment) || valid_comment =="")
        {
            console.log("Valid Comment");
        }
        else
        {
            console.log("Invalid Comment");
        }


       if(valid_form == true){
     
            // Make sure it is true, and send it to the the server for processing. 
           
        console.log("form is valid")


       console.log("is form vaild")
                var url = "registration_form_process.php";
                var dataToServer = {id:valid_ID, firstName:valid_First_name,lastname:valid_Last_name,
                birthday : valid_birthday , email: valid_email, confirmemail: confirm_email, 
                newpassword:valid_password,confirmpassword:confirm_password,username:valid_Username,
                city:valid_city,zipcode:valid_zipcode,phonenumber:valid_phone,
                countries:valid_country,states:valid_state, sex:valid_gender,
                termsofservice:valid_terms,yes:valid_goodForm,commentsorcomplaints:valid_comment
                };
            $.post(url, dataToServer, function (dataFromServer) {
                console.log("Finished validating front end.");
            });


               
            
         
        }

        else
        {
            // Declare form false and when style for errors is implemented make sure it shows up here. Make sure to have the for refresh either, here or in Jquery in the HTML. 
            valid_form == false;
                  valid_country=$('#countries').val(valid_country);
                   valid_state=$('#states').val(valid_state); 


     
            
       }


}
// Button that the submitRegistration is attached to 

 var registration_magic = $('#form_submit');
registration_magic.on("click",submitRegistration);