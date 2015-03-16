

<?php
	include 'Template.php';
?>


<script type="text/javascript">

//Taking in the values

var event_category = "Dance";
var event_subcategory = "Solo";
var description = " Witness a conglomeration of the hip-hop, classical and free-styling most grateful and aesthetic movements you've ever seen, and breath-taking steps. Burn the stage with enigmatic moves. The elaborate expressions, the exquisite costumes, the rhythmic taps -let every little detail that goes into making a spectacular performance enthrall you.";
var entry_fee = "Rs 150";
var prize_money = "First Prize = Rs 2500 <br> Second Prize = Rs 1000";

var event_coordinators = "VIVEK.C : 8861262996 <br> RASHMI N : 8861615887<br> KRITHIKA : 9740246126";


var event_rules = " Any type of dance is allowed(western/classical/filmy/Bboying);Time limit : 5+1 Minutes;Any props can be used, but should not be dangerous.;Fireworks are not allowed on the stage.;Teams should bring their sound tracks in a pen drive(one extra).;Any light settings required should be mentioned before.;We are not responsible for mistakes in your sound tracks.";
var event_image = "Dance.jpg";
var day_and_time = "12pm(Day 3)";
document.getElementById('event_day').innerHTML = day_and_time;



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



</script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="./bootstrap.min.js"></script>

</body>
</html>