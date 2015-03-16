<?php
	include 'Template.php';
?>


<script type="text/javascript">

//Taking in the values

var event_category = "Sports";
var event_subcategory = "Jordan";
var description = "3 on 3 basketball tournamentStand tall, Talk Small, Play Ball.";
var entry_fee = "Rs 300 per team";
var day_and_time = " TBA";
var prize_money = "First Prize = Rs 6000 <br> Second Prize = Rs 3000";

var event_coordinators = "Kaushik S : 9900989569<br>Manoj S : 8197170418";


var event_rules = "Each team consists of 4 players of whom 3 are on the court at any given time.;The game is a single period of 10mins.;The winner is the first team to score 21 with a 2 point difference if neither teams reaches 21 points at the end of the regulation time, the team with the highest score wins. ;A tie in regulation leads to an untimed overtime period which ends once either has scored 2 points in overtime with a 2 point difference;A 12 sec shot clock is used;Each team is allowed one time out;Each player is allowed a max of 3 fouls. After every 3 team fouls the oppent team gets a free throw.;Ball must be cleared after each defensive rebound or steal.;Other standard 3 vs 3 rules apply.";
var event_image = "Sports.jpg";



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