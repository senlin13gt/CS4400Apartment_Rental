<h2>Add a Card</h2>
<form id="addCard" action="payment" method="post">
	<table class="form">
		<tr>
			<th><label for="name">Name on the Card</label></th>
			<td><input type="text" id="name" name="name" value="<?php echo $_POST['name'] ?>" /></td>
		</tr>
		<tr>
			<th><label for="ccno">Card Number</label></th>
			<td><input type="text" id="ccno" name="card" value="<?php echo $_POST['card'] ?>" /></td>
		</tr>
		<tr>
			<th><label for="expiration">Expiration Date</label></th>
			<td>
			<select name="expyear">
				<?php 
				$maxYear = intval(date('Y'));
				for ($i = 0; $i < 20; $i++) {
					$year = $maxYear + $i;
					echo '
					<option value="' . $year . '">' . $year . '</option>';
				}
				?>
				</select>
				<select name="expmonth">
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
				</td>
		</tr>
		<tr>
			<th><label for="cvv">CVV</label></th>
			<td><input type="text" id="cvv" name="cvv" value="<?php echo $_POST['cvv'] ?>" /></td>
		</tr>

		<tr class="submit">
			<td></td>
			<td>
				<input type="submit" value="Add Card" name="add" />
			</td>
		</tr>
	</table>
</form>
<h2>Delete a Card</h2>
<form id="deleteCard" action="payment" method="post">
	<table class="form">
		<tr>
			<th><label for="deletedcard">Card Number</label></th>
			<td>
				<select id="deletedcard" name="card">
					<?php 
					$Username = $_SESSION['username'];
					$query = "SELECT Card_No FROM Payment_Information 
									WHERE Username = '$Username'";
					$cards = db()->query($query);
					foreach ($cards as $card) {
						echo '<option value="' . $card['Card_No'] . '">' . $card['Card_No'] . '</option>';
					}
					?>
				</select>
			</td>
		</tr>
		<tr class="submit">
			<td></td>
			<td>
				<input type="submit" value="Delete Card" name="delete" />
			</td>
		</tr>
	</table>
</form>
<a href="home">
	Back to home
</a>