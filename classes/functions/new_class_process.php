<?php

include '../../includes/db.php';

$data = json_decode(file_get_contents('php://input'), true);


$class_term = $data['class_term'];
$class_desc = $data['class_desc'];
$class_name = $data['class_name'];


$class_term = mysqli_real_escape_string($conn, $class_term);
$class_desc = mysqli_real_escape_string($conn, $class_desc);
$class_name = mysqli_real_escape_string($conn, $class_name);


$sql = "INSERT INTO class VALUES (class_id, '$class_term', '$class_desc', '$class_name')";

if (mysqli_query($conn,$sql)) {
   $message = 'New class has been created';
   echo "{\"message\":\"$message\", \"success\":true}";
}
else {
  $message = "error adding user in database $sql";
  echo "{\"message\":\"$message\", \"success\":false}";
}


?>
