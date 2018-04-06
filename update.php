<?php
require_once("config/database_config.php");
$db = mysqli_connect(host, user, pass, db);
if(!isset($_POST['spel'])){
  echo "<h1>wrong page</h1>";
  mysqli_close($db);
}
else{
  if($_POST['spel'] == "1" || $_POST['spel'] == "2" || $_POST['spel'] == "3"){
    if(empty($_POST['user1']) ||empty($_POST['user2']) ||empty($_POST['user3']) ||empty($_POST['user4']) ||empty($_POST['user5']) ||
    empty($_POST['user6']) ||empty($_POST['user7']) ||empty($_POST['user8']) ||empty($_POST['user9']) ||empty($_POST['user10'])){
      echo "<h1>Not all fields are filled</h1>";
      mysqli_close($db);
    }
    else{
      $insert_array = array
      (
        "insert into result (user_id, game_id, points) values (1, {$_POST['spel']}, {$_POST['user1']})",
        "insert into result (user_id, game_id, points) values (2, {$_POST['spel']}, {$_POST['user2']})",
        "insert into result (user_id, game_id, points) values (3, {$_POST['spel']}, {$_POST['user3']})",
        "insert into result (user_id, game_id, points) values (4, {$_POST['spel']}, {$_POST['user4']})",
        "insert into result (user_id, game_id, points) values (5, {$_POST['spel']}, {$_POST['user5']})",
        "insert into result (user_id, game_id, points) values (6, {$_POST['spel']}, {$_POST['user6']})",
        "insert into result (user_id, game_id, points) values (7, {$_POST['spel']}, {$_POST['user7']})",
        "insert into result (user_id, game_id, points) values (8, {$_POST['spel']}, {$_POST['user8']})",
        "insert into result (user_id, game_id, points) values (9, {$_POST['spel']}, {$_POST['user9']})",
        "insert into result (user_id, game_id, points) values (10, {$_POST['spel']}, {$_POST['user10']})"
      );
      foreach($insert_array as $insert){
        mysqli_query($db, $insert)
        OR DIE(mysqli_error($db). mysqli_errno($db));
      }
      mysqli_close($db);
      header("Location: score.php");
      die();
    }
  }
  elseif($_POST['spel'] == "4"){
    if(empty($_POST['user1']) || empty($_POST['user2'])){
      echo "<h1>Not all fields are filled</h1>";
      mysqli_close($db);
    }
    else{
      if($_POST['select1'] == $_POST['select2']){
        echo "<h1>Cannot enter same user twice</h1>";
        mysqli_close($db);
      }
      else{
        $insert_array = array
        (
          "insert into result (user_id, game_id, points) values ({$_POST['select1']}, 4, {$_POST['user1']})",
          "insert into result (user_id, game_id, points) values ({$_POST['select2']}, 4, {$_POST['user2']})"
        );
        foreach($insert_array as $insert){
          mysqli_query($db, $insert)
          OR DIE(mysqli_error($db). mysqli_errno($db));
        }
        mysqli_close($db);
        header("Location: score.php");
        die();
      }
    }
  }
}
?>
