
$(document).ready(function(){
	var i = 1;
	var bowler = 0;
	var bats_man = 0;
	var players = [];

	
	var match_name = "";
	
	$('.css_button').click(function(){
		player_name = $(this).text();
		player_id = $(this).attr('id');
		player_type = $(this).attr('title');
		if(i<=11){
			if(player_type=="BAT"){
				bats_man++  ;
			}else{
				bowler++ ;
			}
			players.push(player_id);
		$(this).attr('disabled','disabled').css('color','red');
		$('#player_list').prepend("<li ><span class='css_player'>" + player_name + "</span>  </li><br/><br/>");
		}else{
			alert("You have selected 11 player. You cannot select any more");
		}
		i++;
		});
	$('#name_of_team').change(function(){
		team_id = $(this).val();
		
		
	});
	$('#match_id').change(function(){
		match_id = $(this).val();
		
		$.post('match_selector.php',{match_id:match_id},function(data){
				$('#list12').html(data);
		}) 
	});
	$('#insert').click(function(){
		
		alert(" You are going to confirm for team: " + team_id + " , Match :" + match_id );
		player_array = players.join(',');
		
		$.post('insert_player_for_team.php',{team_id:team_id,
											 match_id: match_id,
											 player_array:player_array
											},function(data){
												
												
											}); 
											
											
		
	});
	
	
		
});
