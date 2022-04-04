
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
				<a href="../index.php"><img id="logo" src="../images/logo.png"></a>
			</h1>
			<?php include "includes/teacher_navbar.php" ?>
		</header>
		<main>
			<form id="enrollment_form" action="javascript:void(0)" method="post">
			  <input type="hidden" id="person_id" name="person_id" value="<?php echo $_GET['id'] ?>">
			  <?php echo $_GET['id'] ?>

			  <input type="text" id="class_id" name="class_id">	
			  <input type="text" id="role" name="role">	

			  <button value="Submit" type="submit">Submit</button>
			</form>

			<div id="result">
				start
			</div>

				<script src="functions/enroll_teacher_function.js"></script>

		</main>
	</body>
</html>
