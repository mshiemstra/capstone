<!DOCTYPE html>
<html>
	<head>
		
		<?php include 'includes/head.php'; ?>

	</head>
	<body>
		<header class="header">
			<h1>Simpson College</h1>
		</header>
		<section id="selection">
				<h3>Portfolio</h3>
				<ul>
					<li>
						<a href="portfolio.php">All Projects</a>
					</li>   
					<li>
						<a href="list.php">Site Selection</a>	
					</li>
				</ul>	    
			</section>
			<hr>
		</div>
		<select class="site-selection" OnChange="window.location.href=this.value">
			<option value="" selected>Select Student</option>
		    <option id="" value="#">CMS Sites</option>
		    <option id="" value="#">Framework Sites</option>
		    <option id="" value="#">Group Projects</option>
			<option id="" value="#">HTML/CSS Sites</option>
			<option id="" value="#">Mobile Only Sites</option>
			<option id="" value="#">PHP Sites</option>
			<option id="" value="#">Individual School Projects</option>
		</select>
		<section>
			<button><a href="new_student.php">Add Student</a></button>
		</section>
		<footer>
			<?php include 'includes/footer.php' ?>
		</footer>
	</body>
</html>