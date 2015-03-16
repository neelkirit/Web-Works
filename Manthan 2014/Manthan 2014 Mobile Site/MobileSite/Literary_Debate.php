 
 
 
 <?php
 include 'Template.php';
 ?>
 
 
 <script type="text/javascript">
 
 //Taking in the values
 
 var event_category = "Literary";
 var event_subcategory = "Debate";
 var description = "It is said that a smarter warrior is one who can win a war merely with his words while his sword rests in its sheath. Verbose gives you the opportunity to revive such a warrior in yourself!   Rest your muscles, stress your brains and flex your tongue! Win this war with your thoughts, words and eloquence.";
 var entry_fee = "Rs 30";
 var prize_money = "First Prize = Rs 3000 <br> Second Prize = Rs 1500";
 
 var event_coordinators = "Rameez : 8553095584<br>Chaitra : 8884989302";
 
 
 var event_rules = "Team of two (one for the notion and the other against);Time limit:3min(per speaker) + 2min(rebuttal 1min(judges) + 1min(audience));Participants must address each other in third person;Un-parliamentary language is a strict no-no;Decision of judges cannot be contested";
 var event_image = "Literary.jpg";
 
 var day_and_time = "1pm(Day 2)";
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