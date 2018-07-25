CREATETABLEIF NOT EXISTS`employees`
(`name` char(50) primary key,
`nickname` char(50),
`phone_number` char(50) NOT NULL);

CREATETABLEIF NOT EXISTS`department`
(`dname` char(50) primary key NOT NULL)
`fac` char(50));

ALTER TABLE employees
   ADD dname char(50) FOREIGN KEY REFERENCES department(dname);


CREATE TABLE Section(
cidVARCHAR( 8 ) NOT NULL ,
sect_idVARCHAR( 8 ) NOT NULL ,
semesterVARCHAR( 16 ) NOT NULL ,
yearYEAR NOT NULL ,
buildingVARCHAR( 256 ) NOT NULL ,
roomVARCHAR( 16 ) NOT NULL ,
timeslot_idVARCHAR( 8 ) NOT NULL ,
PRIMARY KEY ( cid , sect_id , semester , year),
FOREIGN KEY (cid ) REFERENCES course (cid))

ALTER table 7
ADD PRIMARY KEY (name,dname),
ADD FOREIGN KEY (dname) REFERENCES department(dname);

CREATE TABLE employees2(
name CHAR (32) DEFAULT NULL ,
nickname CHAR( 32 ) DEFAULT NULL,
phone_number CHAR( 32 ) NOT NULL ,
dname CHAR (32) NOT NULL,
FOREIGN KEY (dname) REFERENCES department(dname))
