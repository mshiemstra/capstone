<?php

include '../../includes/db.php';

$data = json_decode(file_get_contents('php://input'), true);

$student_id = $data['student_id'];
$student_fName = $data['student_fName'];
$student_lName = $data['student_lName'];
$student_street1 = $data['student_street1'];
$student_street2 = $data['student_street2'];
$student_city = $data['student_city'];
$student_state = $data['student_state'];
$student_zipcode = $data['student_zipcode'];
$student_phone = $data['student_phone'];
$student_email = $data['student_email'];


$student_id = mysqli_real_escape_string($conn, $student_id);
$student_fName = mysqli_real_escape_string($conn, $student_fName);
$student_lName = mysqli_real_escape_string($conn, $student_lName);
$student_street1 = mysqli_real_escape_string($conn, $student_street1);
$student_street2 = mysqli_real_escape_string($conn, $student_street2);
$student_city = mysqli_real_escape_string($conn, $student_city);
$student_state = mysqli_real_escape_string($conn, $student_state);
$student_zipcode = mysqli_real_escape_string($conn, $student_zipcode);
$student_phone = mysqli_real_escape_string($conn, $student_phone);
$student_email = mysqli_real_escape_string($conn, $student_email);





$sql = "SELECT * FROM person WHERE person_id = $student_id";
$result = $conn->query($sql);

if($result->num_rows == 1) {
	$message = 'student has already been added.';
	echo "{\"message\":\"$message\", \"success\":false}";
	exit;
}
else {

	$sql = "INSERT INTO person VALUES ($student_id, '$student_fName', '$student_lName', '$student_street1', '$student_street2', '$student_city', '$student_state', '$student_zipcode', '$student_phone', '$student_email', 'S')";

	if (mysqli_query($conn,$sql)) {
	   $message = 'Record Added';
	   echo "{\"message\":\"$message\", \"success\":true}";
	}
	else {
		$message = "error adding user in database $sql";
		echo "{\"message\":\"$message\", \"success\":false}";
	}
}




?>
