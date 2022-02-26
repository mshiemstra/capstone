<?php
	include '../includes/db.php';
	$id = $_REQUEST['id'];
	$id = mysqli_real_escape_string($conn, $id);
	$sql = "DELETE FROM teacher WHERE `teacher_id` = '$id'";	

	if(mysqli_query($conn, $sql)){
		echo "Records deleted successfully.";
		header("Location: teachers.php");
	} 
	else{
		echo "ERROR: Unable to execute" . " " . $sql . mysqli_error($conn);
	}

	mysqli_close($conn);
		
	
?>