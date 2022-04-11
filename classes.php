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

			<table class="table table-bordered">
				<thead>
					<tr class="th">					
						<td>Class ID</td>
						<td>Term</td>
						<td>Class Description</td>
						<td>Class Name</td>
						<td>Instructor First Name</td>
						<td>Instructor Last Name</td>
						<td># of Students</td>				
					</tr>
				</thead>
				<tbody>
					<?php

						$sql = "SELECT C.class_id, C.class_term, C.class_desc, C.class_name, CI.person_fName AS instructor_fName, CI.person_lName AS instructor_lName, COUNT(*) AS student_count
							FROM class AS C, class_instructors AS CI, enrollment AS E
							WHERE C.class_id = E.class_id
							AND E.person_id = CI.person_id 
							GROUP BY C.class_id ASC
						";
			
						$result = $conn->query($sql);

						if ($result->num_rows > 0) {				  
						  while($row = mysqli_fetch_array($result)) {
						    $select = "classes/class_info.php?id=" . $row['class_id'];

						    echo "<tr><td>" . "<a id='select' href='$select'>Select</a></td><td>" . $row["class_id"] . "</td><td>" . $row["class_term"] . "</td><td>" . $row["class_desc"] . "</td><td>" . $row["class_name"] . "</td><td>" . $row["instructor_fName"] . "</td><td>" . $row["instructor_lName"] ."</td><td>" . $row["student_count"] . "</td></tr>";					
						  }
						} 
						else {
						  echo "0 results";
						}

					//	echo $sql;

						$conn->close();
					?>

				</tbody>
			</table>

			<button id="new_student"><a href="classes/new_class.php">Add Class</a></button>

		</main>
	</body>
</html>