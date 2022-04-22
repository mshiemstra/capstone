<?php

include '../../includes/db.php';

$data = json_decode(file_get_contents('php://input'), true);


$class_id = $data['class_id'];
$person_id = $data['person_id'];
$role = $data['role'];

$class_id = mysqli_real_escape_string($conn, $class_id);
$person_id = mysqli_real_escape_string($conn, $person_id);
$role = mysqli_real_escape_string($conn, $role);



$sql = "SELECT * FROM class WHERE class_id = $class_id";
$result = $conn->query($sql);

if($result->num_rows == 0) {
	$message = 'No class record found';
	echo "{\"message\":\"$message\", \"success\":false}";
	exit;
}


$sql = "SELECT * FROM enrollment WHERE person_id = $person_id AND class_id = $class_id";
$result = $conn->query($sql);

if($result->num_rows == 1) {
	$message = 'Student is already enrolled in that class';
	echo "{\"message\":\"$message\", \"success\":false}";
	exit;

}

$sql = "INSERT INTO enrollment VALUES ($class_id, $person_id, '$role')";

if (mysqli_query($conn,$sql)) {
   $message = 'Class Added';

}
else {
	$message = "Error adding user in database $sql";
}



echo "{\"message\":\"$message\", \"success\":true}";


?>
