<?php
	$servername = "localhost";
	$username = "mshiemstra";
	$password = "June6187!";
	$database = "capstone";

	$conn = mysqli_connect($servername, $username, $password, $database);

	if ($conn->connect_error) {
	  die("Connection failed: " . $conn->connect_error);
	}


	$student_id_error = $student_fName_error = $student_lName_error = $student_street1_error = $student_street2_error = $student_city_error = $student_state_error = $student_zipcode_error = $student_phone_error = $student_email_error = "";

	
	$student_id = $student_fName = $student_lName = $student_street1 = $student_street2 = $student_city = $student_state = $student_zipcode = $student_phone = $student_email = "";
	

	/*$student_id = $_POST['student_id'];
	$student_fName = $_POST['student_fName'];
	$student_lName = $_POST['student_lName'];
	$student_street1 = $_POST['student_street1'];
	$student_street2 = $_POST['student_street2'];
	$student_city = $_POST['student_city'];
	$student_state = $_POST['student_state'];
	$student_zipcode = $_POST['student_zipcode'];
	$student_phone = $_POST['student_phone'];
	$student_email = $_POST['student_email'];
*/
	
	if ($_SERVER["REQUEST_METHOD"] == "POST"){
	  	if (empty($_POST["student_id"])){
			$student_id_error = "Student ID is required";
		} 
		else {
			$student_id = student_input($_POST["student_id"]);
		    if (!preg_match("/^[0-9]*$/",$student_id)) {
		      $student_fName_error = "Only numbers are allowed";
			}
		}

	  	if (empty($_POST["student_fName"])){
			$student_fName_error = "Student's first name is required";
		} 
		else {
			$student_fName = student_input($_POST["student_fName"]);
		   		if (!preg_match("/^[a-zA-Z-' ]*$/",$student_fName)) {
		      	$student_fName_error = "Only letters and white space allowed";
			}
		}

		if (empty($_POST["student_lName"])){
			$student_lName_error = "Student's last name is required";
		} 
		else {
			$student_lName = student_input($_POST["student_lName"]);
	    	if (!preg_match("/^[a-zA-Z-' ]*$/",$student_lName)) {
	      		$student_lName_error = "Only letters and white space allowed";
			}
		}

		if (empty($_POST["student_street1"])){
			$student_street1_error = "Student's street address is required";
		} 
		else {
			$student_street1 = student_input($_POST["student_street1"]);
		    if (!preg_match('/^(?:\\d+ [a-zA-Z ]+, ){2}[a-zA-Z ]+$/',$student_street1)) {
		    	$student_street1_error = "Only letters and white space allowed";
			}
		}


		$student_street2 = student_input($_POST["student_street2"]);


		if (empty($_POST["student_city"])){
			$student_city_error = "Student's city name is required";
		} 
		else {
			$student_city = student_input($_POST["student_city"]);
		   	if (!preg_match("/^[a-zA-Z-' ]*$/",$student_city)) {
		      	$student_city_error = "Only letters and white space allowed";
			}
		}

		if (empty($_POST["student_state"])){
			$student_state_error = "Student's state name is required";
		} 
		else {
			$student_state = student_input($_POST["student_state"]);
		    if (!preg_match("/^[a-zA-Z-' ]*$/",$student_state)) {
		    	$student_state_error = "Only letters and white space allowed";
			}
		}

		if (empty($_POST["student_zipcode"])){
			$student_zipcode_error = "Student's state name is required";
		} 
		else {
			$student_zipcode = student_input($_POST["student_zipcode"]);
		    if (!preg_match("/^[0-9]*$/",$student_zipcode)) {
		    	$student_zipcode_error = "Only numbers allowed";
			}
		}

		if (empty($_POST["student_phone"])){
			$student_phone_error = "Student's phone number is required";
		} 
		else {
			$student_phone = student_input($_POST["student_phone"]);
		    if (!preg_match("/^[0-9]{3}-[0-9]{4}-[0-9]{4}$/",$student_phone)) {
		      	$student_phone_error = "Invalid format";
			}
		}

		if (empty($_POST["student_email"])){
			$student_email_error = "Student's email is required";
		} 
		else {
			$student_email = student_input($_POST["student_email"]);
		    if (!filter_var($student_email, FILTER_VALIDATE_EMAIL)) {
				$student_email_error = "Invalid email format.";
			}
		}
	

	function student_input($data) {
	  $data = trim($data);
	  $data = stripslashes($data);
	  $data = htmlspecialchars($data);
	  return $data;
	}
	
	//mysqli_real_escape_string(mysqli $mysql, string $string): string
	// EXAMPLE: $student_id = $conn.real_escape_string($_POST['student_id']);

	
		$sql = "INSERT INTO student  student_id, student_fName, student_lName, student_street1, student_street2, student_city, student_state, student_zipcode, student_phone, student_email) 
	VALUES (" . $_POST['student_id'] . ", " . $_POST['student_fName'] . ", " . $_POST['student_lName'] . ", " . $_POST['student_street1'] . ", " . $_POST['student_street2'] . ", " . $_POST['student_city'] . ", " . $_POST['student_state'] . ", " . $_POST['student_zipcode'] . ", " . $_POST['student_phone'] . ", " . $_POST['student_email'] . ")";



		if(mysqli_query($conn, $sql)){
			echo "Records inserted successfully.";
			header("Location: students.php");
		} 
		else{
			echo "ERROR: Unable to execute" . " " . $sql . mysqli_error($conn);
		}

		mysqli_close($conn);
	};
?>