<?php 

	$connection_pro = mysqli_connect('localhost','root','','provincial_database');

	if(mysqli_connect_errno()){
		die('Database connection failed '. mysqli_connect_error());
	}else{
		//echo "Successfully connected"; 
	}

 ?>