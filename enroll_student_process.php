<?php

include 'includes/db.php';

$data = json_decode(file_get_contents('php://input'), true);


$class_id = $data['class_id'];
$student_id = $data['student_id'];

$class_id = mysqli_real_escape_string($conn, $class_id);
$student_id = mysqli_real_escape_string($conn, $student_id);




$sql = "SELECT * FROM student WHERE student_id = $student_id";
$result = $conn->query($sql);

if($result->num_rows == 0) {
	$message = 'No student record found';
	echo "{\"message\":\"$message\", \"success\":false}";
	exit;
}


$sql = "SELECT * FROM class WHERE class_id = $class_id";
$result = $conn->query($sql);

if($result->num_rows == 0) {
	$message = 'No class record found';
	echo "{\"message\":\"$message\", \"success\":false}";
	exit;
}


$sql = "SELECT * FROM enrollment WHERE student_id = $student_id AND class_id = $class_id";
$result = $conn->query($sql);

if($result->num_rows == 1) {
	$message = 'Student is already enrolled in that class';
	echo "{\"message\":\"$message\", \"success\":false}";
	exit;

}



$sql = "INSERT INTO enrollment VALUES ($class_id, $student_id)";

if (mysqli_query($conn,$sql)) {
   $message = 'Record Added';

}
else {
	$message = "error adding user in database $sql";
}

echo "{\"message\":\"$message\", \"success\":true}";


?>
