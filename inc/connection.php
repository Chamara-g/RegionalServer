<?php 

	$connection = mysqli_connect('localhost','root','','regional_database');

	if(mysqli_connect_errno()){
		die('Database connection failed '. mysqli_connect_error());
	}else{
		//echo "Successfully connected"; 
	}

 ?>