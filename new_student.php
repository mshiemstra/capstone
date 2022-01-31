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
			<?php include 'formhandling.php'; ?>
			<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
				<table>
					<tr>
						<td><label>Student ID</label></td>
						<td><input type="number" name="student_id" required></td>
						<td><?php echo $student_id_error; ?></td>
					</tr>
					<tr>
						<td><label>First Name</label></td>
						<td><input type="text" name="student_fName" required></td>
						<td><?php //echo $student_fName_error ?></td>
					</tr>
					<tr>
						<td><label>Last Name</label></td>
						<td><input type="text" name="student_lName" required></td>
						<td><?php //echo $student_lName_error ?></td>
					</tr>
					<tr>
						<td><label>Street Address</label></td>
						<td><input type="text" name="student_street1" required></td>
						<td><?php //echo $student_street1_error ?></td>
					</tr>
					<tr>
						<td><label>Bldg/Ste/Lot #</label></td>
						<td><input type="text" name="student_street2"></td>						
					</tr>
					<tr>
						<td><label>City</label></td>
						<td><input type="text" name="student_city" required></td>
						<td><?php //echo $student_city_error ?></td>
					</tr>
					<tr>
						<td><label>State</label></td>
						<td><input type="text" name="student_state" required></td>
						<td><?php //echo $student_state_error ?></td>
					</tr>
					<tr>
						<td><label>Zipcode</label></td>
						<td><input type="number" name="student_zipcode" required></td>
						<td><?php //echo $student_zipcode_error ?></td>
					</tr>
					<tr>
						<td><label>Phone Number</label></td>
						<td><input type="text" name="student_phone" placeholder="(###)###-####" required></td>
						<td><?php //echo $student_phone_error ?></td>
					</tr>
					<tr>
						<td><label>Email Address</label></td>
						<td><input type="email" name="student_email" required></td>
						<td><?php //echo $student_email_error ?></td>
					</tr>
					<tr>
						<td><input type="submit" name="submit" value="Submit"></td>
						<td><input type="reset" name="reset" value="Reset"></td>
					</tr>
				</table>
			</form>
		</main>
	</body>
</html>