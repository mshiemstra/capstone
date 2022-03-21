<?php

include 'includes/db.php';

$data = json_decode(file_get_contents('php://input'), true);


$class_id = $data['class_id'];
$student_id = $data['student_id'];

$class_id = mysqli_real_escape_string($conn, $class_id);
$student_id = mysqli_real_escape_string($conn, $student_id);


$associative = json_decode($student_id, true);

$compare_student = "SELECT * FROM student WHERE student_id = $associative";



if(mysqli_query($conn, $compare_student)) {
	$message = $student_id;
}
else {
	$message = 'No record found';
}




//$sql = "INSERT INTO enrollment VALUES ($class_id, $student_id)";

/*

if (mysqli_query($conn,$sql)) {
   $message = 'Record Added';

}
else {
	$message = "error adding user in database $sql";
}
*/
echo "{\"message\":\"$message\"}";


?>
