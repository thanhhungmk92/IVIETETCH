DROP DATABASE IF EXISTS car_rental_db;
CREATE DATABASE car_rental_db;
USE car_rental_db;

CREATE TABLE Car(
	car_reg_no varchar(8) NOT NULL PRIMARY KEY,
	category char(20) NOT NULL,
	brand varchar(255) NOT NULL,
	daily_rate decimal(10,2) NOT NULL
);

CREATE TABLE Customers (
	customer_id int AUTO_INCREMENT NOT NULL PRIMARY KEY,
	name varchar(255) NOT NULL,
	address varchar(255) NOT NULL,
	phone varchar(11) NOT NULL,
	discount varchar(20)
);
CREATE TABLE Rental_records (
	rental_id int AUTO_INCREMENT NOT NULL PRIMARY KEY,
	car_reg_no varchar(8) NOT NULL,
	customer_id int NOT NULL,
	start_date datetime NOT NULL,
	end_date datetime NOT NULL,
	lastUpdate datetime	,
	INDEX car_reg_no(car_reg_no),
	INDEX customer_id(customer_id)
);

INSERT INTO Car(car_reg_no,category,brand,daily_rate)
VALUES 
('SBA1111A','car','NISSAN SUNNY 1.6L',99.99),
('BB2222B','car','TOYOTA ALTIS 1.6L',99.99),
('SBC3333C','car','HONDA CIVIC 1.8L',119.99),
('GA5555E','Truck','NISSAN CABSTAR 3.0L',89.99),
('GA6666F','van','OPEL COMBO 1.6L',69.99);

INSERT INTO Customers(customer_id,name,address,phone,discount)
VALUES 
(1,N'Phan Thanh Hùng','K01/110 Pham Nhu Xuong, Da Nang','0935444294',''),
(2,N'Nguyễn Thị Trang','Dien Ban, Quang Nam','01223569397',''),
(3,N'Hồ Minh Hưng','Hoang Dieu, Da Nang','0935209114',''),
(4,N'Vương Lục Nhi','Dien Bien Phu, Da Nang','0935209115',''),
(5,N'Lê Bích Châu','Hoang Dieu, Da Nang','0916789990','');


INSERT INTO Rental_records(rental_id,car_reg_no,customer_id,start_date,end_date,lastUpdate)
VALUES 
(1,'SBA1111A',2,'2017-09-09','2017-09-27',''),
(2,'SBA1111A',4,'2017-10-10','2017-10-15',''),
(3,'SBC3333C',3,'2017-10-19','2017-10-22',''),
(4,'SBC3333C',1,'2017-11-01','2017-11-07',''),
(5,'SBC3333C',5,'2018-01-01','2018-01-10','');

