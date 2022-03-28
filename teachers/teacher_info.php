<!DOCTYPE html>
<html>
	<head>
		
		<?php include 'includes/teacher_head.php'; ?>

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
			<?php include "includes/teacher_navbar.php" ?>
		</header>
		<main>
			<table id="results_list">
				<tr class="th">					
					<td>ID</td>
					<td>First Name</td>
					<td>Last Name</td>
					<td>Class Description</td>
					<td>Class Name</td>
					<td>Instructor</td>
					<td>Term</td>				
				</tr>
				<?php
					$id = $_REQUEST['id'];
					$id = mysqli_real_escape_string($conn, $id);

					$sql = "SELECT * FROM class AS C, enrollment AS E, teacher AS S WHERE E.class_id = C.class_id AND E.teacher_id = S.teacher_id AND E.teacher_id = $id GROUP BY class_name ASC";

		
					$result = $conn->query($sql);
					$teacher_id = '0';
					$teacher_fName = '';
					$teacher_lName = '';
					if ($result->num_rows > 0) {				  
					  while($row = mysqli_fetch_array($result)) {
					    echo "<tr><td>" . $row["teacher_id"] . "</td><td>" . $row["teacher_fName"] . "</td><td>" . $row["teacher_lName"] . "</td><td>" . $row["class_desc"] . "</td><td>" . $row["class_name"] . "</td><td>" . $row["class_teacher"] . "</td><td>" . $row["class_term"] . "</td></tr>";		
					    $teacher_id = $row['teacher_id'];
					    $teacher_fName = $row['teacher_fName'];
					    $teacher_lName = $row['teacher_lName'];
					  }
					} 
					else {
					  echo "0 results";
					}

					$conn->close();
				?>
				<tr>
					<td><button id="enroll_teacher"><a href="enroll_teacher.php?id=<?php echo $teacher_id . ' ' . $teacher_fName . ' ' . $teacher_lName ?>">Enroll teacher</a></button></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
				</tr>

			</table>
		</main>
	</body>
</html>