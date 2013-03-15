CREATE DATABASE ca CHARACTER SET utf8;

CREATE TABLE users (
	user_id INT PRIMARY KEY AUTO_INCREMENT,
	username VARCHAR(32) NOT NULL,
	password VARCHAR(32) NOT NULL,
	first_name VARCHAR(32) DEFAULT '',
	last_name VARCHAR(32) DEFAULT '',
	email varchar(32) DEFAULT '',
	created date not null,
	changed TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP
	ON UPDATE CURRENT_TIMESTAMP,
) ENGINE=InnoDB;

CREATE TABLE customers (
	customer_id INT PRIMARY KEY AUTO_INCREMENT,
	cutomer_name VARCHAR(64) NOT NULL,
	
) ENGINE=Innodb;

CREATE TABLE certificates (

);


CREATE TABLE encryptions (

);