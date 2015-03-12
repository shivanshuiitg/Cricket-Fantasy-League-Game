
<html>
<head><title> Players  </title>
<style>
	li{
		padding: 0px;
		list-style:none;
		width: 200px;
	}
	#player{
		position:relative;
		left: 460px;
		top: 0px;
		width: 250px;
		height: 300px;
		background-color: #f0f0f0;
		border: 3px solid #000;
		overflow: auto;
		padding: 15px;
	}
	
	
	.item{
		background-color:#A9F5F2;
		width: 200px;
		height: 20px;
	}
	#parent{
		
		width: 250px;
		height: 300px;
		position:relative;
		left:450px;
	}
	.css_button {
		width: 150x;
    font-size: 16px;
    font-family: Arial;
    font-weight: normal;
    text-decoration: inherit;
    -webkit-border-radius: 8px 8px 8px 8px;
    -moz-border-radius: 8px 8px 8px 8px;
    border-radius: 8px 8px 8px 8px;
    border: 1px solid #3866A3;
    padding: 9px 18px;
    text-shadow: 1px 1px 0px #5E5E5E;
    -webkit-box-shadow: inset 1px 1px 0px 0px #BEE2F9;
    -moz-box-shadow: inset 1px 1px 0px 0px #BEE2F9;
    box-shadow: inset 1px 1px 0px 0px #BEE2F9;
    cursor: pointer;
    color: #FFFFFF;
    display: inline-block;
    background: -webkit-linear-gradient(90deg, #468ccf 5%, #63b8ee 100%);
    background: -moz-linear-gradient(90deg, #468ccf 5%, #63b8ee 100%);
    background: -ms-linear-gradient(90deg, #468ccf 5%, #63b8ee 100%);
    background: linear-gradient(180deg, #63b8ee 5%, #468ccf 100%);
    filter: progid:DXImageTransform.Microsoft.gradient(startColorstr="#63b8ee",endColorstr="#468ccf");
}

.css_button:hover {
    background: -webkit-linear-gradient(90deg, #63b8ee 5%, #468ccf 100%);
    background: -moz-linear-gradient(90deg, #63b8ee 5%, #468ccf 100%);
    background: -ms-linear-gradient(90deg, #63b8ee 5%, #468ccf 100%);
    background: linear-gradient(180deg, #468ccf 5%, #63b8ee 100%);
    filter: progid:DXImageTransform.Microsoft.gradient(startColorstr="#468ccf",endColorstr="#63b8ee");
}

.css_button:active {
    position:relative;
    top: 1px;
}

.css_player {
    font-size: 16px;
    font-family: Trebuchet MS;
    font-weight: bold;
    text-decoration: inherit;
    -webkit-border-radius: 8px 8px 8px 8px;
    -moz-border-radius: 8px 8px 8px 8px;
    border-radius: 8px 8px 8px 8px;
    border: 1px solid #ee1eb5;
    padding: 9px 18px;
    text-shadow: 1px 1px 0px #c70067;
    cursor: pointer;
    color: #ffffff;
    display: inline-block;
    background: -webkit-linear-gradient(90deg, #ef027d 5%, #ff5bb0 100%);
    background: -moz-linear-gradient(90deg, #ef027d 5%, #ff5bb0 100%);
    background: -ms-linear-gradient(90deg, #ef027d 5%, #ff5bb0 100%);
    background: linear-gradient(180deg, #ff5bb0 5%, #ef027d 100%);
    filter: progid:DXImageTransform.Microsoft.gradient(startColorstr="#ff5bb0",endColorstr="#ef027d");
}

.css_player:hover {
    background: -webkit-linear-gradient(90deg, #ff5bb0 5%, #ef027d 100%);
    background: -moz-linear-gradient(90deg, #ff5bb0 5%, #ef027d 100%);
    background: -ms-linear-gradient(90deg, #ff5bb0 5%, #ef027d 100%);
    background: linear-gradient(180deg, #ef027d 5%, #ff5bb0 100%);
    filter: progid:DXImageTransform.Microsoft.gradient(startColorstr="#ef027d",endColorstr="#ff5bb0");
}

.css_player:active {
    position:relative;
    top: 1px;
}
#team_select{
	position: relative;
	left: 20px;
	top: 20px;
}

#player_bunch{
	padding: 0px;
	position: relative;
	left: 150px;
	width: 250px;
	height: 300px;
	top: 30px;
	border: 3px solid black;
	overflow-y:auto;
	overflow-x:hidden;
}
#team_select{
	width:80px;
	position: relative;
	left: 20px;
	
}
#match_number{
	position: relative;
	left: 20px;
	width: 80px;
	top: 200px;
}
#insert{
	position: relative;
	left: 170px;
	bottom: 250px;
}
	
</style>
		<link rel="stylesheet" type="text/css" href="js/jquery-ui.css">
		<link rel="stylesheet" type="text/css" href="js/jquery-ui.min.css">
		<link rel="stylesheet" type="text/css" href="js/jquery-ui.structure.css">
		<link rel="stylesheet" type="text/css" href="js/jquery-ui.structure.min.css">
		<link rel="stylesheet" type="text/css" href="js/jquery-ui.theme.css">
		<link rel="stylesheet" type="text/css" href="js/jquery-ui.theme.min.css">   
</head>
<body>
			<!--       Drop down for team select -->
		<div id="team_select">
		<span style="color:green"><strong>Select team</strong></span>
		<select id="name_of_team">
			<?php 
			include('connection.php');
			$query = mysql_query('SELECT `team_name`,`id` FROM `teams` ORDER BY `id` DESC');
				echo "<option value='#'>Select Team</option>";
			while($row=mysql_fetch_assoc($query)){
				?>
			<option value=<?php echo $row['id'] ;?>><strong><?php echo $row['team_name']; ?></strong></option>
			<?php }?>
		</select>
		</div>
		<div id="match_number">
			<span style="color:green"><strong>Fixture</strong></span>
			<select id="match_id">
				<option value="#">Select Match </option>
				<option value="match_1">India Vs Pak</option>
				<option value="match_2">India Vs UAE</option>
			</select>
		</div>
			<!-- Bunch of players -->
		<div id="player_bunch">
			<span style="color:green"><strong>Squad</strong></span>
	<ul id="list12">
	<?php /*
			$query1 = mysql_query('SELECT `player_id` , `player_name` ,`country` ,`type` FROM `match_1` ORDER BY `player_id`');
			while($row1=mysql_fetch_assoc($query1)){ 
		?>
		<li class="squad" ><button class="css_button"><?php echo $row1['player_name'];?></button></li>
	<!--	<li class="squad"><span class="css_button">Virat Kohli</span></li>
		<li class="squad"><span class="css_button">Sachin Tendulkar</span></li>
		<li class="squad"><span class="css_button">Virendra Sehwag </span></li> -->
		<br>
			<?php }
				*/
			?>
	</ul>
	</div>
	
	<div id="player">
		<span style="color:green"><strong>Your Team</strong></span><br>
		<ul id="player_list">
			
		</ul>
		
	</div>
	<input type="button" value="Confirm" id="insert"/>
	<script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>
	<script type="text/javascript" src="js/jquery-ui.js"></script>
	<script type="text/javascript" src="js/player_support.js"></script>
</body>
</html>