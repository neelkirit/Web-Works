<?php
 include 'Template.php';
 ?>
 
 
 <script type="text/javascript">
 
 //Taking in the values
 
 var event_category = "Xkalibre";
 var event_subcategory = "Soap Opera";
 var description = "A fun-filled interactive quiz based on popular english sitcoms. are you a f.r.i.e.n.d.s. addict? Think you know them as well as your friends? Join us at the soap opera and find out. Its gonna be legend-wait for it-dary!";
 var entry_fee = "Rs 50 per person";
  var day_and_time = "Day 2,@ 1pm";
 var prize_money = "First Prize = Rs 2000 <br> Second Prize = Rs 1000";
 
 var event_coordinators = "SUNAINA :     94838 23837<br>DIVYA:         80504 85003<br>NANDITHA:    96114 55784<br>SANKEERNA:  89040 12913";
 
 
 var event_rules = "A MIX OF QUESTIONS AND ACTIVITIES BASED ON\n 1) F.R.I.E.N.D.S\n 2) BIG BANG THEORY\n 3) HOW I MET YOUR MOTHER;Round 1: written round questions will be displayed and the answers are to be written down.;Round2: connectors, muted videos situation guess etc..;Round3: Rapid fire;;No.of participants: 3 per team";
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