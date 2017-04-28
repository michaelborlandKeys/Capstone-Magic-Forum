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





