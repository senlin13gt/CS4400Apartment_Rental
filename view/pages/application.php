<h2>Prospective Resident Application Form</h2>
	<form id="login" action="home" method="post">
		<table class="form">
			<tr>
				<th><label for="loginName">Name</label></th>
				<td><input type="text" id="loginName" name="name" /></td>
			</tr>
			<tr>
				<th><label for="dateOfBirth">Date of Birth</label></th>
				<td>
					<select name="birthyear">
					<?php 
					$maxYear = intval(date('Y')) - 10;
					for ($i = 0; $i < 120; $i++) {
						$year = $maxYear - $i;
						echo '
						<option value="' . $year . '">' . $year . '</option>';
					}
					?>
					</select>
					<select name="birthmonth">
						<option value="1">January</option>
						<option value="2">February</option>
						<option value="3">March</option>
						<option value="4">April</option>
						<option value="5">May</option>
						<option value="6">June</option>
						<option value="7">July</option>
						<option value="8">August</option>
						<option value="9">September</option>
						<option value="10">October</option>
						<option value="11">November</option>
						<option value="12">December</option>
					</select>
					<select name="birthday">
					<?php 
					for ($i = 1; $i <= 31; $i++) {
						echo '
						<option value="' . $i . '">' . $i . '</option>';
					}
					?>
					</select>
				</td>
			</tr>
			<tr>
				<th><label for="gender">Gender</label></th>
				<td>
					<input type="radio" name="gender" id="male" value="m" /> <label for="male">Male</label> 
					<input type="radio" name="gender" id="female" value="f" /> <label for="female">Female</label> 
				</td>
			</tr>
			<tr>
				<th><label for="income">Monthly Income</label></th>
				<td><input type="text" id="income" name="income" /></td>
			</tr>
			<tr>
				<th><label for="income">Category of Apartment</label></th>
				<td><input type="text" id="income" name="income" /></td>
			</tr>
			<tr>
				<th><label for="income">Monthly Rent</label></th>
				<td><input type="text" id="income" name="income" /></td>
			</tr>
			<tr>
				<th><label for="movein">Preferred Move-In Date</label></th>
				<td><input type="text" id="movein" name="movein" class="datepicker" /></td>
			</tr>
			<tr>
				<th><label for="income">Lease Term</label></th>
				<td><input type="text" id="income" name="income" /></td>
			</tr>
			<tr>
				<th><label for="prevresidence">Previous Residence Address</label></th>
				<td><textarea name="prevresidence"></textarea></td>
			</tr>
			<tr class="submit">
				<td></td>
				<td>
					<input type="submit" value="Submit Application" />
				</td>
			</tr>
		</table>
	</form>