<?php
 include 'Template.php';
?>
 
 
 <script type="text/javascript">
 
 //Taking in the values
 
 var event_category = "Art";
 var event_subcategory = "Collage Making";
 var description = "No matter how hard we try we just can’t leave our engineering instincts behind! Use your creativity and design to create a masterpiece of sticks and glue!!";
 var entry_fee = "Rs 30";

 var prize_money = "First Prize = Rs 2000 <br> Second Prize = Rs 1000";
 var event_coordinators = "M Sai Poojitha : 7795255201<br>Brinda : 7676821545";
 var event_rules = "Duration:2.5 hours;3 members per team;A1 sheets will be provided;Burning & embossing is allowed;Materials to be brought by the participants";
 var event_image = "Art.jpg";
 var day_and_time = "11am(Day 2)";
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
 document.getElementById('event_day').innerHTML = day_and_time;
 
 
 
 </script>
 
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
 <!-- Include all compiled plugins (below), or include individual files as needed -->
 <script src="./bootstrap.min.js"></script>
 
 </body>
 </html>