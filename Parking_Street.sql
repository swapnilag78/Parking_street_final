CREATE DATABASE if not exists DB ;

USE DB;

CREATE TABLE if not exists Business_Table (
  bus_id INT NOT NULL AUTO_INCREMENT,
  bus_name VARCHAR(45) NULL,
  bus_address VARCHAR(45) NULL,
  bus_contact_num VARCHAR(45) NULL,
  bus_email VARCHAR(45) NULL,
  admin_username VARCHAR(45) NULL,
  admin_password VARCHAR(45) NULL,
  bus_valet VARCHAR(45) NULL,
  verified VARCHAR(45) NULL,
  PRIMARY KEY (bus_id) 
  );
  
  CREATE TABLE IF NOT EXISTS Customer_Table (
  cust_id INT NOT NULL,
  cust_username VARCHAR(45) NULL,
  cust_password VARCHAR(45) NULL,
  cust_email VARCHAR(45) NULL,
  cust_contact_num INT NULL,
  cust_vehicle_num1 VARCHAR(45) NULL,
  cust_vehicle_num2 VARCHAR(45) NULL,
  PRIMARY KEY (cust_id)
  );
  
  CREATE TABLE IF NOT EXISTS Employee_Table (
  emp_id INT NOT NULL,
  bus_id INT NULL,
  emp_name VARCHAR(45) NULL,
  emp_username VARCHAR(45) NULL,
  emp_password VARCHAR(45) NULL,
  emp_contact_num VARCHAR(45) NULL,
  PRIMARY KEY (emp_id),
  FOREIGN KEY (bus_id) REFERENCES Business_Table (bus_id)
   );


CREATE TABLE IF NOT EXISTS Total_Lot_Table (
  total_lot_id INT NOT NULL,
  bus_id INT NULL,
  floor_num INT NULL,
  total_lot INT NULL,
  PRIMARY KEY (total_lot_id),
  FOREIGN KEY (bus_id) REFERENCES Business_Table (bus_id)
   );