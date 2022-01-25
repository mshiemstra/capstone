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

			<table id="student_list">
				<tr>					
					<td>Student ID</td>
					<td>First Name</td>
					<td>Last Name</td>
					<td>Street Address</td>
					<td>Bldg/Ste/Lot</td>
					<td>City</td>
					<td>State</td>
					<td>Zipcode</td>
					<td>Phone Number</td>
				</tr>
				<?php
					$sql = "SELECT * FROM student ORDER BY student_id DESC";
					$result = $conn->query($sql);

					if ($result->num_rows > 0) {				  
					  while($row = mysqli_fetch_array($result)) {
					    echo "<tr><td>" . $row["student_id"] . "</td><td>" . $row["student_fName"] . "</td><td>" . $row["student_lName"] . "</td><td>" . $row["student_street1"] . "</td><td>" . $row["student_street2"] . "</td><td>" . $row["student_city"] . "</td><td>" . $row["student_state"] . "</td><td>" . $row["student_zipcode"] . "</td><td>" . $row["student_phone"] . "</td></tr>";
					  }
					} 
					else {
					  echo "0 results";
					}

					$conn->close();
				?>





			</table>


			

		</main>
	</body>
</html>