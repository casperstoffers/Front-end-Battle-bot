<?PHP
	require_once("config/database_config.php");
	$db = mysqli_connect(host, user, pass, db);
?>
<!DOCTYPE HTML>
<html>
<head>

</head>
<body>
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

	<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
	<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
	<!------ Include the above in your HEAD tag ---------->

	<div class="container">

		<div class="row">
			<div class="col-md-6">
				<div class="panel panel-primary">
					<div class="panel-heading">
						<h3 class="panel-title">score's</h3>
						<div class="pull-right">

						</div>
					</div>
					<div class="panel-body">

					</div>
					<table class="table table-hover" id="dev-table">
						<thead>
							<tr>
								<th> bot id#</th>
								<th>score 1</th>
								<th>score 2</th>
								<th>score 3</th>
								<th>score 4</th>
								<th>Total score</th>


							</tr>
						</thead>

						<?php

						$select = "select * from score where score_1 >= 0 order by total_score desc";

						$result_2 = mysqli_query($db, $select);

						while ($row = mysqli_fetch_array($result_2))
						{
							echo "<tbody>
							<tr>";

							echo "<td class='cell100 column2'>" . $row["bot_id"] . "</td> ";
							echo "<td class='cell100 column2'>" . $row["score_1"] . "</td> ";
							echo "<td class='cell100 column3'>" . $row["score_2"] . " </td>";
							echo "<td class='cell100 column4'>" . $row["score_3"] . "</td> ";
							echo "<td class='cell100 column5'>" . $row["score_4"] . "</td>";

							$total_score = $row["score_1"] + $row["score_2"] + $row["score_3"] + $row["score_4"];
							echo "<td class=cell100 column6> " . $total_score . "</td>";

							$sql2 = "update score set total_score = '". $total_score ."' where score.bot_id = '".$row["bot_id"]."'";
							$result2 = mysqli_query($db,$sql2);
							if($result2 == true)

							{

							}else
							{
								echo "Error: " . $sql2 . "<br>" . mysqli_error($db);
							}
						}


						?>
					</tr>

				</tbody>
			</table>
		</div>
	</div>

</div>
</div>
