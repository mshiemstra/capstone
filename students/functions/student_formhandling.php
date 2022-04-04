<?php

$student_id = $student_fName = $student_lName = $student_street1 = $student_street2 = $student_city = $student_state = $student_zipcode = $student_phone = $student_email = "";

$student_id_error = $student_fName_error = $student_lName_error = $student_street1_error = $student_street2_error = $student_city_error = $student_state_error = $student_zipcode_error = $student_phone_error = $student_email_error = "";


$valid = true;

if ($_SERVER["REQUEST_METHOD"] == "POST"){
  

	if(!preg_match("/^[0-9]*$/",$_POST['student_id'])) {
	    $student_id_error = "Only numbers are allowed";
	    $valid = false;
	}

	if(empty($_POST["student_id"])) {
      $student_id_error = "Student ID is required";
      $valid = false;
  }
  else {
      $student_id = $_POST["student_id"];
  }




  if(!preg_match("/^[a-zA-z ]*$/",$_POST['student_fName'])) {
    $student_fName_error = "Only letters and white spaces are allowed";
    $valid = false;
  }
  
  if(empty($_POST["student_fName"])) {
    $student_fName_error = "First Name is required";
    $valid = false;
  }
  else {
    $student_fName = $_POST["student_fName"];
  }


  if(!preg_match("/^[a-zA-z ]*$/",$_POST['student_lName'])) {
    $student_lName_error = "Only letters and white spaces are allowed";
    $valid = false;
  }
  
  if(empty($_POST["student_lName"])) {
    $student_lName_error = "Last Name is required";
    $valid = false;
  }
  else {
    $student_lName = $_POST["student_lName"]; 
  }
  



  if(empty($_POST["student_street1"])) {
    $student_street1_error = "Street student_street is required";
    $valid = false;
  }
  else {
    $student_street1 = $_POST["student_street1"];
  }
  



  if(empty($_POST["student_street2"])) {
    $student_street2_error = "";
  }
  else {
    $student_street2 = $_POST["student_street2"];
  }
  

 
 if(!preg_match("/^[a-zA-z ]*$/",$_POST['student_city'])) {
    $student_city_error = "Only letters and white spaces are allowed";
    $valid = false;
  }

  if(empty($_POST["student_city"])) {
    $student_city_error = "Your student_city's name is required";
    $valid = false;
  }
  else {
    $student_city = $_POST["student_city"];
  }
  

  if(empty($_POST["student_state"])) {
    $student_state_error = "Your state's name is required";
    $valid = false;
  }
  else {
    $student_state = $_POST["student_state"];
  }
  


  if(!preg_match("/^[0-9]*$/",$_POST['student_zipcode'])) {
    $student_zipcode_error = "Only numbers are allowed";
    $valid = false;
  }

  if(empty($_POST["student_zipcode"])) {
    $student_zipcode_error = "Your 5 digit zipcode is required";
    $valid = false;
  }
  else {
    $student_zipcode = $_POST["student_zipcode"];
  }
  
  

  if(!preg_match('/^[(]{0,1}[0-9]{3}[)]{0,1}[-\s\.]{0,1}[0-9]{3}[-\s\.]{0,1}[0-9]{4}$/', $_POST['student_phone'])) {
    $student_phone_error = "Invalid format";
    $valid = false;
  }


  
  if(empty($_POST["student_phone"])) {
    $student_phone_error = "Phone Number is required";
    $valid = false;
  }
  else {
    $student_phone = $_POST["student_phone"];
  }




  
  if(!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/",$_POST['student_email'])) {
    $student_email_error = "Invalid email format";
    $valid = false;
  }

  if(empty($_POST["student_email"])) {
    $student_email_error = "Email is required";
    $valid = false;
  }
  else {
    $student_email = $_POST["student_email"];
  }
  

if ($valid == true) {
  include 'includes/db.php';

  $sql = "SELECT * FROM person WHERE 'person_id' = '$_POST[student_id]' AND 'role' = 'S'";
  $rs = mysqli_query($conn, $sql);
  $data = mysqli_fetch_array($rs, MYSQLI_NUM);
  if($data) {
      echo "<script type='text/javascript'>alert('student id already exists');</script>";
  }
  else { 
      $sql = "INSERT INTO `person`(`person_id`, `person_fName`, `person_lName`, `person_street1`, `person_street2`, `person_city`, `person_state`, `person_zipcode`, `person_phone`, `person_email`, `role`) VALUES ('$student_id', '$student_fName', '$student_lName', '$student_street1', '$student_street2', '$student_city', '$student_state', '$student_zipcode', '$student_phone', '$student_email', 'S')";

      if (mysqli_query($conn,$sql)) {
          echo "<script type='text/javascript'>window.top.location='students.php';</script>";
      }
      else {
          echo "error adding user in database $sql<br/>";
      }
  }   

}
/*
  function ($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
*/
}

?>
