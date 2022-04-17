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

			<table class="nowrap" id="class_list">
				<thead>
					<tr class="th">	
						<th></th>				
						<th>Class ID</th>
						<th>Term</th>
						<th>Class Description</th>
						<th>Class Name</th>
						<th>Instructor First Name</th>
						<th>Instructor Last Name</th>
						<th># of Students</th>				
					</tr>
				</thead>
				<tbody>
					<?php

						$sql = "SELECT C.class_id, 
								       C.class_term, 
								       C.class_desc, 
								       C.class_name,
								       CI.person_fName AS instructor_fName,
								       CI.person_lName AS instructor_lName,
								       COUNT(*) AS student_count
								FROM class AS C,
								     enrollment AS E,
								     class_instructors AS CI,
								     person AS P
								WHERE C.class_id = E.class_id
								AND CI.class_id = E.class_id
								AND E.person_id = P.person_id
								AND role = 'S'
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