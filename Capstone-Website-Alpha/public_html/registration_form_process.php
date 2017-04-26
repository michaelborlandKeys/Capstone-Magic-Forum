
<!DOCTYPE html>
 
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <title>Test Print magic_magic_form to screen</title>

</head>
 
<body>


<?php
 session_start(); 

    $error=FALSE;

// field request variables 

    $firstname=$_REQUEST['firstname'];
    $lastname=$_REQUEST['lastname'];
    $birthday=$_REQUEST['birthday'];
    $email=$_REQUEST['email'];
    $confirmemail=$_REQUEST['confirmemail'];
    $newpassword=$_REQUEST['newpassword']; 
    $confirmpassword=$_REQUEST['confirmpassword']; 
    $username=$_REQUEST['username'];
    $city=$_REQUEST['city'];
    $zipcode=$_REQUEST['zipcode'];
    $phonenumber=$_REQUEST['phonenumber'];
    $countries=$_REQUEST['countries'];
    $sex=$_REQUEST['sex'];
    $termsofservice=$_REQUEST['termsofservice'];
    $yes=$_REQUEST['yes']; 
    $commentsorcomplaints=$_REQUEST['commentsorcomplaints'];

  // Validation logic for the back end using preg_match, and sending messages t the user if there is an error. 
  // Using regular expression to validate back end, need to come up with stricter ones in the future. 
 if(empty($_REQUEST['id'])) {
    $magic_form['id']="";
} else {
    
     $magic_form['id'] = $_REQUEST['id'];
   
    if (!preg_match("/^[0-9]{1,25}$/", $_REQUEST['id'])) {
        
        $error=TRUE;
     
        $messages['id']="Error, can't Alter that record.";
    }
}   


if(empty($_REQUEST['firstname'])) {
    
    $error=TRUE;
    
    $messages['firstname']="Error,  First Name can't be empty "; 
} else {
    
    $firstname = $_REQUEST['firstname'];
    $magic_form['firstname']=$firstname; 

    if (!preg_match("/^[A-Za-z  àèìòùÀÈÌÒÙáéíóúýÁÉÍÓÚÝâêîôûÂÊÎÔÛãñõÃÑÕäëïöüÿÄËÏÖÜŸçÇßØøÅåÆæœ]{2,20}$/", $firstname)) {
    
        $error=TRUE;
  
        $messages['firstname']="Error, please retype First Name"; 
         
    } else
    {

       $_SESSION['firstname']=$firstname;  

    }
}
  

if(empty($_REQUEST['lastname'])) {

    $error=TRUE;
    
    $messages['lastname']="Error, Last Name field can't be empty ";
} else {
   
    $lastname = $_REQUEST['lastname'];
    $magic_form['lastname']=$lastname; 

    if (!preg_match("/^[A-Za-z  àèìòùÀÈÌÒÙáéíóúýÁÉÍÓÚÝâêîôûÂÊÎÔÛãñõÃÑÕäëïöüÿÄËÏÖÜŸçÇßØøÅåÆæœ]{2,20}$/", $lastname)) {
       
        $error=TRUE;
      
        $messages['lastname']="Error,please retype Last Name"; 

    } else 
    {
          $_SESSION['lastname']=$lastname;  

    }
}


if(empty($_REQUEST['birthday'])) {

    $error=TRUE;
   
    $messages['birthday']="Error,Birthday Field can't be empty";
}
 else {
 
    $birthday = $_REQUEST['birthday'];
    $magic_form['birthday']=$birthday; 
    
    if (!preg_match("/^\d{4}\-\d{2}\-\d{2}$/", $birthday)) {
     
        $error=TRUE;
        
        $messages['birthday']="Error, please re-enter a Valid Date"; 

    }else {

       

        $_SESSION['birthday']=$birthday; 


    }

}

if(empty($_REQUEST['email'])) {
   
    $error=TRUE;

    $messages['email']="Error, Email Address can't be empty";
} else {
 
    $email = $_REQUEST['email'];
      $magic_form['email']=$email; 
    

 
    if (!preg_match("/^([0-9a-zA-Z]+[-._+&amp;])*[0-9a-zA-Z]+@([-0-9a-zA-Z]+[.])+[a-zA-Z]{2,6}$/", $email)) {
     
        $error=TRUE;
     
        $messages['email']="Error, invalid Email Address please type in a valid one.";
         
    } else {
      $_SESSION['email']=$email; 


    }
}

 if(empty($_REQUEST['confirmemail'])) {
    
    $error=TRUE;
    
    $messages['confirmemail']="Error, Confirm Email can't be empty";
} else {
   
    $confirmemail = $_REQUEST['confirmemail'];
    $magic_form['confirmemail']=$confirmemail;

   
    if ($confirmemail!=$email) {

           $error=TRUE;
        

        $messages['confirmemail']="Error, Email Addresses don't match please make sure both fields match.";
  
     
         
    }else{
        $_SESSION['confirmemail']=$confirmemail;

    }

}


