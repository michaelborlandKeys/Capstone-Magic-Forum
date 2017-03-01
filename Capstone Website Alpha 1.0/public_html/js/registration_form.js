function submitRegistration() {
    //var valid_id = $('#id').val();
    var valid_First_name = $('#firstname').val();
    var  valid_Last_name = $('#lastName').val();
    var valid_email = $('#email').val();
    var valid_phone = $('#phone').val();
    var valid_birthday= $('#birthday').val();
    var valid_form = true;

    // regexpressions
   // for future validation var regExpression_id = /^[0-9]{1,25}$/;
    var regExpression_First_Name = /^[A-Za-z  àèìòùÀÈÌÒÙáéíóúýÁÉÍÓÚÝâêîôûÂÊÎÔÛãñõÃÑÕäëïöüÿÄËÏÖÜŸçÇßØøÅåÆæœ]{2,15}$/;
    var regExpression_Last_Name = /^[A-Za-z  àèìòùÀÈÌÒÙáéíóúýÁÉÍÓÚÝâêîôûÂÊÎÔÛãñõÃÑÕäëïöüÿÄËÏÖÜŸçÇßØøÅåÆæœ]{2,15}$/;
    var regExpression_Email = /^([0-9a-zA-Z]+[-._+&amp;])+[0-9a-zA-Z]+@([-0-9a-zA-Z]+[.])+[a-zA-Z]{2,6}$/;
    var regExpression_Birthday = /^\d{4}\-\d{2}\-\d{2}$/;
    var regexpression_Pass = /^([a-zA-Z0-9_\.-]{8,16})$/; 
    var regexpression_User = /^([a-zA-Z0-9_]{4,12})$/; 
    var regexpression_City = /^[A-Za-z\s-']{2,35}$/; 
    var regexpress_Zip = /^\d{5}$/; 
    var regExpression_Phone = /^\d{3}[-]*\d{3}[-]*\d{4}$/ ;
    var regexpression_Countries = /^[A-Za-z\s&-']{2,35}$/; 
    var regexpression_States = /^[A-Za-z\s.]{2,35}$/




    // Create the regular expression


        if(regExpression_First_Name.test(valid_First_name))
        {
            console.log("vaild input");

        }
        else
        {

            valid_form = false;
            console.log("Invalid Input");


        }
        if(regExpression_Last_Name.test(valid_Last_name))
        {
            
            console.log("vaild input");
        }
        else
        {
            
            valid_form = false;
            console.log("invaild input");

        }
        if(regExpression_Email.test(valid_email))
        {
            
            console.log("vaild input");
        }
        else
        {
            
            valid_form = false;
            console.log("invaild input");

        }
        if(regExpression_Phone.test(valid_phone))
        {
           
            console.log("vaild input");
        }
        else
        {
          
            valid_form = false;

            console.log("invaild input");

        }
        if(regExpression_Birthday.test(valid_birthday))
        {
           ;

            console.log("vaild input");
        }
        else
        {
         
            valid_form = false;
            console.log("invaild input");

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
            $('#phone').val("");
            $('#birthday').val("");

            
        }


}

 var registration_magic = $('#form_submit');
registration_magic.on("click",submitRegistration);