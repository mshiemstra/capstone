
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
				<a href="../index.php"><img id="logo" src="../images/logo.png"></a>
			</h1>
			<?php include "includes/student_navbar.php" ?>
		</header>
		<main>
			<table>
				<thead>
					<tr>
						<td><form id="enrollment_form" action="javascript:void(0)" method="post"></td>
						<td><label>Class ID</label></td>
						<td><label>Role (S or T)</label></td>
					</tr>
					<tr>
						<td><input type="hidden" id="person_id" name="person_id" value="<?php echo $_GET['id'] ?>">
						  <?php echo $_GET['id'] ?></td>
						<td><input type="text" id="class_id" name="class_id"></td>
						<td><input type="text" id="role" name="role"></td>
					</tr>
					<tr>
						<td><button value="Submit" type="submit">Submit</button></td>
						<td></td>
						<td></td>
						</form>
					</tr>
				</thead>
			</table>

			<div id="result">
				start
			</div>

				<script src="functions/enroll_student_function.js"></script>

		</main>
	</body>
</html>
