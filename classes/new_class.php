<!DOCTYPE html>
<html>
	<head>
		<?php include '../classes/includes/class_head.php'; ?>
	</head>
	<body>
		<header class="header">
			<h1>
				<a href="index.php"><img id="logo" src="../images/logo.png"></a>
			</h1>
			<?php include "../classes/includes/class_navbar.php" ?>
		</header>
		<main>
			<section class="new_class_form">
				<form method="post" id="new_class_form" class="form-horizontal" action="javascript:void(0)">
					 <div class="info class_term">
				      	<label>Class Term <span class="required">*</span><span id="class_error1"></span></label>				      	
						<input type="text" id="class_term" name="class_term">
					</div>
					<div class="info class_desc">
				      	<label>Class Description <span class="required">*</span><span id="class_error2"></span></label>
						<input type="text" id="class_desc" name="class_desc">
					</div>
					<div class="info class_name">
					    <label>Class Name <span class="required">*</span><span id="class_error3"></span></label>
						<input type="text" id="class_name" name="class_name">
					</div>	
					<input type="submit" name="submit" value="Submit">
					<input type="reset" name="reset" value="Reset" onclick='window.location.reload()'>
				</form>
			</section>
		</main>
	</body>
</html>