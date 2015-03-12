<?php 
	include('connection.php');
	function player_points_calculator($fixture){
		$query1 = mysql_query('SELECT `*` FROM "'.$fixture.'" WHERE `1`');
		if($query1){
				while($row = mysql_fetch_assoc($query1)){
							$player_id = $player_id['player_id'];
							$type = $row['type'];
							$run = $row['run'];
							$six = $row['six'];
							$four = $row['four'];
							$ball_faced = $row['ball_faced'];
							$duck = $row['duck'];
							$wicket = $row['wicket'];
							$duck = $row['row'];
							$maiden_over = $row['maiden_over'];
							$catch = $row['row'];
							$run_conceded = $row['run_conceded'];
							$stumping = $row['stumping'];
							$direct_hit = $row['direct_hit'];
							$run_out = $row['run_out'];
							$score = $run * 1;                   // One point for each run 
							$score = $score + (2 * $six) ;		 // two extra point for each six scored
							$score = $score + (1 * $four );		 // one extra point for each four scored
							$score = $score - (5* $duck);		 // penalty of five points for each duck
							$bonus = $run / 25 ;     			// bonus for each milestone of 25 runs 
							$score = $score + $bonus ;
							$pace_bonus = $run - $ball_faced ;   // Pace bonus (the player scoring more on few balls will be more valuable)
							$score = $score + (2 * $pace_bonus)   // pace bonus added 
							$score = $score + (20 * $wicket); 		// 20 points for each wicket taken by bowler
							$score = $score + (1 * $dot);			// one point for each dot ball
							$score = $score + (20 * $maiden_over);	// 20 points for each maiden over
							$pace_bonus_1 =  $row['ball_bowled'] - $row['run_conceded'];
							$score = $score + $pace_bonus_1 ;
							$score = $score + (10 * $catch);
							$score = $score + (15 * $stumping);
							$score = $score + (15 * $direct_hit);
							$score = $score + (15 * $run_out);
							
							$query2 = 'UPDATE "'.$fixture.'" SET `player_score`="'.$score.'" WHERE `player_id`="'.$player_id.'"';
								if(mysql_query($query2)){
									echo "ok";
								}
							
				}
		}
	}
	
	
	function team_evaluator($team_id , $fixture){
		
		
		
		
	}

?>