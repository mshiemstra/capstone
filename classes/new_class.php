<!DOCTYPE html>
<html>
	<head>
		<?php include '../classes/includes/class_head.php'; ?>
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
				<a href="index.php"><img id="logo" src="../images/logo.png"></a>
			</h1>
			<?php include "../classes/includes/class_navbar.php" ?>
		</header>
		<main>
			<section class="new_class_form">
				<form method="post" id="new_class_form" class="form-horizontal" action="javascript:void(0)">	
					<div class="form-group">
						<div class="col-sm-10">
			        		<span class="control-label col-sm-2" for="class_error1" id="class_error1"></span>
			            </div>
			        </div>
					<div class="form-group">
				      	<label class="control-label col-sm-2" for="class_id">Class Term<span class="required">*</span></label>
				      	<div class="col-sm-10">
							<input type="text" id="class_id" name="class_id">
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-10">
			        		<span class="control-label col-sm-2" for="class_error2" id="class_error2"></span>
			            </div>
			        </div>
					<div class="form-group">
				      	<label class="control-label col-sm-2" for="class_desc">Class Description<span class="required">*</span></label>
				      	<div class="col-sm-10">
							<input type="text" id="class_desc" name="class_desc" >
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-10">
			        		<span class="control-label col-sm-2" for="class_error3" id="class_error2"></span>
			            </div>
			        </div>
					<div class="form-group">
				      	<label class="control-label col-sm-2" for="class_name">Class Name<span class="required">*</span></label>
				      	<div class="col-sm-10">
							<input type="text" id="class_name" name="class_name" >
						</div>
					</div>

					<input type="submit" name="submit" value="Submit">
					<input type="reset" name="reset" value="Reset" onclick='window.location.reload()'>
				</form>
			</section>
		</main>
	</body>
</html>