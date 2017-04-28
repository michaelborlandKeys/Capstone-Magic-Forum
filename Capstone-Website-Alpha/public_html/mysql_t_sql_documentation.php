<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
	<title> MySQL T-SQL Documentation</title>	
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php include ("../resources/common_scripts_head.php");?>
</head>
<body>
<?php  include("../resources/start_session_script.php"); ?>
<?php include("../resources/magic_navigation.php");?>
<h1> MySQL and T-SQL Documentation Page</h1>
<pre>
<code>
	-- creating form insert form database tables 
CREATE DATABASE capstone_db  NOT NULL; 
USE capstone_db; 
CREATE TABLE Capstone_user_register_info(
   user_ID            BIGINT(25) NOT NULL AUTO_INCREMENT,
   user_first_name 	  VARCHAR(20) NOT NULL, 
   user_last_name     VARCHAR(20) NOT NULL,  
   user_birthday       VARCHAR(10)   NOT NULL,
   user_new_email 	  VARCHAR(35) NOT NULL,
   user_confirm_email VARCHAR(35) NOT NULL,
   user_new_pass      VARCHAR(16) NOT NULL, 
   user_confirm_pass  VARCHAR(16) NOT NULL, 
   user_username       VARCHAR(12) NOT NULL UNIQUE, 
   user_city  VARCHAR(35) NOT NULL, 
   user_zip   VARCHAR(5)  NOT NULL, 
   user_phone VARCHAR(12) NOT NULL, 
   user_country   VARCHAR(35) NOT NULL, 
   user_state VARCHAR(35)  NULL, 
   user_gender         VARCHAR(8) NOT NULL,
   user_terms         VARCHAR(10) NOT NULL,
   user_complete      VARCHAR(3)    NULL, 
   user_comments        VARCHAR(2500) NULL, 
    PRIMARY KEY(user_ID)

); 

CREATE TABLE Capstone_posts(
user_post_ID       BIGINT(25) NOT NULL AUTO_INCREMENT, 
user_post          VARCHAR(2500) NOT NULL, 
user_time_posted   TIMESTAMP DEFAULT CURRENT_TIMESTAMP, 
PRIMARY KEY(user_post_ID)
); 


CREATE TABLE Capstone_modern_posts(
user_post_ID       BIGINT(25) NOT NULL AUTO_INCREMENT, 
user_modern_post          VARCHAR(2500) NOT NULL, 
user_time_modern   TIMESTAMP DEFAULT CURRENT_TIMESTAMP, 
PRIMARY KEY(user_post_ID)


); 

CREATE TABLE Capstone_standard_posts(
user_post_ID       BIGINT(25) NOT NULL AUTO_INCREMENT, 
user_standard_post          VARCHAR(2500) NOT NULL, 
user_time_standard   TIMESTAMP DEFAULT CURRENT_TIMESTAMP, 
PRIMARY KEY(user_post_ID)

); 

CREATE TABLE Capstone_legacy_posts(
user_post_ID       BIGINT(25) NOT NULL AUTO_INCREMENT, 
user_legacy_post          VARCHAR(2500) NOT NULL, 
user_time_legacy   TIMESTAMP DEFAULT CURRENT_TIMESTAMP, 
PRIMARY KEY(user_post_ID)


); 

CREATE TABLE Capstone_commander_posts(
user_post_ID       BIGINT(25) NOT NULL AUTO_INCREMENT, 
user_commander_post          VARCHAR(2500) NOT NULL, 
user_time_commander  TIMESTAMP DEFAULT CURRENT_TIMESTAMP, 
PRIMARY KEY(user_post_ID)

); 

CREATE TABLE Capstone_fnm_posts(
user_post_ID       BIGINT(25) NOT NULL AUTO_INCREMENT, 
user_fnm_post          VARCHAR(2500) NOT NULL, 
user_time_fnm   TIMESTAMP DEFAULT CURRENT_TIMESTAMP, 
PRIMARY KEY(user_post_ID)
); 

CREATE TABLE Capstone_pptq_posts(
user_post_ID       BIGINT(25) NOT NULL AUTO_INCREMENT, 
user_pptq_post          VARCHAR(2500) NOT NULL, 
user_time_pptq   TIMESTAMP DEFAULT CURRENT_TIMESTAMP, 
PRIMARY KEY(user_post_ID)


); 

CREATE TABLE Capstone_rptq_posts(
user_post_ID       BIGINT(25) NOT NULL AUTO_INCREMENT, 
user_rptq_post          VARCHAR(2500) NOT NULL, 
user_time_rptq  TIMESTAMP DEFAULT CURRENT_TIMESTAMP, 
PRIMARY KEY(user_post_ID)

); 

CREATE TABLE Capstone_mtgo_posts(
user_post_ID       BIGINT(25) NOT NULL AUTO_INCREMENT, 
user_MTGO_post          VARCHAR(2500) NOT NULL, 
user_time_MTGO   TIMESTAMP DEFAULT CURRENT_TIMESTAMP, 
PRIMARY KEY(user_post_ID)


); 

