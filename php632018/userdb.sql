DROP DATABASE IF EXISTS userdb;
CREATE DATABASE userdb;
USE userdb;

CREATE TABLE users_table (
	IDuser int(6) NOT NULL AUTO_INCREMENT PRIMARY KEY,
	email varchar(50) NOT NULL,
	password varchar(50) NOT NULL,
	first_name text NOT NULL,
	last_name text NOT NULL
);

INSERT INTO users_table(IDuser,email,password,first_name,last_name) values
(1,'thanhhungdn92@gmail.com','12345','Phan','Thanh Hùng'),
(,'minhanh222@gmail.com','45678','Huu','Tuan Anh'),
(,'tuyetanh111@gmail.com','tuyetanh11','Tuyết','Nhung');