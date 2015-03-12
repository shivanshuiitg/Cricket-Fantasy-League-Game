$(document).ready(function(){
		$('#team_name').keyup(function(){
			var t_name = $(this).val();
			$.post('check_team.php',{team: t_name},function(data){
				$('#back').html(data);
			})
		});
		$('#home').click(function(){
			$('#main_content').load('home.html');
		});
		$('#register_team').click(function(){
			
			$('#main_content').load('register.php');
		});
		$('#continue').click(function(){
			var team_name = $('#team_name').val();
				$.post('register_team.php',{team_name:team_name},function(data){
					$('#back').html(data);
					$('#reg_teams').prepend("<li class='css_button1'><strong>" + team_name + "</strong></li><br><br>");
				/*	if(data=='OK'){
					$('#reg_teams').prepend("<li class='css_button'><strong>" + team_name + "</strong></li><br><br>");
					$('#back').html("Team Sucessfully Registered");
					}
						*/
						//location.reload(true);
				});
		});
		$('#player_selection').click(function(){
			$('#main_content').load('players.php');
		});
		$('#show_result').click(function(){
			$('#main_content').load('result.php');
		});
	
});