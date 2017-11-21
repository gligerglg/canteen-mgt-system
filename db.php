<?php
	$con=mysqli_connect("localhost","azir","azir@bcs");

	$query="create database kamu";
	mysqli_query($con,$query);

	mysqli_select_db($con,"kamu");

	$query="create table user(nic varchar(12) UNIQUE PRIMARY KEY NOT NULL,username varchar(20),password varchar(32),role varchar(20))";
	mysqli_query($con,$query);

	$query="create table orderInfo(orderId int UNIQUE PRIMARY KEY NOT NULL AUTO_INCREMENT,username varchar(20),orderDate DATE,foodName varchar(20),price FLOAT(8,2),qty int,total FLOAT(8,2))";
	
	if(mysqli_query($con,$query)){
		echo "Success";
	}
	else{
		echo "failed <br>".mysqli_error($con);
	}


	$query="create table food(foodId int UNIQUE PRIMARY KEY,foodName varchar(20),type varchar(20),price FLOAT(8,2))";
	mysqli_query($con,$query);

	$query="create table audit(auditId int UNIQUE PRIMARY KEY NOT NULL AUTO_INCREMENT,username varchar(20),totalDue FLOAT(8,2))";
	mysqli_query($con,$query);
?>