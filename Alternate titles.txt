/*! START TRANSACTION */;
CREATE TABLE Alternate_Titles 
(
  onet_code VARCHAR(10) NOT NULL,
  job_title VARCHAR(150) NOT NULL,
  job_abbreviation VARCHAR(150) NOT NULL,
  sources VARCHAR(50) NOT NULL,
	FOREIGN KEY (onet_code) REFERENCES job_data (onet_code));
 /*!COMMIT */;
 /*!START TRANSACTION*/;
 
 INSERT INTO Alternate_Titles (onet_code, job_title, job_abbreviation, sources) 
 VALUES('11-1011.00', 'Aeronautics Comission Director', 'ACD', '08'); 
 
 INSERT INTO Alternate_Titles (onet_code, job_title, job_abbreviation, sources) 
 VALUES('15-1133.00', 'Certified Novell Engineer', 'CNE', '06');
 
 INSERT INTO Alternate_Titles (onet_code, job_title, job_abbreviation, sources)
 VALUES ('11-3031.02', 'Bank Advisor', 'BA','04,06');
 
 INSERT INTO Alternate_Titles (onet_code, job_title, job_abbreviation, sources)
 VALUES ('29-2099.00','Sleep Technician', 'ST','09');
 
 INSERT INTO Alternate_Titles (onet_code, job_title, job_abbreviation, sources)
 VALUES ('11-1011.00', 'Chief Executive Officer (CEO)', 'CEO', '02,04,08');
