CREATE DATABASE if not exists DB ;

USE DB;

CREATE TABLE if not exists Business_Table (
  bus_id INT NOT NULL auto_increment primary key,
  bus_name VARCHAR(45) NULL,
  bus_address VARCHAR(45) NULL,
  bus_contact_num VARCHAR(45) NULL,
  bus_email VARCHAR(45) NULL,
  admin_username VARCHAR(45) NULL,
  admin_password VARCHAR(45) NULL,
  bus_valet VARCHAR(45) NULL,
  verified VARCHAR(45) NULL,
  parking_rate int null
  );
  
  CREATE TABLE IF NOT EXISTS Customer_Table (
  cust_id INT NOT NULL auto_increment primary key,
  cust_username VARCHAR(45) NULL,
  cust_password VARCHAR(45) NULL,
  cust_email VARCHAR(45) NULL,
  cust_contact_num INT NULL,
  cust_vehicle_num1 VARCHAR(45) NULL,
  cust_vehicle_num2 VARCHAR(45) NULL
  );
  
  CREATE TABLE IF NOT EXISTS Employee_Table (
  emp_id INT NOT NULL auto_increment primary key,
  bus_id INT NULL,
  emp_name VARCHAR(45) NULL,
  emp_username VARCHAR(45) NULL,
  emp_email VARCHAR(45) NULL,
  emp_password VARCHAR(45) NULL,
  emp_contact_num VARCHAR(45) NULL,
  FOREIGN KEY (bus_id) REFERENCES Business_Table (bus_id)
   );


CREATE TABLE IF NOT EXISTS Total_Lot_Table (
  total_lot_id INT NOT NULL auto_increment primary key,
  bus_id INT NULL,
  floor_num INT NULL,
  total_lot INT NULL,
  FOREIGN KEY (bus_id) REFERENCES Business_Table (bus_id)
  );
  
  
  CREATE TABLE IF NOT EXISTS Parking_Lot_Table (
  lot_id INT NOT NULL auto_increment primary key,
  bus_id INT NULL,
  floor_num INT NULL,
  lot_num int null,
  vehicle_num varchar(10) NULL,
  entering_time datetime null,
  exiting_time datetime null,
  valet varchar(5) NULL,
  parking_status varchar(5) null,
  pre_booking varchar(5) null,
  bill int null,
  FOREIGN KEY (bus_id) REFERENCES Business_Table (bus_id)
  );
  
  CREATE TABLE IF NOT EXISTS History_Table (
  lot_id INT NOT NULL auto_increment primary key,
  bus_id INT NULL,
  floor_num INT NULL,
  lot_num int null,
  vehicle_num varchar(10) NULL,
  entering_time datetime null,
  exiting_time datetime null,
  valet varchar(5) NULL,
  parking_status varchar(5) null,
  pre_booking varchar(5) null,
  bill int null,
  FOREIGN KEY (bus_id) REFERENCES Business_Table (bus_id)
  );
  
  CREATE TABLE IF NOT EXISTS Pre_Booking_Table (
  pre_book_id INT NOT NULL auto_increment primary key,
  lot_id INT NULL,
  booked_by varchar(45) NULL,
  book_start datetime null,
  FOREIGN KEY (lot_id) REFERENCES Parking_Lot_Table (lot_id)
  );
  
  create table if not exists Admin_table (
  ad_id int not null auto_increment primary key,
  ad_username VARCHAR(45) null,
  ad_password VARCHAR(45) null
  );
  
  insert into admin_table (ad_id , ad_username, ad_password)
  values (1, 'admin1', 'password1'),
  (2, 'admin2', 'password2'),
  (3, 'admin3', 'password3');
