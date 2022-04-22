<!DOCTYPE html>
<html>
	<head>
		
		<?php include 'includes/head.php'; ?>

	</head>
	<body>
		<header class="header">
			<h1>
				<a href="index.php"><img id="logo" src="images/logo.png"></a>
			</h1>
			<?php include "includes/navbar.php" ?>
		</header>
		<main>

			<table class="nowrap" id="teacher_list">
				<thead>
					<tr class="th">	
						<th></th>									
						<th>Teacher ID</th>
						<th>First Name</th>
						<th>Last Name</th>
						<th>Street Address</th>
						<th>Bldg/Ste/Lot</th>
						<th>City</th>
						<th>State</th>
						<th>Zipcode</th>
						<th>Phone Number</th>
						<th>Email Address</th>
						<th></th>
					</tr>
				</thead>
				<tbody>
					<?php
						$sql = "SELECT * FROM person WHERE person_role = 'T' ORDER BY person_id ASC";
						$result = $conn->query($sql);

						if ($result->num_rows > 0) {				  
						  while($row = mysqli_fetch_array($result)) {
						    echo "<tr>";
						    $select = "teachers/teacher_info.php?id=" . $row['person_id'];
						    $edit = "teachers/new_teacher.php?id=" . $row['person_id'];
						    echo "<td><a id='select' href='$select'>Select</a> ";
						    echo "<a id='select' href='$edit'>Edit</a></td>";
						    echo "<td id='teacher_id'>" . $row["person_id"] . "</td><td>" . $row["person_fName"] . "</td><td>" . $row["person_lName"] . "</td><td>" . $row["person_street1"] . "</td><td>" . $row["person_street2"] . "</td><td>" . $row["person_city"] . "</td><td>" . $row["person_state"] . "</td><td>" . $row["person_zipcode"] . "</td><td>" . $row["person_phone"] . "</td><td>" . $row["person_email"] . "</td>";

						    $delete = "teachers/delete_teacher.php?id=" . $row['person_id'];
						    echo "<td><a id='delete' onClick=\"javascript: return confirm('Please confirm deletion');\" href='$delete'>Delete</a></td></tr>";
						  }
						} 
						else {
						  echo "0 results";
						}

						$conn->close();
					?>
				</tbody>
			</table>

			<button id="new_teacher"><a href="teachers/new_teacher.php">Add teacher</a></button>
		</main>
		<?php include 'includes/footer.php' ?>
	</body>
</html>