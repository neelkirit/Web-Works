<?php
 include 'Template.php';
 ?>
 
 
 <script type="text/javascript">
 
 //Taking in the values
 
 var event_category = "Xkalibre";
 var event_subcategory = "Train Your Brain";
 var description = "No of participants: 2 per team.;";
 var entry_fee = "Rs 50 per team";
 var day_and_time = "Day 1,@ 1pm";
 var prize_money = "First Prize = Rs 2000 <br> Second Prize = Rs 1000";
 
 var event_coordinators = " Aditi Sinha : 81976 10782 <br>Nagapoornima : 80506 43040 <br> Darshan : 80503 43964 <br> Raksha : 97310 56163";
 
 
 var event_rules = "ROUND1: Short technical quiz with random general awareness questions.\nNo complex circuit analyzing questions;Elimination round.;ROUND 2:;Visual round.;Series of audio/video based questions.;Eg: Guess the word (The name of the product will be hidden. Understand the clue and guess the product);Video clips will be given. (Eg: 2 old advertisements will be merged. The teams have to guess both products.);Connectors. (Find the relation between three pictures shown.);Identify them. (Eg: Where do you find these?);More questions like that.;Elimination round.;ROUND 3: ;Modeling.;Pick a chit. Whatever gadget name you get, make that model.;Points given on the complexity of the design.;Voting amongst team if there are more than two teams.";
 var event_image = "Xkalibre.jpg";
 
 
 
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