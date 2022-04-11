<?php
	include '../includes/db.php';
	$id = $_REQUEST['id'];
	$id = mysqli_real_escape_string($conn, $id);
	$remove_student = "DELETE FROM enrollment WHERE `person_id` = '$id'";


	if(mysqli_query($conn, $remove_student)){
		header("Location: ../classes.php");
	} 
	else{
		echo "ERROR: Unable to execute" . " " . $delete_enrollment . mysqli_error($conn);
	}

	mysqli_close($conn);
		
	
?>