CREATE TABLE Capstone_pt_posts(
user_post_ID       BIGINT(25) NOT NULL AUTO_INCREMENT, 
user_pt_post          VARCHAR(2500) NOT NULL, 
user_time_pt  TIMESTAMP DEFAULT CURRENT_TIMESTAMP, 
PRIMARY KEY(user_post_ID)

); 

CREATE TABLE Capstone_format_home_posts(
user_post_ID       BIGINT(25) NOT NULL AUTO_INCREMENT, 
user_format_post          VARCHAR(2500) NOT NULL, 
user_time_format  TIMESTAMP DEFAULT CURRENT_TIMESTAMP, 
PRIMARY KEY(user_post_ID)
); 

CREATE TABLE Capstone_tournament_posts(
user_post_ID       BIGINT(25) NOT NULL AUTO_INCREMENT, 
user_tourny_post          VARCHAR(2500) NOT NULL, 
user_time_tourny  TIMESTAMP DEFAULT CURRENT_TIMESTAMP, 
PRIMARY KEY(user_post_ID)
); 

/*Failed implementation*/
/*CREATE TABLE Capstone_users(
	user_username VARCHAR(12) NOT NULL UNIQUE, 
	PRIMARY KEY(user_username)
); */

/*CREATE TABLE Capstone_user_demographic_info(
   user_username       VARCHAR(12) NOT NULL UNIQUE, 
   user_birthday       VARCHAR(10)   NOT NULL,
   user_gender         VARCHAR(8) NOT NULL, 
    PRIMARY KEY (user_username),
 	FOREIGN KEY(user_username) REFERENCES Capstone_users(user_username)
  );
CREATE TABLE Capstone_location_info(
	user_ID    BIGINT(25) NOT NULL AUTO_INCREMENT,
	user_city  VARCHAR(35) NOT NULL, 
	user_zip   VARCHAR(5)  NOT NULL, 
	user_phone VARCHAR(12) NOT NULL, 
user_country   VARCHAR(35) NOT NULL, 
	user_state VARCHAR(35)  NULL, 
PRIMARY KEY (user_ID),
FOREIGN KEY(user_ID)REFERENCES Capstone_user_register_info(user_ID)
); */

</code>	
</pre>

<h2 class="below_menu_container">Failed Implementations</h2>
<caption>Failed T-SQL Attempts</caption>
<pre class="below_menu_container">
	<code>
	IF DB_ID('Capstone_test_DataBase') IS NULL
	CREATE DATABASE Capstone_test_DataBase;

USE Capstone_test_DataBase;

GO 
CREATE SCHEMA AUTHORIZATION dbo

GO 

IF OBJECT_ID('dbo.user_fortknox', 'U') IS NOT NULL 
	DROP TABLE dbo.Qualification
IF OBJECT_ID('dbo.Storeusernames', 'U') IS NOT NULL 
	DROP TABLE dbo.Job_History
IF OBJECT_ID('dbo.User_basic_Info', 'U') IS NOT NULL 
	DROP TABLE dbo.User_basic_Info
-- All this info will be automatically sign you up for a DCI card, if you check the box as well. 
-- split up info into other tables, basic info isn't almost all user info. 
CREATE TABLE dbo.User_basic_Info
( Username_ID INT  NOT NULL IDENTITY(1,1),
  User_First_Name NVARCHAR(15)  NOT NULL,
  User_Last_Name  NVARCHAR(15)  NOT NULL, 
  User_Email_Address  NVARCHAR(30)  NOT NULL, 
  User_Birthday	  DATE          NOT NULL, 
  User_State          NVARCHAR(35) NULL     , 
  User_Country        NVARCHAR(35) NOT NULL , 
  Username_magic      NVARCHAR(12) NOT NULL UNIQUE,
  User_city            NVARCHAR(35) NOT NULL,   
  User_gender          NVARCHAR(7) NOT NULL, 
  User_terms		   NVARCHAR(7) NOT NULL,
  User_easy            NVARCHAR(3) NULL    , 
  User_comments        NVARCHAR(255) NULL  , 
  PRIMARY KEY(Username_ID),
  );


  CREATE TABLE dbo.user_fortknox
( 
	   User_pass_ID     INT   NOT NULL IDENTITY(1,1),
		Username_ID		INT  NOT NULL UNIQUE,
		User_hashed_pass  NVARCHAR(100)  NOT NULL UNIQUE,
  PRIMARY KEY(User_pass_ID)                             ,
  FOREIGN KEY(Username_ID) REFERENCES dbo.User_basic_Info (Username_ID)
);    

  -- Think about ways to decrease use of user id, and others frequently to reduce some data duplication. 
	CREATE TABLE dbo.Store_usernames 
		(
		   Username_ID INT  NOT NULL IDENTITY(1,1),
		   Username_magic      NVARCHAR(12) NOT NULL UNIQUE,
		  PRIMARY KEY(Username_magic),
		  FOREIGN KEY(Username_ID) REFERENCES  dbo.User_basic_Info(Username_ID)

	
	  );

		
	</code>
	
</pre>

<caption class="below_menu_container">Failed PHP T-SQL insert</caption>

<img src="images/failed php_doc.png" alt="">






<?php include("../resources/magic_footer.php");?>
<?php include("../resources/load_scripts.php");?>
</body>
</html>