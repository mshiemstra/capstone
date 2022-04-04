<?php

$class_id = $class_desc = $class_name = $class_fName = $class_lName = $class_term = "";

$class_id_error = $class_desc_error = $class_name_error = $class_fName_error = $class_lName_error = $class_term_error = "";


$valid = true;

if ($_SERVER["REQUEST_METHOD"] == "POST"){
  

	if(!preg_match("/^[0-9]*$/",$_POST['class_id'])) {
	    $class_id_error = "Only numbers are allowed";
	    $valid = false;
	}

	if(empty($_POST["class_id"])) {
      $class_id_error = "class ID is required";
      $valid = false;
  }
  else {
      $class_id = $_POST["class_id"];
  }




  if(empty($_POST["class_term"])) {
    $class_term_error = "Class term is required";
    $valid = false;
  }
  else {
    $class_term = $_POST["class_term"];
  }




  if(!preg_match("/^[a-zA-z ]*$/",$_POST['class_desc'])) {
    $class_desc_error = "Only letters and white spaces are allowed";
    $valid = false;
  }
  
  if(empty($_POST["class_desc"])) {
    $class_desc_error = "Class description is required";
    $valid = false;
  }
  else {
    $class_desc = $_POST["class_desc"];
  }


  if(!preg_match("/^[a-zA-z ]*$/",$_POST['class_name'])) {
    $class_name_error = "Only letters and white spaces are allowed";
    $valid = false;
  }
  
  if(empty($_POST["class_name"])) {
    $class_name_error = "Class name is required";
    $valid = false;
  }
  else {
    $class_name = $_POST["class_name"]; 
  }
  



  if(empty($_POST["person_id"])) {
    $person_id_error = "Instructor's ID is required";
    $valid = false;
  }
  else {
    $person_id = $_POST["person_id"];
  }
  
   
  

if ($valid == true) {
  include 'includes/db.php';

  $sql = "SELECT * FROM class WHERE 'class_id' = '$_POST[class_id]'";
  $rs = mysqli_query($conn, $sql);
  $data = mysqli_fetch_array($rs, MYSQLI_NUM);

  if($data) {
      echo "<script type='text/javascript'>alert('class id already exists');</script>";
  }
  else { 
      $sql = "INSERT INTO `class`(`class_id`, `class_term`, `class_desc`, `class_name`, `person_id`) ";

      if (mysqli_query($conn,$sql)) {
          echo "<script type='text/javascript'>window.top.location='classes.php';</script>";
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
