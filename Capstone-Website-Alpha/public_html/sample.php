<?php
session_start();
 //$serverName="VM01301-SQL2012\MSSQLSERVER";


 $serverName="192.168.37.128";
 $connectionInfo=array(
        "UID" => "keys",
        "PWD" =>"hello.world",
        "Database"=>"Capstone_test_DataBase",); 
  
 $connection_to_database =sqlsrv_connect($serverName,$connectionInfo);
 if ($connection_to_database){
    echo "connected!";
    $querystr = "SELECT * FROM [dbo].[User_basic_Info]";
$stmt = sqlsrv_query( $connection_to_database,$querystr );

if( $stmt === false) {
    die( print_r( sqlsrv_errors(), true) );
}
   $nameprinOut= 0;
      while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC))
      {
            $nameprinOut++;
               echo $row['lastname'].", ".$row['firstname']."\n"; 
      }
  }

?>