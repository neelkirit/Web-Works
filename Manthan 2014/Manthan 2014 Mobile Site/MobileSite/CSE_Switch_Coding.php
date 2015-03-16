 <?php
 include 'Template.php';
 ?>
 
 
 <script type="text/javascript">
 
 //Taking in the values
 
 var event_category = "Computer Science and Engineering";
 var event_subcategory = "Switch Coding";
 var description = "While solving a problem, each member of the team is given a few minutes of burst coding time. And in between these bursts, the teammates switch seats and continue solving the problem.  The team members cannot communicate at all during the event.  In the second round, the switch time decreases and there are less number of questions. The teams which finish in the top three are declared winners.";
 var entry_fee = "Rs 50 per team";
 var day_and_time = "Day 3,@ 2pm";
 var prize_money = "First Prize = Rs 2000 <br> Second Prize = Rs 1000";
 
 var event_coordinators = "Gyan Prakash : 8050579149<br>Ankur Gupta : 8197326719";
 
 
 var event_rules = "There are two rounds round in the competition. ;In the first round, the switching time is 10 minutes. ;The switching time decreases in the second round.;The team members may not talk to each other or pass notes while programming.;The idle team member has to switch with the other member when the coding time limit is up.;The idle team member may not look at the screen while the other team member is coding.;You are allowed to leave comments in the code for synchronization.";
 var event_image = "CSE.jpg";
 
 
 
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