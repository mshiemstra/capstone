<!DOCTYPE html>
<html>
	<head>
		<?php include 'includes/student_head.php'; ?>
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
			<?php include "includes/student_navbar.php" ?>
		</header>
		<main>
			
			<form method="post" id="new_student_form" action="javascript:void(0)">
				<table>
					<tr>
						<td></td>
		                <td>
		            		<span id="student_error1"></span>
		            	</td>
		            </tr>
					<tr>
						<td><label>Student ID<span class="required">*</span></label></td>
						<td><input type="text" id="student_id" name="student_id" ></td>
					</tr>
					<tr>
						<td></td>
		                <td>
		            		<span id="student_error2"></span>
		            	</td>
		            </tr>
					<tr>
						<td><label>First Name<span class="required">*</span></label></td>
						<td><input type="text" id="student_fName" name="student_fName" ></td>
					</tr>
					<tr>
						<td></td>
		                <td>
		            		<span id="student_error3"></span>
		            	</td>
		            </tr>
					<tr>
						<td><label>Last Name<span class="required">*</span></label></td>
						<td><input type="text" id="student_lName" name="student_lName" ></td>
					</tr>
					<tr>
						<td></td>
		                <td>
		            		<span id="student_error4"></span>
		            	</td>
		            </tr>
					<tr>
						<td><label>Street Address<span class="required">*</span></label></td>
						<td><input type="text" id="student_street1" name="student_street1" ></td>
					</tr>
					<tr>
						<td></td>
		                <td>
		            		<span id="student_error5"></span>
		            	</td>
		            </tr>
					<tr>
						<td><label>Bldg/Ste/Lot #</label></td>
						<td><input type="text" id="student_street2" name="student_street2"></td>						
					</tr>
					<tr>
						<td></td>
		                <td>
		            		<span id="student_error6"></span>
		            	</td>
		            </tr>
					<tr>
						<td><label>City<span class="required">*</span></label></td>
						<td><input type="text" id="student_city" name="student_city" ></td>
					</tr>
					<tr>
						<td></td>
		                <td>
		            		<span id="student_error7"></span>
		            	</td>
		            </tr>
					<tr>
						<td><label>State<span class="required">*</span></label></td>
						<td>
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
		                </td>
					</tr>
					<tr>
						<td></td>
		                <td>
		            		<span id="student_error8"></span>
		            	</td>
		            </tr>
					<tr>
						<td><label>Zipcode<span class="required">*</span></label></td>
						<td><input type="text" id="student_zipcode" name="student_zipcode" ></td>
					</tr>
					<tr>
						<td></td>
		                <td>
		            		<span id="student_error9"></span>
		            	</td>
		            </tr>
					<tr>
						<td><label>Phone Number<span class="required">*</span></label></td>
						<td><input type="text" maxlength="13" id="student_phone" name="student_phone" placeholder="Phone Number" ></td>
					</tr>
					<tr>
						<td></td>
		                <td>
		            		<span id="student_error10"></span>
		            	</td>
		            </tr>
					<tr>
						<td><label>Email Address<span class="required">*</span></label></td>
						<td><input type="email" id="student_email" name="student_email" ></td>
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