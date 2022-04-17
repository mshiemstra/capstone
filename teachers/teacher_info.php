<!DOCTYPE html>
<html>
	<head>
		
		<?php include 'includes/teacher_head.php'; ?>

	</head>
	<body>		
		<header class="header">
			<h1>
				<a href="index.php"><img id="logo" src="../images/logo.png"></a>
			</h1>
			<?php include "includes/teacher_navbar.php" ?>
		</header>
		<main>
			<table id="teacher_info_list" class="nowrap">
				<thead>
					<tr class="th">					
						<th>Teacher ID</th>
						<th>First Name</th>
						<th>Last Name</th>
						<th>Class Description</th>
						<th>Class Name</th>
						<th>Term</th>				
					</tr>
				</thead>
				<tbody>
					<?php
						$id = $_REQUEST['id'];
						$id = mysqli_real_escape_string($conn, $id);

						$sql = "SELECT * FROM class AS C, class_instructors AS CI, enrollment AS E WHERE C.class_id = CI.class_id AND E.person_id = CI.person_id AND E.person_id = $id GROUP BY class_name ASC";

			
						$result = $conn->query($sql);
						$teacher_id = '0';
						$teacher_fName = '';
						$teacher_lName = '';
						if ($result->num_rows > 0) {				  
						  while($row = mysqli_fetch_array($result)) {
						    echo "<tr><td>" . $row["person_id"] . "</td><td>" . $row["person_fName"] . "</td><td>" . $row["person_lName"] . "</td><td>" . $row["class_desc"] . "</td><td>" . $row["class_name"] . "</td><td>" . $row["class_term"] . "</td></tr>";		
						    $teacher_id = $row['person_id'];
						    $teacher_fName = $row['person_fName'];
						    $teacher_lName = $row['person_lName'];
						  }
						} 
						else {
						//  echo "0 results";
						}

						$conn->close();
					?>
				</tbody>
			</table>
			<section>
				<button id="enroll_teacher"><a href="enroll_teacher.php?id=<?php echo $id?>">Enroll Teacher</a></button>
			</section>
		</main>
	</body>
</html>