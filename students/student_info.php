<!DOCTYPE html>
<html>
	<head>
		
		<?php include 'includes/student_head.php'; ?>

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
				<a href="index.php"><img id="logo" src="../images/logo.png"></a>
			</h1>
			<?php include "includes/student_navbar.php" ?>
		</header>
		<main>
			<table class="table table-bordered">
				<thead>
					<tr class="th">					
						<td>Student ID</td>
						<td>First Name</td>
						<td>Last Name</td>
						<td>Class Description</td>
						<td>Class Name</td>
						<td>Instructor First Name</td>
						<td>Instructor Last Name</td>
						<td>Term</td>				
					</tr>
				</thead>
				<tbody>
				<?php
					$id = $_REQUEST['id'];
					$id = mysqli_real_escape_string($conn, $id);

					$sql = "SELECT P.person_id, P.person_fName, P.person_lName, C.class_desc, C.class_name, CI.person_fName AS instructor_fName, CI.person_lName AS instructor_lName, C.class_term
						FROM class AS C, 
							enrollment AS E, 
							person AS P,
							class_instructors AS CI
						WHERE 
							E.class_id = C.class_id 
						AND E.person_id = P.person_id 
						AND E.person_id = $id 
						AND CI.class_id = E.class_id
						GROUP BY class_name ASC
							";



		
					$result = $conn->query($sql);
					$student_id = '0';
					$student_fName = '';
					$student_lName = '';
					if ($result->num_rows > 0) {				  
					  while($row = mysqli_fetch_array($result)) {
					    echo "<tr><td>" . $row["person_id"] . "</td><td>" . $row["person_fName"] . "</td><td>" . $row["person_lName"] . "</td><td>" . $row["class_desc"] . "</td><td>" . $row["class_name"] . "</td><td>" . $row["instructor_fName"] . "</td><td>" . $row["instructor_lName"] . "</td><td>" . $row["class_term"] . "</td></tr>";		
					    $student_id = $row['person_id'];
					    $student_fName = $row['person_fName'];
					    $student_lName = $row['person_lName'];
					  }
					} 
					else {
					  echo "0 results";
					}

					$conn->close();

				//	echo 'something';
				//	echo $sql;
				?>
				</tbody>			
			</table>
			<section id="sub-button">
				<button id="enroll_student"><a href="enroll_student.php?id=<?php echo $id?>">Enroll Student</a></button>
			</section>
		</main>
	</body>
</html>