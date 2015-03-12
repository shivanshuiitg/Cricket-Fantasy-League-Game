<?php 
	include('connection.php');
	session_start();
	$broker_logged = $_SESSION['broker_id'];
?>
<html>
	<head><title><?php echo "Welcome to Cricket Fantasy League" ;?></title>
	<style>
		body{
			background-color:#CEE3F6;
		}
		#heading{
			position: absolute;
			
			left: 400px;
			float : left;
		}
		#list_of_item{
			position: absolute;
			top: 100px;
			height: 300px;
			width: 220px;
			background-color: #f0f0f0;
			border: 2px solid black; 
		}
		#list{
			list-style:none;
			padding: 15px;
		}
		#main_content{
			
			position:absolute;
			height: 700px;
			width: 58%;
			top: 100px;
			left: 250px;
			float:left;
			background-color:#FAFAFA;
			overflow: auto;
			border: 2px solid black; 
			border-radius: 15px;
			padding-top: 25px;
			padding-right: 20px;
			padding-bottom: 25px;
			padding-left: 20px;
		}
		#current_teams{
			position: absolute;
			height: 300px;
			width:250px;
			top:100px;
			left: 1100px;
			float: left;
			background-color: #f0f0f0;
			overflow: auto;
			border: 2px solid black; 
			
		}
		.css_button1 {
    font-size: 16px;
    font-family: Arial;
    font-weight: normal;
    text-decoration: inherit;
    -webkit-border-radius: 8px 8px 8px 8px;
    -moz-border-radius: 8px 8px 8px 8px;
    border-radius: 8px 8px 8px 8px;
    border: 1px solid #469df5;
    padding: 9px 18px;
    text-shadow: 1px 1px 0px #287ace;
    -webkit-box-shadow: inset 1px 1px 0px 0px #cae3fc;
    -moz-box-shadow: inset 1px 1px 0px 0px #cae3fc;
    box-shadow: inset 1px 1px 0px 0px #cae3fc;
    cursor: pointer;
    color: #ffffff;
    display: inline-block;
    background: -webkit-linear-gradient(90deg, #4197ee 5%, #79bbff 100%);
    background: -moz-linear-gradient(90deg, #4197ee 5%, #79bbff 100%);
    background: -ms-linear-gradient(90deg, #4197ee 5%, #79bbff 100%);
    background: linear-gradient(180deg, #79bbff 5%, #4197ee 100%);
    filter: progid:DXImageTransform.Microsoft.gradient(startColorstr="#79bbff",endColorstr="#4197ee");
}

.css_button1:hover {
    background: -webkit-linear-gradient(90deg, #79bbff 5%, #4197ee 100%);
    background: -moz-linear-gradient(90deg, #79bbff 5%, #4197ee 100%);
    background: -ms-linear-gradient(90deg, #79bbff 5%, #4197ee 100%);
    background: linear-gradient(180deg, #4197ee 5%, #79bbff 100%);
    filter: progid:DXImageTransform.Microsoft.gradient(startColorstr="#4197ee",endColorstr="#79bbff");
}

.css_button1:active {
    position:relative;
    top: 1px;
}



a:link {
 font-size:20px; font-weight:bold; text-decoration:underline;
 color: blue;
}
a:visited {
 font-size:20px; font-weight:bold; text-decoration:underline;color: green;
}
a:active {
 font-size:20px; font-weight:bold; text-decoration:underline;color:red;
}
a:hover {
 font-size:24px; font-weight:bold; text-decoration:underline;color:blue;
}


	</style>
	
	
	
	
	</head>
	
	<body>
	<script>
		
	</script>
		
		<h1 id="heading"><strong >Welcome to Cricket Fantasy League</strong></h1><br><br><br><br>
		<div id="list_of_item">
			<ul id="list">
				<li >You are logged in as:<strong style="color:blue"><?php echo $broker_logged; ?></strong></li>
				
				<li><a href="#" id="home" class="list_col">Home</a></li>
				<li><a href="#" id="register_team" class="list_col">Register Team</a></li>
				<li><a href="#" id="player_selection" class="list_col">Player Selection</a></li>
				<li><a href="#" id="show_result" class="list_col">Show Result </a></li>
				<li><a href="logout.php" id="logout" class="list_col">Log out</a></li>
				
			<ul>
		</div>
		<div id="main_content">
		</div>
		<div id="current_teams">
		<strong style="color:green"> Registered Teams</strong><br/>
		<ul id="reg_teams">
		<?php 
			$query = mysql_query('SELECT `team_name` FROM `teams` ORDER BY `id` DESC');
			while($row=mysql_fetch_assoc($query)){
				echo "<li class='css_button1'><strong>".$row['team_name']."</strong></li><br>";
				echo "<br>";
			}
		
		?>
		
		</ul>
		</div>
		
		<script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>
		<script type="text/javascript" src="js/support.js"></script>
	</body>
	
</html>







		