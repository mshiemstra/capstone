<?php

include '../../includes/db.php';

$data = json_decode(file_get_contents('php://input'), true);

$teacher_id = $data['teacher_id'];
$teacher_fName = $data['teacher_fName'];
$teacher_lName = $data['teacher_lName'];
$teacher_street1 = $data['teacher_street1'];
$teacher_street2 = $data['teacher_street2'];
$teacher_city = $data['teacher_city'];
$teacher_state = $data['teacher_state'];
$teacher_zipcode = $data['teacher_zipcode'];
$teacher_phone = $data['teacher_phone'];
$teacher_email = $data['teacher_email'];


$teacher_id = mysqli_real_escape_string($conn, $teacher_id);
$teacher_fName = mysqli_real_escape_string($conn, $teacher_fName);
$teacher_lName = mysqli_real_escape_string($conn, $teacher_lName);
$teacher_street1 = mysqli_real_escape_string($conn, $teacher_street1);
$teacher_street2 = mysqli_real_escape_string($conn, $teacher_street2);
$teacher_city = mysqli_real_escape_string($conn, $teacher_city);
$teacher_state = mysqli_real_escape_string($conn, $teacher_state);
$teacher_zipcode = mysqli_real_escape_string($conn, $teacher_zipcode);
$teacher_phone = mysqli_real_escape_string($conn, $teacher_phone);
$teacher_email = mysqli_real_escape_string($conn, $teacher_email);





$sql = "SELECT * FROM teacher WHERE teacher_id = $teacher_id";
$result = $conn->query($sql);

if($result->num_rows == 1) {
	$message = 'teacher has already been added.';
	echo "{\"message\":\"$message\", \"success\":false}";
	exit;
}


$sql = "INSERT INTO `teacher` VALUES ($teacher_id, '$teacher_fName', '$teacher_lName', '$teacher_street1', '$teacher_street2', '$teacher_city', '$teacher_state', '$teacher_zipcode', '$teacher_phone', '$teacher_email')";

if (mysqli_query($conn,$sql)) {
   $message = 'Record Added';
   echo "{\"message\":\"$message\", \"success\":true}";
}
else {
	$message = "error adding user in database $sql";
	echo "{\"message\":\"$message\", \"success\":false}";
}




?>
