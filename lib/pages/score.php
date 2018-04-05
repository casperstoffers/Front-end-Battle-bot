<link rel="stylesheet" type="text/css" href="tpl/css/score.css">
<?PHP
require_once("config/database_config.php");
$db = mysqli_connect(host, user, pass, db);
?>
<body>
	<div class="container">
		<?php
		// Start the session
		session_start();
		if(isset($_SESSION['username'])){
			if($_SESSION['username'] == "admin"){
				if(isset($_GET['spel'])){
					if($_GET['spel'] == "spel1"){
						echo '<a href="?spel=spel1" class="btn btn-primary" id="active" role="button" aria-pressed="true">spel1</a>';
					}
					else{
						echo '<a href="?spel=spel1" class="btn btn-primary" role="button" aria-pressed="true">spel1</a>';
					}
					if($_GET['spel'] == "spel2"){
						echo '<a href="?spel=spel2" class="btn btn-primary" id="active" role="button" aria-pressed="true">spel2</a>';
					}
					else{
						echo '<a href="?spel=spel2" class="btn btn-primary" role="button" aria-pressed="true">spel2</a>';
					}
					if($_GET['spel'] == "spel3"){
						echo '<a href="?spel=spel3" class="btn btn-primary" id="active" role="button" aria-pressed="true">spel3</a>';
					}
					else{
						echo '<a href="?spel=spel3" class="btn btn-primary" role="button" aria-pressed="true">spel3</a>';
					}
					if($_GET['spel'] == "spel4"){
						echo '<a href="?spel=spel4" class="btn btn-primary" id="active" role="button" aria-pressed="true">spel4</a>';
					}
					else{
						echo '<a href="?spel=spel4" class="btn btn-primary" role="button" aria-pressed="true">spel4</a>';
					}
				}
				else{
						echo '<a href="?spel=spel1" class="btn btn-primary" role="button" aria-pressed="true">spel1</a>';
						echo '<a href="?spel=spel2" class="btn btn-primary" role="button" aria-pressed="true">spel2</a>';
						echo '<a href="?spel=spel3" class="btn btn-primary" role="button" aria-pressed="true">spel3</a>';
						echo '<a href="?spel=spel4" class="btn btn-primary" role="button" aria-pressed="true">spel4</a>';
				}
			}
		}
		?>
		<div class="row">
			<div class="col-md-6">
				<div class="panel panel-primary">
					<div class="panel-heading">
						<h3 class="panel-title">score's</h3>
						<div class="pull-right">
						</div>
					</div>
					<table>
						<tbody class="table table-hover" id="dev-table">
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
							$select = "select * from user order by (select sum(points) from result) desc";

							$result = mysqli_query($db, $select);

							while ($row = mysqli_fetch_array($result)) {
								if ($row["username"] != "admin") {

									$select_spel_1 = "select * from result where user_id = '". $row['user_id']. "' AND game_id = '1'";
									$select_spel_2 = "select * from result where user_id = '". $row['user_id']. "' AND game_id = '2'";
									$select_spel_3 = "select * from result where user_id = '". $row['user_id']. "' AND game_id = '3'";
									$select_spel_4 = "select * from result where user_id = '". $row['user_id']. "' AND game_id = '4'";
									$select_total = "select sum(points) as total from result where user_id = '". $row['user_id']. "'";

									$result_spel_1 = mysqli_query($db, $select_spel_1);
									$result_spel_2 = mysqli_query($db, $select_spel_2);
									$result_spel_3 = mysqli_query($db, $select_spel_3);
									$result_spel_4 = mysqli_query($db, $select_spel_4);
									$result_total = mysqli_query($db, $select_total);

									$spel_1 = mysqli_fetch_array($result_spel_1);
									$spel_2 = mysqli_fetch_array($result_spel_2);
									$spel_3 = mysqli_fetch_array($result_spel_3);
									$spel_4 = mysqli_fetch_array($result_spel_4);
									$total = mysqli_fetch_array($result_total);

									echo "<tr>";
									echo "<td>" . $row["username"] . "</td> ";
									if(isset($spel_1['points'])) {
										echo "<td>" . $spel_1["points"] . "</td> ";
									}
									else{
										echo "<td>-</td> ";
									}
									if(isset($spel_2['points'])) {
										echo "<td>" . $spel_2["points"] . "</td> ";
									}
									else{
										echo "<td>-</td> ";
									}
									if(isset($spel_3['points'])) {
										echo "<td>" . $spel_3["points"] . "</td> ";
									}
									else{
										echo "<td>-</td> ";
									}
									if(isset($spel_4['points'])) {
										echo "<td>" . $spel_4["points"] . "</td> ";
									}
									else{
										echo "<td>-</td> ";
									}
									if(isset($total['total'])) {
										echo "<td>" . $total['total'] . "</td> ";
									}
									else{
										echo "<td>-</td> ";
									}
									echo "</tr>";
								}
							}
							?>
						</table>
					</div>
				</div>
			</div>
			<?php
			if(isset($_SESSION['username'])){
				if($_SESSION['username'] == "admin"){
					if(isset($_GET['spel'])){
						if($_GET['spel'] == "spel1"){
							?>
							<form action="update.php" method="post">
								<div class="form-group">
									<label for="exampleInputEmail1">user 1</label>
									<input type="text" class="form-control" name="user1" id="exampleInputEmail1" placeholder="punten user 1">
								</div>
								<div class="form-group">
									<label for="exampleInputEmail1">user 2</label>
									<input type="text" class="form-control" name="user2" id="exampleInputEmail1" placeholder="punten user 2">
								</div>
								<div class="form-group">
									<label for="exampleInputEmail1">user 3</label>
									<input type="text" class="form-control" name="user3" id="exampleInputEmail1" placeholder="punten user 3">
								</div>
								<div class="form-group">
									<label for="exampleInputEmail1">user 4</label>
									<input type="text" class="form-control" name="user4" id="exampleInputEmail1" placeholder="punten user 4">
								</div>
								<div class="form-group">
									<label for="exampleInputEmail1">user 5</label>
									<input type="text" class="form-control" name="user5" id="exampleInputEmail1" placeholder="punten user 5">
								</div>
								<div class="form-group">
									<label for="exampleInputEmail1">user 6</label>
									<input type="text" class="form-control" name="user6" id="exampleInputEmail1" placeholder="punten user 6">
								</div>
								<div class="form-group">
									<label for="exampleInputEmail1">user 7</label>
									<input type="text" class="form-control" name="user7" id="exampleInputEmail1" placeholder="punten user 7">
								</div>
								<div class="form-group">
									<label for="exampleInputEmail1">user 8</label>
									<input type="text" class="form-control" name="user8" id="exampleInputEmail1" placeholder="punten user 8">
								</div>
								<div class="form-group">
									<label for="exampleInputEmail1">user 9</label>
									<input type="text" class="form-control" name="user9" id="exampleInputEmail1" placeholder="punten user 9">
								</div>
								<div class="form-group">
									<label for="exampleInputEmail1">user 10</label>
									<input type="text" class="form-control" name="user10" id="exampleInputEmail1" placeholder="punten user 10">
								</div>
								<input type="hidden" name="spel" value="1">
								<input type="submit" class="btn btn-primary" value="Submit">
							</form>
							<?php
						}
						if($_GET['spel'] == "spel2"){
							?>
							<form action="update.php" method="post">
								<div class="form-group">
									<label for="exampleInputEmail1">user 1</label>
									<input type="text" class="form-control" name="user1" id="exampleInputEmail1" placeholder="punten user 1">
								</div>
								<div class="form-group">
									<label for="exampleInputEmail1">user 2</label>
									<input type="text" class="form-control" name="user2" id="exampleInputEmail1" placeholder="punten user 2">
								</div>
								<div class="form-group">
									<label for="exampleInputEmail1">user 3</label>
									<input type="text" class="form-control" name="user3" id="exampleInputEmail1" placeholder="punten user 3">
								</div>
								<div class="form-group">
									<label for="exampleInputEmail1">user 4</label>
									<input type="text" class="form-control" name="user4" id="exampleInputEmail1" placeholder="punten user 4">
								</div>
								<div class="form-group">
									<label for="exampleInputEmail1">user 5</label>
									<input type="text" class="form-control" name="user5" id="exampleInputEmail1" placeholder="punten user 5">
								</div>
								<div class="form-group">
									<label for="exampleInputEmail1">user 6</label>
									<input type="text" class="form-control" name="user6" id="exampleInputEmail1" placeholder="punten user 6">
								</div>
								<div class="form-group">
									<label for="exampleInputEmail1">user 7</label>
									<input type="text" class="form-control" name="user7" id="exampleInputEmail1" placeholder="punten user 7">
								</div>
								<div class="form-group">
									<label for="exampleInputEmail1">user 8</label>
									<input type="text" class="form-control" name="user8" id="exampleInputEmail1" placeholder="punten user 8">
								</div>
								<div class="form-group">
									<label for="exampleInputEmail1">user 9</label>
									<input type="text" class="form-control" name="user9" id="exampleInputEmail1" placeholder="punten user 9">
								</div>
								<div class="form-group">
									<label for="exampleInputEmail1">user 10</label>
									<input type="text" class="form-control" name="user10" id="exampleInputEmail1" placeholder="punten user 10">
								</div>
								<input type="hidden" name="spel" value="2">
								<input type="submit" class="btn btn-primary" value="Submit">
							</form>
							<?php
						}
						if($_GET['spel'] == "spel3"){
							?>
							<form action="update.php" method="post">
								<div class="form-group">
									<label for="exampleInputEmail1">user 1</label>
									<input type="text" class="form-control" name="user1" id="exampleInputEmail1" placeholder="punten user 1">
								</div>
								<div class="form-group">
									<label for="exampleInputEmail1">user 2</label>
									<input type="text" class="form-control" name="user2" id="exampleInputEmail1" placeholder="punten user 2">
								</div>
								<div class="form-group">
									<label for="exampleInputEmail1">user 3</label>
									<input type="text" class="form-control" name="user3" id="exampleInputEmail1" placeholder="punten user 3">
								</div>
								<div class="form-group">
									<label for="exampleInputEmail1">user 4</label>
									<input type="text" class="form-control" name="user4" id="exampleInputEmail1" placeholder="punten user 4">
								</div>
								<div class="form-group">
									<label for="exampleInputEmail1">user 5</label>
									<input type="text" class="form-control" name="user5" id="exampleInputEmail1" placeholder="punten user 5">
								</div>
								<div class="form-group">
									<label for="exampleInputEmail1">user 6</label>
									<input type="text" class="form-control" name="user6" id="exampleInputEmail1" placeholder="punten user 6">
								</div>
								<div class="form-group">
									<label for="exampleInputEmail1">user 7</label>
									<input type="text" class="form-control" name="user7" id="exampleInputEmail1" placeholder="punten user 7">
								</div>
								<div class="form-group">
									<label for="exampleInputEmail1">user 8</label>
									<input type="text" class="form-control" name="user8" id="exampleInputEmail1" placeholder="punten user 8">
								</div>
								<div class="form-group">
									<label for="exampleInputEmail1">user 9</label>
									<input type="text" class="form-control" name="user9" id="exampleInputEmail1" placeholder="punten user 9">
								</div>
								<div class="form-group">
									<label for="exampleInputEmail1">user 10</label>
									<input type="text" class="form-control" name="user10" id="exampleInputEmail1" placeholder="punten user 10">
								</div>
								<input type="hidden" name="spel" value="3">
								<input type="submit" class="btn btn-primary" value="Submit">
							</form>
							<?php
						}
						if($_GET['spel'] == "spel4"){
							?>
							<form action="update.php" method="post">
								<select name="select1" class="form-control form-control-sm">
									<?php
									$select_users = "select *  from user where user_id not in(select user_id from result where game_id = 4)";
									$result_users = mysqli_query($db, $select_users);

									while($row = mysqli_fetch_array($result_users)){
										if($row['username'] != "admin"){
											echo "<option value=\"{$row['user_id']}\">{$row['username']}</option>";
										}
									}
									?>
								</select>
								<div class="form-group">
									<label for="exampleInputEmail1">user 1</label>
									<input type="text" class="form-control" name="user1" id="exampleInputEmail1" placeholder="punten user 1">
								</div>
								<select name="select2" class="form-control form-control-sm">
									<?php
									$select_users = "select *  from user where user_id not in(select user_id from result where game_id = 4)";
									$result_users = mysqli_query($db, $select_users);
									while($row = mysqli_fetch_array($result_users)){
										if($row['username'] != "admin"){
											echo "<option value=\"{$row['user_id']}\">{$row['username']}</option>";
										}
									}
									?>
								</select>
								<div class="form-group">
									<label for="exampleInputEmail1">user 2</label>
									<input type="text" class="form-control" name="user2" id="exampleInputEmail1" placeholder="punten user 2">
								</div>
								<input type="hidden" name="spel" value="4">
								<input type="submit" class="btn btn-primary" value="Submit">
							</form>
							<?php
						}
					}
				}
			}
			?>
		</div>
	</body>
