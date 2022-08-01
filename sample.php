<html>
<body>
<form action="register.php" method="post">
			<div style="width: 30em;">
				<label for="firstName" >First name *</label>
				<input type="text" name="firstName" value="" />
				<br><br>
				
				<label for="firstName" >Last name *</label>
				<input type="text" name="lastName" value="" />
				<br><br>
				
				<label  for="genderDetail">Gender: * </label>
				<label for="male">Male</label>
				<input type="radio" name="gender" value="Male"  />
				<label for="female">Female</label>
				<input type="radio" name="gender" value="Female"  />
				<br><br>
				
				<label for="following course">which course are you following at UoJ ? *</label>
				<select name="course">
					<option value="Computer Science">Computer Science</option>
					<option value="Physical Science">Physical Science</option>
					<option value="Bio Science">Bio Science</option>
				</select>
				<br><br>
				
				<label for="password" >Password *</label>
				<input type="password" name="password1" value="" />
				<br><br>
				
				<div style="clear: both;">
					<input type="submit" name="submitButton" value="Send Details" />
					<input type="reset" name="resetButton"   value="Reset Form" style="margin-right: 20px;" />
				</div>
				
			</div>
		</form>
		</body>
		</html>
