<?php

include '../../includes/db.php';

$data = json_decode(file_get_contents('php://input'), true);


$class_id = $data['class_id'];
$class_term = $data['class_term'];
$class_desc = $data['class_desc'];
$class_name = $data['class_name'];
$person_id = $data['person_id'];


$class_id = mysqli_real_escape_string($conn, $class_id);
$class_term = mysqli_real_escape_string($conn, $class_term);
$class_desc = mysqli_real_escape_string($conn, $class_desc);
$class_name = mysqli_real_escape_string($conn, $class_name);
$person_id = mysqli_real_escape_string($conn, $person_id);



$sql = "SELECT * FROM person WHERE person_id = $person_id";
$result = $conn->query($sql);

if($result->num_rows == 0) {
  $message = 'No teacher record found';
  echo "{\"message\":\"$message\", \"success\":false}";
  exit;
}


$sql = "SELECT * FROM class WHERE class_id = $class_id";
$result = $conn->query($sql);

if($result->num_rows == 1) {
  $message = 'Class has already been created';
  echo "{\"message\":\"$message\", \"success\":false}";
  exit;
}
else {

  $sql = "INSERT INTO class VALUES ($class_id, '$class_term', '$class_desc', '$class_name', '$person_id')";

  if (mysqli_query($conn,$sql)) {
     $message = 'New class has been created';
     echo "{\"message\":\"$message\", \"success\":true}";
  }
  else {
    $message = "error adding user in database $sql";
    echo "{\"message\":\"$message\", \"success\":false}";
  }
}


?>
