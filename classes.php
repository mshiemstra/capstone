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
					<td>Class Description</td>
					<td>Class Name</td>
					<td>Instructor</td>
					<td>Term</td>	
					<td># of Students</td>				
				</tr>
				<?php

					$sql = "SELECT C.class_id, C.class_desc, C.class_name, C.class_teacher, C.class_term, E.student_id, COUNT(*) AS student_count FROM class AS C, enrollment AS E, student AS S WHERE E.class_id = C.class_id AND E.student_id = S.student_id GROUP BY class_id";

		
					$result = $conn->query($sql);

					if ($result->num_rows > 0) {				  
					  while($row = mysqli_fetch_array($result)) {
					    echo "<tr><td>" . $row["class_id"] . "</td><td>" . $row["class_desc"] . "</td><td>" . $row["class_name"] . "</td><td>" . $row["class_teacher"] . "</td><td>" . $row["class_term"] . "</td><td>" . $row["student_count"] . "</td></tr>";

					//  	echo "<tr><td>" . $row["class_id"] . "<td></td>" . $row["class_name"] . "<td></td>" . $row["class_count"] . "</td></tr>";
					  }
					} 
					else {
					  echo "0 results";
					}

					$conn->close();
				?>





			</table>


			

		</main>
	</body>
</html>