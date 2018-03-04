<!-- get disconnect data from provincial server -->

<?php require_once('../inc/connection.php'); ?>

<?php 

	if(isset($_GET['meter_id'])){

		$meter_id = $_GET['meter_id'];

		$query = "INSERT INTO disconnect_tb(meter_id,lost_time) VALUES ('{$meter_id}',NOW())";

		mysqli_query($connection,$query);
	}
	else{
		//echo $query;
	}

 ?>