
<!DOCTYPE html>
<html>
	<head>
		
		<?php include '../students/includes/student_head.php'; ?>

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
			<form id="enrollment_form" action="javascript:void(0)" method="post">
			  <input type="hidden" id="student_id" name="student_id" value="<?php $_GET['id'] ?>">
			  <?php echo $_GET['id'] ?>

			  <input type="text" id="class_id" name="class_id">				  				 
			  <button value="Submit" type="submit">Submit</button>
			</form>

			<div id="result">
				start
			</div>

				<script src="js/enroll_student_function.js"></script>

		</main>
	</body>
</html>






<?php

/*


2. https://web-development-class.readthedocs.io/en/latest/semester_2/11_getting_form_data/getting_form_data.html#id4

Example:
	<p><b>Method 5:</b></p>
    <p>JavaScript/AJAX/jQuery form submission using "post" method.</p>
    <p>Check JavaScript console for the result.</p>
    <form action="javascript:void(0);">
        <input id="jqueryPostField" name="fieldname" type="text" />
        <button id="jqueryPostButton">Submit</button>
    </form>



3. https://web-development-class.readthedocs.io/en/latest/semester_2/11_getting_form_data/getting_form_data.html#id7


function jqueryPostButtonAction() {

    let url = "api/form_test_servlet";
    let myFieldValue = $("#classid or student id Field").val();
    let dataToServer = { fieldname : myFieldValue }; -- Name Value Pair, separate by commas.

    $.post(url, dataToServer, function (dataFromServer) {
        console.log("Finished calling servlet.");
        console.log(dataFromServer);
    });
}
let jqueryPostButton = $('#jqueryPostButton');
jqueryPostButton.on("click", jqueryPostButtonAction);

package JSON and send across server


4. Check into Github and send Paul to this page.

*/

?>