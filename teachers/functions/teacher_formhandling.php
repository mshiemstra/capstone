<?php

$teacher_id = $teacher_fName = $teacher_lName = $teacher_street1 = $teacher_street2 = $teacher_city = $teacher_state = $teacher_zipcode = $teacher_phone = $teacher_email = "";

$teacher_id_error = $teacher_fName_error = $teacher_lName_error = $teacher_street1_error = $teacher_street2_error = $teacher_city_error = $teacher_state_error = $teacher_zipcode_error = $teacher_phone_error = $teacher_email_error = "";


$valid = true;

if ($_SERVER["REQUEST_METHOD"] == "POST"){
  

	if(!preg_match("/^[0-9]*$/",$_POST['teacher_id'])) {
	    $teacher_id_error = "Only numbers are allowed";
	    $valid = false;
	}

	if(empty($_POST["teacher_id"])) {
      $teacher_id_error = "teacher ID is required";
      $valid = false;
  }
  else {
      $teacher_id = $_POST["teacher_id"];
  }




  if(!preg_match("/^[a-zA-z ]*$/",$_POST['teacher_fName'])) {
    $teacher_fName_error = "Only letters and white spaces are allowed";
    $valid = false;
  }
  
  if(empty($_POST["teacher_fName"])) {
    $teacher_fName_error = "First Name is required";
    $valid = false;
  }
  else {
    $teacher_fName = $_POST["teacher_fName"];
  }


  if(!preg_match("/^[a-zA-z ]*$/",$_POST['teacher_lName'])) {
    $teacher_lName_error = "Only letters and white spaces are allowed";
    $valid = false;
  }
  
  if(empty($_POST["teacher_lName"])) {
    $teacher_lName_error = "Last Name is required";
    $valid = false;
  }
  else {
    $teacher_lName = $_POST["teacher_lName"]; 
  }
  



  if(empty($_POST["teacher_street1"])) {
    $teacher_street1_error = "Street teacher_street is required";
    $valid = false;
  }
  else {
    $teacher_street1 = $_POST["teacher_street1"];
  }
  



  if(empty($_POST["teacher_street2"])) {
    $teacher_street2_error = "";
  }
  else {
    $teacher_street2 = $_POST["teacher_street2"];
  }
  

 
 if(!preg_match("/^[a-zA-z ]*$/",$_POST['teacher_city'])) {
    $teacher_city_error = "Only letters and white spaces are allowed";
    $valid = false;
  }

  if(empty($_POST["teacher_city"])) {
    $teacher_city_error = "Your teacher_city's name is required";
    $valid = false;
  }
  else {
    $teacher_city = $_POST["teacher_city"];
  }
  

  if(empty($_POST["teacher_state"])) {
    $teacher_state_error = "Your state's name is required";
    $valid = false;
  }
  else {
    $teacher_state = $_POST["teacher_state"];
  }
  


  if(!preg_match("/^[0-9]*$/",$_POST['teacher_zipcode'])) {
    $teacher_zipcode_error = "Only numbers are allowed";
    $valid = false;
  }

  if(empty($_POST["teacher_zipcode"])) {
    $teacher_zipcode_error = "Your 5 digit zipcode is required";
    $valid = false;
  }
  else {
    $teacher_zipcode = $_POST["teacher_zipcode"];
  }
  
  

  if(!preg_match('/^[(]{0,1}[0-9]{3}[)]{0,1}[-\s\.]{0,1}[0-9]{3}[-\s\.]{0,1}[0-9]{4}$/', $_POST['teacher_phone'])) {
    $teacher_phone_error = "Invalid format";
    $valid = false;
  }


  
  if(empty($_POST["teacher_phone"])) {
    $teacher_phone_error = "Phone Number is required";
    $valid = false;
  }
  else {
    $teacher_phone = $_POST["teacher_phone"];
  }




  
  if(!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/",$_POST['teacher_email'])) {
    $teacher_email_error = "Invalid email format";
    $valid = false;
  }

  if(empty($_POST["teacher_email"])) {
    $teacher_email_error = "Email is required";
    $valid = false;
  }
  else {
    $teacher_email = $_POST["teacher_email"];
  }
  

if ($valid == true) {
  include '../includes/db.php';

  $sql = "SELECT * FROM teacher WHERE 'teacher_id' = '$_POST[teacher_id]'";
  $rs = mysqli_query($conn, $sql);
  $data = mysqli_fetch_array($rs, MYSQLI_NUM);
  if($data) {
      echo "<script type='text/javascript'>alert('teacher id already exists');</script>";
  }
  else { 
      $sql = "INSERT INTO `teacher`(`teacher_id`, `teacher_fName`, `teacher_lName`, `teacher_street1`, `teacher_street2`, `teacher_city`, `teacher_state`, `teacher_zipcode`, `teacher_phone`, `teacher_email`) VALUES ('$teacher_id', '$teacher_fName', '$teacher_lName', '$teacher_street1', '$teacher_street2', '$teacher_city', '$teacher_state', '$teacher_zipcode', '$teacher_phone', '$teacher_email')";

      if (mysqli_query($conn,$sql)) {
          echo "<script type='text/javascript'>window.top.location='teachers.php';</script>";
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
