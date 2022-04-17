
<!DOCTYPE html>
<html>
	<head>
		
		<?php include 'includes/student_head.php'; ?>

	</head>
	<body>		
		<header class="header">
			<h1>
				<a href="../index.php"><img id="logo" src="../images/logo.png"></a>
			</h1>
			<?php include "includes/student_navbar.php" ?>
		</header>
		<main>
			<form class="enroll_student_form" id="enrollment_form" action="javascript:void(0)" method="post"></td>
				<div class="info enroll_student_id">
					<label>&nbsp;</label>
					<input type="hidden" id="person_id" name="person_id" value="<?php echo $_GET['id'] ?>">
						  <?php echo $_GET['id'] ?>
				</div>
				<div class="info enroll_class_id">
					<label>Class ID</label>
					<input type="text" id="class_id" name="class_id">
				</div>
				<div class="info enroll_student_role">
					<label>Role (S or T)</label>
					<input type="text" id="role" name="role">
				</div>
				<button class="submit" value="Submit" type="submit">Submit</button></td>
			</form>
			<div id="result">
				&nbsp;
			</div>
			<script src="functions/enroll_student_function.js"></script>
		</main>
	</body>
</html>
