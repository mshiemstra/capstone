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
				<a href="index.php"><img id="logo" src="../images/logo.png"></a>
			</h1>
			<?php include "includes/teacher_navbar.php" ?>
		</header>
		<main>
			
			<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
				<table>
					<tr>
						<td></td>
		                <td>
		            		<span id="teacher_error1"><?php echo $teacher_id_error ?></span>
		            	</td>
		            </tr>
					<tr>
						<td><label>Teacher ID<span class="required">*</span></label></td>
						<td><input type="text" id="teacher_id" name="teacher_id" required></td>
					</tr>
					<tr>
						<td></td>
		                <td>
		            		<span id="teacher_error2"><?php echo $teacher_fName_error ?></span>
		            	</td>
		            </tr>
					<tr>
						<td><label>First Name<span class="required">*</span></label></td>
						<td><input type="text" id="teacher_fName" name="teacher_fName" required></td>
					</tr>
					<tr>
						<td></td>
		                <td>
		            		<span id="teacher_error3"><?php echo $teacher_lName_error ?></span>
		            	</td>
		            </tr>
					<tr>
						<td><label>Last Name<span class="required">*</span></label></td>
						<td><input type="text" id="teacher_lName" name="teacher_lName" required></td>
					</tr>
					<tr>
						<td></td>
		                <td>
		            		<span id="teacher_error4"><?php echo $teacher_street1_error ?></span>
		            	</td>
		            </tr>
					<tr>
						<td><label>Street Address<span class="required">*</span></label></td>
						<td><input type="text" id="teacher_street1" name="teacher_street1" required></td>
					</tr>
					<tr>
						<td></td>
		                <td>
		            		<span id="teacher_error5"></span>
		            	</td>
		            </tr>
					<tr>
						<td><label>Bldg/Ste/Lot #</label></td>
						<td><input type="text" id="teacher_street2" name="teacher_street2"></td>						
					</tr>
					<tr>
						<td></td>
		                <td>
		            		<span id="teacher_error6"><?php echo $teacher_city_error ?></span>
		            	</td>
		            </tr>
					<tr>
						<td><label>City<span class="required">*</span></label></td>
						<td><input type="text" id="teacher_city" name="teacher_city" required></td>
					</tr>
					<tr>
						<td></td>
		                <td>
		            		<span id="teacher_error7"><?php echo $teacher_state_error ?></span>
		            	</td>
		            </tr>
					<tr>
						<td><label>State<span class="required">*</span></label></td>
						<td>
		                <select id="teacher_state" name="teacher_state"  required>
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
		                </td>
					</tr>
					<tr>
						<td></td>
		                <td>
		            		<span id="teacher_error8"><?php echo $teacher_zipcode_error ?></span>
		            	</td>
		            </tr>
					<tr>
						<td><label>Zipcode<span class="required">*</span></label></td>
						<td><input type="text" id="teacher_zipcode" name="teacher_zipcode" required></td>
					</tr>
					<tr>
						<td></td>
		                <td>
		            		<span id="teacher_error9"><?php echo $teacher_phone_error ?></span>
		            	</td>
		            </tr>
					<tr>
						<td><label>Phone Number<span class="required">*</span></label></td>
						<td><input type="text" maxlength="13" id="teacher_phone" name="teacher_phone" placeholder="Phone Number" required></td>
					</tr>
					<tr>
						<td></td>
		                <td>
		            		<span id="teacher_error10"><?php echo $teacher_email_error ?></span>
		            	</td>
		            </tr>
					<tr>
						<td><label>Email Address<span class="required">*</span></label></td>
						<td><input type="email" id="teacher_email" name="teacher_email" required></td>
					</tr>
					<tr>
						<td><input type="submit" name="submit" value="Submit"></td>
						<td><input type="reset" name="reset" value="Reset" onclick='window.location.reload()'></td>
					</tr>
				</table>
			</form>
		</main>
	</body>
</html>