<!DOCTYPE html>
<html>
	<head>
		
		<?php include 'includes/class_head.php'; ?>

	</head>
	<body>
		<header class="header">
			<h1>
				<a href="index.php"><img id="logo" src="../images/logo.png"></a>
			</h1>
			<?php include "includes/class_navbar.php" ?>
		</header>
		<main>
			<table id="class_info_list" class="nowrap">
				<thead>
					<tr class="th">
						<th></th>					
						<th>Student ID</th>
						<th>First Name</th>
						<th>Last Name</th>
						<th></th>			
					</tr>
				</thead>
				<tbody>
				<?php
					$id = $_REQUEST['id'];
					$id = mysqli_real_escape_string($conn, $id);

					$sql = "SELECT P.person_id, P.person_fName, P.person_lName
						FROM enrollment AS E, 
							person AS P
						WHERE 
							E.person_id = P.person_id 
						AND E.class_id = $id
						AND E.role = 'S' 
						ORDER BY person_lName ASC
							";

					$result = $conn->query($sql);
					$class_id = '0';
					$person_fName = '';
					$person_lName = '';
					if ($result->num_rows > 0) {				  
					  while($row = mysqli_fetch_array($result)) {
						    $select = "../students.php?id=" . $row['person_id'];
						    $remove = "remove_student.php?id=" . $row['person_id'];

					    echo "<tr><td><a id='select' href='$select'>Select</a></td><td>" . $row["person_id"] . "</td><td>" . $row["person_fName"] . "</td><td>" . $row["person_lName"] . "</td><td><a id='delete' onClick=\"javascript: return confirm('Please confirm removal');\" href='$remove'>Remove</a></td></tr>";		
					    $class_id = $id;
					    $person_fName = $row['person_fName'];
					    $person_lName = $row['person_lName'];
					  }
					} 
					else {
					 // echo "0 results";
					}


					$conn->close();
				//	echo 'something';
				//	echo $sql;
				?>
				</tbody>			
			</table>
			<section id="sub-button">
				<button id="enroll_student"><a href="../students/enroll_student2.php?id=<?php echo $id?>">Enroll Student</a></button>
			</section>

		</main>
	</body>
</html>