<?php
	include 'Template.php';
?>


<script type="text/javascript">

//Taking in the values

var event_category = "Games";
var event_subcategory = "FIFA 14";
var description = "FIFA’14 captures all the drama and unpredictability of the real world soccer, and is driven by 5 game changing innovations which revolutionize artificial intelligence, dribbling, ball control and physical play.";
var entry_fee = "Rs 50 per team";
var day_and_time = " TBA";
var prize_money = "First Prize = Rs 3000 <br> Second Prize = Rs 1500";

var event_coordinators = "Kartik C : 8951806415<br>Malthesh.S : 8123932689";


var event_rules = "Participants should register their names within the specified date and time. After which registers will not be entertained. spot registration will be available;Event is conducted on the knockout bases;The game will be multiplayer mode. Each player on one side;Time limit will be 12min;If there is a tie, then there will be a penalty shootout and thus the winner is decided;Team selection to second round will be done on goal scored at the first round ";
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