<!DOCTYPE html>
<html>
	<head>
		<?php include 'includes/teacher_head.php'; ?>
	</head>
	<body>
		<header class="header">
			<h1>
				<a href="index.php"><img id="logo" src="../images/logo.png"></a>
			</h1>
			<?php include "includes/teacher_navbar.php" ?>
		</header>
		<main>
			<section class="new_teacher_form">
				<form method="post" id="new_teacher_form" class="form-horizontal" action="javascript:void(0)">
					<input type="hidden" id="person_id" name="person_id" value="">
					
					<div class="info teacher_fName">
				      	<label>Teacher's Full Name 
				      		<span class="required">*</span>
				      		<span id="teacher_error2"></span>
				      	</label>
						<input type="text" id="teacher_fName" name="teacher_fName" placeholder="First">
					</div>
					<div class="info teacher_lName">
					    <label>&nbsp;
					    	<span id="teacher_error3"></span>
					    </label>
						<input type="text" id="teacher_lName" name="teacher_lName" placeholder="Last">
					</div>				
					<div class="info teacher_street1">
					    <label>Address 
					    	<span class="required">*</span>
					    	<span id="teacher_error4"></span>
					    </label>
						<input type="text" id="teacher_street1" name="teacher_street1" placeholder="123 Main St.">
					</div>
			        <div class="info teacher_street2">
					    <label>Address 2
					    	<span id="teacher_error5"></span>
					    </label>
						<input type="text" id="teacher_street2" name="teacher_street2" placeholder="Bldg/Ste/Lot #">	
					</div>
					<div class="info teacher_city">
					    <label>City 
					    	<span class="required">*</span>
					    	<span id="teacher_error6"></span>
					    </label>
						<input type="text" id="teacher_city" name="teacher_city" >
					</div>
					<div class="info teacher_state">
				      	<label>State 
				      		<span class="required">*</span>
				      		<span id="teacher_error7"></span>
				      	</label>
		                <select id="teacher_state" name="teacher_state" >
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
					<div class="info teacher_zipcode">
				    	<label>Zipcode 
				    		<span class="required">*</span>
				    		<span id="teacher_error8"></span>
				    	</label>
						<input type="text" id="teacher_zipcode" name="teacher_zipcode" placeholder="#####">
					</div>
					<div class="info teacher_phone">
				    	<label>Phone Number 
				    		<span class="required">*</span>
				    		<span id="teacher_error9"></span>
				    	</label>
						<input type="text" maxlength="13" id="teacher_phone" name="teacher_phone" placeholder="(###)###-####">
					</div>
					<div class="info teacher_email">
				    	<label>Email Address 
				    		<span class="required">*</span>
				    		<span id="teacher_error10"></span>
				    	</label>
						<input type="email" id="teacher_email" name="teacher_email" placeholder="name@example.com">
					</div>
					<input type="submit" name="submit" value="Submit">
					<input type="reset" name="reset" value="Reset" onclick='window.location.reload()'>
				</form>
			</section>
		</main>
		<?php include 'includes/teacher_footer.php' ?>
	</body>
</html>