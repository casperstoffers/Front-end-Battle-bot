	<form action="score.php" method="POST">
		<div class="form-group">
			<label for="exampleInputEmail1">score</label>
			<input type="number" class="form-control"  name="score" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
		</div>



		<div class="form-group">
			<label for="exampleFormControlSelect1">set score</label>
			<select name="ronde_1" class="form-control" id="exampleFormControlSelect1">
				<option value="1">ronde 1</option>
				<option value="2">ronde 2</option>
				<option value="3">ronde 3</option>
				<option value="4">ronde 4</option>
			</select>
		</div>

		<div class="form-group">
			<label for="exampleFormControlSelect1">selecet a bot</label>
			<select name="bot_id" class="form-control" id="exampleFormControlSelect1">

				<option value="1">bot 1</option>
				<option value="2">bot 2</option>
				<option value="3">bot 3</option>
				<option value="4">bot 4</option>
				<option value="5">bot 5</option>
				<option value="6">bot 6</option>
				<option value="7">bot 7</option>
				<option value="8">bot 8</option>
				<option value="9">bot 9</option>
				<option value="10">bot 10</option>
			</select>
		</div>

		<button type="submit" name="submit" class="btn btn-primary">Submit</button>


	</form>
