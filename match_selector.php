	<html>
<style>
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


</style>
	<?php 
	include('connection.php');
	$match = $_POST['match_id'];
	
	$query1 = mysql_query('SELECT `player_id` , `player_name` ,`country` ,`type` FROM '.$match.' ORDER BY `player_id`');
			while($row1=mysql_fetch_assoc($query1)){ 
				
			
			?>
			<li class='squad'><button class='css_button' title= <?php echo $row1['type'];?> id=<?php echo $row1['player_id'];?> > <?php echo $row1['player_name']; ?> </button></li>
			<br/>
		<?php }?>
		
		<script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>
	<script type="text/javascript" src="js/jquery-ui.js"></script>
	<script type="text/javascript" src="js/player_support.js"></script>
	</html>