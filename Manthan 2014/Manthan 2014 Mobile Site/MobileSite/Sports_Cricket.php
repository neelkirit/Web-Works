<?php
	include 'Template.php';
?>


<script type="text/javascript">

//Taking in the values

var event_category = "Sports";
var event_subcategory = "Mini Cricket";
var description = "Popular competitive sport across the globe. We are organizing short form of cricket.It’s a short pitch knockout tournament, played in different style and fashion.";
var entry_fee = "Rs 500 per team";
var day_and_time = " today";
var prize_money = "First Prize = Rs 10000 <br> Second Prize = Rs 5000";

var event_coordinators = " Shashi Kiran S. K : 9945843070<br> :<br>Suhas B Nayak : 9901067899";


var event_rules = "Tennis ball, short pitch (throw) and knockout.;Maximum no. of players in a team is 7+3 extra;Five overs per team which includes batting powerplay over (in batting power play runs scored in that over will be doubled);Runs for no ball and wide will be counted, no LBW and leg byes;One bounce over the shoulder per over is allowed;Umpire decision is final;In case of a tie team will contest in a super over and winner will be decided;Team should bring their own kits and teams reporting late for the match will be disqualified;Any exception can be made on spot by the organisers";
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