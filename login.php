<?php
	include('connection.php');
	session_start();
	
	if(isset($_POST['login'])){
		$broker_id = $_POST['broker_id'];
		$password = $_POST['broker_password'];
		if(!empty($broker_id) && !empty($password)){
			$query = mysql_query('SELECT `broker`,`password` FROM `brokers` WHERE `broker`="'.$broker_id.'" AND `password`="'.$password.'"');
			if($query){
				if(mysql_num_rows($query)==1){
					$row = mysql_fetch_assoc($query);
					$_SESSION['broker_id']= $row['broker'];
					if(isset($_SESSION['broker_id'])){
						header('Location: broker_profile.php');
					}
				}
			}else{
				echo "Some Error Occured !! Please Try again!!";
			}
			
			
		}
		
		
	}
	


?>



<!--
if(!empty($broker_id) && !empty($password)){
			$query = 'SELECT `broker`,`password` FROM `brokers` WHERE `broker`="'.$broker_id.'" AND `password`="'.$password.'"';
			if(mysql_query($query)){
				if(mysql_num_rows($query)==1){
					$row = mysql_fetch_assoc($query);
					$broker = $row['broker'];
					$_SESSION['broker_id']=$broker;
					if($_SESSION['broker_id']){
						header('Location: broker_profile.php');
					}
				}
				
			}else{
				echo "query not run";
			}
			
			
		}else{
			echo "not set";
		}
		
		-->