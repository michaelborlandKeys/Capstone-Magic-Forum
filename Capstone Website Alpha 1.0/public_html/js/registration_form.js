function submitRegistration() {
    //var valid_id = $('#id').val();
    var valid_First_name = $('#firstName').val();
    var  valid_Last_name = $('#lastName').val();
    var valid_email = $('#email').val();
    var valid_phone = $('#phone').val();
    var valid_birthday= $('#birthday').val();
    var valid_form = true;

    // regexpressions
   // for future validation var regExpression_id = /^[0-9]{1,25}$/;
    var regExpression_F_Name = /^[A-Za-z  àèìòùÀÈÌÒÙáéíóúýÁÉÍÓÚÝâêîôûÂÊÎÔÛãñõÃÑÕäëïöüÿÄËÏÖÜŸçÇßØøÅåÆæœ]{2,15}$/;
    var regExpression_L_Name = /^[A-Za-z  àèìòùÀÈÌÒÙáéíóúýÁÉÍÓÚÝâêîôûÂÊÎÔÛãñõÃÑÕäëïöüÿÄËÏÖÜŸçÇßØøÅåÆæœ]{2,15}$/;
    var regExpression_Email = /^([0-9a-zA-Z]+[-._+&amp;])+[0-9a-zA-Z]+@([-0-9a-zA-Z]+[.])+[a-zA-Z]{2,6}$/;
    var regExpression_Phone = /^\d{3}[-]*\d{3}[-]*\d{4}$/ ;
    var regExpression_Birthday = /^\d{4}\-\d{2}\-\d{2}$/;

    // Create the regular expression


        if(regExpression_F_Name.test(valid_First_name))
        {
            console.log("vaild input");

        }
        else
        {

            valid_form = false;
            console.log("Invalid Input");


        }
        if(regExpression_L_Name.test(valid_Last_name))
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
            
            $('#firstName').val("");
            $('#lastName').val("");
            $('#email').val("");
            $('#phone').val("");
            $('#birthday').val("");

            
        }


}

 var registration_magic = $('#form_submit');
registration_magic.on("click",submitRegistration);