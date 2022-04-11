<!DOCTYPE html>
<html>
	<head>
		
		<?php include 'includes/head.php'; ?>

	</head>
	<body>
		<section class="topbar">
		  <div class="search-container">
		    <form action="/action_page.php">
		      <input type="text" placeholder="Search.." name="search">
		      <button type="submit"><i class="fa fa-search"></i></button>
		    <!--  <script src="student/functions/student_formValidation.js"></script> -->
		    </form>
		  </div>
		 </section>
		<header class="header">
			<h1>
				<a href="index.php"><img id="logo" src="images/logo.png"></a>
			</h1>
			<?php include "includes/navbar.php" ?>
		</header>
		<main>

			<table class="table table-bordered" id="student_list">
				<thead>
					<tr class="th">	
						<td></td>									
						<td>Student ID</td>
						<td>First Name</td>
						<td>Last Name</td>
						<td>Street Address</td>
						<td>Bldg/Ste/Lot</td>
						<td>City</td>
						<td>State</td>
						<td>Zipcode</td>
						<td>Phone Number</td>
						<td>Email Address</td>
						<td></td>
					</tr>
				</thead>
				<tbody>
					<?php
						$sql = "SELECT * FROM person WHERE person_role = 'S' ORDER BY person_id ASC";
						$result = $conn->query($sql);

						if ($result->num_rows > 0) {				  
						  while($row = mysqli_fetch_array($result)) {
						    echo "<tr>";
						    $select = "students/student_info.php?id=" . $row['person_id'];
						    echo "<td><a id='select' href='$select'>Select</a></td>";

						    echo "<td id='student_id'>" . $row["person_id"] . "</td><td>" . $row["person_fName"] . "</td><td>" . $row["person_lName"] . "</td><td>" . $row["person_street1"] . "</td><td>" . $row["person_street2"] . "</td><td>" . $row["person_city"] . "</td><td>" . $row["person_state"] . "</td><td>" . $row["person_zipcode"] . "</td><td>" . $row["person_phone"] . "</td><td>" . $row["person_email"] . "</td>";

						    $delete = "students/delete_student.php?id=" . $row['person_id'];
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

			<button id="new_student"><a href="students/new_student.php">Add Student</a></button>
			

		</main>
		
	</body>
</html>