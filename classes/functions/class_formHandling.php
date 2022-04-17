<?php

$class_term = $class_desc = $class_name = "";

$class_term_error = $class_desc_error = $class_name_error = "";


$valid = true;

if ($_SERVER["REQUEST_METHOD"] == "POST"){
  

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
  
  

if ($valid == true) {
  include 'includes/db.php';

  $sql = "SELECT * FROM class WHERE 'class_id' = '$_POST[class_id]'";
  $rs = mysqli_query($conn, $sql);
  $data = mysqli_fetch_array($rs, MYSQLI_NUM);

  if($data) {
      echo "<script type='text/javascript'>alert('class id already exists');</script>";
  }
  else { 
      $sql = "INSERT INTO `class`(`class_term`, `class_desc`, `class_name`) ";

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
