IF DB_ID('Capstone_test_DataBase') IS NULL
	CREATE DATABASE Capstone_test_DataBase;

USE Capstone_test_DataBase;

GO 
--CREATE SCHEMA AUTHORIZATION dbo

GO 



--IF OBJECT_ID('dbo.Contractor_Is_Qualified', 'U') IS NOT NULL 
--	DROP TABLE dbo.Contractor_Is_Qualified
--IF OBJECT_ID('dbo.Availible_Job', 'U') IS NOT NULL 
--	DROP TABLE dbo.Availible_Job
--IF OBJECT_ID('dbo.Company', 'U') IS NOT NULL 
--	DROP TABLE dbo.Company


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







--CREATE TABLE dbo.Contractor_Is_Qualified
--( Contractor_ID      INT           NOT NULL,
--  Qualification_Code NVARCHAR(15)  NOT NULL,
--  PRIMARY KEY(Contractor_ID,Qualification_Code),
--  FOREIGN KEY(Contractor_ID) REFERENCES  dbo.Contractor(Contractor_ID),
--  FOREIGN KEY(Qualification_Code) REFERENCES dbo.Qualification(Qualification_Code),
--  );

	 -- Keeping passed table templates from another project, so it cuts my work down, reason being writing tables from scratch takes me quite awhile to achevie.
	 -- especailly sense this project will have me re-learning a bunch about T-SQL as a whole considering it has been two year since i have done anything, but simple select quieries. 
	 -- I will also be learning alot of new stuff about security and database functionality from my dad a database professional, to understand how to make things run smoother and more secure. 
	 --Of course if you are okay with that

--CREATE TABLE dbo.Availible_Job
-- ( Job_ID INT                   NOT NULL,
--  Company_ID INT                NOT NULL,
--  Job_Description NVARCHAR(35)  NOT NULL,
--  Start_Date      DATE  NOT NULL,
--Qualification_Code NVARCHAR(15) NOT NULL,
--Hourly_Pay SMALLMONEY                  NOT NULL, 
--PRIMARY KEY(Job_ID),
--FOREIGN KEY(Company_ID) REFERENCES dbo.Company(Company_ID),
--FOREIGN KEY(Qualification_Code) REFERENCES dbo.Qualification(Qualification_Code),
--); 







--CREATE TABLE dbo.Job_History
-- ( Job_History_Record_ID INT   NOT NULL, 
--   Contractor_ID INT           NOT NULL,
--   Job_ID INT                  NOT NULL, 
--   Job_Description NVARCHAR(35)NOT NULL,
--   Company_ID INT              NOT NULL, 
--   Start_Date DATE               NOT NULL,
--   End_Date  DATE                NOT NULL,
--   Qualification_Code NVARCHAR(15)  NOT NULL, 
--   Hourly_Pay SMALLMONEY            NOT NULL, 
--   PRIMARY KEY(Job_History_Record_ID),
--   FOREIGN KEY(Contractor_ID) REFERENCES dbo.Contractor(Contractor_ID)
  -- ); 


  










	



   










