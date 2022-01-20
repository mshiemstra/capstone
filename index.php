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
			<section>
				<h2>Dashboard</h2>
			</section>
			<section id="dashboard">
				<ul>
					<li>
						<a class="#" href="#">Class 1</a>
					</li>
					<li>
						<a class="#" href="#">Class 2</a>
					</li>
					<li>
						<a class="#" href="#">Class 3</a>
					</li>					
				</ul>
			</section>
		</main>
	</body>
</html>