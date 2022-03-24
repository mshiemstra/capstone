<?php
	include '../includes/db.php';
	$id = $_REQUEST['id'];
	$id = mysqli_real_escape_string($conn, $id);
	$delete_teacher = "DELETE FROM teacher WHERE `teacher_id` = '$id'";	
	$delete_enrollment = "DELETE FROM enrollment WHERE `teacher_id` = '$id'";

	if(mysqli_query($conn, $delete_teacher)){
		header("Location: ../teachers.php");
	} 
	else{
		echo "ERROR: Unable to execute" . " " . $delete_teacher . mysqli_error($conn);
	}

	if(mysqli_query($conn, $delete_enrollment)){
		header("Location: ../teachers.php");
	} 
	else{
		echo "ERROR: Unable to execute" . " " . $delete_enrollment . mysqli_error($conn);
	}

	mysqli_close($conn);
		
	
?>