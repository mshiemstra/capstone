<!DOCTYPE html>
<html>
	<head>
		<?php include '../students/includes/student_head.php'; ?>
	</head>
	<body>
<!--		<section class="topbar">
		  <div class="search-container">
		    <form action="/action_page.php">
		      <input type="text" placeholder="Search.." name="search">
		      <button type="submit"><i class="fa fa-search"></i></button>
		    </form>
		  </div>
		 </section> -->
		<header class="header">
			<h1>
				<a href="index.php"><img id="logo" src="../images/logo.png"></a>
			</h1>
			<?php include "../students/includes/student_navbar.php" ?>
		</header>
		<main>
			<section class="new_student_form">
				<form method="post" id="new_student_form" class="form-horizontal" action="javascript:void(0)">
					<div class="form-group">
						<div class="col-sm-10">
			        		<span class="control-label col-sm-2" for="student_error1" id="student_error1"></span>
			            </div>
			        </div>
					<div class="form-group">
				      	<label class="control-label col-sm-2" for="student_id">Student ID<span class="required">*</span></label>
				      	<div class="col-sm-10">
							<input type="text" id="student_id" name="student_id">
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-10">
			        		<span class="control-label col-sm-2" for="student_error2" id="student_error2"></span>
			            </div>
			        </div>
					<div class="form-group">
				      	<label class="control-label col-sm-2" for="student_fName">First Name<span class="required">*</span></label>
				      	<div class="col-sm-10">
							<input type="text" id="student_fName" name="student_fName" >
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-10">
			        		<span class="control-label col-sm-2" for="student_error3" id="student_error3"></span>
			            </div>
			        </div>
					<div class="form-group">
					    <label class="control-label col-sm-2" for="student_lName">Last Name<span class="required">*</span></label>
					    <div class="col-sm-10">
							<input type="text" id="student_lName" name="student_lName" >
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-10">
				        	<span class="control-label col-sm-2" for="student_error4" id="student_error4"></span>
				        </div>
				    </div>						
					<div class="form-group">
					    <label class="control-label col-sm-2" for="student_id">Street Address<span class="required">*</span></label>
						<div class="col-sm-10">	
							<input type="text" id="student_street1" name="student_street1" >
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-10">
			        		<span class="control-label col-sm-2" for="student_error5" id="student_error5"></span>
			            </div>
			        </div>
			        <div class="form-group">
					    <label class="control-label col-sm-2" for="student_street2">Bldg/Ste/Lot #</label>
					    <div class="col-sm-10">
							<input type="text" id="student_street2" name="student_street2">		
						</div>			
					</div>
					<div class="form-group">
						<div class="col-sm-10">
				        	<span class="control-label col-sm-2" for="student_error6" id="student_error6"></span>
			            </div>
			        </div>
					<div class="form-group">
					    <label class="control-label col-sm-2" for="student_city">City<span class="required">*</span></label>
					    <div class="col-sm-10">
							<input type="text" id="student_city" name="student_city" >
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-10">
			        		<span class="control-label col-sm-2" for="student_error7" id="student_error7"></span>
			            </div>
			        </div>
					<div class="form-group">
				      	<label class="control-label col-sm-2" for="student_state">State<span class="required">*</span></label>
						<div class="col-sm-10">
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
					</div>
					<div class="form-group">
						<div class="col-sm-10">
			        		<span class="control-label col-sm-2" for="email" id="student_error8"></span>
			            </div>
			        </div>
					<div class="form-group">
				    	<label class="control-label col-sm-2" for="student_zipcode">Zipcode<span class="required">*</span></label>
				    
				    	<div class="col-sm-10">
							<input type="text" id="student_zipcode" name="student_zipcode" >
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-10">
			        		<span class="control-label col-sm-2" for="student_error9" id="student_error9"></span>
			            </div>
			        </div>
					<div class="form-group">
				    	<label class="control-label col-sm-2" for="student_phone">Phone Number<span class="required">*</span></label>
				    	<div class="col-sm-10">
							<input type="text" maxlength="13" id="student_phone" name="student_phone" placeholder="Phone Number" >
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-10">
			        		<span class="control-label col-sm-2" for="student_error10" id="student_error10"></span>
			            </div>
			        </div>
					<div class="form-group">
				    	<label class="control-label col-sm-2" for="student_email">Email Address<span class="required">*</span></label>
				    	<div class="col-sm-10">
							<input type="email" id="student_email" name="student_email" >
						</div>
					</div>
					<input type="submit" name="submit" value="Submit">
					<input type="reset" name="reset" value="Reset" onclick='window.location.reload()'>
				</form>
			</section>
		</main>
	</body>
</html>