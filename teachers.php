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
		      <script src="functions/teacher_formValidation.js"></script>
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

			<table class="table" id="teacher_list">
				<tr class="th">	
					<td>									
					<td>teacher ID</td>
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
				<?php
					$sql = "SELECT * FROM teacher ORDER BY teacher_id ASC";
					$result = $conn->query($sql);

					if ($result->num_rows > 0) {				  
					  while($row = mysqli_fetch_array($result)) {
					    echo "<tr>";
					    $select = "teachers/teacher_info.php?id=" . $row['teacher_id'];
					    echo "<td><a id='select' href='$select'>Select</a></td>";

					    echo "<td id='teacher_id'>" . $row["teacher_id"] . "</td><td>" . $row["teacher_fName"] . "</td><td>" . $row["teacher_lName"] . "</td><td>" . $row["teacher_street1"] . "</td><td>" . $row["teacher_street2"] . "</td><td>" . $row["teacher_city"] . "</td><td>" . $row["teacher_state"] . "</td><td>" . $row["teacher_zipcode"] . "</td><td>" . $row["teacher_phone"] . "</td><td>" . $row["teacher_email"] . "</td>";

					    $delete = "teachers/delete_teacher.php?id=" . $row['teacher_id'];
					    echo "<td><a id='delete' onClick=\"javascript: return confirm('Please confirm deletion');\" href='$delete'>Delete</a></td></tr>";
					  }
					} 
					else {
					  echo "0 results";
					}

					$conn->close();
				?>

			</table>

			<button id="new_teacher"><a href="teachers/new_teacher.php">Add teacher</a></button>
			

		</main>
		
	</body>
</html>