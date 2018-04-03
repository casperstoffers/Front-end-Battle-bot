<?PHP
	require_once("config/database_config.php");
	$db = mysqli_connect(host, user, pass, db);
?>
<body>

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
						$select = "select * from user";

						$result = mysqli_query($db, $select);

						while ($row = mysqli_fetch_array($result)) {
                            if ($row["username"] != "admin") {

                                $select_spel_1 = "select * from result where user_id = '". $row['user_id']. "' AND game_id = '1'";
                                $select_spel_2 = "select * from result where user_id = '". $row['user_id']. "' AND game_id = '2'";
                                $select_spel_3 = "select * from result where user_id = '". $row['user_id']. "' AND game_id = '3'";
                                $select_spel_4 = "select * from result where user_id = '". $row['user_id']. "' AND game_id = '4'";

                                $result_spel_1 = mysqli_query($db, $select_spel_1);
                                $result_spel_2 = mysqli_query($db, $select_spel_2);
                                $result_spel_3 = mysqli_query($db, $select_spel_3);
                                $result_spel_4 = mysqli_query($db, $select_spel_4);

                                $spel_1 = mysqli_fetch_array($result_spel_1);
                                $spel_2 = mysqli_fetch_array($result_spel_2);
                                $spel_3 = mysqli_fetch_array($result_spel_3);
                                $spel_4 = mysqli_fetch_array($result_spel_4);

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


                                echo "</tr>";
                            }
                        }
						?>
				</table>
		</div>
	</div>

</div>
</div>
</body>