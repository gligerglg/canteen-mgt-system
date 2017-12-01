<?php
	$con=mysqli_connect("localhost","azir","azir@bcs");

	$query="create database kamu";
	if(mysqli_query($con,$query)){
		echo "Success database creation";
	}
	else{
		echo "failed <br>".mysqli_error($con);
	}
	mysqli_select_db($con,"kamu");

	$query="create table user(eid int UNIQUE PRIMARY KEY NOT NULL AUTO_INCREMENT,username varchar(20) UNIQUE,password varchar(32),role varchar(20))";
	if(mysqli_query($con,$query)){
		echo "Success user<br/>";
	}
	else{
		echo "failed <br>".mysqli_error($con);
	}


	$query="create table orderInfo(orderId int UNIQUE PRIMARY KEY NOT NULL AUTO_INCREMENT,username varchar(20),orderDate DATE,foodName varchar(20),meal varchar(20),price FLOAT(8,2),qty int,total FLOAT(8,2))";
	if(mysqli_query($con,$query)){
		echo "Success orderInfo";
	}
	else{
		echo "failed <br>".mysqli_error($con);
	}


	$query="create table food(foodId int UNIQUE PRIMARY KEY,foodName varchar(20),type varchar(20),price FLOAT(8,2))";
	if(mysqli_query($con,$query)){
		echo "Success food";
	}
	else{
		echo "failed <br>".mysqli_error($con);
	}

	$query="create table audit(auditId int UNIQUE PRIMARY KEY NOT NULL AUTO_INCREMENT,username varchar(20),totalDue FLOAT(8,2))";
	if(mysqli_query($con,$query)){
		echo "Success audit";
	}
	else{
		echo "failed <br>".mysqli_error($con);
	}

	$query="insert into user(username,password,role) values('admin@kamu.com','0192023a7bbd73250516f069df18b500','admin')";
	if(mysqli_query($con,$query)){
		echo "Success admin insert";
	}
	else{
		echo "failed <br>".mysqli_error($con);
	}

	$query="insert into user(username,password,role) values('seller@kamu.com','1e4970ada8c054474cda889490de3421','seller')";
	if(mysqli_query($con,$query)){
		echo "Success seller insert";
	}
	else{
		echo "failed <br>".mysqli_error($con);
	}

	$query="insert into user(username,password,role) values('buyer@kamu.com','40e868c2d8064888a2a3365a63a84d58','buyer')";
	if(mysqli_query($con,$query)){
		echo "Success Buyer insert";
	}
	else{
		echo "failed <br>".mysqli_error($con);
	}
?>