if(empty($_REQUEST['newpassword'])) {
    
    $error=TRUE;
  
    $messages['newpassword']="Error, Password field can't be empty";
} else {
   
    $newpassword = $_REQUEST['newpassword'];
    $magic_form['newpassword']=$newpassword; 
   
    if (!preg_match("/^([a-zA-Z0-9_\.-]{8,16})$/", $newpassword)) {
      
        $error=TRUE;
           
        $messages[' newpassword']="Error, Invalid Password Please Retype"; 
         
    }else{
        $_SESSION['newpassword']=$newpassword;

    }

}

if(empty($_REQUEST['confirmpassword'])) {
    
    $error=TRUE;
    
    $messages["confirmpassword"]="Error, confirm password can't be empty";
} else {
    
    $confirmpassword = $_REQUEST['confirmpassword'];
    $magic_form['confirmpassword']=$confirmpassword; 
      

     if($confirmpassword!=$newpassword){


        $error=TRUE; 

     $messages['confirmpassword']="Error,  Passwords Don't Match Please Retype"; 

 
      
        
    } else{
        $_SESSION['confirmpassword']=$confirmpassword;
    }

}




if(empty($_REQUEST['username'])) {
    
    $error=TRUE;
    
    $messages['username']="Error, Username field can't be empty";
} else {
    
    $username = $_REQUEST['username'];
    $magic_form['username']=$username;
    
  if (!preg_match("/^([a-zA-Z0-9_]{4,12})$/", $username)){
     
        $error=TRUE;
            
        $messages['username']="Error, Invalid Username Please Retype"; 
     

    }else{
        $_SESSION['username']=$username;

    }


}

    if(empty($_REQUEST['city'])) {
    
    $error=TRUE;
    
    $messages['city']="Error, City field can't be empty";
} else {
    
    $city= $_REQUEST['city'];
    $magic_form['city']=$city; 

    if (!preg_match("/^[A-Za-z\s-']{2,35}$/",$city )) {
    
        $error=TRUE;
  
        $messages['city']="Error, Invalid City  Please Retype";
         

    }else{
        $_SESSION['city']=$city; 
    }
}



 if(empty($_REQUEST['zipcode'])) {
    
    $error=TRUE;
    
    $messages['zipcode']="Error, Zip Code field can't be empty";
} else {
    
    $zipcode= $_REQUEST['zipcode'];
    $magic_form['zipcode']=$zipcode; 

    if (!preg_match("/^\d{5}$/",$zipcode )) {
    
        $error=TRUE;
  
        $messages['zipcode']="Error, Bad Zip Code  Please Retype"; 
         
    } else{

        $_SESSION['zipcode']=$zipcode; 
    }
}



 if(empty($_REQUEST['phonenumber'])) {
    
    $error=TRUE;
    
    $messages['phonenumber']="Error, Phone Number can't be empty";
} else {
    
    $phonenumber= $_REQUEST['phonenumber'];
    $magic_form['phonenumber']=$phonenumber; 

    if (!preg_match("/^\d{3}\-\d{3}\-\d{4}$/",$phonenumber )) {
    
        $error=TRUE;
  
        $messages['phonenumber']="Error, Bad Phone Number Please Retype"; 
         
    }else{
        $_SESSION['phonenumber']=$phonenumber;
    }
}



if(empty($_REQUEST['countries'])) {
    
    $error=TRUE;
    
    $messages['countries']="Error, Country field can't be empty";
} else {
    
    $countries= $_REQUEST['countries'];
    $magic_form['countries']=$countries; 

    if (!preg_match("/^[A-Za-z\s&-']{2,35}$/",$countries )) {
    
        $error=TRUE;
  
        $messages['countries']="Error,Invalid Country Please Re-Enter";
         
    } else{
        $_SESSION['countries']=$countries; 
    }
}
if(empty($_REQUEST['states'])) {
    
    $error=TRUE;
    
    $messages['states']="Error, State Field can't be empty";
} else {
    
    $states= $_REQUEST['states'];
    $magic_form['states']=$states; 

    if (!preg_match("/^[A-Za-z\s-']{2,35}$/",$states )) {
    
        $error=TRUE;
  
        $messages['states']="Error,Invalid State Please Re-Enter";
         
    } else{
        $_SESSION['states']=$states; 
    }
}


if(empty($_REQUEST['sex'])) {
    
    $error=TRUE;
    
    $messages['sex']="Error, Gender radio can't be blank";
} else {
    
    $sex= $_REQUEST['sex'];
    $magic_form['sex']=$sex; 

    if (!($sex=="Male" or $sex=="Female" or $sex=="Undecided" or $sex=="Other") ) {
    
        $error=TRUE;
  
        $messages['sex']="Error,Invalid Gender";
         
    } else{
        $_SESSION['sex']=$sex; 
    }
}



if(empty($_REQUEST['termsofservice'])) {
    
    $error=TRUE;
    
    $messages['termsofservice']="Error, Must Agree To Continue";
}else {
    
    $termsofservice= $_REQUEST['termsofservice'];
    $magic_form['termsofservice']=$termsofservice;

    if(!($termsofservice=="I Agree")){

        $error=TRUE; 
    $messages['termsofservice']="Error, Must Agree To Continue";

     } else{
        $_SESSION['termsofservice']=$termsofservice; 

     }
   } 


