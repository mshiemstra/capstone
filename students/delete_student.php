<?php
	include '../includes/db.php';
	$id = $_REQUEST['id'];
	$id = mysqli_real_escape_string($conn, $id);
	$delete_student = "DELETE FROM student WHERE `student_id` = '$id'";	
	$delete_enrollment = "DELETE FROM enrollment WHERE `student_id` = '$id'";

	if(mysqli_query($conn, $delete_student)){
		header("Location: students.php");
	} 
	else{
		echo "ERROR: Unable to execute" . " " . $delete_student . mysqli_error($conn);
	}

	if(mysqli_query($conn, $delete_enrollment)){
		header("Location: students.php");
	} 
	else{
		echo "ERROR: Unable to execute" . " " . $delete_enrollment . mysqli_error($conn);
	}

	mysqli_close($conn);
		
	
?>