<?php
	include 'Template.php';
?>


<script type="text/javascript">

//Taking in the values

var event_category = "Sports";
var event_subcategory = "Mini Football";
var description = "Does your 5-A-side team have what it takes to go all the way to crown your team as CHAMPIONS?? ";
var entry_fee = "Rs 700 per team <br>Rs 500 per team (for BIT students)";
var day_and_time = " TBA";
var prize_money = "First Prize = Rs 10000 <br> Second Prize = Rs 5000";

var event_coordinators = " Yadukul Gowda :   88618 14195 <br>Sumpreeth G.R :  94497 78399";


var event_rules = "Maximum no. of players in a team is 5 and 2 extra.;Each game duration is 20 min (each half 10 mins).;Goal keeper can do only underarm throw.;Players misbehaving with either the referee or the other will be sent out of the game.";
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