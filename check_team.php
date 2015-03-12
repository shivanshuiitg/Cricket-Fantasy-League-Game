<?php 
	$team = $_POST['team'];
	include('connection.php');
	$query = mysql_query('SELECT team_name FROM teams WHERE team_name="'.$team.'"');
	if($query){
		if(mysql_num_rows($query) != 0){
			echo "<strong style='color:red'>Team Already Exist, Choose some other Team Name !!</strong>";
		}else{
			//echo "You Can use this Team Name";
		}
	}
?>