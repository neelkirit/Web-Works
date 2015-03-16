 
 <?php
 include 'Template.php';
 ?>
 
 
 <script type="text/javascript">
 
 //Taking in the values
 
 var event_category = "Computer Science and Engineering";
 var event_subcategory = "C Tycoon";
 var description = "Each team will be given a set of problems for which they will have to code a solution in conventional C. In order to code the program the team will have to buy various components of a C program for which they will be provided with virtual money in the start of each round.";
 var entry_fee = "Rs 50 per team";
 var day_and_time = "Day 2,@ 2pm";
 var prize_money = "First Prize = Rs 2000 <br> Second Prize = Rs 1000";
 
 var event_coordinators = "Ankit Kejriwal : 8147311173<br>Shivank Agarwal : 9590525363<br>Abhay Sastry:    80509 77021<br>Syeda Farheen :   77607 15774";
 
 
 var event_rules ="ROUND 1:;Each team will be allotted $150 in virtual money which they will be using to purchase these header files,keywords, loops, selection statements and reserved keywords.;The teams will be given a set of questions which they will have to solve by using the purchased entities.;The first round will have questions which can be solved in more than one way and the participants will be given half an hr to solve the entire set.;The teams can call the judges to verify only when they finish the entire set.;They will be given only one chance to show the output of their entire program set.;ROUND 2:;The time duration for this round will be one hour.;The teams will retain the money and the entities they have bought in the previous rounds.In addition to this the teams will also be given additional money.;There will also be a cap on the amount of entities that can be purchased from the bank (the organising team).;The teams that have brought extra entities,not required by them in this round will have an advantage to sell their extra entities.;The team will be marked on the basis of completion and successful compilation and will be assigned money accordingly.;The winning criterion for this round will be according to the maximum number of questions solved and the final amount of money retained by each team.;Team of two is required";
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
