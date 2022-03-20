/* Example SQL db build and sample data script
 *
 * Prof. Frank Emanuel, 2022.
 */


CREATE TABLE students (
	studentID INT AUTO_INCREMENT NOT NULL PRIMARY KEY, 
	firstname VARCHAR(40), 
	surname VARCHAR(40), 
	email VARCHAR(40), 
	startyear DATE, 
	salutationID INT, 
	programID INT
);
	
CREATE TABLE salutation (
	salutationID INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
	shortform VARCHAR(8),
	longform VARCHAR(20) 
);
	
CREATE TABLE grade (
	studentID INT NOT NULL, 
	courseID INT NOT NULL,
	completed DATE,
	grade INT 
);

CREATE TABLE course (
	courseID INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
	coursecode VARCHAR(7),
	professorID INT, 
	startdata DATE,
	programID INT 
);
	
CREATE TABLE courses (
	coursecode VARCHAR(7) NOT NULL PRIMARY KEY,
	coursename VARCHAR(40),
	credits INT 
);
	
CREATE TABLE program (
	programID INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
	programname VARCHAR(30),
	directorID INT
);

CREATE TABLE professor (
	professorID INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
	firstname VARCHAR(40),
	surname VARCHAR(40),
	email VARCHAR(40),
	salutationID INT 
);
	
INSERT INTO salutation VALUES (1, 'Mr.', 'Mister');
INSERT INTO salutation VALUES (2, 'Mrs.', 'Missus.');
INSERT INTO salutation VALUES (3, 'Ms.', 'Miss');
INSERT INTO salutation VALUES (4, 'Miss.', 'Miss');
INSERT INTO salutation VALUES (5, 'Dr.', 'Doctor');	
INSERT INTO salutation VALUES (6, 'M.', 'Monsieur');	
INSERT INTO salutation VALUES (7, 'Madam', 'Madame');	
INSERT INTO salutation VALUES (8, 'Smt.', 'Shrimati');
INSERT INTO salutation VALUES (9, 'Prof.', 'Professor');	

INSERT INTO students VALUES (100000, 'Patricia', 'Larson', 'plarson@school.com', '2018-9-14', 8, 100);
INSERT INTO students VALUES (100001, 'Kyle', 'Dolan', 'pkdolan@school.com', '2018-9-14', 1, 101);
INSERT INTO students VALUES (100002, 'Safah', 'Gilbert', 'sgilbert@school.com', '2019-9-15', 6, 100);
INSERT INTO students VALUES (100003, 'Eva-Rose', 'Jeffery', 'ejeffery@school.com', '2019-9-15', 7, 102);
INSERT INTO students VALUES (100004, 'Bibi', 'Lees', 'blees@school.com', '2019-9-15', 3, 102);
INSERT INTO students VALUES (100005, 'Muhammad', 'Blackmore', 'mblackmore@school.com', '2020-9-16', 1, 100);
INSERT INTO students VALUES (100006, 'Mikail', 'Houston', 'mhouston@school.com', '2020-9-16', 1, 101);

INSERT INTO professor VALUES (3000, 'Najma', 'Boyd', 'drnboyd@school.com', 5); 
INSERT INTO professor VALUES (3001, 'Charlie', 'Moreno', 'profcmoreno@school.com', 9);
INSERT INTO professor VALUES (3002, 'Cathy', 'Lovell', 'drclovell@school.com', 5);
INSERT INTO professor VALUES (3003, 'Joel', 'Suarez', 'drjsuarez@school.com', 5);

INSERT INTO courses VALUES ( 'CMP1001', 'Introduction to Computer Technology', 3 );
INSERT INTO courses VALUES ( 'CMP1002', 'Introduction to Programming', 3 );
INSERT INTO courses VALUES ( 'CMP1003', 'Introduction to Databases', 3 );
INSERT INTO courses VALUES ( 'CMP1004', 'Introduction to Computer Networking', 3 );
INSERT INTO courses VALUES ( 'ENG1001', 'English', 3 );
INSERT INTO courses VALUES ( 'ENG1003', 'Essay Writing', 3 );
INSERT INTO courses VALUES ( 'CMP2006', 'Internet Security', 3 );
INSERT INTO courses VALUES ( 'CMP3001', 'Research Project', 6 );

INSERT INTO program VALUES ( 100, 'Computer Technologies', 3001 );
INSERT INTO program VALUES ( 101, 'Technical Writing', 3002 );
INSERT INTO program VALUES ( 102, 'Network Specialist', 3003 );

INSERT INTO course VALUES ( 1000, 'CMP1001', 3000, '2018-9-14', 100 );
INSERT INTO course VALUES ( 1001, 'CMP1003', 3002, '2018-9-14', 100 );
INSERT INTO course VALUES ( 1002, 'ENG1001', 3002, '2018-9-14', 101 );
INSERT INTO course VALUES ( 1003, 'ENG1003', 3000, '2019-9-15', 100 );
INSERT INTO course VALUES ( 1004, 'ENG1001', 3000, '2019-9-15', 102 );
INSERT INTO course VALUES ( 1005, 'CMP1004', 3001, '2019-9-15', 102 );
INSERT INTO course VALUES ( 1006, 'CMP1002', 3002, '2019-9-15', 100 );
INSERT INTO course VALUES ( 1007, 'CMP1003', 3002, '2020-9-16', 100 );
INSERT INTO course VALUES ( 1008, 'CMP3001', 3000, '2020-9-16', 101 );
INSERT INTO course VALUES ( 1009, 'CMP2006', 3001, '2020-9-16', 102 );

INSERT INTO grade VALUES ( 100000, 1000, '2018-12-12', 80 );
INSERT INTO grade VALUES ( 100000, 1001, '2018-12-12', 76 );
INSERT INTO grade VALUES ( 100000, 1003, '2019-12-12', 58 );
INSERT INTO grade VALUES ( 100001, 1002, '2018-12-12', 74 );
INSERT INTO grade VALUES ( 100001, 1008, NULL, NULL );
INSERT INTO grade VALUES ( 100002, 1003, '2019-12-12', 83 );
INSERT INTO grade VALUES ( 100003, 1004, '2019-12-12', 91 );
INSERT INTO grade VALUES ( 100003, 1005, '2019-12-12', 88 );
INSERT INTO grade VALUES ( 100003, 1009, NULL, NULL );
INSERT INTO grade VALUES ( 100004, 1004, '2019-12-12', 68 );
INSERT INTO grade VALUES ( 100004, 1005, '2019-12-12', 73 );
INSERT INTO grade VALUES ( 100004, 1009, NULL, NULL );
INSERT INTO grade VALUES ( 100005, 1007, NULL, NULL );
INSERT INTO grade VALUES ( 100006, 1008, NULL, NULL );







