<?php
	global $con;
	$con=mysqli_connect("localhost","username","password","kamu");
		if(!$con)
		{
			die('could not connect '.mysqli_error($con)."<br>");
		}		
?>
