<?php
	include '../includes/db.php';
	$id = $_REQUEST['id'];
	$id = mysqli_real_escape_string($conn, $id);
	$sql = "SELECT person_id FROM person WHERE `person_id` = '$id'";	

	if(mysqli_query($conn, $sql)){
		// STOPS WORKING -- WHY?
		header("Location: ../search_results.php");
	} 
	else{
		echo "ERROR: Unable to execute" . " " . $sql . mysqli_error($conn);
	}

	mysqli_close($conn);
		
	
?>