 <?php
 include './Template.php';
 ?>
 
 
 <script type="text/javascript">
 
 //Taking in the values
 
 var event_category = "ECSA";
 var event_subcategory = "Robotron";
 var description = "This event is a technical event consisting a quiz and other interesting events on robotics. Check out rules for more.";
 var entry_fee = "Rs 200 per team";
 var day_and_time = "Day 3,@1pm";
 var prize_money = "First Prize = Rs 7000  <br> Second Prize = Rs 4000";
 
 var event_coordinators = "Alok Kumar Singh : 8147413116<br>Ponty : 8147651364";
 
 
 var event_rules = "1st Round: Technical quiz with questions from electronics and the current technological development and bot related. ;2nd round: The teams have to bring gesture controlled bots capable of lifting 50gm of weight, one will have to place the hooked box inside the circled area.;3rd round: Each team will place their robot on the two sides of the court and will have to move hooked box and balls on their opponent's half either by pushing or by lifting over a net. The team which is able to send maximum number of items in the opponent's half will emerge the winner.;Dimension of bot: 20cm x 20cm x 20cm;Maximum weight= 2kg";
 var event_image = "ECSA.jpg";
 
 
 
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
 <script src="../../NewEvents/ECSA/bootstrap.min.js"></script>
 
 </body>
 </html>