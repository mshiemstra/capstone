<?php

//define variables and set to empty values
$student_id_error = $student_fName_error = $student_lName_error = $student_street1_error = $student_street2_error = $student_city_error = $student_state_error = $student_zipcode_error = $student_phone_error = $student_email_error = "";


if ($_SERVER["REQUEST_METHOD"] == "POST"){
  
 	$valid = true;


	if(!preg_match("/^[0-9]*$/",$_POST['student_id'])) {
	    $student_id_error = "Only numbers are allowed";
	    $valid = false;
	}

	if(empty($_POST["student_id"])) {
	    $student_id_error = "Student ID is required";
	    $valid = false;
	}
	else {
	    $student_id = test_input($_POST["student_id"]);
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
    $student_fName = test_input($_POST["student_fName"]);
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
    $student_lName = test_input($_POST["student_lName"]); 
  }
  



  if(empty($_POST["student_street1"])) {
    $student_street1_error = "Street student_street is required";
    $valid = false;
  }
  else {
    $student_street1 = test_input($_POST["student_street1"]);
  }
  



  if(empty($_POST["student_street2"])) {
    $student_street2_error = "";
  }
  else {
    $student_street2 = test_input($_POST["student_street2"]);
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
    $student_city = test_input($_POST["student_city"]);
  }
  
    

  if(!preg_match("/^[a-zA-z ]*$/",$_POST['student_state'])) {
    $student_state_error = "Only letters and white spaces are allowed";
    $valid = false;
  }

  if(empty($_POST["student_state"])) {
    $student_state_error = "Your state's name is required";
    $valid = false;
  }
  else {
    $student_state = test_input($_POST["student_state"]);
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
    $student_zipcode = test_input($_POST["student_zipcode"]);
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
    $student_phone = test_input($_POST["student_phone"]);
    $valid = false;
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
    $student_email = test_input($_POST["student_email"]);
  }
  
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
  
if ($valid == true) {
  include 'includes/db.php';

 $sql = "SELECT * FROM student WHERE 'student_id' = '$_POST[student_id]'";
  $rs = mysqli_query($conn,$sql);
  $data = mysqli_fetch_array($rs, MYSQLI_NUM);
  if($data) {
      echo "<script type='text/javascript'>alert('student id already exists');</script>";
  }
  else { 
      $sql = "INSERT INTO `student`(`student_id`, `student_fName`, `student_lName`, `student_street1`, `student_street2`, `student_city`, `student_state`, `student_zipcode`, `student_phone`, `student_email`) VALUES ('$student_id', '$student_fName', '$student_lName' , '$student_street1' , ' $student_street2' , '$student_city' , '$student_state' , '$student_zipcode' , '$student_phone' , '$student_email')";

      if (mysqli_query($conn,$sql)) {
          echo "<script type='text/javascript'>window.top.location='students.php';</script>";
      }
      else {
          echo "error adding user in database $sql<br/>";
      }
 	}   
}

?>
