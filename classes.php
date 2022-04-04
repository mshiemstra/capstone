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

			<table id="classes_list">
				<tr class="th">					
					<td>Class ID</td>
					<td>Term</td>
					<td>Class Description</td>
					<td>Class Name</td>
					<td>Instructor First Name</td>
					<td>Instructor Last Name</td>
					<td># of Students</td>				
				</tr>
				<?php

					$sql = "SELECT C.class_id, C.class_term, C.class_desc, C.class_name, C.person_id, P.person_id, P.person_fName, P.person_lName, COUNT(*) AS student_count FROM class AS C, enrollment AS E, person AS P WHERE E.class_id = C.class_id AND C.person_id = P.person_id GROUP BY class_id";

		
					$result = $conn->query($sql);

					if ($result->num_rows > 0) {				  
					  while($row = mysqli_fetch_array($result)) {
					    echo "<tr><td>" . $row["class_id"] . "</td><td>" . $row["class_term"] . "</td><td>" . $row["class_desc"] . "</td><td>" . $row["class_name"] . "</td><td>" . $row["person_fName"] . "</td><td>" . $row["person_lName"] ."</td><td>" . $row["student_count"] . "</td></tr>";					
					  }
					} 
					else {
					  echo "0 results";
					}

					$conn->close();
				?>





			</table>

			<button id="new_student"><a href="classes/new_class.php">Add Class</a></button>

		</main>
	</body>
</html>