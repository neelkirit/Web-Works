

<?php
include 'Template.php';
?>


<script type="text/javascript">

//Taking in the values

var event_category = "Dance";
var event_subcategory = "Western Group";
var description = "Always been waiting to steal the stage? Wanted the lime light all for yourself? Well, if you can shake a leg and Move those hips, we have the perfect stage for you. From the desi kuthu to popping, locking, and breaking, this    arena will let you play it well.A perfect chance to showcase the fancy head stand, a couple of cart wheels and  your latest jazz move.";
var entry_fee = "Rs 500";
var prize_money = "First Prize = Rs 10000 <br> Second Prize = Rs 5000";

var event_coordinators = "VIVEK.C : 8861262996 <br> RASHMI N : 8861615887<br> KRITHIKA : 9740246126";


var event_rules = "Minimum: 6 people;Maximum:10+2 people;Time limit: 5+1 min;Bollywood songs not allowed;Any prop can be used, which is not dangerous on stage(No fireworks);Any light arrangements required should be mentioned before;Teams should bring their sound tracks in a pen drive(one extra);We are not responsible for mistakes in your sound tracks";
var event_image = "Dance.jpg";

var day_and_time = "4pm(Day 1)";
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