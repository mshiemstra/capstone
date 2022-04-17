<!DOCTYPE html>
<html>
	<head>
		<?php include 'includes/student_head.php'; ?>
	</head>
	<body>
		<header class="header">
			<h1>
				<a href="index.php"><img id="logo" src="../images/logo.png"></a>
			</h1>
			<?php include "includes/student_navbar.php" ?>
		</header>
		<main>
			<section class="new_student_form">
				<form method="post" id="new_student_form" class="form-horizontal" action="javascript:void(0)">
			        <div class="info student_id">
				      	<label>Student ID <span class="required">*</span><span id="student_error1"></span></label>				      	
						<input type="text" id="student_id" name="student_id" placeholder="######">
					</div>
					<div class="info student_fName">
				      	<label>Student's Full Name <span class="required">*</span><span id="student_error2"></span></label>
						<input type="text" id="student_fName" name="student_fName" placeholder="First">
					</div>
					<div class="info student_lName">
					    <label>&nbsp;<span id="student_error3"></span></label>
						<input type="text" id="student_lName" name="student_lName" placeholder="Last">
					</div>				
					<div class="info student_street1">
					    <label>Address <span class="required">*</span><span id="student_error4"></span></label>
						<input type="text" id="student_street1" name="student_street1" placeholder="123 Main St.">
					</div>
			        <div class="info student_street2">
					    <label>Address 2<span id="student_error5"></span></label>
						<input type="text" id="student_street2" name="student_street2" placeholder="Bldg/Ste/Lot #">	
					</div>
					<div class="info student_city">
					    <label>City <span class="required">*</span><span id="student_error6"></span></label>
						<input type="text" id="student_city" name="student_city" >
					</div>
					<div class="info student_state">
				      	<label>State <span class="required">*</span><span id="student_error7"></span></label>
		                <select id="student_state" name="student_state" >
		                    <option value="">--- Select ---</option>
		                    <option value="AL">Alabama</option>
		                    <option value="AK">Alaska</option>
		                    <option value="AZ">Arizona</option>
		                    <option value="AR">Arkansas</option>
		                    <option value="CA">California</option>
		                    <option value="CO">Colorado</option>
		                    <option value="CN">Conneticut</option>
		                    <option value="DE">Delaware</option>
		                    <option value="FL">Florida</option>
		                    <option value="GA">Georgia</option>
		                    <option value="HI">Hawaii</option>
		                    <option value="ID">Idaho</option>
		                    <option value="IL">Illinois</option>
		                    <option value="IN">Indiana</option>
		                    <option value="IA">Iowa</option>
		                    <option value="KS">Kansas</option>
		                    <option value="KY">Kentucky</option>
		                    <option value="LA">Louisiana</option>
		                    <option value="ME">Maine</option>
		                    <option value="MD">Maryland</option>
		                    <option value="MA">Massachusettes</option>
		                    <option value="MI">Michigan</option>
		                    <option value="MN">Minnesota</option>
		                    <option value="MS">Mississippi</option>
		                    <option value="MO">Missouri</option>
		                    <option value="MT">Montana</option>
		                    <option value="NE">Nebraska</option>
		                    <option value="NV">Nevada</option>
		                    <option value="NH">New Hampshire</option>
		                    <option value="NJ">New Jersey</option>
		                    <option value="NM">New Mexico</option>
		                    <option value="NY">New York</option>
		                    <option value="NC">North Carolina</option>
		                    <option value="ND">North Dakota</option>
		                    <option value="OH">Ohio</option>
		                    <option value="OK">Oklahoma</option>
		                    <option value="OR">Oregon</option>
		                    <option value="PA">Pennsylvania</option>
		                    <option value="RI">Rhode Island</option>
		                    <option value="SC">South Carolina</option>
		                    <option value="SD">South Dakota</option>
		                    <option value="TN">Tennessee</option>
		                    <option value="TX">Texas</option>
		                    <option value="UT">Utah</option>
		                    <option value="VT">Vermont</option>
		                    <option value="VA">Virginia</option>
		                    <option value="WA">Washington</option>
		                    <option value="WV">West Virginia</option>
		                    <option value="WI">Wisconsin</option>
		                    <option value="WY">Wyoming</option>
		                </select>
					</div>
					<div class="info student_zipcode">
				    	<label>Zipcode <span class="required">*</span><span id="student_error8"></span></label>
						<input type="text" id="student_zipcode" name="student_zipcode" placeholder="#####">
					</div>
					<div class="info student_phone">
				    	<label>Phone Number <span class="required">*</span><span id="student_error9"></span></label>
						<input type="text" maxlength="13" id="student_phone" name="student_phone" placeholder="(###)###-####">
					</div>
					<div class="info student_email">
				    	<label>Email Address <span class="required">*</span><span id="student_error10"></span></label>
						<input type="email" id="student_email" name="student_email" placeholder="name@example.com">
					</div>
					<input type="submit" name="submit" value="Submit">
					<input type="reset" name="reset" value="Reset" onclick='window.location.reload()'>
				</form>
			</section>
		</main>
	</body>
</html>