if(empty($_REQUEST['yes'])) {
    
    $error=TRUE;
    
    $messages['yes']="I, want to know if I need to change the registration process.<br /> Thanks for your patientce.";
}else {
    
    $yes= $_REQUEST['yes'];
    $magic_form['yes']=$yes; 

    if($yes=="Yes"  or
     $yes=="No"){

            } else{
                $_SESSION['yes']=$yes; 
            }
        }
   
     $magic_form['commentsorcomplaints']=$commentsorcomplaints; 
    if (!preg_match("/^[a-zA-ZàèìòùÀÈÌÒÙáéíóúýÁÉÍÓÚÝâêîôûÂÊÎÔÛãñõÃÑÕäëïöüÿÄËÏÖÜŸçÇßØøÅåÆæœ 0-9,!?$.]{0,2500}$/", $commentsorcomplaints)) {
        
        $error=TRUE;
       
        $messages['commentsorcomplaints']="Error,You exceeded character amount."; 

    } else{     

        
        $_SESSION['commentsorcomplaints']=$commentsorcomplaints; 

    }

    //http://phpcodechecker.com/



      

          if($error==FALSE) {


include("../resources/db_setup.php"); 

  
 $connection_to_database =mysqli_connect($server,$username,$password,$database);

// function caqlled to prevent sql injection

         $id_safe = mysqli_escape_string($connection_to_database,$magic_form['id']); 
        $firstname_safe = mysqli_escape_string($connection_to_database,$magic_form['firstname']);
        $lastname_safe = mysqli_escape_string($connection_to_database,$magic_form['lastname']);
        $birthday_safe = mysqli_escape_string($connection_to_database,$magic_form['birthday']);
        $email_safe = mysqli_escape_string($connection_to_database,$magic_form['email']);
        $confirmemail_safe = mysqli_escape_string($connection_to_database,$magic_form['confirmemail']);
        $newpassword_safe = mysqli_escape_string($connection_to_database,$magic_form['newpassword']);
        $confirmpassword_safe = mysqli_escape_string($connection_to_database,$magic_form['confirmpassword']);
        $username_safe = mysqli_escape_string($connection_to_database,$magic_form['username']);
        $city_safe = mysqli_escape_string($connection_to_database,$magic_form['city']);
        $zipcode_safe = mysqli_escape_string($connection_to_database,$magic_form['zipcode']);
        $phonenumber_safe = mysqli_escape_string($connection_to_database,$magic_form['phonenumber']);
        $countries_safe = mysqli_escape_string($connection_to_database,$magic_form['countries']);
         $state_safe = mysqli_escape_string($connection_to_database,$magic_form['states']);
        $sex_safe = mysqli_escape_string($connection_to_database,$magic_form['sex']);
        $termsofservice_safe = mysqli_escape_string($connection_to_database,$magic_form['termsofservice']);
        $yes_safe = mysqli_escape_string($connection_to_database,$magic_form['yes']);
        $commentsorcomplaints_safe = mysqli_escape_string($connection_to_database,$magic_form['commentsorcomplaints']);
       
        if($id_safe==""){

// queries to insert and alter  user records 

        
        $first_register_query="INSERT INTO capstone_user_register_info (
   user_first_name,user_last_name,user_birthday,user_new_email,user_confirm_email,user_new_pass , user_confirm_pass , user_username , user_city,user_zip,user_phone,user_country,user_state ,user_gender,user_terms,user_complete, user_comments)  VALUES ('$firstname_safe','$lastname_safe','$birthday_safe','$email_safe','$confirmemail_safe','$newpassword_safe','$confirmpassword_safe','$username_safe','$city_safe','$zipcode_safe','$phonenumber_safe','$countries_safe','$state_safe','$sex_safe','$termsofservice_safe','$yes_safe','$commentsorcomplaints_safe')";




       
        } else {


        $insert_query="UPDATE capstone_user_register_info SET  user_first_name='$firstname_safe',user_last_name='$lastname_safe',user_birthday='$birthday_safe',user_new_email='$birthday_safe',user_confirm_email='$confirmemail_safe',user_new_pass='$newpassword_safe' , user_confirm_pass='$confirmpassword_safe' , user_username='$username_safe' , user_city='$city_safe',user_zip='$zipcode_safe',user_phone='$phonenumber_safe',user_country='$countries_safe',user_state= '$state_safe',user_gender='$sex_safe',user_terms='$termsofservice_safe',user_complete='$yes_safe', user_comments='$commentsorcomplaints_safe' WHERE='$id_safe'"; 




          } 
          // ecuting the query function 

    mysqli_query($connection_to_database, $first_register_query) or die("Insert query didn't excute!  $first_register_query");


// close database connection and redirects based on data that was sent in by user.  

    mysqli_close($connection_to_database);

 
    header("Location: registration_form_finished.php"); 
}else{      
$_SESSION['messages']=$messages; 
$_SESSION['magic_form']=$magic_form;

header("Location: registration_form_magic.php");
 }
    ?>
</body>
</html>