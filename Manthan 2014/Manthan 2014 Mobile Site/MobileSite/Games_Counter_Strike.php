<?php
	include 'Template.php';
?>


<script type="text/javascript">

//Taking in the values

var event_category = "Games";
var event_subcategory = "Counter Strike 1.6v";
var description = "Counter- Strike players can have many roles, from snipers and rifles to backup players and defenders. Find your own play style in competitive matchmaking.";
var entry_fee = "Rs 200 per team <br>Re-entry fee: Rs 100 per team";
var day_and_time = " TBA";
var prize_money = "First Prize = Rs 6000 <br> Second Prize = Rs 3000";

var event_coordinators = "Raghu S Gowda : 8892312260<br>Suraj Gowda : 9036226345";


var event_rules = "Competition method: 4 vs 4 (team play, 4 players per team).;Players must register with their teams. Please choose a captain who will responsible for the rest of the team (and be our contact point).;A team name will be required (nothing offensive will be allowed).;Sides ( Counter- terrorist/Terrorist will announced before the match, decided by the coin toss);Best of 5 matches.;Gaming gears will be allowed;Coordinators decision is final no arguments are allowed.;Losers can also join as re-entry in game only for qualifiers round if they wish;Finals best of 3 ;No cheat codes allowed";
var event_image = "Games.jpg";



//Processing full event name and list of rules
var full_event_name = event_category+" "+event_subcategory;
var rules = event_rules.split(";");
var i = 0;
for(i=0;i<rules.length;i++)
{
	var rule_list = document.createElement("LI");
	var rule = document.createTextNode(rules[i]);
	rule_list.appendChild(rule);
	document.getElementById('rules_list').appendChild(rule_list);
	var lb = document.createElement("BR");
	document.getElementById('rules_list').appendChild(lb);
	
}
//Assigning the values

document.getElementById("rightimg").style.backgroundImage="url('"+event_image+"')";
document.getElementById("rightimg").style.height="350px";
document.getElementById("rightimg").style.width="300px";
document.getElementById("rightimg").style.marginTop="60px";
document.getElementById("rightimg").style.backgroundSize = "cover";
document.getElementById("rightimg").style.backgroundRepeat = "no-repeat";
document.getElementById("rightimg").style.borderRadius = "60px";
document.getElementById("rightimg").style.boxShadow = "5px 5px 3px #533";
document.getElementById('event_description').innerHTML = description;
document.getElementById('full_event_name').innerHTML = full_event_name;
document.getElementById('event_category').innerHTML = event_category;
document.getElementById('event_subcategory').innerHTML = event_subcategory;
document.getElementById('prize_money').innerHTML = prize_money;
document.getElementById('event_coordinators').innerHTML = event_coordinators;
document.getElementById('event_entry_fee').innerHTML = entry_fee;
document.getElementById('form_event_name').value = full_event_name;
document.getElementById('event_day').innerHTML = day_and_time;



</script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="./bootstrap.min.js"></script>

</body>
</html>