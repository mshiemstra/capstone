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
		      <script src="functions/student_formValidation.js"></script>
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

			<table id="enrollment_list">
				<tr class="th">				
					<td>Student ID</td>
					<td>First Name</td>
					<td>Last Name</td>
					<td>Class Number</td>
					<td>Class Name</td>
					<td>Teacher</td>
				</tr>
				<?php
					$sql = "SELECT S.student_id, S.student_fName, S.student_lName, C.class_desc, C.class_name, C.class_teacher FROM `enrollment` AS E, `student` AS S, `class` AS C WHERE E.student_id = S.student_id AND E.class_id = C.class_id";
					
					$result = $conn->query($sql);

					if ($result->num_rows > 0) {				  
					  while($row = mysqli_fetch_array($result)) {
					    
					    echo "<td id='enrollment'>" . $row["student_id"] . "</td><td>" . $row["student_fName"] . "</td><td>" . $row["student_lName"] . "</td><td>" . $row["class_desc"] . "</td><td>" . $row["class_name"] . "</td><td>" . $row['class_teacher']."</td></tr>";
					  }
					} 
					else {
					  echo "No results found"; 
					}

					$conn->close();
				?>


		</main>
	</body>
</html>