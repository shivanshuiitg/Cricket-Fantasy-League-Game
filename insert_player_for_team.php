<?php 
	include('connection.php');
	$team_id = $_POST['team_id'];
	$match_id = $_POST['match_id'];
	@$player_array = $_POST['player_array'];
	$player_1 = $player_array[0];
	echo("<script>console.log(".$player_1.")</script>");
	$player_2 = $player_array[1];
	$player_3 = $player_array[2];
	$player_4 = $player_array[3];
	$player_5 = $player_array[4];
	$player_6 = $player_array[5];
	$player_7 = $player_array[6];
	$player_8 = $player_array[7];
	$player_9 = $player_array[8];
	$player_10 = $player_array[9];
	$player_11 = $player_array[10];
	$table_of_team = "team_".$match_id;
	$query = 'INSERT INTO '.$table_of_team.' (`id`,`team_id`,`player_1`,`player_2`,`player_3`,`player_4`,`player_5`,`player_6`,`player_7`,`player_8`,`player_9`,`player_10`,`player_11`,`score`) VALUES ("NULL","'.$team_id.'","'.$player_1.'","'.$player_2.'","'.$player_3.'","'.$player_4.'","'.$player_5.'","'.$player_6.'","'.$player_7.'","'.$player_8.'","'.$player_9.'","'.$player_10.'","'.$player_11.'",0)';
	if(mysql_query($query)){
		echo "SUCCESS";
	}else{
		echo "ERROR";
	}
	
	
?>