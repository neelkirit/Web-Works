 <?php
 include 'Template.php';
 ?>
 
 
 <script type="text/javascript">
 
 //Taking in the values
 
 var event_category = "Informal";
 var event_subcategory = "Hogathon";
 var description = "Are you a foodie ?? Here's a chance for you to show off your hogging skills.";
 var entry_fee = "Rs 50";
 var prize_money = "First Prize = Rs 2000 <br> Second Prize = Rs 1000";
 
 var event_coordinators = "Lohith Shivaram : 9611776601<br>Nagish : 8095314706";
 
 
 var event_rules = "The player must not spill the food.;The player who finishes the food the fastest qualifies to the next round.;TASK:;ROUND 1: The player must finish 1 pack of  biscuits and a glass of water. This will be held with 10 players contesting at a time. The fastest 2 from each set will be qualified for the next round.;ROUND 2: This will be held for a set of 10 people qualified from the first round. The players must finish a burger and TANG drink. The fastest 3(or 4) players will  be qualified to the next round.;ROUND 3: This is food marathon round. The player is made to run around the campus to various food stops. At each food stop, he must finish the food and then proceed to the next food stop. The one who reaches the finish the finish point first after finishing the food at all food stops is the winner.In this round there are 5 food stops.";
 var event_image = "Informal.jpg";
 
 var day_and_time = "11am(Day 3)";
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