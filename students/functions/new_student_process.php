<?php

include '../../includes/db.php';

$data = json_decode(file_get_contents('php://input'), true);

$person_id = $data['person_id'];
$person_fName = $data['student_fName'];
$person_lName = $data['student_lName'];
$person_street1 = $data['student_street1'];
$person_street2 = $data['student_street2'];
$person_city = $data['student_city'];
$person_state = $data['student_state'];
$person_zipcode = $data['student_zipcode'];
$person_phone = $data['student_phone'];
$person_email = $data['student_email'];


$person_id = mysqli_real_escape_string($conn, $person_id);
$person_fName = mysqli_real_escape_string($conn, $person_fName);
$person_lName = mysqli_real_escape_string($conn, $person_lName);
$person_street1 = mysqli_real_escape_string($conn, $person_street1);
$person_street2 = mysqli_real_escape_string($conn, $person_street2);
$person_city = mysqli_real_escape_string($conn, $person_city);
$person_state = mysqli_real_escape_string($conn, $person_state);
$person_zipcode = mysqli_real_escape_string($conn, $person_zipcode);
$person_phone = mysqli_real_escape_string($conn, $person_phone);
$person_email = mysqli_real_escape_string($conn, $person_email);

if($person_id){
  $sql = "UPDATE person SET person_fName = '$person_fName', person_lName = '$person_lName', person_street1 = '$person_street1', person_street2 = '$person_street2', person_city = '$person_city', person_state = '$person_state', person_zipcode = '$person_zipcode', person_phone = '$person_phone', person_email = '$person_email' WHERE person_id = $person_id";  
}
else {
  $sql = "INSERT INTO person VALUES (person_id, '$person_fName', '$person_lName', '$person_street1', '$person_street2', '$person_city', '$person_state', '$person_zipcode', '$person_phone', '$person_email', 'S')";  
}

if (mysqli_query($conn,$sql)) {
   $message = 'New student has been created';
   echo "{\"message\":\"$message\", \"success\":true}";
}
else {
  $message = "error adding user in database $sql";
  echo "{\"message\":\"$message\", \"success\":false}";
}


?>
