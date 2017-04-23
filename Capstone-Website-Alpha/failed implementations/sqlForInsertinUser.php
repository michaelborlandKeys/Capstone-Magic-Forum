
          <?php   
         // The attempt to connect via sql. 
          //$connection_to_database =sqlsrv_connect($serverName,$connectionInfo) or die("Cannot Connect to the User database!");
    $insert_query="INSERT INTO User_basic_info (User_First_Name,User_Last_Name,User_Birthday,User_New_Email,User_Confirm_Email,User_New_Pass,User_Confirm_Pass,Username_magic,
        User_city,User_zip,User_Phone,User_Country,User_State,User_gender,User_terms,User_easy,User_comments) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
       
  
      

      $setParams = array(1,$firstname,2,$lastname,3,$birthday,4,$nemail,5,$cemail,
        6,$newpassword,7,$confirmpassword,8,$username,9,$city,10,$zipcode,
        11,$phonenumber,12,$country,13,$state,14,$sex,15,$agree,16,$ecomplete,17,$comments);


$stmt = sqlsrv_prepare( $conn, $insert_query, array(&$firstname,&$lastname,&$birthday,&$nemail,&$cemail,
    &$newpassword,&$confirmpassword,&$username,&$city,&$zipcode,&$phonenumber,
                &$country,&$state,&$sex,&$agree,&$ecomplete,&$comments));




         
        } else {


        $insert_query="UPDATE User_basic_info SET Username_ID=(?), User_First_Name=(?),
        User_Last_Name=(?),User_Birthday=(?),User_New_Email=(?),
        User_Confirm_Email=(?),User_New_Pass=(?),User_Confirm_Pass=(?),
        Username_magic=(?),User_city=(?),User_zip=(?),User_Phone=(?),User_Country=(?),
        User_State=(?),User_gender=(?),User_terms=(?),User_easy=(?),User_comments=(?)"; 

            


                 $setParams = array($id,$firstname,$lastname,$birthday,$nemail,$cemail,
                $npassword,$cpassword,$username,$city,$zipcode,$phonenumber,
                $country,$state,$sex,$agree,$ecomplete,$comments);
          }


     ?>