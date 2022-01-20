<!DOCTYPE html>
<html>
	<head>
		
		<?php include 'includes/head.php'; ?>

	</head>
	<body>
		<section id="topbar"><a id="search" href="student_search.php">Student Search</a></section>
		<header class="header">
			<h1>
				<span id="simpson">Simpson</span> 
				<br>
				<span id="college">College</span>
			</h1>
		</header>
		<?php include "includes/navbar.php" ?>
			<section class="sub-header">
				<h3>Grading Form</h3>
			</section>
			<section class="display_section">
				<button id="display">Display</button>
				<form id="display_form">
					<section class="letter_grade">
						<span id="letter"></span>
					</section>
					
					<table class="results">
						<tr>
							<td> Total Points Earned: </td>
							<td><span id="total"></span>/1600</td>
						</tr>
						<tr>
							<td>Avg Points Earned: </td>
							<td><span id="average"></span></td>
						</tr>
						<tr>
							<td>Median of Points: </td>
							<td><span id="median"></span></td>
						</tr>
						<tr>
							<td>Most Frequent Earned: </td>
							<td><span id="mode"></span></td>
						</tr>
					</table>
				</form>
				<button id="reset">Reset</button>
			</section>
			<section class="form_section">
				<form id="grade_form">
					<table class="score">
						<tr>
							<th>Course Week</th>
							<th>Points Earned (100pts each)</th>
						</tr>
						<tr>
							<td>
								Week 1
							</td>
							<td>
								<input type="number" id="week1" class="grade" name="week1" max="100">
							</td>
						</tr>
						<tr>
						
							<td>
								Week 2
							</td>
							<td>
								<input ype="number" id="week2" class="grade" name="week2" max="100">
							</td>
						</tr>
						<tr>
							<td>
								Week 3
							</td>
							<td>
								<input type="number" id="week3" class="grade" name="week3" max="100">
							</td>
						</tr>
						<tr>
							<td>
								Week 4
							</td>
							<td>
								<input type="number" id="week4" class="grade" name="week4" max="100">
							</td>
						</tr>
						<tr>
							<td>
								Week 5
							</td>
							<td>
								<input type="number" id="week5" class="grade" name="week5" max="100">
							</td>
						</tr>
						<tr>
							<td>
								Week 6
							</td>
							<td>
								<input type="number" id="week6" class="grade" name="week6" max="100">
							</td>
						</tr>
						<tr>
							<td>
								Week 7
							</td>
							<td>
								<input type="number" id="week7" class="grade" name="week7" max="100">
							</td>
						</tr>
						<tr>
							<td>
								Week 8
							</td>
							<td>
								<input type="number" id="week8" class="grade" name="week8" max="100">
							</td>
						</tr>
						<tr>
							<td>
								Week 9
							</td>
							<td>
								<input type="number" id="week9" class="grade" name="week9" max="100">
							</td>
						</tr>
						<tr>
							<td>
								Week 10
							</td>
							<td>
								<input type="number" id="week10" class="grade" name="week10" max="100">
							</td>
						</tr>
						<tr>
							<td>
								Week 11
							</td>
							<td>
								<input type="number" id="week11" class="grade" name="week11" max="100">
							</td>
						</tr>
						<tr>
							<td>
								Week 12
							</td>
							<td>
								<input type="number" id="week12" class="grade" name="week12" max="100">
							</td>
						</tr>
						<tr>
							<td>
								Week 13
							</td>
							<td>
								<input type="number" id="week13" class="grade" name="week13" max="100">
							</td>
						</tr>
						<tr>
							<td>
								Week 14
							</td>
							<td>
								<input type="number" id="week14" class="grade" name="week14" max="100">
							</td>
						</tr>
						<tr>
							<td>
								Week 15
							</td>
							<td>
								<input type="number" id="week15" class="grade" name="week15" max="100">
							</td>
						</tr>
						<tr>
							<td>
								Week 16
							</td>
							<td>
								<input type="number" id="week16" class="grade" name="week16" max="100">
							</td>
						</tr>
					</table>	
				</form>
			</section>
		</section>
		<script>
			var maxValue = 100;
			var restriction = document.querySelectorAll(".grade");

			for (let i = 0; i < restriction.length; i++) {
				restriction[i].addEventListener("keypress", function(e) {
				    e.preventDefault();
					console.log(e.key);
				    var input = e.target;
				    var value = Number(input.value);
				    var key = Number(e.key);
				    if (Number.isInteger(key)) {
				      value = Number("" + value + key);
				      if (value > maxValue) {
				        return false;
				      }
				      input.value = value;
				    }
				  });
			}


		</script>
	</body>
