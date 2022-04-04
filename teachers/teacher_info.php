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
					<td>Teacher ID</td>
					<td>First Name</td>
					<td>Last Name</td>
					<td>Class Description</td>
					<td>Class Name</td>
					<td>Term</td>				
				</tr>
				<?php
					$id = $_REQUEST['id'];
					$id = mysqli_real_escape_string($conn, $id);

					$sql = "SELECT * FROM class AS C, person AS P WHERE C.person_id = P.person_id AND P.person_id = $id GROUP BY class_name ASC";

		
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
					  echo "0 results";
					}

					$conn->close();
				?>
				<tr>
					<td><button id="enroll_teacher"><a href="enroll_teacher.php?id=<?php echo $id?>">Enroll teacher</a></button></td>
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