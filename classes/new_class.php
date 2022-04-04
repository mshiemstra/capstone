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
				<form method="post" id="new_class_form" action="javascript:void(0)">
					<table>
						<tr>
							<td></td>
			                <td>
			            		<span id="class_error1"></span>
			            	</td>
			            </tr>
						<tr>
							<td><label>Class ID<span class="required">*</span></label></td>
							<td><input type="text" id="class_id" name="class_id" ></td>
						</tr>
						<tr>
							<td></td>
			                <td>
			            		<span id="class_error2"></span>
			            	</td>
			            </tr>
						<tr>
							<td><label>Term<span class="required">*</span></label></td>
							<td><input type="text" id="class_term" name="class_term" ></td>
						</tr>
						<tr>
							<td></td>
			                <td>
			            		<span id="class_error3"></span>
			            	</td>
			            </tr>
						<tr>
							<td><label>Class Description<span class="required">*</span></label></td>
							<td><input type="text" id="class_desc" name="class_desc" ></td>
						</tr>
						<tr>
							<td></td>
			                <td>
			            		<span id="class_error4"></span>
			            	</td>
			            </tr>
						<tr>
							<td><label>Class Name<span class="required">*</span></label></td>
							<td><input type="text" id="class_name" name="class_name" ></td>
						</tr>
						<tr>
							<td></td>
			                <td>
			            		<span id="class_error5"></span>
			            	</td>
			            </tr>
			            <tr>
							<td><label>Instructor's ID<span class="required">*</span></label></td>
							<td><input type="text" id="person_id" name="person_id" ></td>
						</tr>
			    <!--        <tr>
							<td><label>Instructor's First Name<span class="required">*</span></label></td>
							<td><input type="text" id="class_fName" name="class_fName" ></td>
						</tr>
						<tr>
							<td></td>
			                <td>
			            		<span id="class_error6"></span>
			            	</td>
			            </tr>
			            <tr>
							<td><label>Instructor's Last Name<span class="required">*</span></label></td>
							<td><input type="text" id="class_lName" name="class_lName" ></td>
						</tr> -->
						
						<tr>
							<td><input type="submit" name="submit" value="Submit"></td>
							<td><input type="reset" name="reset" value="Reset" onclick='window.location.reload()'></td>
						</tr>
					</table>
				</form>
			</section>
		</main>
	</body>
</html>