function submitRegistration() {
    //Fetching all field values to check for front-end user correctness.

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
    var valid_confirm_passward= $('#confirmpassword').val();


    var error = false;  
    var valid_form = false;

    // regular expressions to validate the forum 
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
    var regexpression_comment = /^.{0,255}$/; 




    /* Logic on the front end User side that checks for if the user has entered
    Valid, or invalid data in each input field.  */

        if(regExpression_First_Name.test(valid_First_name))
        {
            console.log("Valid First Name");

        }
        else
        {

            valid_form = false; 
            console.log("Invalid First Name");


        }
        if(regExpression_Last_Name.test(valid_Last_name))
        {
            
            console.log("Valid Last Name");
        }
        else
        {
            
            //valid_form = false;
            console.log("Invalid Last Name");

        }

              if(regExpression_Birthday.test(valid_birthday))
        {
           

            console.log("Valid Birthday");
        }
        else
        {
         
            //valid_form = false;
            console.log("Invalid Birthday");

        }

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
         }

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
            // call new  servlet here
           
       $('#form_register').submit(); 
               
            
         
        }

        else
        {
            valid_form == false;
            
            $('#firstname').val("");
            $('#lastname').val("");
            $('#email').val("");
            $('#confirmemail').val(""); 
            $('#newpassword').val(""); 
            $('#confirmpassword').val(""); 
            $('#city').val(""); 
            $('#zipcode').val("");
            $('#countries').val("");
            $('#username').val(""); 
            $('#state').val("");
            $('#gender').val("");
            $('#acceptDecline').val("");
            $('#goodmagic_form').val("");
            $('#commentsorcomplaints').val(""); 
            $('#phonenumber').val("");
            $('#birthday').val(""); 

            
       }


}

 var registration_magic = $('#form_submit');
registration_magic.on("click",submitRegistration);