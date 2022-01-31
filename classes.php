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
				<tr>					
					<td>Class Term</td>
					<td>Class ID</td>
					<td>Class Name</td>
					<td>Instructor</td>					
				</tr>
				<?php
					$sql = "SELECT * FROM class ORDER BY class_id DESC";
					$result = $conn->query($sql);

					if ($result->num_rows > 0) {				  
					  while($row = mysqli_fetch_array($result)) {
					    echo "<tr><td>" . $row["class_term"] . "</td><td>" . $row["class_id"] . "</td><td>" . $row["class_name"] . "</td><td>" . $row["class_teacher"] . "</td></tr>";
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