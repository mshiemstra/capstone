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

			<table id="teachers_list">
				<tr>					
					<td>Teacher ID</td>
					<td>First Name</td>
					<td>Last Name</td>
					<td>Street Address</td>
					<td>Bldg/Ste/Lot</td>
					<td>City</td>
					<td>State</td>
					<td>Zipcode</td>
					<td>Phone Number</td>
					<td>Office Hours</td>
					<td>Office Location</td>
					<td>Office Phone Number</td>
					<td>Teacher Status</td>
				</tr>
				<?php
					$sql = "SELECT * FROM teacher ORDER BY teacher_id DESC";
					$result = $conn->query($sql);

					if ($result->num_rows > 0) {				  
					  while($row = mysqli_fetch_array($result)) {
					    echo "<tr><td>" . $row["teacher_id"] . "</td><td>" . $row["teacher_fName"] . "</td><td>" . $row["teacher_lName"] . "</td><td>" . $row["teacher_homeStreet1"] . "</td><td>" . $row["teacher_homeStreet2"] . "</td><td>" . $row["teacher_homeCity"] . "</td><td>" . $row["teacher_homeState"] . "</td><td>" . $row["teacher_homeZipcode"] . "</td><td>" . $row["teacher_homePhone"] . "</td><td>" . $row["teacher_hours"] . "</td><td>" . $row["teacher_office"] . "</td><td>" . $row["teacher_officePhone"] . "</td><td>" . $row["teacher_status"] . "</td></tr>";
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