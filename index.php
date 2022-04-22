<!DOCTYPE html>
<html>
	<head>
		
		<?php include 'includes/head.php'; ?>

	</head>
	<body>
		<header class="header">
			<h1>
				<a href="index.php"><img id="logo" src="images/logo.png"></a>
			</h1>
			<?php include "includes/navbar.php" ?>
		</header>
		<main>
			<section>
				<h2>Dashboard</h2>
			</section>
			<section id="dashboard">
				<p>
					Welcome to the CIS Capstone Dashboard. This system is designed specifically for HR representatives who have access to add, remove, and update students, teachers, and classes.  If you do not have a business need for this system, please exit immediately and contact your line of support.  Failure to do so, could result in a security compliance penalty against you.
				</p>
				<p>
					If you do have a business need to access this system, please proceed with viewing or modifying any of the records you need.  Please note, any additions or updates you make in this system will update the backend databases; please consult your management team before making any changes.  Keep in mind, <strong>any records deleted from this system will be permanently deleted from the database and cannot be undone</strong>.
				</p>
			</section>
		</main>
		<?php include 'includes/footer.php'; ?>
	</body>
</html>