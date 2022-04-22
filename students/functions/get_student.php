<?php

include '../../includes/db.php';

$data = json_decode(file_get_contents('php://input'), true);

$person_id = $data['id'];

$person_id = mysqli_real_escape_string($conn, $person_id);

$sql = "SELECT * FROM person WHERE person_id = $person_id";
$result = $conn->query($sql);

while($row = mysqli_fetch_array($result)) {
	$person_id = $row['person_id'];
	$person_fName = $row['person_fName'];
	$person_lName = $row['person_lName'];
	$person_street1 = $row['person_street1'];
	$person_street2 = $row['person_street2'];
	$person_city = $row['person_city'];
	$person_state = $row['person_state'];
	$person_zipcode = $row['person_zipcode'];
	$person_phone = $row['person_phone'];
	$person_email = $row['person_email'];

	echo "{\"person_id\":\"$person_id\",
			\"person_fName\":\"$person_fName\",
			\"person_lName\":\"$person_lName\",
			\"person_lName\":\"$person_lName\",
			\"person_street1\":\"$person_street1\",
			\"person_street2\":\"$person_street2\",
			\"person_city\":\"$person_city\",
			\"person_state\":\"$person_state\",
			\"person_zipcode\":\"$person_zipcode\",
			\"person_phone\":\"$person_phone\",
			\"person_email\":\"$person_email\"}";
}

?>