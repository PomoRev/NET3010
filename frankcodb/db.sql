DROP TABLE IF EXISTS users;

CREATE TABLE users (
	userID INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
	username varchar(50),
	password varchar(64),
	lastlogin date,
	permissions INT
);


INSERT INTO users(username, password, permissions) 
	VALUES ('admin','password', 3);

INSERT INTO users(username, password, permissions)
	VALUES ('trainer','password', 2);
	
INSERT INTO users(username, password, permissions) 
	VALUES ('customer','password', 1);



